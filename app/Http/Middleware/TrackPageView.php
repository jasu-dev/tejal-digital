<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use App\Models\PageView;
use App\Support\TrafficSource;
use App\Support\UserAgent;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrackPageView
{
    /** Session key holding where this visit came from (read again when a lead is submitted). */
    public const ATTRIBUTION_KEY = 'visit_attribution';

    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if (! $this->shouldTrack($request, $response)) {
            return $response;
        }

        // The session is saved after this middleware returns, so first-touch attribution is stored here (not in terminate).
        $session = $request->session();
        $isEntry = ! $session->has(self::ATTRIBUTION_KEY);
        if ($isEntry) {
            $session->put(self::ATTRIBUTION_KEY, TrafficSource::fromRequest($request));
        }
        $attribution = $session->get(self::ATTRIBUTION_KEY);

        $request->attributes->set('page_view', [
            // path() returns "/" for the home page and "about" (no slash) for everything else
            'path'          => '/' . ltrim($request->path(), '/'),
            'session_id'    => $session->getId(),
            'ip_address'    => $request->ip(),
            'user_agent'    => mb_substr((string) $request->userAgent(), 0, 500),
            'referer'       => mb_substr((string) $request->headers->get('referer'), 0, 500) ?: null,
            'is_entry'      => $isEntry,
            // Source fields describe the visit, so they are stored on its first page only
            'channel'       => $isEntry ? $attribution['channel'] : null,
            'referrer_host' => $isEntry ? $attribution['referrer_host'] : null,
            'utm_source'    => $isEntry ? $attribution['utm_source'] : null,
            'utm_medium'    => $isEntry ? $attribution['utm_medium'] : null,
            'utm_campaign'  => $isEntry ? $attribution['utm_campaign'] : null,
            ...UserAgent::parse($request->userAgent())->toArray(),
            'country'       => self::country($request),
            'visited_at'    => now(),
        ]);

        return $response;
    }

    /** Write the row after the response has been sent, so tracking never slows the page down. */
    public function terminate(Request $request, Response $response): void
    {
        if ($pageView = $request->attributes->get('page_view')) {
            PageView::create($pageView);
        }
    }

    /** Two-letter country code, when the site sits behind Cloudflare (or a proxy sending the same header). */
    public static function country(Request $request): ?string
    {
        $code = strtoupper((string) $request->headers->get('CF-IPCountry'));

        return preg_match('/^[A-Z]{2}$/', $code) && ! in_array($code, ['XX', 'T1'], true) ? $code : null;
    }

    private function shouldTrack(Request $request, Response $response): bool
    {
        return $request->isMethod('GET')
            && $request->hasSession()
            && ! $request->ajax()
            && ! $request->is('admin', 'admin/*', '_*', 'up')
            && $response->getStatusCode() === 200
            && str_contains((string) $response->headers->get('Content-Type'), 'text/html')
            && ! $request->user()?->is_admin
            && ! PageView::isBot($request->userAgent());
    }
}
