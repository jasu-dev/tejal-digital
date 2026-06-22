<section class="relative -mt-20 pt-20 pb-15 px-2 flex flex-col items-center text-sm bg-cover bg-center bg-no-repeat border-b border-outline-variant/30"
    style="background-image: url('{{ asset('assets/images/hero-gradient-bg.png') }}')">

    <div
        class="flex flex-wrap items-center justify-center p-2 px-4 mt-10 md:mt-28 bg-white/50 backdrop-blur-xl border border-white/20 rounded-2xl">
        <div class="flex">
            <x-icons.party class="w-5 h-5" />
        </div>
        <p class="mx-2 text-foreground">100+ Happy Clients</p>
    </div>

    <h1 class="text-3xl md:text-6xl text-center font-bold max-w-3xl my-5 text-secondary">
        Best Website & Software Development Agency
    </h1>
    <p class="text-foreground md:text-base text-center max-w-xl mt-3">
        We create stunning websites, powerful web applications, and digital solutions that drive real business
        results.
    </p>

    <div class="flex flex-col justify-center sm:flex-row gap-4 mt-5">
        <a href="{{ route('portfolio') }}">
            <x-form.secondary-button type="button" class="px-7 py-3 rounded-2xl">
                <x-icons.play class="w-4 h-4" />
                <span>View Our Work</span>
            </x-form.secondary-button>
        </a>
        <a href="{{ route('contact') }}">
            <x-form.primary-button type="button" class="px-7 py-3 rounded-2xl">
                <span>Start Your Project</span>
                <x-icons.go class="w-4 h-4" />
            </x-form.primary-button>
        </a>
    </div>

    <div class="hidden md:block overflow-hidden w-full relative max-w-5xl mx-auto select-none mt-14">
        <div
            class="absolute left-0 top-0 h-full w-20 z-10 pointer-events-none bg-gradient-to-r from-background to-transparent">
        </div>

        <div class="marquee-inner flex will-change-transform min-w-[200%]">
            <div class="flex py-4 gap-8" id="logo-container">
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
                            class="w-10 h-10" />
                        <span class="text-foreground font-medium">{{ $tech['name'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>

        <div
            class="absolute right-0 top-0 h-full w-20 md:w-40 z-10 pointer-events-none bg-gradient-to-l from-background to-transparent">
        </div>
    </div>
</section>
