@extends('layouts.admin')
@section('title', 'Leads')
@section('page-title', 'Form Leads')

@section('content')
<div class="space-y-4">

    {{-- Filters --}}
    <form method="GET" action="{{ route('admin.leads.index') }}"
          class="bg-white rounded-2xl border border-zinc-200 p-4 flex flex-wrap gap-3 items-end">
        <div class="flex-1 min-w-48">
            <label class="block text-xs font-medium text-zinc-600 mb-1">Search</label>
            <input type="text" name="search" value="{{ request('search') }}"
                   placeholder="Name, email, service…"
                   class="w-full border border-zinc-200 rounded-xl px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#D64523]/30 focus:border-[#D64523]">
        </div>
        <div>
            <label class="block text-xs font-medium text-zinc-600 mb-1">Status</label>
            <select name="status" class="border border-zinc-200 rounded-xl px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#D64523]/30 focus:border-[#D64523]">
                <option value="">All Statuses</option>
                @foreach($statuses as $s)
                    <option value="{{ $s->value }}" {{ request('status') === $s->value ? 'selected' : '' }}>{{ $s->label() }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="bg-zinc-900 text-white text-sm px-4 py-2 rounded-xl hover:bg-zinc-700 transition-colors">Filter</button>
        @if(request()->anyFilled(['search', 'status']))
            <a href="{{ route('admin.leads.index') }}" class="text-sm text-zinc-400 hover:text-zinc-600 self-end py-2">Clear</a>
        @endif
    </form>

    {{-- Total --}}
    <p class="text-sm text-zinc-500">{{ $leads->total() }} lead(s) found</p>

    {{-- Table --}}
    <div class="bg-white rounded-2xl border border-zinc-200 overflow-hidden">
        @if($leads->isEmpty())
            <div class="text-center py-16 text-zinc-400">
                <svg class="w-10 h-10 mx-auto mb-3 opacity-40" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                <p class="text-sm">No leads found.</p>
            </div>
        @else
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-zinc-50 border-b border-zinc-200">
                    <tr>
                        <th class="text-left px-5 py-3 text-xs font-semibold text-zinc-500 uppercase tracking-wider">Name</th>
                        <th class="text-left px-5 py-3 text-xs font-semibold text-zinc-500 uppercase tracking-wider hidden sm:table-cell">Email / Phone</th>
                        <th class="text-left px-5 py-3 text-xs font-semibold text-zinc-500 uppercase tracking-wider hidden md:table-cell">Service</th>
                        <th class="text-left px-5 py-3 text-xs font-semibold text-zinc-500 uppercase tracking-wider">Status</th>
                        <th class="text-left px-5 py-3 text-xs font-semibold text-zinc-500 uppercase tracking-wider hidden lg:table-cell">Received</th>
                        <th class="text-right px-5 py-3 text-xs font-semibold text-zinc-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-100">
                    @foreach($leads as $lead)
                    <tr class="hover:bg-zinc-50 transition-colors {{ $lead->status->value === 'new' ? 'bg-blue-50/40' : '' }}">
                        <td class="px-5 py-4">
                            <p class="font-medium text-zinc-900">{{ $lead->first_name }} {{ $lead->last_name }}</p>
                        </td>
                        <td class="px-5 py-4 hidden sm:table-cell">
                            <p class="text-zinc-700">{{ $lead->email }}</p>
                            <p class="text-zinc-400 text-xs">{{ $lead->phone }}</p>
                        </td>
                        <td class="px-5 py-4 hidden md:table-cell text-zinc-600">{{ $lead->service }}</td>
                        <td class="px-5 py-4">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $lead->status->badgeClass() }}">
                                {{ $lead->status->label() }}
                            </span>
                        </td>
                        <td class="px-5 py-4 hidden lg:table-cell text-zinc-400 text-xs">
                            {{ $lead->created_at->format('d M Y, h:i A') }}
                        </td>
                        <td class="px-5 py-4">
                            <div class="flex items-center justify-end gap-2">
                                <a href="{{ route('admin.leads.show', $lead) }}"
                                   class="p-1.5 rounded-lg text-zinc-400 hover:text-blue-600 hover:bg-blue-50 transition-colors" title="View">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0zM2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                    </svg>
                                </a>
                                <form action="{{ route('admin.leads.destroy', $lead) }}" method="POST"
                                      onsubmit="return confirm('Delete this lead permanently?')">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="p-1.5 rounded-lg text-zinc-400 hover:text-red-600 hover:bg-red-50 transition-colors">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>

    @if($leads->hasPages())
        <div class="flex justify-end">{{ $leads->links() }}</div>
    @endif
</div>
@endsection

