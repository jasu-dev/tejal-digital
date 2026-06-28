@props([
    'project' => [],
])
<a href="{{ $project['link'] }}" data-aos="fade-up" data-aos-duration="1000"
    class="rounded-2xl group border border-border bg-card overflow-hidden transition-all duration-500 hover:border-primary/40"
    title="View {{ $project['title'] }} case study">

    <div class="aspect-[16/10] overflow-hidden">
        <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}"
            class="w-full h-full object-cover">
    </div>

    {{-- Content Area --}}
    <div class="p-4">
        <div class="flex items-center gap-2 mb-3">
            <div class="w-1.5 h-1.5 rounded-full bg-primary"></div>
            <span
                class="text-[10px] font-bold  uppercase tracking-widest">{{ $project['category'] }}</span>
        </div>

        <h3 class="text-2xl font-bold  mb-3 group-hover:text-primary transition-colors">
            {{ $project['title'] }}
        </h3>

        <p class=" text-sm leading-relaxed mb-4">
            {{ $project['desc'] }}
        </p>
        @if (isset($project['tags']))
            <div class="flex flex-wrap gap-4 pt-4 border-t border-outline-variant/30">
                @foreach ($project['tags'] as $tag)
                    <span class="border rounded-lg bg-outline-variant/10 border-outline-variant/20 text-xs px-2 py-1">{{ $tag }}</span>
                @endforeach
            </div>
        @endif
    </div>
</a>
