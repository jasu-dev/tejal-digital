<?php

declare(strict_types=1);

namespace App\Support;

use Illuminate\Http\Request;

/**
 * Works out where a visit came from (first-touch attribution).
 */
final class TrafficSource
{
    public const UTM_KEYS = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content'];

    private const SEARCH_ENGINES = ['google.', 'bing.com', 'duckduckgo.com', 'yahoo.', 'yandex.', 'baidu.com', 'ecosia.org', 'search.brave.com'];

    private const SOCIAL_NETWORKS = ['facebook.com', 'fb.com', 'instagram.com', 'linkedin.com', 'lnkd.in', 't.co', 'twitter.com', 'x.com', 'youtube.com', 'pinterest.', 'reddit.com', 'quora.com', 'whatsapp.com', 'wa.me', 'telegram.'];

    /**
     * Build the attribution record for the first page of a visit.
     *
     * @return array{landing_page: string, referrer: ?string, referrer_host: ?string, channel: string, utm_source: ?string, utm_medium: ?string, utm_campaign: ?string, utm_term: ?string, utm_content: ?string}
     */
    public static function fromRequest(Request $request): array
    {
        $referrer = $request->headers->get('referer');
        $host     = self::externalHost($referrer, $request->getHost());

        $utm = [];
        foreach (self::UTM_KEYS as $key) {
            $value     = $request->query($key);
            $utm[$key] = is_string($value) && $value !== '' ? mb_substr($value, 0, 150) : null;
        }

        // gclid / msclkid are only added to Google / Microsoft ad clicks (fbclid is on every Facebook link, so it is not used)
        $isPaid = $request->query->has('gclid') || $request->query->has('msclkid')
            || in_array(strtolower((string) $utm['utm_medium']), ['cpc', 'ppc', 'paid', 'paidsearch', 'paid_search', 'paid_social', 'paidsocial', 'display', 'ads'], true);

        return [
            'landing_page'  => '/' . ltrim($request->path(), '/'),
            'referrer'      => $host ? mb_substr((string) $referrer, 0, 500) : null,
            'referrer_host' => $host,
            'channel'       => self::channel($host, $utm, $isPaid),
            ...$utm,
        ];
    }

    public static function channel(?string $host, array $utm, bool $isPaid = false): string
    {
        $medium = strtolower((string) ($utm['utm_medium'] ?? ''));
        $source = strtolower((string) ($utm['utm_source'] ?? ''));

        if ($isPaid) {
            return 'Paid Ads';
        }

        if ($medium === 'email' || $source === 'newsletter') {
            return 'Email';
        }

        if (in_array($medium, ['social', 'social-network', 'sm'], true) || self::matches($source, self::SOCIAL_NETWORKS)) {
            return 'Social';
        }

        if ($host === null) {
            return $source !== '' ? 'Campaign' : 'Direct';
        }

        return match (true) {
            self::matches($host, self::SEARCH_ENGINES) => 'Organic Search',
            self::matches($host, self::SOCIAL_NETWORKS) => 'Social',
            default => 'Referral',
        };
    }

    /** Referrer host, or null when there is none or it is this website itself. */
    private static function externalHost(?string $referrer, string $ownHost): ?string
    {
        $host = $referrer ? parse_url($referrer, PHP_URL_HOST) : null;
        if (! $host) {
            return null;
        }

        $host = preg_replace('/^(www\.|m\.|l\.|lm\.)/', '', strtolower($host));

        return $host === preg_replace('/^www\./', '', strtolower($ownHost)) ? null : $host;
    }

    private static function matches(string $value, array $needles): bool
    {
        foreach ($needles as $needle) {
            if (str_contains($value, $needle)) {
                return true;
            }
        }

        return false;
    }
}
