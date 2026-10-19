<?php

namespace App\Http\Controllers;

use App\Mail\AutoReplyMail;
use App\Mail\QuoteMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Throwable;

class QuoteController extends Controller
{
    public function create()
    {
        return view('free-quote');
    }

    public function store(Request $request)
    {
        if ($request->filled('website')) {
            Log::warning('Spam quote submission detected', ['data' => $request->all()]);

            return redirect()->back()->with('success', 'Thank you. Your free quote request has been sent successfully.');
        }

        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'number' => ['required', 'string', 'max:50'],
            'email' => ['nullable', 'email', 'max:255'],
            'pickup_address' => ['required', 'string', 'max:500'],
            'destination_address' => ['required', 'string', 'max:500'],
            'service_type' => ['required', 'string', 'max:255'],
            'vehicle_type' => ['required', 'string', 'max:255'],
            'passengers' => ['required', 'integer', 'min:1', 'max:100'],
            'luggage' => ['required', 'integer', 'min:0', 'max:100'],
            'notes' => ['nullable', 'string', 'max:2000'],
            'sms_consent' => ['nullable', 'boolean'],
            'cf-turnstile-response' => ['required', 'string'],
        ];

        $validated = $request->validate($rules);

        if (! $this->validateTurnstile($request)) {
            return redirect()
                ->back()
                ->withErrors([
                    'cf-turnstile-response' => 'Verification failed. Please try again.',
                ])
                ->withInput();
        }

        try {
            $data = [
                'name' => $validated['name'],
                'number' => $validated['number'],
                'email' => $validated['email'] ?? '',
                'pickup_address' => $validated['pickup_address'],
                'destination_address' => $validated['destination_address'],
                'service_type' => $validated['service_type'],
                'vehicle_type' => $validated['vehicle_type'],
                'passengers' => $validated['passengers'],
                'luggage' => $validated['luggage'],
                'notes' => $validated['notes'] ?? '',
                'sms_consent' => $request->boolean('sms_consent'),
            ];

            Mail::to(config('contact.mail_to'))->send(new QuoteMail($data));

            if (! empty($data['email'])) {
                Mail::to($data['email'])->send(new AutoReplyMail([
                    'name' => $data['name'],
                ]));
            }

            return redirect()->back()->with('success', 'Thank you for your free quote request! We\'ll get back to you as soon as possible.');
        } catch (Throwable $e) {
            Log::error('Quote form submission failed: ' . $e->getMessage(), [
                'exception' => $e,
                'data' => $request->all(),
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
