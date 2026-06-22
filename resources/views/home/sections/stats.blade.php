@php
    $stats = [
        [
            'icon' => 'icons.target',
            'count' => config('staticdata.projects'),
            'title' => 'Projects Delivered',
        ],
        [
            'icon' => 'icons.love',
            'count' => config('staticdata.satisfaction'),
            'title' => 'Client Satisfaction',
        ],
        [
            'icon' => 'icons.users',
            'count' => config('staticdata.clients'),
            'title' => 'Happy Clients',
        ],
        [
            'icon' => 'icons.launch',
            'count' => config('staticdata.experience_years'),
            'title' => 'Years Experience',
        ],
    ];
@endphp

<section class="py-10 sm:py-14 px-3 sm:px-6 lg:px-8 overflow-hidden border-b border-outline-variant/30">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach ($stats as $index => $stat)
                <div class="flex flex-col items-center text-center" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}" data-aos-duration="800">
                    <span class="flex h-11 w-11 items-center justify-center rounded-full bg-primary/15 text-primary">
                        <x-dynamic-component :component="$stat['icon']" class="w-5 h-5" />
                    </span>
                    <div class="mt-3 text-2xl font-bold">{{ $stat['count'] }}+</div>
                    <div class="text-xs text-muted-foreground">{{ $stat['title'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>
