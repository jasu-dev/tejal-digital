@extends('layouts.admin')
@section('title', 'Analytics')
@section('page-title', 'Website Analytics')

@section('content')
<div class="space-y-5">

    {{-- Period Filter Bar --}}
    <div class="bg-white rounded-2xl border border-zinc-200 px-5 py-3.5 flex flex-wrap items-center gap-2">
        <span class="text-xs font-semibold text-zinc-500 uppercase tracking-wider mr-1">Period:</span>
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
        <span class="ml-auto text-xs text-zinc-400">Compared with the previous period of the same length</span>
    </div>

    {{-- KPI Cards --}}
    <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-5 gap-4">
        @foreach($kpis as $kpi)
        <div class="bg-white rounded-2xl border border-zinc-200 p-5">
            <p class="text-xs font-medium text-zinc-500 uppercase tracking-wider mb-2">{{ $kpi['label'] }}</p>
            <p class="text-3xl font-bold text-zinc-900">{{ $kpi['value'] }}</p>
            <p class="text-xs mt-1.5">
                @if (is_null($kpi['change']))
                    <span class="text-zinc-400">No earlier data</span>
                @else
                    <span class="font-semibold {{ $kpi['change'] >= 0 ? 'text-emerald-600' : 'text-red-500' }}">
                        {{ $kpi['change'] >= 0 ? '▲' : '▼' }} {{ abs($kpi['change']) }}%
                    </span>
                    <span class="text-zinc-400">vs previous</span>
                @endif
            </p>
            @isset($kpi['hint'])<p class="text-[11px] text-zinc-400 mt-1">{{ $kpi['hint'] }}</p>@endisset
        </div>
        @endforeach
    </div>

    {{-- Traffic chart --}}
    <div class="bg-white rounded-2xl border border-zinc-200 p-5">
        <div class="flex flex-wrap items-center justify-between gap-2 mb-4">
            <h2 class="text-sm font-semibold text-zinc-900">Traffic &amp; Leads — {{ $chartLabel }}</h2>
            <div class="flex items-center gap-4 text-xs text-zinc-500">
                <span class="flex items-center gap-1.5"><span class="w-3 h-3 rounded-sm bg-[#D64523]/25 border border-[#D64523]"></span>Page views</span>
                <span class="flex items-center gap-1.5"><span class="w-3 h-0.5 bg-zinc-800"></span>Visitors</span>
                <span class="flex items-center gap-1.5"><span class="w-2.5 h-2.5 rounded-full bg-emerald-500"></span>Leads</span>
            </div>
        </div>
        <canvas id="trafficChart" height="80"></canvas>
    </div>

    {{-- Acquisition --}}
    <div>
        <h2 class="text-xs font-semibold text-zinc-500 uppercase tracking-wider mb-3">Where visitors come from</h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            @include('admin.pageviews._breakdown', [
                'title' => 'Traffic channels', 'rows' => $channels, 'unit' => 'visits',
                'hint' => 'Search, social, direct… and how many leads each produced',
                'empty' => 'Channel data is collected from now on — check back after some visits.',
            ])
            @include('admin.pageviews._breakdown', [
                'title' => 'Referring websites', 'rows' => $referrers, 'unit' => 'visits',
                'hint' => 'Other sites that sent visitors',
            ])
        </div>
    </div>

    {{-- Content --}}
    <div>
        <h2 class="text-xs font-semibold text-zinc-500 uppercase tracking-wider mb-3">What they look at</h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            @include('admin.pageviews._breakdown', [
                'title' => 'Landing pages', 'rows' => $landingPages, 'unit' => 'visits', 'link' => true,
                'hint' => 'First page of each visit, and the leads that visit produced',
            ])

            {{-- Top pages with views + visitors --}}
            <div class="bg-white rounded-2xl border border-zinc-200 overflow-hidden">
                <div class="px-5 py-4 border-b border-zinc-100 flex items-center justify-between">
                    <div>
                        <h2 class="text-sm font-semibold text-zinc-900">Most viewed pages</h2>
                        <p class="text-xs text-zinc-400 mt-0.5">All pages, every view counted</p>
                    </div>
                    <span class="text-[11px] font-semibold uppercase tracking-wider text-zinc-400">views · visitors</span>
                </div>
                @if($topPages->isEmpty())
                    <p class="text-sm text-zinc-400 px-5 py-8 text-center">No data for this period yet.</p>
                @else
                    <div class="divide-y divide-zinc-100">
                        @foreach($topPages as $page)
                        <div class="px-5 py-2.5 flex items-center gap-3 text-sm">
                            <a href="{{ url($page->path) }}" target="_blank"
                               class="flex-1 min-w-0 truncate text-zinc-700 hover:text-[#D64523]">{{ $page->path }}</a>
                            <span class="w-12 text-right font-semibold text-zinc-900">{{ number_format($page->total) }}</span>
                            <span class="w-12 text-right text-zinc-500">{{ number_format($page->visitors) }}</span>
                        </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>

    {{-- Leads --}}
    <div>
        <h2 class="text-xs font-semibold text-zinc-500 uppercase tracking-wider mb-3">Where leads are submitted</h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            @include('admin.pageviews._breakdown', [
                'title' => 'Lead forms', 'rows' => $leadForms, 'unit' => 'leads',
                'empty' => 'No leads in this period.',
            ])
            @include('admin.pageviews._breakdown', [
                'title' => 'Pages where leads were submitted', 'rows' => $leadPages, 'unit' => 'leads', 'link' => true,
                'empty' => 'No leads in this period.',
            ])
        </div>
    </div>

    {{-- Audience --}}
    <div>
        <h2 class="text-xs font-semibold text-zinc-500 uppercase tracking-wider mb-3">Who the visitors are</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            @include('admin.pageviews._breakdown', ['title' => 'Devices', 'rows' => $devices, 'unit' => 'visitors'])
            @include('admin.pageviews._breakdown', ['title' => 'Browsers', 'rows' => $browsers, 'unit' => 'visitors'])
            @include('admin.pageviews._breakdown', ['title' => 'Operating systems', 'rows' => $systems, 'unit' => 'visitors'])
        </div>
        @if ($countries->isNotEmpty())
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
                @include('admin.pageviews._breakdown', ['title' => 'Countries', 'rows' => $countries, 'unit' => 'visitors'])
            </div>
        @endif
    </div>

    {{-- Campaigns --}}
    @if ($campaigns->isNotEmpty())
    <div class="bg-white rounded-2xl border border-zinc-200 overflow-hidden">
        <div class="px-5 py-4 border-b border-zinc-100">
            <h2 class="text-sm font-semibold text-zinc-900">Campaigns (UTM links)</h2>
            <p class="text-xs text-zinc-400 mt-0.5">Visits from links tagged with utm_source / utm_medium / utm_campaign</p>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-zinc-50 text-xs text-zinc-500 uppercase tracking-wider">
                    <tr>
                        <th class="text-left px-5 py-2.5 font-semibold">Source</th>
                        <th class="text-left px-5 py-2.5 font-semibold">Medium</th>
                        <th class="text-left px-5 py-2.5 font-semibold">Campaign</th>
                        <th class="text-right px-5 py-2.5 font-semibold">Visits</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-100">
                    @foreach ($campaigns as $c)
                        <tr>
                            <td class="px-5 py-2.5 text-zinc-700">{{ $c->source }}</td>
                            <td class="px-5 py-2.5 text-zinc-500">{{ $c->medium }}</td>
                            <td class="px-5 py-2.5 text-zinc-700">{{ $c->campaign }}</td>
                            <td class="px-5 py-2.5 text-right font-semibold">{{ number_format($c->total) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script>
new Chart(document.getElementById('trafficChart'), {
    data: {
        labels: {!! json_encode($chart['labels']) !!},
        datasets: [
            {
                type: 'bar', label: 'Page views', data: {!! json_encode($chart['views']) !!},
                backgroundColor: 'rgba(214,69,35,0.15)', borderColor: '#D64523', borderWidth: 2, borderRadius: 4, order: 3,
            },
            {
                type: 'line', label: 'Visitors', data: {!! json_encode($chart['visitors']) !!},
                borderColor: '#27272a', backgroundColor: '#27272a', borderWidth: 2, pointRadius: 0, tension: 0.3, order: 2,
            },
            {
                type: 'line', label: 'Leads', data: {!! json_encode($chart['leads']) !!}, yAxisID: 'leads',
                borderColor: '#10b981', backgroundColor: '#10b981', showLine: false, pointRadius: (ctx) => ctx.raw > 0 ? 5 : 0, order: 1,
            },
        ]
    },
    options: {
        responsive: true,
        interaction: { mode: 'index', intersect: false },
        plugins: { legend: { display: false } },
        scales: {
            y: { beginAtZero: true, ticks: { precision: 0, font: { size: 11 } }, grid: { color: '#f4f4f5' } },
            leads: { position: 'right', beginAtZero: true, ticks: { precision: 0, font: { size: 11 }, color: '#10b981' }, grid: { display: false } },
            x: { ticks: { maxTicksLimit: 15, font: { size: 10 } }, grid: { display: false } }
        }
    }
});
</script>
@endsection
