<?php

declare(strict_types=1);

use App\Models\ContactRequest;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

function leadPayload(array $overrides = []): array
{
    return array_merge([
        'firstName' => 'Ravi',
        'lastName'  => 'Verma',
        'email'     => 'ravi@example.com',
        'phone'     => '9876543210',
        'service'   => 'General Inquiry',
        'message'   => 'Need a website for my shop.',
    ], $overrides);
}

it('stores a lead from the contact page form', function () {
    $this->post(route('contact.store'), leadPayload())
        ->assertRedirect()
        ->assertSessionHasNoErrors();

    expect(ContactRequest::count())->toBe(1);
});

it('accepts phone numbers written with country code, spaces and dashes', function (string $phone) {
    $this->post(route('contact.store'), leadPayload(['phone' => $phone]))
        ->assertSessionHasNoErrors();

    expect(ContactRequest::first()->phone)->toBe(preg_replace('/(?!^\+)[^\d]/', '', $phone));
})->with(['+91 98765 43210', '+91-8949714118', '098765 43210', '(987) 654-3210']);

it('stores a lead from the popup (ajax) and returns json', function () {
    $this->postJson(route('contact.store'), leadPayload(['phone' => '+91 98765 43210']))
        ->assertCreated()
        ->assertJson(['ok' => true]);

    expect(ContactRequest::count())->toBe(1);
});

it('returns validation errors to the popup instead of pretending success', function () {
    $this->postJson(route('contact.store'), leadPayload(['email' => 'not-an-email']))
        ->assertUnprocessable()
        ->assertJsonValidationErrors('email');

    expect(ContactRequest::count())->toBe(0);
});

it('stores leads from browsers with very long user agents', function () {
    $this->withHeader('User-Agent', 'Mozilla/5.0 '.str_repeat('FBAN/FBIOS;FBAV/450.0.0.38.108;', 20))
        ->post(route('contact.store'), leadPayload())
        ->assertSessionHasNoErrors();

    expect(ContactRequest::count())->toBe(1);
});
