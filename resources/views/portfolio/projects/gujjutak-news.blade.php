@extends('layouts.app')

@section('head')
    <title>Gujjutak News | Scalable Regional News CMS & Portal</title>
    <meta name="description"
        content="Discover how we built Gujjutak News, a high-traffic regional news platform with advanced SEO tools, ad management, and a lightning-fast Laravel backend.">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="keywords"
        content="Gujjutak News, News CMS Laravel, Regional News Portal, News Website Development, Laravel News Platform, Gujarati News Site">

    <!-- Open Graph -->
    <meta property="og:title" content="Gujjutak News Case Study | Tejal Digital">
    <meta property="og:description"
        content="A deep dive into building a high-performance regional news portal using Laravel and MySQL.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/images/gujjutak.png') }}">
@endsection

@section('content')
    {{-- Project Hero --}}
    <section class="relative py-24 overflow-hidden border-b border-outline-variant/20">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-green-500/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-lime-500/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
            <nav class="flex mb-8" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-sm text-on-surface/60">
                    <li><a href="{{ route('home') }}" class="hover:text-primary transition-colors">Home</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li><a href="{{ route('portfolio') }}" class="hover:text-primary transition-colors">Portfolio</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li class="text-on-surface font-medium">Gujjutak News Portal</li>
                </ol>
            </nav>

            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right" data-aos-duration="1000">
                    <span class="inline-block px-4 py-1.5 mb-6 text-[10px] font-bold uppercase tracking-widest text-green-400 bg-green-500/10 rounded-full border border-green-500/20">
                        Media & Publishing
                    </span>
                    <h1 class="text-4xl lg:text-6xl font-black text-white leading-tight mb-6">
                        Gujjutak <br>
                        <span class="text-gradient from-green-400 to-lime-500">News Portal</span>
                    </h1>
                    <p class="text-xl text-on-surface/60 leading-relaxed mb-8">
                        A robust regional news platform engineered for high-volume content publishing and rapid consumption, featuring advanced SEO and ad-monetization tools.
                    </p>
                    <div class="flex flex-wrap gap-3 mb-10">
                        @foreach (['Laravel', 'MySQL', 'SEO Engine', 'Ad Management', 'Multilingual Support'] as $tech)
                            <span class="px-4 py-2 bg-surface-container rounded-xl border border-outline-variant/20 text-sm font-medium text-on-surface/80">
                                {{ $tech }}
                            </span>
                        @endforeach
                    </div>
                </div>
                <div class="relative" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="aspect-video rounded-3xl overflow-hidden border border-outline-variant/30 shadow-2xl">
                        <img src="{{ asset('assets/images/gujjutak.png') }}" alt="Gujjutak News Interface" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-6 -right-6 bg-surface-container p-6 rounded-2xl border border-outline-variant/20 shadow-xl hidden md:block">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-green-500/20 flex items-center justify-center">
                                <x-icons.dashboard class="w-6 h-6 text-green-400" />
                            </div>
                            <div>
                                <p class="text-xs text-on-surface/60 font-bold uppercase tracking-wider">Traffic</p>
                                <p class="text-lg font-black text-white">100k+ Monthly Reads</p>
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
                            <span class="w-8 h-1 bg-green-500 rounded-full"></span>
                            The Challenge
                        </h2>
                        <div class="prose prose-invert max-w-none text-on-surface/70 leading-relaxed space-y-4">
                            <p>
                                Gujjutak.com required a scalable platform that could handle thousands of daily readers while providing news editors with an intuitive, fast-acting CMS. The primary challenge was managing high database concurrency during breaking news events and optimizing the site for search engines in a regional language (Gujarati).
                            </p>
                            <p>
                                Project requirements:
                            </p>
                            <ul class="list-disc pl-5 space-y-2">
                                <li>A custom CMS optimized for rapid news entry and categorization.</li>
                                <li>Integrated SEO suite to manage slugs, meta tags, and automated sitemaps.</li>
                                <li>Flexible ad-management system for various banner positions and Google AdSense.</li>
                                <li>Zero-latency content delivery across all devices.</li>
                            </ul>
                        </div>
                    </div>

                    {{-- The Solution --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-6 flex items-center gap-4">
                            <span class="w-8 h-1 bg-lime-500 rounded-full"></span>
                            The Solution
                        </h2>
                        <div class="prose prose-invert max-w-none text-on-surface/70 leading-relaxed space-y-4">
                            <p>
                                We leveraged Laravel's caching mechanisms and optimized MySQL queries to ensure the site remains responsive even under heavy traffic. The CMS was built using a custom-tailored admin panel that prioritizes speed and ease of use for the editorial team.
                            </p>
                            <p>
                                **SEO Architecture:** We implemented deep SEO controls, allowing editors to define custom meta descriptions and social media preview images for every article. The system also generates real-time XML sitemaps for Google News indexing.
                            </p>
                            <p>
                                **Monetization Tools:** A centralized ad manager allows admins to inject advertisement code into specific zones (Header, Sidebar, In-Content) without touching any code, providing the client with full control over their revenue streams.
                            </p>
                        </div>
                    </div>

                    {{-- Key Features --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-8">Core Features</h2>
                        <div class="grid md:grid-cols-2 gap-6">
                            @php
                                $features = [
                                    ['title' => 'Article Management', 'desc' => 'Rich-text editor with support for media embeds, galleries, and custom tags.'],
                                    ['title' => 'Advanced SEO Tools', 'desc' => 'In-dashboard optimization for better visibility in Google News and Search.'],
                                    ['title' => 'Ad Management Zone', 'desc' => 'Manage all banner and script-based advertisements from a single interface.'],
                                    ['title' => 'Responsive Reader UI', 'desc' => 'A clean, distraction-free reading experience optimized for mobile users.'],
                                    ['title' => 'Real-time Analytics', 'desc' => 'Integration with Google Analytics and internal tracking for article popularity.'],
                                    ['title' => 'Sitemap Control', 'desc' => 'Dynamic XML generation tailored for standard and news-specific search engines.'],
                                ];
                            @endphp
                            @foreach ($features as $f)
                                <div class="p-6 bg-surface-container rounded-2xl border border-outline-variant/10 hover:border-green-500/30 transition-all group">
                                    <h4 class="text-lg font-bold text-white mb-2 group-hover:text-green-400 transition-colors">{{ $f['title'] }}</h4>
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
                                <p class="text-[10px] font-bold text-green-400 uppercase tracking-widest mb-1">Service Type</p>
                                <p class="text-on-surface/80 font-medium">News Portal / CMS Development</p>
                            </div>
                            <div>
                                <p class="text-[10px] font-bold text-green-400 uppercase tracking-widest mb-1">Scale</p>
                                <p class="text-on-surface/80 font-medium">10k+ Articles Published</p>
                            </div>
                            <div>
                                <p class="text-[10px] font-bold text-green-400 uppercase tracking-widest mb-1">Core Tech</p>
                                <p class="text-on-surface/80 font-medium">Laravel, PHP, MySQL, jQuery</p>
                            </div>
                            <div class="pt-6 border-t border-outline-variant/10">
                                <a href="{{ route('contact') }}">
                                    <x-form.primary-button type="button" class="w-full justify-center py-4 rounded-2xl bg-green-600 hover:bg-green-700 border-green-600">
                                        <span>Build News Portal</span>
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
                 <a href="{{ route('portfolio.jixicloud') }}" class="group bg-surface-container rounded-3xl overflow-hidden border border-outline-variant/20 hover:border-primary/30 transition-all">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('assets/images/jixicloud.png') }}" alt="Jixicloud" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-primary transition-colors">Jixicloud Hosting Portal</h3>
                        <p class="text-on-surface/60 text-sm">Modular CMS with real-time domain API integration.</p>
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
