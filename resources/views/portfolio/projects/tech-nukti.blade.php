@extends('layouts.app')

@section('head')
    <title>Tech Nukti | High-Performance Custom WordPress Theme</title>
    <meta name="description"
        content="See how we built a blazing-fast, custom WordPress theme for Technukti.com that achieves perfect Lighthouse scores without optimization plugins.">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="keywords"
        content="Tech Nukti, Custom WordPress Development, Fast WP Themes, Core Web Vitals, Lightweight WordPress Design, Technukti Theme">

    <!-- Open Graph -->
    <meta property="og:title" content="Tech Nukti Case Study | Tejal Digital">
    <meta property="og:description"
        content="A deep dive into high-performance WordPress theme development with zero external dependencies.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/images/technukti.png') }}">
@endsection

@section('content')
    {{-- Project Hero --}}
    <section class="relative py-24 overflow-hidden border-b border-outline-variant/20">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-amber-500/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-yellow-500/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
            <nav class="flex mb-8" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-sm text-on-surface/60">
                    <li><a href="{{ route('home') }}" class="hover:text-primary transition-colors">Home</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li><a href="{{ route('portfolio') }}" class="hover:text-primary transition-colors">Portfolio</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li class="text-on-surface font-medium">Tech Nukti</li>
                </ol>
            </nav>

            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right" data-aos-duration="1000">
                    <span class="inline-block px-4 py-1.5 mb-6 text-[10px] font-bold uppercase tracking-widest text-amber-400 bg-amber-500/10 rounded-full border border-amber-500/20">
                        WordPress Development
                    </span>
                    <h1 class="text-4xl lg:text-6xl font-black text-white leading-tight mb-6">
                        Tech Nukti <br>
                        <span class="text-gradient from-amber-400 to-yellow-500">Custom Theme</span>
                    </h1>
                    <p class="text-xl text-on-surface/60 leading-relaxed mb-8">
                        A custom-engineered WordPress theme built from scratch to deliver instant load times and perfect SEO health for a high-traffic tech blog.
                    </p>
                    <div class="flex flex-wrap gap-3 mb-10">
                        @foreach (['WordPress', 'PHP', 'Core Web Vitals', 'JS-Free', 'Semantic HTML'] as $tech)
                            <span class="px-4 py-2 bg-surface-container rounded-xl border border-outline-variant/20 text-sm font-medium text-on-surface/80">
                                {{ $tech }}
                            </span>
                        @endforeach
                    </div>
                </div>
                <div class="relative" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="aspect-video rounded-3xl overflow-hidden border border-outline-variant/30 shadow-2xl">
                        <img src="{{ asset('assets/images/technukti.png') }}" alt="Tech Nukti Theme Preview" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-6 -right-6 bg-surface-container p-6 rounded-2xl border border-outline-variant/20 shadow-xl hidden md:block">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-amber-500/20 flex items-center justify-center">
                                <x-icons.hot class="w-6 h-6 text-amber-400" />
                            </div>
                            <div>
                                <p class="text-xs text-on-surface/60 font-bold uppercase tracking-wider">Performance</p>
                                <p class="text-lg font-black text-white">100/100 PageSpeed</p>
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
                            <span class="w-8 h-1 bg-amber-500 rounded-full"></span>
                            The Challenge
                        </h2>
                        <div class="prose prose-invert max-w-none text-on-surface/70 leading-relaxed space-y-4">
                            <p>
                                The owner of Technukti.com was dissatisfied with off-the-shelf WordPress themes that were bloated with CSS, JavaScript, and unnecessary features. This bloat was hurting their SEO rankings and leading to a poor user experience, especially on mobile devices.
                            </p>
                            <p>
                                The mandate was clear:
                            </p>
                            <ul class="list-disc pl-5 space-y-2">
                                <li>Eliminate the need for caching and speed optimization plugins.</li>
                                <li>Achieve perfect scores in Google Core Web Vitals.</li>
                                <li>Implement a professional, minimal design that keeps the focus on content.</li>
                                <li>Build a custom "Live Search" experience without using heavy libraries.</li>
                            </ul>
                        </div>
                    </div>

                    {{-- The Solution --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-6 flex items-center gap-4">
                            <span class="w-8 h-1 bg-yellow-500 rounded-full"></span>
                            The Solution
                        </h2>
                        <div class="prose prose-invert max-w-none text-on-surface/70 leading-relaxed space-y-4">
                            <p>
                                We decided to bypass all theme frameworks and page builders. Instead, we hand-coded the theme using native WordPress functions and semantic HTML.
                            </p>
                            <p>
                                **Asset Optimization:** We utilized a modular CSS approach where only the styles required for a specific page are loaded. By avoiding third-party JavaScript libraries, we reduced the main-thread work to almost zero.
                            </p>
                            <p>
                                **Custom Live Search:** We built a lightweight AJAX-powered search system using vanilla PHP and JavaScript, providing instant results as users type, similar to premium newspaper themes but with a fraction of the code.
                            </p>
                        </div>
                    </div>

                    {{-- Key Features --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-8">Core Features</h2>
                        <div class="grid md:grid-cols-2 gap-6">
                            @php
                                $features = [
                                    ['title' => 'Zero-JS Architecture', 'desc' => 'Maximum performance by eliminating non-essential scripts from the frontend.'],
                                    ['title' => 'Native WP Loops', 'desc' => 'Optimized database queries using core WordPress functions for lightning-fast content retrieval.'],
                                    ['title' => 'Instant Live Search', 'desc' => 'Custom-built search module that provides real-time results without heavy plugins.'],
                                    ['title' => 'Mobile-First Design', 'desc' => 'Fully fluid layout that adapts perfectly to any screen size with minimal CSS.'],
                                    ['title' => 'Schema Markup', 'desc' => 'Built-in JSON-LD schema for articles and navigation to enhance SEO visibility.'],
                                    ['title' => 'Widget-Ready', 'desc' => 'Custom sidebar and footer widget areas for easy content management.'],
                                ];
                            @endphp
                            @foreach ($features as $f)
                                <div class="p-6 bg-surface-container rounded-2xl border border-outline-variant/10 hover:border-amber-500/30 transition-all group">
                                    <h4 class="text-lg font-bold text-white mb-2 group-hover:text-amber-400 transition-colors">{{ $f['title'] }}</h4>
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
                                <p class="text-[10px] font-bold text-amber-400 uppercase tracking-widest mb-1">Service</p>
                                <p class="text-on-surface/80 font-medium">Custom WordPress Theme</p>
                            </div>
                            <div>
                                <p class="text-[10px] font-bold text-amber-400 uppercase tracking-widest mb-1">Performance Goal</p>
                                <p class="text-on-surface/80 font-medium">100/100 Lighthouse Score</p>
                            </div>
                            <div>
                                <p class="text-[10px] font-bold text-amber-400 uppercase tracking-widest mb-1">Key Tech</p>
                                <p class="text-on-surface/80 font-medium">PHP, HTML5, CSS3, WP REST API</p>
                            </div>
                            <div class="pt-6 border-t border-outline-variant/10">
                                <a href="{{ route('contact') }}">
                                    <x-form.primary-button type="button" class="w-full justify-center py-4 rounded-2xl bg-amber-600 hover:bg-amber-700 border-amber-600">
                                        <span>Custom WP Theme</span>
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
                 <a href="{{ route('portfolio.tech-upkar') }}" class="group bg-surface-container rounded-3xl overflow-hidden border border-outline-variant/20 hover:border-primary/30 transition-all">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('assets/images/techupkar.png') }}" alt="Tech Upkar" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-primary transition-colors">TechUpkar Theme</h3>
                        <p class="text-on-surface/60 text-sm">Another perfect-score WordPress blog theme.</p>
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
