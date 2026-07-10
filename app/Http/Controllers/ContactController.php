<?php

namespace App\Http\Controllers;

use App\Mail\AutoReplyMail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Throwable;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        // Honeypot check
        if ($request->filled('website')) {
            Log::warning('Spam submission detected', ['data' => $request->all()]);
            return redirect()->back()->with('success', 'Thank you. Your message has been sent successfully.');
        }

        $rules = [
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'string'],
            'message' => ['required', 'string'],
            'sms_consent' => ['nullable', 'boolean'],
        ];

        if (config('services.turnstile.site_key')) {
            $rules['cf-turnstile-response'] = ['required', 'string'];
        }

        $request->validate($rules);

        if (config('services.turnstile.site_key') && ! $this->validateTurnstile($request)) {
            return redirect()
                ->back()
                ->withErrors([
                    'cf-turnstile-response' => 'Verification failed. Please try again.',
                ])
                ->withInput();
        }

        try {
            $data = [
                'name' => trim($request->first_name . ' ' . $request->last_name),
                'email' => $request->email,
                'number' => $request->phone,
                'subject' => 'Website Contact Form Submission',
                'message' => $request->message,
                'sms_consent' => $request->boolean('sms_consent'),
            ];

            // Send notification to admin
            Mail::to(config('contact.mail_to'))->send(new ContactMail($data));

            // Send auto-reply to customer
            Mail::to($request->email)->send(new AutoReplyMail($data));

            return redirect()->back()->with('success', 'Thank you. Your message has been sent successfully.');
        } catch (Throwable $e) {
            Log::error('Contact form submission failed: ' . $e->getMessage(), [
                'exception' => $e,
                'data' => $request->all()
            ]);

            return redirect()->back()->with('error', 'Something went wrong. Please try again later.');
        }
    }

    private function validateTurnstile(Request $request): bool
    {
        $secretKey = config('services.turnstile.secret_key');
        $token = $request->input('cf-turnstile-response');

        if (! is_string($secretKey) || $secretKey === '') {
            Log::error('Cloudflare Turnstile secret key is not configured.');

            return false;
        }

        if (! is_string($token) || $token === '') {
            return false;
        }

        try {
            $response = Http::asForm()
                ->timeout(10)
                ->post('https://challenges.cloudflare.com/turnstile/v0/siteverify', [
                    'secret' => $secretKey,
                    'response' => $token,
                    'remoteip' => $request->ip(),
                ]);

            if (! $response->successful()) {
                Log::warning('Cloudflare Turnstile verification request failed.', [
                    'status' => $response->status(),
                    'body' => $response->json(),
                ]);

                return false;
            }

            $payload = $response->json();

            if (($payload['success'] ?? false) !== true) {
                Log::warning('Cloudflare Turnstile verification was rejected.', [
                    'error_codes' => $payload['error-codes'] ?? [],
                ]);

                return false;
            }

            return true;
        } catch (Throwable $e) {
            Log::error('Cloudflare Turnstile verification failed unexpectedly.', [
                'exception' => $e,
            ]);

            return false;
        }
    }
}
