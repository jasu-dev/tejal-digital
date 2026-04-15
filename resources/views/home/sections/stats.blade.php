@php
    $stats = [
        [
            'icon' => 'icons.target',
            'count' => config('staticdata.projects'),
            'title' => 'Projects Delivered'
        ],
        [
            'icon' => 'icons.love',
            'count' => config('staticdata.satisfaction'),
            'title' => 'Client Satisfaction'
        ],
        [
            'icon' => 'icons.users',
            'count' => config('staticdata.clients'),
            'title' => 'Happy Clients'
        ],
        [
            'icon' => 'icons.launch',
            'count' => config('staticdata.experience_years'),
            'title' => 'Years Experience'
        ]
    ]
@endphp

<section class="py-20 bg-surface-container-low overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach ($stats as $index => $stat)
                <div class="text-center group" 
                     data-aos="fade-up" 
                     data-aos-delay="{{ $index * 100 }}"
                     data-aos-duration="800">
                    
                    <div class="w-16 h-16 rounded-2xl mx-auto mb-4 flex items-center justify-center">
                        <x-dynamic-component :component="$stat['icon']" class="w-8 h-8 text-new-primary" />
                    </div>
                    
                    <div class="text-4xl font-bold text-white mb-1">
                        {{ $stat['count'] }}+
                    </div>
                    
                    <div class="text-on-surface/70 font-medium text-sm">
                        {{ $stat['title'] }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>