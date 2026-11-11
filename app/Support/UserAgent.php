<?php

declare(strict_types=1);

namespace App\Support;

/**
 * Lightweight user-agent parser: enough to group visitors by device, browser and OS.
 */
final class UserAgent
{
    public function __construct(private readonly string $ua) {}

    public static function parse(?string $ua): self
    {
        return new self((string) $ua);
    }

    /** @return array{device_type: string, browser: string, os: string} */
    public function toArray(): array
    {
        return [
            'device_type' => $this->deviceType(),
            'browser'     => $this->browser(),
            'os'          => $this->os(),
        ];
    }

    public function deviceType(): string
    {
        return match (true) {
            $this->has('/ipad|tablet|kindle|silk|playbook|(android(?!.*mobile))/i') => 'Tablet',
            $this->has('/mobi|iphone|ipod|android|blackberry|opera mini|iemobile/i') => 'Mobile',
            default => 'Desktop',
        };
    }

    public function browser(): string
    {
        return match (true) {
            $this->has('/FBAN|FBAV|FB_IAB/') => 'Facebook App',
            $this->has('/Instagram/') => 'Instagram App',
            $this->has('/LinkedInApp/') => 'LinkedIn App',
            $this->has('/Edg(e|A|iOS)?\//') => 'Edge',
            $this->has('/OPR\/|Opera/') => 'Opera',
            $this->has('/SamsungBrowser/') => 'Samsung Internet',
            $this->has('/UCBrowser/') => 'UC Browser',
            $this->has('/Firefox|FxiOS/') => 'Firefox',
            $this->has('/Chrome|CriOS/') => 'Chrome',
            $this->has('/Safari/') => 'Safari',
            default => 'Other',
        };
    }

    public function os(): string
    {
        return match (true) {
            $this->has('/iPhone|iPad|iPod/') => 'iOS',
            $this->has('/Android/') => 'Android',
            $this->has('/Windows/') => 'Windows',
            $this->has('/Mac OS X|Macintosh/') => 'macOS',
            $this->has('/CrOS/') => 'ChromeOS',
            $this->has('/Linux/') => 'Linux',
            default => 'Other',
        };
    }

    private function has(string $pattern): bool
    {
        return preg_match($pattern, $this->ua) === 1;
    }
}
