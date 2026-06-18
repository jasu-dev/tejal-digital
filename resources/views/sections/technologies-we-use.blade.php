@php
    $techs = [
        ['name' => 'HTML', 'icon' => 'html5.svg'],
        ['name' => 'CSS', 'icon' => 'css.svg'],
        ['name' => 'JavaScript', 'icon' => 'js.svg'],
        ['name' => 'jQuery', 'icon' => 'jquery.svg'],
        ['name' => 'BootStrap', 'icon' => 'bootstrap.svg'],
        ['name' => 'Tailwind', 'icon' => 'tailwind.svg'],
        ['name' => 'PHP', 'icon' => 'php.svg'],
        ['name' => 'WordPress', 'icon' => 'wordpress.svg'],
        ['name' => 'Laravel', 'icon' => 'laravel.svg'],
        ['name' => 'CodeIgniter', 'icon' => 'codeigniter.svg'],
        ['name' => 'MySQL', 'icon' => 'mysql.svg'],
        ['name' => 'MongoDB', 'icon' => 'mongodb.svg'],
    ];
@endphp


<section class="py-24 overflow-hidden {{ $class ?? '' }}">
    <div class="max-w-7xl mx-auto px-4 text-center mb-16" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
        <div
            class="inline-flex items-center gap-2 px-4 py-2 mb-6 rounded-full bg-primary/10 border border-primary/30 text-primary-500 backdrop-blur-xl">
            <span class="text-sm font-semibold">Technologies</span>
        </div>
        <h2 class="text-4xl md:text-6xl font-bold text-foreground mb-6 tracking-tight">
            We Built With Modern Tech
        </h2>
        <p class="text-lg text-on-surface/60 max-w-2xl mx-auto">
            A high-performance stack curated for speed, security, and scalability.
        </p>
    </div>
    <div class="max-w-7xl mx-auto mask-edges flex overflow-hidden select-none gap-8 py-4">
        <div class="flex flex-none items-center justify-around gap-8 animate-infinite-scroll">
            @foreach (array_merge($techs, $techs) as $tech)
                <div
                    class="flex items-center gap-4 px-6 py-4 rounded-2xl border border-border bg-card hover:border-primary/40 transition-colors group">
                    <img src="{{ asset('assets/icons/' . $tech['icon']) }}" alt="{{ $tech['name'] }}"
                        class="w-8 h-8 grayscale group-hover:grayscale-0 transition-all duration-500" />
                    <span class="text-on-surface font-medium">{{ $tech['name'] }}</span>
                </div>
            @endforeach
        </div>
        <div class="flex flex-none items-center justify-around gap-8 animate-infinite-scroll" aria-hidden="true">
            @foreach (array_merge($techs, $techs) as $tech)
                <div
                    class="flex items-center gap-4 px-6 py-4 rounded-2xl border border-border bg-card hover:border-primary/40 transition-colors group">
                    <img src="{{ asset('assets/icons/' . $tech['icon']) }}" alt="{{ $tech['name'] }}"
                        class="w-8 h-8 grayscale group-hover:grayscale-0 transition-all duration-500" />
                    <span class="text-on-surface font-medium">{{ $tech['name'] }}</span>
                </div>
            @endforeach
        </div>
    </div>
</section>
