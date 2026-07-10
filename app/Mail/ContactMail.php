<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address(config('mail.from.address'), config('mail.from.name')),
            replyTo: [
                new Address($this->data['email'], $this->data['name'])
            ],
            subject: 'New Contact from ' . $this->data['name'] . ' - Alar Chauffeur Service',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-form-submission',
            with: [
                'submission' => [
                    'first_name' => $this->firstName(),
                    'last_name' => $this->lastName(),
                    'email' => $this->data['email'],
                    'phone' => $this->data['number'],
                    'message' => $this->data['message'],
                    'sms_consent' => $this->data['sms_consent'] ? 'Yes' : 'No',
                ],
            ],
        );
    }

    protected function firstName(): string
    {
        return explode(' ', trim($this->data['name']), 2)[0] ?? '';
    }

    protected function lastName(): string
    {
        return explode(' ', trim($this->data['name']), 2)[1] ?? '';
    }
}