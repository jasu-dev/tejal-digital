<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Middleware\TrackPageView;
use App\Models\ContactRequest;
use App\Support\TrafficSource;
use App\Support\UserAgent;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ContactRequestController extends Controller
{
    public function store(Request $request): JsonResponse|RedirectResponse
    {
        // Visitors type numbers like "+91 98765 43210" or "(987) 654-3210": keep a leading "+" and the digits only
        $request->merge([
            'phone' => preg_replace('/(?!^\+)[^\d]/', '', trim((string) $request->input('phone'))),
        ]);

        $validated = $this->validateOrReturnToForm($request, [
            'firstName'   => ['required', 'string', 'max:100'],
            'lastName'    => ['required', 'string', 'max:100'],
            'email'       => ['required', 'string', 'email', 'max:150'],
            'phone'       => ['required', 'regex:/^\+?\d{10,15}$/'],
            'service'     => ['required', 'string', 'max:100'],
            'message'     => ['required', 'string', 'max:2000'],
            'form'        => ['nullable', 'string', 'in:' . implode(',', array_keys(ContactRequest::FORMS))],
            'source_page' => ['nullable', 'string', 'max:500'],
        ]);

        // Where the visit started (set by TrackPageView). Falls back to this request for visitors without one.
        $attribution = $request->session()->get(TrackPageView::ATTRIBUTION_KEY) ?? TrafficSource::fromRequest($request);

        ContactRequest::create([
            'first_name'   => $validated['firstName'],
            'last_name'    => $validated['lastName'],
            'email'        => $validated['email'],
            'phone'        => $validated['phone'],
            'service'      => $validated['service'],
            'message'      => $validated['message'],
            'ip_address'   => $request->ip(),
            'user_agent'   => mb_substr((string) $request->userAgent(), 0, 255),
            'form'         => $validated['form'] ?? null,
            'source_page'  => $validated['source_page'] ?? self::pathOf($request->headers->get('referer')),
            'landing_page' => $attribution['landing_page'] ?? null,
            'referrer'     => $attribution['referrer'] ?? null,
            'channel'      => $attribution['channel'] ?? null,
            'utm_source'   => $attribution['utm_source'] ?? null,
            'utm_medium'   => $attribution['utm_medium'] ?? null,
            'utm_campaign' => $attribution['utm_campaign'] ?? null,
            ...UserAgent::parse($request->userAgent())->toArray(),
            'country'      => TrackPageView::country($request),
            'session_id'   => $request->session()->getId(),
        ]);

        $message = 'Thank you for contacting us! We will get back to you soon.';

        if ($request->expectsJson()) {
            return response()->json(['ok' => true, 'message' => $message], 201);
        }

        return redirect()->to(route('contact') . '#contactForm')->with('success', $message);
    }

    /** Validate; on failure send page-form visitors back to the form itself rather than the top of the page. */
    private function validateOrReturnToForm(Request $request, array $rules): array
    {
        try {
            return $request->validate($rules, [
                'phone.regex' => 'Please enter a valid phone number (10–15 digits, country code optional).',
            ]);
        } catch (ValidationException $e) {
            if (! $request->expectsJson()) {
                $e->redirectTo(strtok(url()->previous(), '#') . '#contactForm');
            }

            throw $e;
        }
    }

    private static function pathOf(?string $url): ?string
    {
        $path = $url ? parse_url($url, PHP_URL_PATH) : null;

        return $path ? mb_substr($path, 0, 500) : null;
    }
}
