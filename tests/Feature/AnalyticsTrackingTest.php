<?php

declare(strict_types=1);

use App\Http\Middleware\TrackPageView;
use App\Models\ContactRequest;
use App\Models\PageView;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

const IPHONE_SAFARI = 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_5 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.5 Mobile/15E148 Safari/604.1';

it('records the source, device and browser of a visit', function () {
    $this->withHeaders(['User-Agent' => IPHONE_SAFARI, 'Referer' => 'https://www.google.com/'])
        ->get('/about?utm_source=google&utm_medium=organic')
        ->assertOk();

    $view = PageView::sole();
    expect($view)
        ->path->toBe('/about')
        ->is_entry->toBeTrue()
        ->channel->toBe('Organic Search')
        ->referrer_host->toBe('google.com')
        ->utm_source->toBe('google')
        ->device_type->toBe('Mobile')
        ->browser->toBe('Safari')
        ->os->toBe('iOS');
});

it('only stores the source on the first page of a visit', function () {
    $this->withHeaders(['User-Agent' => IPHONE_SAFARI])
        ->withSession([TrackPageView::ATTRIBUTION_KEY => ['channel' => 'Social', 'landing_page' => '/']])
        ->get('/services')
        ->assertOk();

    expect(PageView::sole())->is_entry->toBeFalse()->channel->toBeNull();
});

it('classifies paid ad clicks', function () {
    $this->withHeader('User-Agent', IPHONE_SAFARI)->get('/?gclid=abc123')->assertOk();

    expect(PageView::sole()->channel)->toBe('Paid Ads');
});

it('does not track bots or admins', function () {
    $this->withHeader('User-Agent', 'Googlebot/2.1')->get('/')->assertOk();
    $this->actingAs(User::factory()->create(['is_admin' => true]))->withHeader('User-Agent', IPHONE_SAFARI)->get('/')->assertOk();

    expect(PageView::count())->toBe(0);
});

it('saves where a lead came from', function () {
    $this->withHeaders(['User-Agent' => IPHONE_SAFARI, 'Referer' => 'https://td-v2.test/website-development-company-in-lucknow'])
        ->withSession([TrackPageView::ATTRIBUTION_KEY => [
            'landing_page' => '/website-development-company-in-lucknow', 'referrer' => 'https://www.google.com/',
            'channel' => 'Organic Search', 'utm_source' => null, 'utm_medium' => null, 'utm_campaign' => null,
        ]])
        ->postJson(route('contact.store'), [
            'firstName' => 'Ravi', 'lastName' => 'Verma', 'email' => 'ravi@example.com', 'phone' => '+91 98765 43210',
            'service' => 'General Inquiry', 'message' => 'Need a site', 'form' => 'popup',
            'source_page' => '/website-development-company-in-lucknow',
        ])
        ->assertCreated();

    expect(ContactRequest::sole())
        ->form->toBe('popup')
        ->channel->toBe('Organic Search')
        ->landing_page->toBe('/website-development-company-in-lucknow')
        ->source_page->toBe('/website-development-company-in-lucknow')
        ->device_type->toBe('Mobile')
        ->session_id->not->toBeNull();
});

it('shows the analytics, lead list and lead detail screens to admins', function (string $period) {
    $this->withHeaders(['User-Agent' => IPHONE_SAFARI, 'Referer' => 'https://www.google.com/'])->get('/');
    $this->postJson(route('contact.store'), [
        'firstName' => 'Ravi', 'lastName' => 'Verma', 'email' => 'ravi@example.com', 'phone' => '9876543210',
        'service' => 'General Inquiry', 'message' => 'Need a site', 'form' => 'contact_page',
    ])->assertCreated();

    $admin = User::factory()->create(['is_admin' => true]);

    $this->actingAs($admin)->get(route('admin.page-views.index', ['period' => $period]))
        ->assertOk()
        ->assertSee('Traffic channels')
        ->assertSee('Organic Search')
        ->assertSee('Mobile');

    $this->actingAs($admin)->get(route('admin.leads.index'))->assertOk()->assertSee('Contact page form');
    $this->actingAs($admin)->get(route('admin.leads.show', ContactRequest::sole()))->assertOk()->assertSee('How they found you');
})->with(['today', 'last_7_days', 'last_30_days', 'this_month']);
