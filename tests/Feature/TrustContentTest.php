<?php

declare(strict_types=1);

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('links every legal page from the footer', function (string $route) {
    $this->get(route($route))->assertOk();

    $this->get('/')->assertOk()->assertSee(route($route), false);
})->with(['legal.privacy', 'legal.terms', 'legal.refund']);

it('shows the Udyam number in the footer only when it is configured', function () {
    $this->get('/')->assertDontSee('Udyam Reg. No.');

    config(['staticdata.udyam_number' => 'UDYAM-RJ-00-0000000']);

    $this->get('/')->assertSee('UDYAM-RJ-00-0000000');
});

it('does not open the quote popup on the contact page', function () {
    $this->get(route('contact'))->assertOk()->assertSee('var SKIP_ON_PAGE = true', false);
    $this->get('/')->assertOk()->assertSee('var SKIP_ON_PAGE = false', false);
});

it('uses one reply time across the site', function () {
    foreach (['/', '/contact', '/about'] as $path) {
        $this->get($path)->assertOk()->assertDontSee('24 hours');
    }
});
