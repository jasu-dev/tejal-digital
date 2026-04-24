@extends('layouts.app')

@section('head')
    <title>WordPress Theme Development | Custom, Fast & SEO-Friendly Themes</title>
    <meta name="description"
        content="Get a pixel-perfect, high-performance custom WordPress theme. We build lightweight, SEO-optimized themes that pass Core Web Vitals and represent your brand perfectly.">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="keywords"
        content="Custom WordPress Theme, WordPress Development Services, Fast WP Themes, Genesis Child Theme, Gutenberg Block Development, WordPress Expert">

    <!-- Open Graph -->
    <meta property="og:title" content="WordPress Theme Development | Tejal Digital">
    <meta property="og:description"
        content="Stop using bloated templates. We build custom, blazing-fast WordPress themes designed for performance and conversions.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/images/og-image.png') }}">
@endsection

@section('content')
    {{-- Service Hero --}}
    <section class="relative py-24 overflow-hidden border-b border-outline-variant/20">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-blue-400/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-blue-600/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
            <nav class="flex mb-8" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-sm text-on-surface/60">
                    <li><a href="{{ route('home') }}" class="hover:text-primary transition-colors">Home</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li><a href="{{ route('services') }}" class="hover:text-primary transition-colors">Services</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li class="text-on-surface font-medium">WordPress Development</li>
                </ol>
            </nav>

            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right" data-aos-duration="1000">
                    <span class="inline-block px-4 py-1.5 mb-6 text-[10px] font-bold uppercase tracking-widest text-blue-400 bg-blue-500/10 rounded-full border border-blue-500/20">
                        Performance First
                    </span>
                    <h1 class="text-4xl lg:text-6xl font-black text-white leading-tight mb-6">
                        WordPress Theme <br>
                        <span class="text-gradient from-blue-400 to-blue-600">Development</span>
                    </h1>
                    <p class="text-xl text-on-surface/60 leading-relaxed mb-8">
                        Ditch the bloated multi-purpose themes. We create custom, lightweight WordPress themes that load instantly, rank higher on Google, and offer a unique experience for your users.
                    </p>
                    <div class="flex flex-wrap gap-4">
                         <a href="{{ route('contact') }}">
                            <x-form.primary-button type="button" class="px-8 py-4 rounded-2xl bg-blue-600 hover:bg-blue-700 border-blue-600">
                                <span>Build My Custom Theme</span>
                                <x-icons.go class="w-4 h-4" />
                            </x-form.primary-button>
                        </a>
                    </div>
                </div>
                <div class="relative" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="aspect-square max-w-md mx-auto bg-surface-container rounded-[40px] border border-outline-variant/20 p-12 flex items-center justify-center relative overflow-hidden group">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <x-icons.wordpress class="w-32 h-32 text-blue-400 relative z-10" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Service Details Section --}}
    <section class="py-24 bg-surface">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-3 gap-12">
                {{-- Left Side: Main Content --}}
                <div class="lg:col-span-2 space-y-16">
                    {{-- The Problem with Pre-made Themes --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-6 flex items-center gap-4">
                            <span class="w-8 h-1 bg-blue-500 rounded-full"></span>
                            Performance-Driven WordPress
                        </h2>
                        <div class="prose prose-invert max-w-none text-on-surface/70 leading-relaxed space-y-4">
                            <p>
                                Most off-the-shelf WordPress themes are packed with features you don't need, which adds unnecessary code and slows down your site. In the era of Core Web Vitals, speed is a ranking factor. We build themes that are "born fast."
                            </p>
                            <p>
                                Our custom WordPress development focuses on clean code, semantic HTML, and minimal external dependencies. The result is a theme that not only looks stunning but also achieves 90+ scores on PageSpeed Insights and provides a flawless mobile experience.
                            </p>
                        </div>
                    </div>

                    {{-- Features of our Themes --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-8">What Sets Us Apart</h2>
                        <div class="grid md:grid-cols-2 gap-6">
                            @php
                                $features = [
                                    ['title' => 'Custom Block Development', 'desc' => 'Native Gutenberg blocks that allow you to edit content with a real-time preview.'],
                                    ['title' => 'Zero Bloat Architecture', 'desc' => 'We only include the CSS and JS necessary for your site to function.'],
                                    ['title' => 'Advanced Custom Fields', 'desc' => 'Tailored editing experience with custom input fields for complex content types.'],
                                    ['title' => 'SEO Best Practices', 'desc' => 'Proper heading hierarchy, schema markup, and metadata controls built-in.'],
                                    ['title' => 'Genesis Framework Expertise', 'desc' => 'Building high-performance child themes on the industry-leading Genesis engine.'],
                                    ['title' => 'Mobile-First Design', 'desc' => 'A fluid, responsive layout that looks and works perfectly on any device size.'],
                                ];
                            @endphp
                            @foreach ($features as $f)
                                <div class="p-6 bg-surface-container rounded-2xl border border-outline-variant/10 hover:border-blue-500/30 transition-all group">
                                    <h4 class="text-lg font-bold text-white mb-2 group-hover:text-blue-400 transition-colors">{{ $f['title'] }}</h4>
                                    <p class="text-on-surface/60 text-sm leading-relaxed">{{ $f['desc'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Technical Approach --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-6">Our Tech Standards</h2>
                        <div class="prose prose-invert max-w-none text-on-surface/70 leading-relaxed">
                            <p>
                                Every WordPress theme we build follows a strict quality checklist:
                            </p>
                            <ul class="list-disc pl-5 space-y-2">
                                <li><strong>Semantic HTML5:</strong> For better accessibility and SEO indexing.</li>
                                <li><strong>Modern CSS:</strong> Utilizing CSS Grid and Flexbox for lightweight layouts.</li>
                                <li><strong>Lazy Loading:</strong> Optimized image and video delivery out of the box.</li>
                                <li><strong>Asset Minification:</strong> Reducing the number of requests and file sizes.</li>
                                <li><strong>Security Hardening:</strong> Implementing best practices to protect your WP dashboard.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Right Side: Meta Info & CTA --}}
                <div class="space-y-8">
                    <div class="p-8 bg-surface-container rounded-3xl border border-outline-variant/20 sticky top-24">
                        <h3 class="text-xl font-bold text-white mb-6">Service Benefits</h3>
                        <ul class="space-y-4 mb-8">
                            <li class="flex gap-3 text-on-surface/70 text-sm">
                                <x-icons.check class="w-5 h-5 text-blue-400 shrink-0" />
                                100/100 PageSpeed Potential
                            </li>
                            <li class="flex gap-3 text-on-surface/70 text-sm">
                                <x-icons.check class="w-5 h-5 text-blue-400 shrink-0" />
                                No Premium Theme Renewals
                            </li>
                            <li class="flex gap-3 text-on-surface/70 text-sm">
                                <x-icons.check class="w-5 h-5 text-blue-400 shrink-0" />
                                Unique Brand Identity
                            </li>
                            <li class="flex gap-3 text-on-surface/70 text-sm">
                                <x-icons.check class="w-5 h-5 text-blue-400 shrink-0" />
                                Easy Content Management
                            </li>
                        </ul>
                        <div class="pt-6 border-t border-outline-variant/10">
                             <a href="{{ route('contact') }}">
                                <x-form.primary-button type="button" class="w-full justify-center py-4 rounded-2xl bg-blue-600 hover:bg-blue-700 border-blue-600">
                                    <span>Get Free Consultation</span>
                                    <x-icons.go class="w-4 h-4" />
                                </x-form.primary-button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Related Projects --}}
    <section class="py-24 border-t border-outline-variant/20 bg-surface-container/30">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">WordPress Showcase</h2>
                    <p class="text-on-surface/60">Blazing fast themes we've built for our clients.</p>
                </div>
                <a href="{{ route('portfolio') }}" class="text-primary font-bold hover:underline">View All Projects</a>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                 <a href="{{ route('portfolio.tech-nukti') }}" class="group bg-surface-container rounded-3xl overflow-hidden border border-outline-variant/20 hover:border-primary/30 transition-all">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('assets/images/technukti.png') }}" alt="Tech Nukti" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-primary transition-colors">Tech Nukti – Custom Theme</h3>
                        <p class="text-on-surface/60 text-sm">100/100 PageSpeed scores with zero caching plugins.</p>
                    </div>
                </a>
                <a href="{{ route('portfolio.tech-upkar') }}" class="group bg-surface-container rounded-3xl overflow-hidden border border-outline-variant/20 hover:border-primary/30 transition-all">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('assets/images/techupkar.png') }}" alt="Tech Upkar" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-primary transition-colors">TechUpkar Theme</h3>
                        <p class="text-on-surface/60 text-sm">High-performance Genesis child theme for content sites.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- Footer Contact --}}
    @include('sections.contact')
@endsection
