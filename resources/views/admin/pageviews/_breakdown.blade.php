{{--
    Ranked list with proportional bars.
    Expects: $title, $rows (collection of ['label', 'value', optional 'leads']), $unit (e.g. 'visitors'),
    optional $hint, $link (bool: label is a site path), $empty.
--}}
@php
    $rows  = collect($rows);
    $total = max(1, $rows->sum('value'));
    $max   = max(1, $rows->max('value') ?? 0);
    $showLeads = $rows->contains(fn ($r) => array_key_exists('leads', $r));
@endphp
<div class="bg-white rounded-2xl border border-zinc-200 overflow-hidden flex flex-col">
    <div class="px-5 py-4 border-b border-zinc-100 flex items-center justify-between gap-3">
        <div>
            <h2 class="text-sm font-semibold text-zinc-900">{{ $title }}</h2>
            @isset($hint)<p class="text-xs text-zinc-400 mt-0.5">{{ $hint }}</p>@endisset
        </div>
        <span class="text-[11px] font-semibold uppercase tracking-wider text-zinc-400 shrink-0">
            {{ $unit }}@if ($showLeads) · leads @endif
        </span>
    </div>
    @if ($rows->isEmpty())
        <p class="text-sm text-zinc-400 px-5 py-8 text-center">{{ $empty ?? 'No data for this period yet.' }}</p>
    @else
        <ul class="p-3 space-y-1">
            @foreach ($rows as $row)
                <li class="relative rounded-lg px-3 py-2 flex items-center gap-3 text-sm">
                    <span class="absolute inset-y-0 left-0 rounded-lg bg-[#D64523]/8"
                        style="width: {{ round($row['value'] / $max * 100, 1) }}%"></span>
                    <span class="relative flex-1 min-w-0 truncate text-zinc-700" title="{{ $row['label'] }}">
                        @if (!empty($link) && str_starts_with($row['label'], '/'))
                            <a href="{{ url($row['label']) }}" target="_blank" class="hover:text-[#D64523]">{{ $row['label'] }}</a>
                        @else
                            {{ $row['label'] }}
                        @endif
                    </span>
                    <span class="relative shrink-0 text-xs text-zinc-400 w-10 text-right">{{ round($row['value'] / $total * 100) }}%</span>
                    <span class="relative shrink-0 font-semibold text-zinc-900 w-12 text-right">{{ number_format($row['value']) }}</span>
                    @if ($showLeads)
                        <span class="relative shrink-0 w-10 text-right font-semibold {{ ($row['leads'] ?? 0) > 0 ? 'text-emerald-600' : 'text-zinc-300' }}">{{ $row['leads'] ?? 0 }}</span>
                    @endif
                </li>
            @endforeach
        </ul>
    @endif
</div>
