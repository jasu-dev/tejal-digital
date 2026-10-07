<?php

declare(strict_types=1);

namespace App\Enums;

enum PortfolioStatus: string
{
    case Active   = 'active';
    case Inactive = 'inactive';

    public function label(): string
    {
        return match($this) {
            self::Active   => 'Active',
            self::Inactive => 'Inactive',
        };
    }

    public function badgeClass(): string
    {
        return match($this) {
            self::Active   => 'bg-emerald-100 text-emerald-700',
            self::Inactive => 'bg-zinc-100 text-zinc-600',
        };
    }
}
