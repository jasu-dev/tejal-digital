<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Prunable;

class PageView extends Model
{
    use Prunable;

    /** How long raw page views (incl. IP addresses) are kept. */
    public const RETENTION_MONTHS = 12;

    /** User-agent fragments that identify crawlers, scripts and monitoring tools. */
    private const BOT_PATTERN = '/bot|crawl|spider|slurp|scrap|curl|wget|python|java\/|go-http|okhttp|axios|node-fetch|guzzle|httpclient|postman|insomnia|headless|phantom|puppeteer|playwright|selenium|lighthouse|pagespeed|gtmetrix|pingdom|uptime|monitor|statuscake|facebookexternalhit|whatsapp|telegram|preview|semrush|ahrefs|mj12|dotbot|petalbot|bytespider|gptbot|claude|perplexity|ccbot/i';

    public $timestamps = false;

    protected $fillable = [
        'path',
        'session_id',
        'ip_address',
        'user_agent',
        'referer',
        'visited_at',
    ];

    protected $casts = [
        'visited_at' => 'datetime',
    ];

    public static function isBot(?string $userAgent): bool
    {
        return blank($userAgent) || preg_match(self::BOT_PATTERN, $userAgent) === 1;
    }

    /** Count distinct visitors (sessions) for the given query. */
    public static function uniqueVisitors(?Builder $query = null): int
    {
        return ($query ?? static::query())->distinct()->count('session_id');
    }

    public function prunable(): Builder
    {
        return static::where('visited_at', '<', now()->subMonths(self::RETENTION_MONTHS));
    }
}
