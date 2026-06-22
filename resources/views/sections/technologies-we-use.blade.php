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


<section class="py-10 sm:py-14 px-3 overflow-hidden border-b border-outline-variant/30 {{ $class ?? '' }}">
    <div class="max-w-7xl mx-auto text-center mb-10" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
        <div
            class="inline-flex items-center gap-2 px-4 py-2 mb-6 rounded-full bg-primary/10 border border-primary/30 text-primary-500 backdrop-blur-xl">
            <span class="text-xs sm:text-sm font-semibold">Technologies</span>
        </div>
        <h2 class="text-3xl lg:text-5xl font-bold mb-5 tracking-tight">
            We Built With Modern Tech
        </h2>
        <p class="text-md sm:text-lg max-w-3xl mx-auto">
            A high-performance stack curated for speed, security, and scalability.
        </p>
    </div>
    <div class="max-w-7xl mx-auto mask-edges overflow-hidden select-none">
        <div class="w-full relative">
            <div class="marquee-inner flex will-change-transform min-w-[200%]">
                <div class="flex gap-8" id="logo-container">
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
                    @foreach (array_merge($techs, $techs) as $tech)
                        <div class="flex items-center gap-4 px-6 py-4 rounded-2xl">
                            <img src="{{ asset('assets/icons/' . $tech['icon']) }}" alt="{{ $tech['name'] }}"
                                class="w-8 h-8" />
                            <span class="font-medium">{{ $tech['name'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            <div
                class="absolute right-0 top-0 h-full w-20 md:w-40 z-10 pointer-events-none bg-gradient-to-l from-background to-transparent">
            </div>
        </div>
    </div>
</section>
