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
    <section class="relative py-24 overflow-hidden border-b border-outline-variant/20">
        <div
            class="absolute -top-24 -right-24 w-72 h-72 bg-gradient-to-br from-secondary-400/20 to-primary-500/30 rounded-full blur-3xl">
        </div>
        <div
            class="hidden sm:block absolute -bottom-24 -left-24 w-96 h-96 bg-gradient-to-br from-primary-400/10 to-secondary-500/20 rounded-full blur-3xl">
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-4xl mx-auto">
                <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 gradient-primary rounded-full text-white">
                    <x-icons.users class="w-4 h-4" />
                    <span class="text-sm font-medium">About Our Team</span>
                </div>
                <h1 class="text-5xl lg:text-7xl font-bold leading-tight mb-6">
                    <span class="text-white">Meet the</span><br>
                    <span class="text-gradient">Creative Minds</span>
                </h1>
                <p class="text-xl text-on-surface/60 leading-relaxed mb-8 max-w-3xl mx-auto">We're a passionate team of
                    developers, designers, and digital strategists dedicated to creating exceptional web experiences
                    that drive business growth.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
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
            </div>
        </div>
    </section>

    {{-- Stats Section --}}
    @include('home.sections.stats')

    {{-- About Section --}}
    <section class="py-24 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-20 items-center">
                {{-- Left Side: Mission Content --}}
                <div class="space-y-10" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                    <div class="space-y-6">
                        <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 gradient-primary rounded-full text-white">
                            <x-icons.target class="w-4 h-4" />
                            <span class="text-sm font-medium">Our Mission</span>
                        </div>

                        <h2 class="text-4xl lg:text-6xl font-black text-white leading-tight tracking-tight">
                            Empowering Digital Success
                        </h2>

                        <div class="space-y-6">
                            <p class="text-lg text-on-surface/70 leading-relaxed">
                                To empower businesses with cutting-edge web solutions that not only look stunning but also
                                drive measurable results. We believe in the power of great design and robust development.
                            </p>
                            <p class="text-on-surface/50 leading-relaxed italic border-l-2 border-primary/30 pl-6">
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
                                <span class="text-sm font-medium text-on-surface/60">{{ $feature }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- Right Side: Floating Vision Card --}}
                <div class="relative" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
                    <div class="relative bg-white rounded-3xl shadow-2xl p-8 border">
                        <div class="text-center space-y-6">
                            <div class="w-20 h-20 bg-primary-500 rounded-2xl mx-auto flex items-center justify-center">
                                <x-icons.target class="w-10 h-10 text-white" />
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900">Our Vision</h3>
                            <p class="text-slate-600">To be the leading digital partner for businesses worldwide,
                                creating innovative solutions that drive growth and success.
                            </p>
                            <div class="grid grid-cols-2 gap-4 pt-4">
                                <div
                                    class="bg-gradient-to-br from-secondary-50 to-primary-50 rounded-lg p-4 border border-secondary-200">
                                    <div class="text-2xl font-bold text-secondary-600">
                                        {{ config('staticdata.experience_years') }}+</div>
                                    <div class="text-sm text-secondary-700">Years Experience</div>
                                </div>
                                <div
                                    class="bg-gradient-to-br from-primary-50 to-secondary-50 rounded-lg p-4 border border-primary-200">
                                    <div class="text-2xl font-bold text-primary-600">{{ config('staticdata.clients') }}+
                                    </div>
                                    <div class="text-sm text-primary-700">Happy Clients</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="absolute -top-4 -right-4 w-20 h-20 bg-gradient-to-br from-secondary-400 to-primary-500 rounded-2xl opacity-80 blur-sm">
                    </div>
                    <div
                        class="absolute -bottom-4 -left-4 w-16 h-16 bg-gradient-to-br from-primary-400 to-secondary-500 rounded-2xl opacity-60 blur-sm">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Our Values Section --}}
    <section class="py-24 bg-surface-container relative">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            {{-- Header: Minimal & Tight --}}
            <div class="text-center mb-20" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 gradient-primary rounded-full text-white">
                    <span class="text-sm font-medium">Our Values</span>
                </div>
                <h2 class="text-4xl lg:text-6xl font-black text-white mb-6 tracking-tight">
                    What Drives Our Work
                </h2>
                <p class="text-lg text-on-surface/60 max-w-2xl mx-auto leading-relaxed">
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
                        class="group relative p-8 rounded-2xl bg-surface-container-high border border-outline-variant/20 hover:border-primary/40 transition-all duration-500 overflow-hidden">

                        <div class="relative z-10">
                            <div
                                class="w-14 h-14 rounded-xl bg-surface-container border border-outline-variant/50 flex items-center justify-center mb-6 group-hover:bg-primary group-hover:border-primary transition-all duration-500 shadow-inner">
                                @php $iconName = 'icons.' . $value['icon']; @endphp
                                <x-dynamic-component :component="$iconName"
                                    class="w-6 h-6 text-primary group-hover:text-surface transition-colors" />
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
                            class="absolute bottom-0 right-0 w-24 h-24 bg-primary/10 blur-[40px] opacity-0 group-hover:opacity-100 transition-opacity">
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="py-26 relative overflow-hidden">
        <div
            class="absolute -top-24 -right-24 w-72 h-72 bg-gradient-to-br from-secondary-400/20 to-primary-500/30 rounded-full blur-3xl">
        </div>
        <div
            class="absolute -bottom-24 -left-24 w-96 h-96 bg-gradient-to-br from-primary-400/10 to-secondary-500/20 rounded-full blur-3xl">
        </div>

        <div class="relative max-w-7xl mx-auto px-6 lg:px-8 text-center">
            <div data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 gradient-primary rounded-full text-white">
                    <span class="text-sm font-medium">Get in Touch</span>
                </div>
                <h2 class="text-4xl lg:text-6xl font-black text-white mb-8">
                    Ready to Work Together?
                </h2>

                <p class="text-xl text-on-surface/60 mb-12 max-w-2xl mx-auto leading-relaxed">
                    Let's discuss how we can help bring your digital vision to life.
                </p>
            </div>

            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">

                <a href="{{ route('contact') }}" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
                    <x-form.primary-button type="button" class="px-7 py-3 rounded-2xl">
                        <span>Get Free Consultation</span>
                        <x-icons.go class="w-4 h-4" />
                    </x-form.primary-button>
                </a>

                <a href="{{ config('staticdata.whatsapp_url') }}"  data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
                    <x-form.secondary-button type="button" class="px-7 py-3 rounded-2xl">
                        <x-icons.whatsapp class="w-5 h-5" />
                        <span>Chat on WhatsApp</span>
                    </x-form.secondary-button>
                </a>
            </div>
        </div>
    </section>
@endsection
