@php
    $stats = [
        [
            'icon' => 'icons.target',
            'count' => config('staticdata.projects'),
            'suffix' => '+',
            'title' => 'Projects Delivered',
        ],
        [
            'icon' => 'icons.love',
            'count' => config('staticdata.satisfaction'),
            'suffix' => '%',
            'title' => 'Client Satisfaction',
        ],
        [
            'icon' => 'icons.users',
            'count' => config('staticdata.clients'),
            'suffix' => '+',
            'title' => 'Happy Clients',
        ],
        [
            'icon' => 'icons.launch',
            'count' => config('staticdata.experience_years'),
            'suffix' => '+',
            'title' => 'Years Experience',
        ],
    ];
@endphp

<section class="py-10 sm:py-14 px-4 sm:px-6 lg:px-8 overflow-hidden border-b border-outline-variant/30">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-2 lg:grid-cols-4 rounded-3xl border border-border bg-card overflow-hidden divide-x divide-y lg:divide-y-0 divide-border">
            @foreach ($stats as $index => $stat)
                <div class="flex items-center gap-4 p-5 sm:p-7" data-aos="fade-up"
                    data-aos-delay="{{ $index * 100 }}" data-aos-duration="800">
                    <span class="hidden sm:flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-primary/10 text-primary">
                        <x-dynamic-component :component="$stat['icon']" class="w-5 h-5" />
                    </span>
                    <div>
                        <div class="text-3xl sm:text-4xl font-bold tracking-tight">
                            {{ $stat['count'] }}<span class="text-primary">{{ $stat['suffix'] }}</span>
                        </div>
                        <div class="text-sm text-muted-foreground mt-0.5">{{ $stat['title'] }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
