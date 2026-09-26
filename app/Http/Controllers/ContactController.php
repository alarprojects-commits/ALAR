<?php

namespace App\Http\Controllers;

use App\Mail\AutoReplyMail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
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

        $request->validate([
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'string'],
            'message' => ['required', 'string'],
            'sms_consent' => ['nullable', 'boolean'],
        ]);

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
}
