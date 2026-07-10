<?php

use App\Mail\AutoReplyMail;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

beforeEach(function () {
    config()->set('services.turnstile.site_key', 'test-site-key');
    config()->set('services.turnstile.secret_key', 'test-secret-key');
});

test('contact form submits when turnstile verification succeeds', function () {
    Mail::fake();

    Http::fake([
        'https://challenges.cloudflare.com/turnstile/v0/siteverify' => Http::response([
            'success' => true,
        ]),
    ]);

    $response = $this->post('/contact-us', [
        'first_name' => 'Jane',
        'last_name' => 'Doe',
        'email' => 'jane@example.com',
        'phone' => '1234567890',
        'message' => 'Need a quote for airport transportation.',
        'cf-turnstile-response' => 'valid-token',
    ]);

    $response
        ->assertRedirect()
        ->assertSessionHas('success');

    Mail::assertSent(ContactMail::class);
    Mail::assertSent(AutoReplyMail::class);
});

test('contact form rejects submission when turnstile verification fails', function () {
    Mail::fake();

    Http::fake([
        'https://challenges.cloudflare.com/turnstile/v0/siteverify' => Http::response([
            'success' => false,
            'error-codes' => ['invalid-input-response'],
        ], 200),
    ]);

    $response = $this->from('/contact-us')->post('/contact-us', [
        'first_name' => 'Jane',
        'last_name' => 'Doe',
        'email' => 'jane@example.com',
        'phone' => '1234567890',
        'message' => 'Need a quote for airport transportation.',
        'cf-turnstile-response' => 'invalid-token',
    ]);

    $response
        ->assertRedirect('/contact-us')
        ->assertSessionHasErrors('cf-turnstile-response');

    Mail::assertNothingSent();
});
