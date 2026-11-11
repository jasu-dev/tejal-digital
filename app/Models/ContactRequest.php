<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\LeadStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

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
        'form',
        'source_page',
        'landing_page',
        'referrer',
        'channel',
        'utm_source',
        'utm_medium',
        'utm_campaign',
        'device_type',
        'browser',
        'os',
        'country',
        'session_id',
    ];

    /** Where on the site the lead was submitted from. */
    public const FORMS = [
        'contact_page' => 'Contact page form',
        'popup'        => 'Quote popup',
    ];

    protected $casts = [
        'status' => LeadStatus::class,
    ];

    public function formLabel(): string
    {
        return self::FORMS[$this->form] ?? 'Website form';
    }

    /** Pages this visitor viewed in the same visit, up to the moment they submitted the form. */
    public function journey(): Collection
    {
        if (! $this->session_id) {
            return collect();
        }

        return PageView::where('session_id', $this->session_id)
            ->where('visited_at', '<=', $this->created_at)
            ->orderBy('visited_at')
            ->get(['path', 'visited_at']);
    }
}
