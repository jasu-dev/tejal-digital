@extends('layouts.app')

@section('head')
    <title>TechUpkar Theme | Premium Speed-Optimized WordPress Portal</title>
    <meta name="description"
        content="Discover how Tejal Digital built TechUpkar, a custom WordPress theme delivering 100/100 Lighthouse performance, local font preloads, and clean ad layouts.">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="keywords"
        content="TechUpkar, custom WordPress theme, Genesis child theme, high speed blog layouts, local fonts preloading, AdSense friendly WP, Core Web Vitals optimization">

    <!-- Open Graph -->
    <meta property="og:title" content="TechUpkar Blog Theme Case Study | Tejal Digital">
    <meta property="og:description"
        content="Achieving a perfect 100/100 PageSpeed mark for TechUpkar using lightweight Genesis hooks overrides.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/images/techupkar.png') }}">

    <!-- Twitter Card -->
    <meta name="twitter:title" content="TechUpkar Theme | Project Showcase">
    <meta name="twitter:description"
        content="Optimizing high-traffic regional blog websites with zero-bloat PHP structures.">
    <meta name="twitter:image" content="{{ asset('assets/images/techupkar.png') }}">
@endsection

@section('content')
    {{-- Project Hero --}}
    <section class="relative pb-24 -mt-20 pt-35 overflow-hidden border-b border-border bg-cover"
        style="background-image: url('{{ asset('assets/images/background/doted.svg') }}')">
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
                <div>
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 mb-4 rounded-full bg-primary/10 border border-primary/30 text-primary-500 backdrop-blur-xl">
                        <span class="text-xs font-semibold">Custom Blog Portal</span>
                    </div>
                    <h1 class="text-3xl lg:text-5xl font-bold text-foreground mb-5">
                        TechUpkar <br>
                        <span class="text-gradient">Regional Blog Theme</span>
                    </h1>
                    <p class="text-xl text-on-surface/60 leading-relaxed mb-8">
                        A performance-centric WordPress blog theme featuring high-speed loading times, preloaded local typography, and ad slots integration.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="{{ route('contact') }}">
                            <x-form.primary-button type="button" class="rounded-full">
                                Build Similar Blog
                                <span class="w-7 h-7 rounded-full bg-white flex items-center justify-center">
                                    <x-icons.go class="w-4 h-4 text-foreground" />
                                </span>
                            </x-form.primary-button>
                        </a>
                    </div>
                </div>
                <div class="relative">
                    <div
                        class="max-w-md mx-auto border border-border/50 bg-background backdrop-blur-xl rounded-2xl p-4 flex items-center justify-center relative overflow-hidden group">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-primary/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        </div>
                        <div class="aspect-video rounded-xl overflow-hidden border border-outline-variant/30 relative z-10">
                            <img src="{{ asset('assets/images/techupkar.png') }}" alt="TechUpkar Theme Showcase" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                    </div>
                    {{-- Floating Tags --}}
                    <div
                        class="absolute -top-7 right-10 flex items-center gap-2 rounded-xl border border-border bg-background/95 backdrop-blur-xl px-4 py-3">
                        <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-500/15 text-green-500">
                            <x-icons.target class="w-4 h-4" />
                        </span>
                        <div class="text-xs">
                            <div class="text-muted-foreground">FCP Speed</div>
                            <div class="font-semibold text-foreground">0.3s Mobile First</div>
                        </div>
                    </div>
                    <div
                        class="absolute -bottom-7 left-10 flex items-center gap-2 rounded-xl px-4 py-3 border border-border bg-background/95 backdrop-blur-xl">
                        <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-500/15 text-green-500">
                            <x-icons.launch class="w-4 h-4" />
                        </span>
                        <div class="text-xs">
                            <div class="text-muted-foreground">Monetize</div>
                            <div class="font-semibold text-foreground">AdSense Optimized</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Intro Context Block -->
    <section class="py-12 border-b border-outline-variant/30">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <p class="text-xl text-muted-foreground">
                "Preloading native fonts, customizing core action hooks, and formatting premium ad placements. We engineered a fast, lightweight WordPress portal to drive traffic engagement."
            </p>
        </div>
    </section>

    <!-- Challenges & Objectives Section -->
    <section class="py-24 border-b border-outline-variant/30">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-foreground mb-6">
                    Project <span class="text-gradient">Challenges & Objectives</span>
                </h2>
                <p class="text-xl text-on-surface/50 max-w-5xl mx-auto">
                    News portals suffer from slow speeds due to layout elements, fonts rendering delays, and heavy ad script integrations. Our targets were:
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Benefit 1 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <x-icons.time class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3">Lightning Speed</h3>
                    <p class="text-sm leading-relaxed">Rebuild theme layout templates to achieve a mobile page load time under 0.9s for regional users.</p>
                </div>
                <!-- Benefit 2 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <x-icons.target class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3">Hindi Typography</h3>
                    <p class="text-sm leading-relaxed">Embed clean local font preload links to avoid layout shifting (CLS) while loading Hindi content.</p>
                </div>
                <!-- Benefit 3 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <x-icons.plugin class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3">Ad-Sense Layout</h3>
                    <p class="text-sm leading-relaxed">Arrange clean ad placements above-the-fold without sacrificing core web vitals speed scores.</p>
                </div>
                <!-- Benefit 4 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <x-icons.security class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3">Genesis Actions</h3>
                    <p class="text-sm leading-relaxed">Customize child theme loops by overriding native action queues, dropping legacy script file loads.</p>
                </div>
            </div>
            <div class="mt-12 text-center text-sm">
                Optimizing layout structural rules with <span class="font-semibold">custom Genesis templates</span> increases mobile index standings.
            </div>
        </div>
    </section>

    <!-- Services / Solutions Section -->
    <section class="py-24 border-b border-outline-variant/30">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-foreground mb-6">
                    How We Built It: <span class="text-gradient">WordPress Optimization</span>
                </h2>
                <p class="text-xl text-on-surface/50 max-w-5xl mx-auto">
                    We developed a zero-bloat WordPress structure utilizing native asset registers, custom Genesis hooks, and inline rendering rules.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-14">
                <!-- Solution 1 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">01</span>
                    <h3 class="text-xl font-bold mb-3">Native Font Preloading</h3>
                    <p class="text-sm leading-relaxed">Embedding direct preload metadata for regional font vectors, dropping external Google APIs calls entirely.</p>
                </div>
                <!-- Solution 2 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">02</span>
                    <h3 class="text-xl font-bold mb-3">Genesis Hook Override</h3>
                    <p class="text-sm leading-relaxed">Overriding core layout hooks to render custom elements natively, drop unused theme assets, and trim markup footprint.</p>
                </div>
                <!-- Solution 3 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">03</span>
                    <h3 class="text-xl font-bold mb-3">Ad-Sense Optimization</h3>
                    <p class="text-sm leading-relaxed">Pre-allocating space for dynamically injected AdSense script frames to preserve CLS marks from changing.</p>
                </div>
                <!-- Solution 4 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">04</span>
                    <h3 class="text-xl font-bold mb-3">Asset Registration Cleanup</h3>
                    <p class="text-sm leading-relaxed">Programmatically dequeuing blocks, emojis, and global inline styles that clog front-facing execution tracks.</p>
                </div>
                <!-- Solution 5 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">05</span>
                    <h3 class="text-xl font-bold mb-3">Semantic Layout Blocks</h3>
                    <p class="text-sm leading-relaxed">Developing blocks directly in PHP to output clean semantic HTML elements rather than deep nested page divs.</p>
                </div>
                <!-- Solution 6 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">06</span>
                    <h3 class="text-xl font-bold mb-3">Structured Schema Logic</h3>
                    <p class="text-sm leading-relaxed">Injecting dynamic JSON schema markups onto post views, driving rich metadata crawlers without plugins.</p>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="{{ route('contact') }}">
                    <x-form.primary-button type="button" class="px-7 py-3 rounded-2xl">
                        <span>Get Free Consultation</span>
                        <x-icons.go class="w-4 h-4" />
                    </x-form.primary-button>
                </a>
                <a href="{{ config('staticdata.whatsapp_url') }}">
                    <x-form.secondary-button type="button" class="px-7 py-3 rounded-2xl">
                        <x-icons.whatsapp class="w-5 h-5" />
                        <span>Chat on WhatsApp</span>
                    </x-form.secondary-button>
                </a>
            </div>
        </div>
    </section>

    <!-- FAQs Section -->
    <section class="py-24 border-b border-outline-variant/30">
        <div class="max-w-5xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-foreground mb-6">Frequently Asked Questions</h2>
            </div>

            <div class="space-y-6">
                <!-- Q1 -->
                <div class="p-6 rounded-2xl border border-border bg-card">
                    <h3 class="text-lg font-bold mb-3 flex items-start gap-2">
                        <span class="text-primary">Q.</span> How do preloaded fonts improve theme loading times?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        By hosting font files locally and using link preloads in the document head, the browser downloads font assets immediately, avoiding layout shifts (CLS) and flashing unstyled text.
                    </p>
                </div>
                <!-- Q2 -->
                <div class="p-6 rounded-2xl border border-border bg-card">
                    <h3 class="text-lg font-bold mb-3 flex items-start gap-2">
                        <span class="text-primary">Q.</span> Do dynamic ad units degrade Core Web Vitals speed scores?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        Normally yes, due to shifts and execution blocks. We solve this by pre-allocating exact CSS container heights for active ad units, preventing visual layout jumps during ad-script downloads.
                    </p>
                </div>
                <!-- Q3 -->
                <div class="p-6 rounded-2xl border border-border bg-card">
                    <h3 class="text-lg font-bold mb-3 flex items-start gap-2">
                        <span class="text-primary">Q.</span> Are schema markups configured natively?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        Yes. The theme injects native JSON-LD metadata for articles, author blocks, and breadcrumbs, making it crawlable for search crawlers without using heavy SEO plugins.
                    </p>
                </div>
                <!-- Q4 -->
                <div class="p-6 rounded-2xl border border-border bg-card">
                    <h3 class="text-lg font-bold mb-3 flex items-start gap-2">
                        <span class="text-primary">Q.</span> Can we change site widgets and sidebars in the WP admin panel?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        Yes. Custom sidebar containers are registered through WordPress widgets API, giving admins full editing control from the Appearance settings.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Related Projects --}}
    <section class="py-24 border-b border-outline-variant/30">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-foreground mb-4">Other Projects</h2>
                    <p class="text-on-surface/60">See how we've built custom portals to drive growth.</p>
                </div>
                <a href="{{ route('portfolio') }}" class="text-primary font-bold hover:underline">View All Projects</a>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                <a href="{{ route('portfolio.tech-nukti') }}"
                    class="group rounded-2xl border border-border bg-card overflow-hidden transition-all hover:border-primary/30">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('assets/images/technukti.png') }}" alt="Tech Nukti Theme"
                            class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-foreground mb-2 group-hover:text-primary transition-colors">Tech Nukti Custom Theme</h3>
                        <p class="text-on-surface/60 text-sm">Blazing-fast WordPress custom theme optimized for mobile index rankings.</p>
                    </div>
                </a>
                <a href="{{ route('portfolio.gmj-child-pro') }}"
                    class="group rounded-2xl border border-border bg-card overflow-hidden transition-all hover:border-primary/30">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('assets/images/gmjchildpro.png') }}" alt="GMJ Child Pro Theme"
                            class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-foreground mb-2 group-hover:text-primary transition-colors">GMJ Child Pro Theme</h3>
                        <p class="text-on-surface/60 text-sm">High-converting Genesis child theme with zero-JS layouts.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- Footer Contact --}}
    @include('sections.contact')
@endsection
