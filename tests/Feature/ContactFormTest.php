<?php

use App\Mail\AutoReplyMail;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

test('contact form submits successfully', function () {
    Mail::fake();

    $response = $this->post('/contact-us', [
        'first_name' => 'Jane',
        'last_name' => 'Doe',
        'email' => 'jane@example.com',
        'phone' => '1234567890',
        'message' => 'Need a quote for airport transportation.',
    ]);

    $response
        ->assertRedirect()
        ->assertSessionHas('success');

    Mail::assertSent(ContactMail::class);
    Mail::assertSent(AutoReplyMail::class);
});
