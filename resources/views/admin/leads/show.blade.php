@extends('layouts.admin')
@section('title', 'Lead: ' . $lead->first_name . ' ' . $lead->last_name)
@section('page-title', 'Lead Details')
@section('breadcrumbs') <a href="{{ route('admin.leads.index') }}" class="hover:text-[#D64523]">Leads</a> / {{ $lead->first_name }} @endsection

@section('content')
<div class="max-w-2xl space-y-4">

    {{-- Status Badge + Actions --}}
    <div class="bg-white rounded-2xl border border-zinc-200 p-5">
        <div class="flex items-center justify-between flex-wrap gap-3">
            <div>
                <h2 class="text-xl font-bold text-zinc-900">{{ $lead->first_name }} {{ $lead->last_name }}</h2>
                <p class="text-sm text-zinc-500 mt-0.5">Submitted {{ $lead->created_at->diffForHumans() }} · {{ $lead->created_at->format('d M Y, h:i A') }}</p>
            </div>
            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium {{ $lead->status->badgeClass() }}">
                {{ $lead->status->label() }}
            </span>
        </div>

        {{-- Update Status --}}
        <form action="{{ route('admin.leads.update-status', $lead) }}" method="POST"
              class="flex items-center gap-3 mt-4 pt-4 border-t border-zinc-100">
            @csrf @method('PATCH')
            <select name="status" class="border border-zinc-200 rounded-xl px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#D64523]/30 focus:border-[#D64523]">
                @php $leadStatuses = App\Enums\LeadStatus::cases(); @endphp
                @foreach($leadStatuses as $s)
                    <option value="{{ $s->value }}" {{ $lead->status === $s ? 'selected' : '' }}>{{ $s->label() }}</option>
                @endforeach
            </select>
            <button type="submit" class="bg-zinc-900 text-white text-sm px-4 py-2 rounded-xl hover:bg-zinc-700 transition-colors">Update Status</button>
        </form>
    </div>

    {{-- Contact Info --}}
    <div class="bg-white rounded-2xl border border-zinc-200 p-5 space-y-3">
        <h3 class="text-sm font-semibold text-zinc-900">Contact Information</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm">
            <div>
                <p class="text-xs text-zinc-400 mb-0.5">Email</p>
                <a href="mailto:{{ $lead->email }}" class="text-[#D64523] hover:underline">{{ $lead->email }}</a>
            </div>
            <div>
                <p class="text-xs text-zinc-400 mb-0.5">Phone</p>
                <a href="tel:{{ $lead->phone }}" class="text-zinc-700 hover:text-[#D64523]">{{ $lead->phone }}</a>
            </div>
            <div>
                <p class="text-xs text-zinc-400 mb-0.5">Service Interested In</p>
                <p class="text-zinc-700 font-medium">{{ $lead->service }}</p>
            </div>
            <div>
                <p class="text-xs text-zinc-400 mb-0.5">IP Address</p>
                <p class="text-zinc-500 font-mono text-xs">{{ $lead->ip_address }}</p>
            </div>
        </div>
    </div>

    {{-- Lead Source --}}
    <div class="bg-white rounded-2xl border border-zinc-200 p-5 space-y-3">
        <h3 class="text-sm font-semibold text-zinc-900">How they found you</h3>
        @if($lead->channel || $lead->form)
            @php
                $sourceRows = array_filter([
                    'Traffic source'   => $lead->channel,
                    'Referring site'   => $lead->referrer,
                    'Landing page'     => $lead->landing_page,
                    'Submitted via'    => $lead->form ? $lead->formLabel() : null,
                    'Submitted on page' => $lead->source_page,
                    'Campaign'         => collect([$lead->utm_source, $lead->utm_medium, $lead->utm_campaign])->filter()->implode(' / ') ?: null,
                    'Device'           => collect([$lead->device_type, $lead->os, $lead->browser])->filter()->implode(' · ') ?: null,
                    'Country'          => $lead->country,
                ]);
            @endphp
            <dl class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm">
                @foreach($sourceRows as $label => $value)
                    <div class="min-w-0">
                        <dt class="text-xs text-zinc-400 mb-0.5">{{ $label }}</dt>
                        <dd class="text-zinc-700 font-medium break-words">{{ $value }}</dd>
                    </div>
                @endforeach
            </dl>

            @php $journey = $lead->journey(); @endphp
            @if($journey->isNotEmpty())
                <div class="pt-3 border-t border-zinc-100">
                    <p class="text-xs text-zinc-400 mb-2">Pages viewed before contacting you ({{ $journey->count() }})</p>
                    <ol class="space-y-1.5 text-sm">
                        @foreach($journey as $step)
                            <li class="flex items-center gap-3">
                                <span class="w-5 h-5 shrink-0 rounded-full bg-[#D64523]/10 text-[#D64523] text-[10px] font-bold flex items-center justify-center">{{ $loop->iteration }}</span>
                                <span class="flex-1 min-w-0 truncate text-zinc-700">{{ $step->path }}</span>
                                <span class="text-xs text-zinc-400 shrink-0">{{ $step->visited_at->format('h:i A') }}</span>
                            </li>
                        @endforeach
                    </ol>
                </div>
            @endif
        @else
            <p class="text-sm text-zinc-400">Source details are recorded for leads received after the analytics update.</p>
        @endif
    </div>

    {{-- Message --}}
    <div class="bg-white rounded-2xl border border-zinc-200 p-5">
        <h3 class="text-sm font-semibold text-zinc-900 mb-3">Message</h3>
        <p class="text-sm text-zinc-700 leading-relaxed whitespace-pre-wrap">{{ $lead->message }}</p>
    </div>

    {{-- Quick Reply + Delete --}}
    <div class="flex items-center gap-3">
        <a href="mailto:{{ $lead->email }}"
           class="inline-flex items-center gap-2 bg-[#D64523] hover:bg-[#bf3d1f] text-white text-sm px-4 py-2.5 rounded-xl transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
            Reply via Email
        </a>
        <a href="{{ route('admin.leads.index') }}" class="text-sm text-zinc-500 hover:text-zinc-700">← Back to Leads</a>

        <form action="{{ route('admin.leads.destroy', $lead) }}" method="POST" class="ml-auto"
              onsubmit="return confirm('Delete this lead permanently?')">
            @csrf @method('DELETE')
            <button type="submit" class="text-sm text-red-500 hover:text-red-700">Delete Lead</button>
        </form>
    </div>
</div>
@endsection

