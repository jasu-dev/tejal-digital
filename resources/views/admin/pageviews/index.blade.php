@extends('layouts.admin')
@section('title', 'Page Views')
@section('page-title', 'Page Analytics')

@section('content')
<div class="space-y-5">

    {{-- Period Filter Bar --}}
    <div class="bg-white rounded-2xl border border-zinc-200 px-5 py-3.5 flex flex-wrap items-center gap-2">
        <span class="text-xs font-semibold text-zinc-500 uppercase tracking-wider mr-1">Filter:</span>
        @php
            $filterPeriods = [
                'today'        => 'Today',
                'last_7_days'  => 'Last 7 Days',
                'this_month'   => 'This Month',
                'last_month'   => 'Last Month',
                'last_30_days' => 'Last 30 Days',
            ];
        @endphp
        @foreach($filterPeriods as $key => $label)
            <a href="{{ request()->fullUrlWithQuery(['period' => $key]) }}"
               class="px-4 py-1.5 rounded-full text-xs font-semibold transition-colors
                      {{ $period === $key
                         ? 'bg-[#D64523] text-white shadow-sm'
                         : 'bg-zinc-100 text-zinc-600 hover:bg-zinc-200' }}">
                {{ $label }}
            </a>
        @endforeach
    </div>

    {{-- Stats Cards --}}
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
        @php
            $pvCards = [
                ['label' => 'Today',       'value' => $stats['today'], 'unique' => $stats['today_unique']],
                ['label' => 'Last 7 Days', 'value' => $stats['week'],  'unique' => $stats['week_unique']],
                ['label' => 'Last 30 Days','value' => $stats['month'], 'unique' => $stats['month_unique']],
                ['label' => 'All Time',    'value' => $stats['total'], 'unique' => $stats['total_unique']],
            ];
        @endphp
        @foreach($pvCards as $card)
        <div class="bg-white rounded-2xl border border-zinc-200 p-5">
            <p class="text-xs font-medium text-zinc-500 uppercase tracking-wider mb-2">{{ $card['label'] }}</p>
            <p class="text-3xl font-bold text-zinc-900">{{ number_format($card['value']) }}</p>
            <p class="text-xs text-zinc-400 mt-1">page views &middot; <span class="font-semibold text-zinc-600">{{ number_format($card['unique']) }}</span> unique visitors</p>
        </div>
        @endforeach
    </div>

    {{-- Chart for selected period --}}
    <div class="bg-white rounded-2xl border border-zinc-200 p-5">
        <div class="flex flex-wrap items-center justify-between gap-2 mb-4">
            <h2 class="text-sm font-semibold text-zinc-900">Daily Page Views — {{ $chartLabel }}</h2>
            <span class="text-xs text-zinc-400">Showing data for selected period</span>
        </div>
        <canvas id="pageViewChart" height="80"></canvas>
    </div>

    {{-- Top Pages + Referrers (filtered) --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">

        {{-- Top Pages --}}
        <div class="bg-white rounded-2xl border border-zinc-200 overflow-hidden">
            <div class="px-5 py-4 border-b border-zinc-100 flex items-center justify-between">
                <h2 class="text-sm font-semibold text-zinc-900">Top Pages</h2>
                <span class="text-xs text-zinc-400 bg-zinc-100 px-2.5 py-1 rounded-full">{{ $chartLabel }}</span>
            </div>
            @if($topPages->isEmpty())
                <p class="text-sm text-zinc-400 px-5 py-8 text-center">No data for this period.</p>
            @else
            <div class="divide-y divide-zinc-100">
                @foreach($topPages as $page)
                <div class="px-5 py-3 flex items-center gap-3">
                    <div class="flex-1 min-w-0">
                        <a href="{{ url($page->path) }}" target="_blank"
                           class="text-sm text-zinc-700 hover:text-[#D64523] truncate block">{{ $page->path }}</a>
                    </div>
                    <div class="shrink-0 text-right">
                        <span class="text-sm font-semibold text-zinc-900">{{ number_format($page->count) }}</span>
                        <span class="text-xs text-zinc-400 ml-1">views</span>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>

        {{-- Top Referrers --}}
        <div class="bg-white rounded-2xl border border-zinc-200 overflow-hidden">
            <div class="px-5 py-4 border-b border-zinc-100 flex items-center justify-between">
                <h2 class="text-sm font-semibold text-zinc-900">Top Referrers</h2>
                <span class="text-xs text-zinc-400 bg-zinc-100 px-2.5 py-1 rounded-full">{{ $chartLabel }}</span>
            </div>
            @if($topReferrers->isEmpty())
                <p class="text-sm text-zinc-400 px-5 py-8 text-center">No referrer data for this period.</p>
            @else
            <div class="divide-y divide-zinc-100">
                @foreach($topReferrers as $ref)
                <div class="px-5 py-3 flex items-center gap-3">
                    <div class="flex-1 min-w-0">
                        <p class="text-sm text-zinc-600 truncate" title="{{ $ref->referer }}">
                            {{ parse_url($ref->referer, PHP_URL_HOST) ?? $ref->referer }}
                        </p>
                        <p class="text-xs text-zinc-400 truncate">{{ $ref->referer }}</p>
                    </div>
                    <span class="text-sm font-semibold text-zinc-900 shrink-0">{{ number_format($ref->count) }}</span>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script>
new Chart(document.getElementById('pageViewChart'), {
    type: 'bar',
    data: {
        labels: {!! json_encode($labels) !!},
        datasets: [{
            label: 'Page Views',
            data: {!! json_encode($data) !!},
            backgroundColor: 'rgba(214,69,35,0.15)',
            borderColor: '#D64523',
            borderWidth: 2,
            borderRadius: 4,
        }]
    },
    options: {
        responsive: true,
        plugins: { legend: { display: false } },
        scales: {
            y: { beginAtZero: true, ticks: { precision: 0, font: { size: 11 } }, grid: { color: '#f4f4f5' } },
            x: { ticks: { maxTicksLimit: 15, font: { size: 10 } }, grid: { display: false } }
        }
    }
});
</script>
@endsection
