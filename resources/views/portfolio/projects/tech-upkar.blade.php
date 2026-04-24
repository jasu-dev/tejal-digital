@extends('layouts.app')

@section('head')
    <title>TechUpkar Theme | Lightning-Fast WordPress Blog Solution</title>
    <meta name="description"
        content="See how we achieved a 100/100 PageSpeed score for TechUpkar using a custom-coded WordPress theme with zero dependencies on speed optimization plugins.">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="keywords"
        content="TechUpkar, WordPress Theme Development, Fast Blog Theme, PageSpeed Optimization, Core Web Vitals WP, Lightweight WordPress Theme">

    <!-- Open Graph -->
    <meta property="og:title" content="TechUpkar Theme Case Study | Tejal Digital">
    <meta property="og:description"
        content="Achieving perfect performance scores on WordPress with custom hand-coded themes.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/images/techupkar.png') }}">
@endsection

@section('content')
    {{-- Project Hero --}}
    <section class="relative py-24 overflow-hidden border-b border-outline-variant/20">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-lime-500/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-emerald-500/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
            <nav class="flex mb-8" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-sm text-on-surface/60">
                    <li><a href="{{ route('home') }}" class="hover:text-primary transition-colors">Home</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li><a href="{{ route('portfolio') }}" class="hover:text-primary transition-colors">Portfolio</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li class="text-on-surface font-medium">TechUpkar Theme</li>
                </ol>
            </nav>

            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right" data-aos-duration="1000">
                    <span class="inline-block px-4 py-1.5 mb-6 text-[10px] font-bold uppercase tracking-widest text-lime-400 bg-lime-500/10 rounded-full border border-lime-500/20">
                        WP Optimization
                    </span>
                    <h1 class="text-4xl lg:text-6xl font-black text-white leading-tight mb-6">
                        TechUpkar <br>
                        <span class="text-gradient from-lime-400 to-emerald-500">Fast WP Theme</span>
                    </h1>
                    <p class="text-xl text-on-surface/60 leading-relaxed mb-8">
                        A performance-centric WordPress theme designed for high-traffic blogs, prioritizing Core Web Vitals and instant content delivery.
                    </p>
                    <div class="flex flex-wrap gap-3 mb-10">
                        @foreach (['WordPress', 'PHP', 'HTML5', 'CSS3', 'SEO Optimized', 'Speed Focused'] as $tech)
                            <span class="px-4 py-2 bg-surface-container rounded-xl border border-outline-variant/20 text-sm font-medium text-on-surface/80">
                                {{ $tech }}
                            </span>
                        @endforeach
                    </div>
                </div>
                <div class="relative" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="aspect-video rounded-3xl overflow-hidden border border-outline-variant/30 shadow-2xl">
                        <img src="{{ asset('assets/images/techupkar.png') }}" alt="TechUpkar Theme Preview" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-6 -right-6 bg-surface-container p-6 rounded-2xl border border-outline-variant/20 shadow-xl hidden md:block">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-lime-500/20 flex items-center justify-center">
                                <x-icons.dashboard class="w-6 h-6 text-lime-400" />
                            </div>
                            <div>
                                <p class="text-xs text-on-surface/60 font-bold uppercase tracking-wider">Metric</p>
                                <p class="text-lg font-black text-white">0.8s Load Time</p>
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
                            <span class="w-8 h-1 bg-lime-500 rounded-full"></span>
                            The Challenge
                        </h2>
                        <div class="prose prose-invert max-w-none text-on-surface/70 leading-relaxed space-y-4">
                            <p>
                                TechUpkar, a prominent tech blog, was experiencing high bounce rates due to slow page loads on mobile devices. Despite using various caching plugins and CDNs, the core theme architecture was too bloated to pass Google's stringent Core Web Vitals assessment.
                            </p>
                            <p>
                                The objective was to:
                            </p>
                            <ul class="list-disc pl-5 space-y-2">
                                <li>Rebuild the theme from scratch to eliminate bloat.</li>
                                <li>Achieve a Largest Contentful Paint (LCP) of under 1.5 seconds.</li>
                                <li>Ensure 100% responsiveness without using heavy CSS frameworks.</li>
                                <li>Maintain a professional look while removing all non-essential assets.</li>
                            </ul>
                        </div>
                    </div>

                    {{-- The Solution --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-6 flex items-center gap-4">
                            <span class="w-8 h-1 bg-emerald-500 rounded-full"></span>
                            The Solution
                        </h2>
                        <div class="prose prose-invert max-w-none text-on-surface/70 leading-relaxed space-y-4">
                            <p>
                                We followed a "Zero-Waste" development philosophy. This meant every line of code had to serve a purpose. We built the theme using core PHP and WordPress hooks, avoiding the overhead of heavy theme frameworks like Underscores or Genesis.
                            </p>
                            <p>
                                **Critical CSS Pathing:** We manually optimized the CSS delivery by inlining critical styles and lazy-loading the rest. This ensured that the header and main content were visible almost instantly.
                            </p>
                            <p>
                                **Image Optimization:** Instead of relying on plugins, we integrated native WordPress image processing to serve modern WebP formats and proper responsive sizes automatically.
                            </p>
                        </div>
                    </div>

                    {{-- Key Features --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-8">Core Features</h2>
                        <div class="grid md:grid-cols-2 gap-6">
                            @php
                                $features = [
                                    ['title' => 'Lighthouse 100/100', 'desc' => 'Optimized for perfect performance, accessibility, best practices, and SEO scores.'],
                                    ['title' => 'Plugin-Free Speed', 'desc' => 'Fast out of the box without needing WP Rocket or Autoptimize.'],
                                    ['title' => 'Semantic Structure', 'desc' => 'Clean HTML5 markup that search engines love to crawl and index.'],
                                    ['title' => 'Custom Live Search', 'desc' => 'Native AJAX search implementation for a premium user experience.'],
                                    ['title' => 'Zero Render Blocking', 'desc' => 'Deferred loading of all non-critical assets to ensure instant visual stability.'],
                                    ['title' => 'Ad-Friendly Layout', 'desc' => "Strategically placed, non-intrusive ad zones that don't hurt performance."],
                                ];
                            @endphp
                            @foreach ($features as $f)
                                <div class="p-6 bg-surface-container rounded-2xl border border-outline-variant/10 hover:border-lime-500/30 transition-all group">
                                    <h4 class="text-lg font-bold text-white mb-2 group-hover:text-lime-400 transition-colors">{{ $f['title'] }}</h4>
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
                                <p class="text-[10px] font-bold text-lime-400 uppercase tracking-widest mb-1">Service Provided</p>
                                <p class="text-on-surface/80 font-medium">Performance WP Development</p>
                            </div>
                            <div>
                                <p class="text-[10px] font-bold text-lime-400 uppercase tracking-widest mb-1">LCP Score</p>
                                <p class="text-on-surface/80 font-medium">0.9 Seconds</p>
                            </div>
                            <div>
                                <p class="text-[10px] font-bold text-lime-400 uppercase tracking-widest mb-1">Stack</p>
                                <p class="text-on-surface/80 font-medium">PHP, HTML5, Vanilla JS, CSS3</p>
                            </div>
                            <div class="pt-6 border-t border-outline-variant/10">
                                <a href="{{ route('contact') }}">
                                    <x-form.primary-button type="button" class="w-full justify-center py-4 rounded-2xl bg-lime-600 hover:bg-lime-700 border-lime-600">
                                        <span>Get Fast Website</span>
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
                 <a href="{{ route('portfolio.tech-nukti') }}" class="group bg-surface-container rounded-3xl overflow-hidden border border-outline-variant/20 hover:border-primary/30 transition-all">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('assets/images/technukti.png') }}" alt="Tech Nukti" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-primary transition-colors">Tech Nukti – Custom WP Theme</h3>
                        <p class="text-on-surface/60 text-sm">Blazing-fast WordPress theme with perfect PageSpeed scores.</p>
                    </div>
                </a>
                <a href="{{ route('portfolio.gmj-child-pro') }}" class="group bg-surface-container rounded-3xl overflow-hidden border border-outline-variant/20 hover:border-primary/30 transition-all">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('assets/images/gmjchildpro.png') }}" alt="GMJ Child Pro" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-primary transition-colors">GMJ Child Pro Theme</h3>
                        <p class="text-on-surface/60 text-sm">Lightweight Hindi blog theme for Genesis Framework.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- Footer Contact --}}
    @include('sections.contact')
@endsection
