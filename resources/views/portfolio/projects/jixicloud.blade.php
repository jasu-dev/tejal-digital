@extends('layouts.app')

@section('head')
    <title>Jixicloud | Modular CMS & Hosting Portal with API Integrations</title>
    <meta name="description"
        content="Learn how we built Jixicloud, a scalable Laravel-based CMS with real-time domain rate integrations and advanced admin controls.">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="keywords"
        content="Jixicloud, Laravel CMS, Hosting Portal Development, Domain API Laravel, Custom Website Architecture, Modular Web Design">

    <!-- Open Graph -->
    <meta property="og:title" content="Jixicloud Case Study | Tejal Digital">
    <meta property="og:description"
        content="Scaling a hosting portal with Laravel and real-time external API integrations.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/images/jixicloud.png') }}">
@endsection

@section('content')
    {{-- Project Hero --}}
    <section class="relative py-24 overflow-hidden border-b border-outline-variant/20">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-sky-500/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
            <nav class="flex mb-8" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-sm text-on-surface/60">
                    <li><a href="{{ route('home') }}" class="hover:text-primary transition-colors">Home</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li><a href="{{ route('portfolio') }}" class="hover:text-primary transition-colors">Portfolio</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li class="text-on-surface font-medium">Jixicloud</li>
                </ol>
            </nav>

            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right" data-aos-duration="1000">
                    <span class="inline-block px-4 py-1.5 mb-6 text-[10px] font-bold uppercase tracking-widest text-sky-400 bg-sky-500/10 rounded-full border border-sky-500/20">
                        Custom Web Application
                    </span>
                    <h1 class="text-4xl lg:text-6xl font-black text-white leading-tight mb-6">
                        Jixicloud <br>
                        <span class="text-gradient from-sky-400 to-blue-500">Hosting Portal</span>
                    </h1>
                    <p class="text-xl text-on-surface/60 leading-relaxed mb-8">
                        A sophisticated hosting platform featuring a modular CMS and real-time domain pricing, built for high performance and administrative ease.
                    </p>
                    <div class="flex flex-wrap gap-3 mb-10">
                        @foreach (['Laravel', 'API Integration', 'Modular CMS', 'Bootstrap 5', 'MySQL'] as $tech)
                            <span class="px-4 py-2 bg-surface-container rounded-xl border border-outline-variant/20 text-sm font-medium text-on-surface/80">
                                {{ $tech }}
                            </span>
                        @endforeach
                    </div>
                </div>
                <div class="relative" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="aspect-video rounded-3xl overflow-hidden border border-outline-variant/30 shadow-2xl">
                        <img src="{{ asset('assets/images/jixicloud.png') }}" alt="Jixicloud Interface" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-6 -right-6 bg-surface-container p-6 rounded-2xl border border-outline-variant/20 shadow-xl hidden md:block">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-sky-500/20 flex items-center justify-center">
                                <x-icons.window class="w-6 h-6 text-sky-400" />
                            </div>
                            <div>
                                <p class="text-xs text-on-surface/60 font-bold uppercase tracking-wider">Feature</p>
                                <p class="text-lg font-black text-white">Live Domain Rates</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Project Details Section --}}
    <section class="py-24 bg-surface">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-3 gap-12">
                {{-- Left Side: Main Content --}}
                <div class="lg:col-span-2 space-y-16">
                    {{-- The Challenge --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-6 flex items-center gap-4">
                            <span class="w-8 h-1 bg-sky-500 rounded-full"></span>
                            The Challenge
                        </h2>
                        <div class="prose prose-invert max-w-none text-on-surface/70 leading-relaxed space-y-4">
                            <p>
                                The hosting industry is highly competitive, requiring sites to be not just visually appealing but also data-rich and always up-to-date. Jixicloud needed a system where they could manage complex hosting plans and display real-time domain pricing without manual intervention.
                            </p>
                            <p>
                                Key requirements included:
                            </p>
                            <ul class="list-disc pl-5 space-y-2">
                                <li>A custom CMS that allows managing multiple service tiers easily.</li>
                                <li>Integration with domain registrars via APIs to fetch live pricing and availability.</li>
                                <li>High-performance front-end that loads instantly on mobile.</li>
                                <li>Secure admin area for managing dynamic page content and pricing tables.</li>
                            </ul>
                        </div>
                    </div>

                    {{-- The Solution --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-6 flex items-center gap-4">
                            <span class="w-8 h-1 bg-blue-500 rounded-full"></span>
                            The Solution
                        </h2>
                        <div class="prose prose-invert max-w-none text-on-surface/70 leading-relaxed space-y-4">
                            <p>
                                We developed a custom-tailored Laravel application that serves as both the front-facing portal and the administrative engine. 
                            </p>
                            <p>
                                **API-Driven Domain Search:** We integrated 3rd-party domain registrar APIs to provide users with a live domain search experience. The system fetches the latest rates and suggests available alternatives in real-time.
                            </p>
                            <p>
                                **Modular CMS Design:** Instead of a static page approach, we built a modular component system within the CMS. Admins can drag and drop sections to build new service pages, ensuring consistent design across the platform.
                            </p>
                        </div>
                    </div>

                    {{-- Key Features --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-8">Core Features</h2>
                        <div class="grid md:grid-cols-2 gap-6">
                            @php
                                $features = [
                                    ['title' => 'Live Domain Lookup', 'desc' => 'Real-time domain availability and pricing via API integration.'],
                                    ['title' => 'Dynamic Plan Builder', 'desc' => 'Easily create and update hosting plan tables from the admin panel.'],
                                    ['title' => 'SEO Management', 'desc' => 'Integrated tools for managing meta titles, descriptions, and sitemaps.'],
                                    ['title' => 'Responsive Architecture', 'desc' => 'Fluid grid system that ensures a premium experience on smartphones and tablets.'],
                                    ['title' => 'Secure Admin Panel', 'desc' => 'Robust dashboard with role-based permissions for content editors.'],
                                    ['title' => 'API Caching', 'desc' => 'Smart caching of domain rates to reduce API calls and improve load times.'],
                                ];
                            @endphp
                            @foreach ($features as $f)
                                <div class="p-6 bg-surface-container rounded-2xl border border-outline-variant/10 hover:border-sky-500/30 transition-all group">
                                    <h4 class="text-lg font-bold text-white mb-2 group-hover:text-sky-400 transition-colors">{{ $f['title'] }}</h4>
                                    <p class="text-on-surface/60 text-sm leading-relaxed">{{ $f['desc'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Right Side: Meta Info & CTA --}}
                <div class="space-y-8">
                    <div class="p-8 bg-surface-container rounded-3xl border border-outline-variant/20 sticky top-24">
                        <h3 class="text-xl font-bold text-white mb-6">Project Info</h3>
                        <div class="space-y-6">
                            <div>
                                <p class="text-[10px] font-bold text-sky-400 uppercase tracking-widest mb-1">Service Type</p>
                                <p class="text-on-surface/80 font-medium">Custom Web Portal Development</p>
                            </div>
                            <div>
                                <p class="text-[10px] font-bold text-sky-400 uppercase tracking-widest mb-1">Project Scale</p>
                                <p class="text-on-surface/80 font-medium">Medium-Large Scale Portal</p>
                            </div>
                            <div>
                                <p class="text-[10px] font-bold text-sky-400 uppercase tracking-widest mb-1">Core Tech</p>
                                <p class="text-on-surface/80 font-medium">Laravel, PHP 8, MySQL, REST APIs</p>
                            </div>
                            <div class="pt-6 border-t border-outline-variant/10">
                                <a href="{{ route('contact') }}">
                                    <x-form.primary-button type="button" class="w-full justify-center py-4 rounded-2xl bg-sky-600 hover:bg-sky-700 border-sky-600">
                                        <span>Build Custom Portal</span>
                                        <x-icons.go class="w-4 h-4" />
                                    </x-form.primary-button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- More Projects --}}
    <section class="py-24 border-t border-outline-variant/20">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">Other Case Studies</h2>
                    <p class="text-on-surface/60">Explore more of our recent work and digital transformations.</p>
                </div>
                <a href="{{ route('portfolio') }}" class="text-primary font-bold hover:underline">View All Projects</a>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                 <a href="{{ route('portfolio.gujjutak-news') }}" class="group bg-surface-container rounded-3xl overflow-hidden border border-outline-variant/20 hover:border-primary/30 transition-all">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('assets/images/gujjutak.png') }}" alt="Gujjutak News" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-primary transition-colors">Gujjutak News Portal</h3>
                        <p class="text-on-surface/60 text-sm">Regional news CMS with multilingual support.</p>
                    </div>
                </a>
                <a href="{{ route('portfolio.attendance-manager') }}" class="group bg-surface-container rounded-3xl overflow-hidden border border-outline-variant/20 hover:border-primary/30 transition-all">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('assets/images/attendance.png') }}" alt="Attendance Manager" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-primary transition-colors">Attendance Manager System</h3>
                        <p class="text-on-surface/60 text-sm">Geo-fenced attendance tracking with selfie verification.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- Footer Contact --}}
    @include('sections.contact')
@endsection
