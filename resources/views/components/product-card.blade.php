@props([
    'project' => [],
])
{{--
    Optional trust fields: 'client' (client / business name), 'live_url' (public site), 'result' (one measurable outcome).
    Each is only shown when filled in.
--}}
<article data-aos="fade-up" data-aos-duration="1000"
    class="relative rounded-3xl group border border-border bg-card overflow-hidden flex flex-col transition-all duration-500 hover:border-primary/40 hover:shadow-2xl hover:shadow-primary-500/10 hover:-translate-y-1">

    <div class="relative aspect-[16/10] overflow-hidden bg-zinc-100 border-b border-border">
        <img src="{{ asset($project['image']) }}" alt="{{ $project['alt'] ?? $project['title'] }}" loading="lazy"
            class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-105">
        @if (!empty($project['category']))
            <span
                class="absolute left-4 top-4 inline-flex items-center gap-1.5 rounded-full bg-white/90 backdrop-blur px-3 py-1 text-[11px] font-bold uppercase tracking-wider text-foreground shadow-sm">
                <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                {{ $project['category'] }}
            </span>
        @endif
    </div>

    {{-- Content Area --}}
    <div class="p-6 flex flex-col flex-1">
        @if (!empty($project['client']))
            <p class="text-xs font-semibold uppercase tracking-wider text-muted-foreground mb-1.5">Client: {{ $project['client'] }}</p>
        @endif
        <h3 class="text-xl sm:text-2xl font-bold tracking-tight mb-3 group-hover:text-primary transition-colors">
            {{-- Stretched link: the whole card opens the case study --}}
            <a href="{{ $project['link'] }}" class="after:absolute after:inset-0" title="View {{ $project['title'] }} case study">
                {{ $project['title'] }}
            </a>
        </h3>

        @if (!empty($project['result']))
            <p class="flex items-start gap-2 rounded-xl bg-emerald-50 text-emerald-800 text-sm font-medium px-3 py-2 mb-4">
                <x-icons.check class="w-4 h-4 mt-0.5 shrink-0" />
                <span>{{ $project['result'] }}</span>
            </p>
        @endif

        <p class="text-sm text-muted-foreground leading-relaxed mb-5 line-clamp-3">
            {{ $project['desc'] }}
        </p>
        @if (!empty($project['tags']))
            <div class="flex flex-wrap gap-2 mb-5">
                @foreach (array_slice($project['tags'], 0, 5) as $tag)
                    <span
                        class="rounded-full bg-zinc-100 text-zinc-700 text-xs font-medium px-2.5 py-1">{{ $tag }}</span>
                @endforeach
            </div>
        @endif
        <div class="mt-auto pt-4 border-t border-border flex items-center justify-between gap-3 text-sm font-semibold">
            @if (!empty($project['live_url']))
                <a href="{{ $project['live_url'] }}" target="_blank" rel="noopener"
                    class="relative z-10 inline-flex items-center gap-1.5 text-muted-foreground hover:text-primary transition-colors">
                    <x-icons.globe class="w-4 h-4" />
                    {{ preg_replace('#^https?://(www\.)?#', '', rtrim($project['live_url'], '/')) }}
                </a>
            @else
                <span class="text-foreground group-hover:text-primary transition-colors">View case study</span>
            @endif
            <span
                class="w-9 h-9 shrink-0 rounded-full bg-primary/10 text-primary flex items-center justify-center group-hover:bg-primary group-hover:text-white transition-colors">
                <x-icons.go class="w-4 h-4 -rotate-45 group-hover:rotate-0 transition-transform" />
            </span>
        </div>
    </div>
</article>
