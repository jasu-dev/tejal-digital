@extends('layouts.app')
@section('head')
    <!-- About Page -->
    <title>About Us | Tejal Digital - Expert Web Developers</title>
    <meta name="description"
        content="Learn about Tejal Digital’s journey and team. We build scalable web solutions using Laravel, WordPress, and modern tech to power businesses globally.">
    <link rel="canonical" href="https://www.tejaldigital.in/about">
    <meta name="keywords"
        content="About Tejal Digital, Web Developers, Development Company, Laravel Experts, Web Agency, Scalable Web Solutions">
    <!-- Open Graph -->
    <meta property="og:title" content="About Us | Tejal Digital">
    <meta property="og:description"
        content="Meet the team behind Tejal Digital – building high-quality, scalable web solutions for global clients.">
    <meta property="og:url" content="https://tejaldigital.in/about">
    <meta property="og:image" content="{{ asset('assets/images/og-image.png') }}">
    <!-- Twitter Card -->
    <meta name="twitter:title" content="About Tejal Digital | Web Experts">
    <meta name="twitter:description"
        content="Discover the story, vision, and mission behind Tejal Digital’s success in global web development.">
    <meta name="twitter:image" content="{{ asset('assets/images/og-image.png') }}">
@endsection
@section('content')
    {{-- Hero Section --}}
    <section
        class="relative -mt-20 pt-20 pb-20 px-2 flex flex-col items-center text-sm bg-cover bg-center bg-no-repeat border-b border-outline-variant/30"
        style="background-image: url('{{ asset('assets/images/hero-gradient-bg.png') }}')">
        <div
            class="flex flex-wrap items-center justify-center p-2 px-4 mt-10 md:mt-28 bg-white/50 backdrop-blur-xl border border-white/20 rounded-2xl">
            <x-icons.users class="w-4 h-4" />
            <p class="ml-2 text-foreground">About Our Team</p>
        </div>

        <h1 class="text-3xl md:text-6xl text-center font-bold max-w-3xl my-5 text-secondary">
            Meet the Creative Minds
        </h1>
        <p class="text-foreground md:text-base text-center max-w-xl mt-3">
            We're a passionate team of developers, designers, and digital strategists dedicated to creating exceptional web
            experiences that drive business growth.
        </p>

        <div class="flex flex-col justify-center sm:flex-row gap-4 mt-8">
            <a href="{{ route('contact') }}">
                <x-form.primary-button type="button" class="px-7 py-3 rounded-2xl">
                    <span>Start Your Project</span>
                    <x-icons.go class="w-4 h-4" />
                </x-form.primary-button>
            </a>
            <a href="{{ route('portfolio') }}">
                <x-form.secondary-button type="button" class="px-7 py-3 rounded-2xl">
                    <x-icons.play class="w-4 h-4" />
                    <span>View Our Work</span>
                </x-form.secondary-button>
            </a>
        </div>
    </section>
    {{-- Stats Section --}}
    @include('home.sections.stats')
    {{-- About Section --}}
    <section class="py-10 sm:py-14 px-3 overflow-hidden border-b border-outline-variant/30">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-2 sm:gap-15 items-center">
                {{-- Left Side: Mission Content --}}
                <div class="space-y-10" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                    <div class="space-y-6">
                        <div
                            class="inline-flex items-center gap-2 px-4 py-2 mb-6 rounded-full bg-primary/10 border border-primary/30 text-primary-500 backdrop-blur-xl">
                            <span class="text-xs sm:text-sm font-semibold">Our Mission</span>
                        </div>

                        <h2 class="text-3xl lg:text-5xl font-bold mb-5 tracking-tight">
                            Empowering Digital Success
                        </h2>

                        <div class="space-y-6">
                            <p class="text-md sm:text-lg leading-relaxed">
                                To empower businesses with cutting-edge web solutions that not only look stunning but also
                                drive measurable results. We believe in the power of great design and robust development.
                            </p>
                            <p class="text-md sm:text-lg leading-relaxed italic border-l-2 border-primary/30 pl-6">
                                "Every project we undertake is an opportunity to push boundaries and create digital
                                experiences that make a lasting impact."
                            </p>
                        </div>
                    </div>

                    {{-- Feature List: Clean & Minimal --}}
                    <div class="grid sm:grid-cols-2 gap-y-4 gap-x-8">
                        @php
                            $features = [
                                config('staticdata.experience_years') . '+ Years Experience',
                                config('staticdata.projects') . '+ Projects Done',
                                config('staticdata.satisfaction') . '% Satisfaction Rate',
                                '24/7 Expert Support',
                                'Modern Tech Stack',
                                'Transparent Pricing',
                            ];
                        @endphp
                        @foreach ($features as $feature)
                            <div class="flex items-center gap-3 group">
                                <div class="w-5 h-5 flex items-center justify-center">
                                    <x-icons.check class="w-4 h-4 text-primary" />
                                </div>
                                <span class="text-md sm:text-lg font-medium">{{ $feature }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- Right Side: Floating Vision Card --}}
                <div class="relative" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
                    <img src="{{ asset('assets/images/about-banner.svg') }}" loading="lazy" class="w-full" />
                </div>
            </div>
        </div>
    </section>

    {{-- Our Values Section --}}
    <section class="py-10 sm:py-14 px-3 overflow-hidden border-b border-outline-variant/30">
        <div class="max-w-7xl mx-auto">
            {{-- Header: Minimal & Tight --}}
            <div class="text-center mb-10" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 mb-6 rounded-full bg-primary/10 border border-primary/30 text-primary-500 backdrop-blur-xl">
                    <span class="text-xs sm:text-sm font-semibold">Our Values</span>
                </div>
                <h2 class="text-3xl lg:text-5xl font-bold mb-5 tracking-tight">
                    What Drives Our Work
                </h2>
                <p class="text-md sm:text-lg max-w-3xl mx-auto">
                    The core principles that guide every line of code we write.
                </p>
            </div>
            {{-- 4-Column High-Contrast Grid --}}
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                    $values = [
                        [
                            'icon' => 'target',
                            'title' => 'Excellence',
                            'desc' =>
                                'We strive for perfection in every project, ensuring the highest quality standards.',
                        ],
                        [
                            'icon' => 'users',
                            'title' => 'Collaboration',
                            'desc' => 'We work closely with our clients as partners, not just service providers.',
                        ],
                        [
                            'icon' => 'love',
                            'title' => 'Passion',
                            'desc' => 'We love what we do and it shows in the deep attention to detail in our work.',
                        ],
                        [
                            'icon' => 'hot',
                            'title' => 'Innovation',
                            'desc' => 'We stay ahead of trends and use cutting-edge Laravel & Tailwind stacks.',
                        ],
                    ];
                @endphp

                @foreach ($values as $value)
                    <div data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}" data-aos-duration="800"
                        class="group relative p-8 rounded-2xl border border-border bg-card hover:border-primary/40 transition-all duration-500 overflow-hidden">

                        <div class="relative z-10">
                            <div
                                class="w-12 h-12 bg-primary/10 text-primary rounded-full border border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <x-dynamic-component :component="'icons.' . $value['icon']" class="w-5 h-5" />
                            </div>

                            <h3 class="text-xl font-bold text-on-surface mb-3 group-hover:text-primary transition-colors">
                                {{ $value['title'] }}
                            </h3>

                            <p
                                class="text-sm text-on-surface/50 leading-relaxed group-hover:text-on-surface/70 transition-colors">
                                {{ $value['desc'] }}
                            </p>
                        </div>

                        <div
                            class="absolute -top-10 -right-10 w-24 h-24 bg-primary/10 blur-[40px] opacity-0 group-hover:opacity-100 transition-opacity">
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    @include('sections.contact')
@endsection
