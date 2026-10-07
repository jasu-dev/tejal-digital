<?php

declare(strict_types=1);

namespace App\Enums;

enum LeadStatus: string
{
    case New      = 'new';
    case Read     = 'read';
    case Replied  = 'replied';
    case Archived = 'archived';

    public function label(): string
    {
        return match($this) {
            self::New      => 'New',
            self::Read     => 'Read',
            self::Replied  => 'Replied',
            self::Archived => 'Archived',
        };
    }

    public function badgeClass(): string
    {
        return match($this) {
            self::New      => 'bg-blue-100 text-blue-700',
            self::Read     => 'bg-yellow-100 text-yellow-700',
            self::Replied  => 'bg-emerald-100 text-emerald-700',
            self::Archived => 'bg-zinc-100 text-zinc-500',
        };
    }
}
