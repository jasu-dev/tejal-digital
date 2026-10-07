<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\LeadStatus;
use Illuminate\Database\Eloquent\Model;

class ContactRequest extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'service',
        'message',
        'ip_address',
        'user_agent',
        'status',
    ];

    protected $casts = [
        'status' => LeadStatus::class,
    ];
}
