@props([
    'project' => [],
])
<a href="{{ $project['link'] }}" data-aos="fade-up" data-aos-duration="1000"
    class="rounded-3xl group border border-border bg-card overflow-hidden flex flex-col transition-all duration-500 hover:border-primary/40 hover:shadow-2xl hover:shadow-primary-500/10 hover:-translate-y-1"
    title="View {{ $project['title'] }} case study">

    <div class="relative aspect-[16/10] overflow-hidden bg-zinc-100 border-b border-border">
        <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}" loading="lazy"
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
        <h3 class="text-xl sm:text-2xl font-bold tracking-tight mb-3 group-hover:text-primary transition-colors">
            {{ $project['title'] }}
        </h3>

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
        <div class="mt-auto pt-4 border-t border-border flex items-center justify-between text-sm font-semibold">
            <span class="text-foreground group-hover:text-primary transition-colors">View case study</span>
            <span
                class="w-9 h-9 rounded-full bg-primary/10 text-primary flex items-center justify-center group-hover:bg-primary group-hover:text-white transition-colors">
                <x-icons.go class="w-4 h-4 -rotate-45 group-hover:rotate-0 transition-transform" />
            </span>
        </div>
    </div>
</a>
