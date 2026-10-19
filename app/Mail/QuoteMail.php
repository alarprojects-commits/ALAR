<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QuoteMail extends Mailable
{
    use Queueable, SerializesModels;

    public array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function envelope(): Envelope
    {
        $replyTo = [];

        if (! empty($this->data['email'])) {
            $replyTo[] = new Address($this->data['email'], $this->data['name']);
        }

        return new Envelope(
            from: new Address(config('mail.from.address'), config('mail.from.name')),
            replyTo: $replyTo,
            subject: 'New Free Quote from ' . $this->data['name'] . ' - Alar Chauffeur Service',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.quote-form-submission',
            with: [
                'data' => $this->data,
            ],
        );
    }
}
