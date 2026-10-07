@extends('layouts.admin')
@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')
<div class="space-y-6">

    {{-- Stats Grid --}}
    <div class="grid grid-cols-2 gap-4">
        @php
            $cards = [
                ['label'=>'Total Leads',       'value'=>$stats['total_leads'],      'sub'=>$stats['new_leads'].' new',         'color'=>'text-blue-600',   'bg'=>'bg-blue-50',   'icon'=>'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z'],
                ['label'=>'Today\'s Views',    'value'=>$stats['today_page_views'], 'sub'=>$stats['today_visitors'].' unique visitors · '.$stats['total_page_views'].' total','color'=>'text-emerald-600','bg'=>'bg-emerald-50','icon'=>'M15 12a3 3 0 11-6 0 3 3 0 016 0z M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z'],
            ];
        @endphp
        @foreach($cards as $card)
        <div class="bg-white rounded-2xl border border-zinc-200 p-5 flex flex-col gap-3">
            <div class="flex items-center justify-between">
                <p class="text-xs font-medium text-zinc-500 uppercase tracking-wider">{{ $card['label'] }}</p>
                <span class="w-8 h-8 rounded-xl {{ $card['bg'] }} {{ $card['color'] }} flex items-center justify-center">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="{{ $card['icon'] }}"/>
                    </svg>
                </span>
            </div>
            <p class="text-3xl font-bold text-zinc-900">{{ number_format($card['value']) }}</p>
            <p class="text-xs text-zinc-400">{{ $card['sub'] }}</p>
        </div>
        @endforeach
    </div>

    {{-- Charts + Top Pages Row --}}
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">

        {{-- 14-day Line Chart --}}
        <div class="lg:col-span-2 bg-white rounded-2xl border border-zinc-200 p-5">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-sm font-semibold text-zinc-900">Page Views - Last 14 Days</h2>
            </div>
            <canvas id="dashboardChart" height="120"></canvas>
        </div>

        {{-- Top Pages --}}
        <div class="bg-white rounded-2xl border border-zinc-200 p-5">
            <h2 class="text-sm font-semibold text-zinc-900 mb-4">Top Pages</h2>
            <div class="space-y-3">
                @forelse($topPages as $page)
                <div class="flex items-center justify-between gap-2">
                    <p class="text-xs text-zinc-600 truncate flex-1" title="{{ $page->path }}">{{ $page->path }}</p>
                    <span class="text-xs font-semibold text-zinc-900 shrink-0">{{ number_format($page->count) }}</span>
                </div>
                @empty
                <p class="text-xs text-zinc-400">No data yet.</p>
                @endforelse
            </div>
        </div>
    </div>

    {{-- Quick Actions --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <a href="{{ route('admin.leads.index') }}" class="bg-blue-600 hover:bg-blue-700 text-white rounded-2xl p-4 flex items-center gap-3 transition-colors">
            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            <span class="text-sm font-medium">View All Leads</span>
        </a>
        <a href="{{ route('admin.page-views.index') }}" class="bg-violet-600 hover:bg-violet-700 text-white rounded-2xl p-4 flex items-center gap-3 transition-colors">
            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
            <span class="text-sm font-medium">Page Analytics</span>
        </a>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script>
@php
    $chartLabels = [];
    $chartData   = [];
    for ($i = 13; $i >= 0; $i--) {
        $date = now()->subDays($i)->format('Y-m-d');
        $chartLabels[] = now()->subDays($i)->format('M d');
        $chartData[]   = $dailyViews[$date]->count ?? 0;
    }
@endphp
new Chart(document.getElementById('dashboardChart'), {
    type: 'bar',
    data: {
        labels: {!! json_encode($chartLabels) !!},
        datasets: [{
            label: 'Page Views',
            data: {!! json_encode($chartData) !!},
            backgroundColor: 'rgba(214,69,35,0.15)',
            borderColor: '#D64523',
            borderWidth: 2,
            borderRadius: 6,
        }]
    },
    options: {
        responsive: true,
        plugins: { legend: { display: false } },
        scales: {
            y: { beginAtZero: true, ticks: { precision: 0, font: { size: 11 } }, grid: { color: '#f4f4f5' } },
            x: { ticks: { font: { size: 11 } }, grid: { display: false } }
        }
    }
});
</script>
@endsection

