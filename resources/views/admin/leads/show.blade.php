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

