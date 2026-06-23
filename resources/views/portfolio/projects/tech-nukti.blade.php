@extends('layouts.app')

@section('head')
    <title>Tech Nukti | Custom High-Speed WordPress Theme</title>
    <meta name="description"
        content="Discover how Tejal Digital built Tech Nukti, a blazing-fast, custom WordPress theme achieving perfect 100/100 Lighthouse performance scores without bloat.">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="keywords"
        content="Tech Nukti, custom WordPress theme, Technukti theme design, Google PageSpeed optimization, fast WP templates, Core Web Vitals, lightweight Gutenberg blocks">

    <!-- Open Graph -->
    <meta property="og:title" content="Tech Nukti Theme Case Study | Tejal Digital">
    <meta property="og:description"
        content="Building custom, zero-bloat WordPress themes for Technukti to maximize ad-revenue and SEO performance.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/images/technukti.png') }}">

    <!-- Twitter Card -->
    <meta name="twitter:title" content="Tech Nukti Theme | Project Showcase">
    <meta name="twitter:description"
        content="Achieving a perfect 100/100 Lighthouse performance on WordPress blogs with custom layouts.">
    <meta name="twitter:image" content="{{ asset('assets/images/technukti.png') }}">
@endsection

@section('content')
    {{-- Project Hero --}}
    <section class="relative pb-24 -mt-20 pt-35 overflow-hidden border-b border-border bg-cover"
        style="background-image: url('{{ asset('assets/images/background/doted.svg') }}')">
        <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
            <nav class="flex mb-8" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-sm ">
                    <li><a href="{{ route('home') }}" class="hover:text-primary transition-colors">Home</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li><a href="{{ route('portfolio') }}" class="hover:text-primary transition-colors">Portfolio</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li class=" font-medium">Tech Nukti</li>
                </ol>
            </nav>

            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 mb-4 rounded-full bg-primary/10 border border-primary/30 text-primary-500 backdrop-blur-xl">
                        <span class="text-xs font-semibold">Custom WordPress Theme</span>
                    </div>
                    <h1 class="text-3xl lg:text-5xl font-bold text-foreground mb-5">
                        Tech Nukti <br>
                        <span class="text-gradient">Fast WP Theme</span>
                    </h1>
                    <p class="text-xl  leading-relaxed mb-8">
                        A custom-engineered WordPress theme built from scratch to deliver sub-second rendering times, zero layout shifts, and search ranking advantages.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="{{ route('contact') }}">
                            <x-form.primary-button type="button" class="rounded-full">
                                Build Similar Theme
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
                            <img src="{{ asset('assets/images/technukti.png') }}" alt="Tech Nukti Theme Showcase" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                    </div>
                    {{-- Floating Tags --}}
                    <div
                        class="absolute -top-7 right-10 flex items-center gap-2 rounded-xl border border-border bg-background/95 backdrop-blur-xl px-4 py-3">
                        <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-500/15 text-green-500">
                            <x-icons.target class="w-4 h-4" />
                        </span>
                        <div class="text-xs">
                            <div class="text-muted-foreground">Speed</div>
                            <div class="font-semibold text-foreground">Perfect 100 Score</div>
                        </div>
                    </div>
                    <div
                        class="absolute -bottom-7 left-10 flex items-center gap-2 rounded-xl px-4 py-3 border border-border bg-background/95 backdrop-blur-xl">
                        <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-500/15 text-green-500">
                            <x-icons.launch class="w-4 h-4" />
                        </span>
                        <div class="text-xs">
                            <div class="text-muted-foreground">SEO</div>
                            <div class="font-semibold text-foreground">Clean Gutenberg Blocks</div>
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
                "Eliminating bloated page builders, optimizing core web vitals, and rendering articles instantly on mobile connections. We engineered a custom, hand-coded WordPress framework to maximize blog performance."
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
                <p class="text-xl  max-w-5xl mx-auto">
                    Off-the-shelf WordPress themes load hundreds of script files, damaging LCP and CLS scores. Our core speed milestones included:
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Objective 1 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <x-icons.time class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3">Sub-Second FCP</h3>
                    <p class="text-sm leading-relaxed">Achieve First Contentful Paint times under 0.4 seconds by removing blocking CSS stylesheets.</p>
                </div>
                <!-- Objective 2 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <x-icons.target class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3">Zero Layout Shift</h3>
                    <p class="text-sm leading-relaxed">Prevent dynamic element movement (CLS) by pre-allocating exact dimensions for lazy-loaded image tags.</p>
                </div>
                <!-- Objective 3 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <x-icons.plugin class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3">Custom Editor Blocks</h3>
                    <p class="text-sm leading-relaxed">Build lightweight Gutenberg block elements that align with editorial flows without loading heavy frameworks.</p>
                </div>
                <!-- Objective 4 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <x-icons.security class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3">Strict Schema Mark</h3>
                    <p class="text-sm leading-relaxed">Incorporate schema JSON tags natively for articles, ensuring search engine bots index posts correctly.</p>
                </div>
            </div>
            <div class="mt-12 text-center text-sm">
                Deploying a <span class="font-semibold">custom speed-optimized theme</span> enhances organic traffic retention and increases ad-click ratios.
            </div>
        </div>
    </section>

    <!-- Services / Solutions Section -->
    <section class="py-24 border-b border-outline-variant/30">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-foreground mb-6">
                    How We Built It: <span class="text-gradient">WordPress Engineering</span>
                </h2>
                <p class="text-xl  max-w-5xl mx-auto">
                    We engineered a pure HTML5/CSS3 template from scratch using WordPress API bindings, avoiding bloated builders or speed enhancers.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-14">
                <!-- Solution 1 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">01</span>
                    <h3 class="text-xl font-bold mb-3">Custom Header Preloads</h3>
                    <p class="text-sm leading-relaxed">Coding custom resource hint headers to prefetch typography files, ensuring fonts render with zero visual delay.</p>
                </div>
                <!-- Solution 2 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">02</span>
                    <h3 class="text-xl font-bold mb-3">Inline Critical CSS</h3>
                    <p class="text-sm leading-relaxed">Extracting and inlining above-the-fold layout styles directly into the document head for immediate browser rendering.</p>
                </div>
                <!-- Solution 3 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">03</span>
                    <h3 class="text-xl font-bold mb-3">Modern Gutenberg Modules</h3>
                    <p class="text-sm leading-relaxed">Developing blocks through Advanced Custom Fields (ACF) to output optimized, markup-light structural elements.</p>
                </div>
                <!-- Solution 4 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">04</span>
                    <h3 class="text-xl font-bold mb-3">Layout Shift Prevention</h3>
                    <p class="text-sm leading-relaxed">Enforcing aspect-ratio containers on visual layouts, completely eliminating layout shifting metrics (CLS).</p>
                </div>
                <!-- Solution 5 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">05</span>
                    <h3 class="text-xl font-bold mb-3">JSON-LD Metadata</h3>
                    <p class="text-sm leading-relaxed">Generating precise structured schema payloads natively to secure rich snippet rankings on search queries.</p>
                </div>
                <!-- Solution 6 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">06</span>
                    <h3 class="text-xl font-bold mb-3">Rest API Search</h3>
                    <p class="text-sm leading-relaxed">Utilizing native WordPress REST endpoints with dynamic debounce scripting to supply fast search listings.</p>
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
                        <span class="text-primary">Q.</span> Why did you build a custom theme instead of using speed plugins?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        Speed optimization plugins act as a temporary fix for bloated code. Hand-coding the theme removes the primary source of bloat entirely, maintaining perfect speed marks permanently.
                    </p>
                </div>
                <!-- Q2 -->
                <div class="p-6 rounded-2xl border border-border bg-card">
                    <h3 class="text-lg font-bold mb-3 flex items-start gap-2">
                        <span class="text-primary">Q.</span> Is this custom theme compatible with WooCommerce?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        Yes. Because we follow clean standard WordPress hooks and template loops, WooCommerce hooks integrate seamlessly, keeping store products optimized.
                    </p>
                </div>
                <!-- Q3 -->
                <div class="p-6 rounded-2xl border border-border bg-card">
                    <h3 class="text-lg font-bold mb-3 flex items-start gap-2">
                        <span class="text-primary">Q.</span> Do we need paid caching plugins like WP Rocket with this?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        No. The site runs at sub-second speeds natively. A simple free server-level cache layer (like Redis or Nginx FastCGI) is more than sufficient.
                    </p>
                </div>
                <!-- Q4 -->
                <div class="p-6 rounded-2xl border border-border bg-card">
                    <h3 class="text-lg font-bold mb-3 flex items-start gap-2">
                        <span class="text-primary">Q.</span> Does this theme support Yoast or RankMath SEO plugins?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        Yes, standard SEO plugins work perfectly. The theme is programmed to let SEO plugins control meta properties, while providing correct structured schema fallback codes automatically.
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
                    <p class="">See how we've built custom portals to drive growth.</p>
                </div>
                <a href="{{ route('portfolio') }}" class="text-primary font-bold hover:underline">View All Projects</a>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                <a href="{{ route('portfolio.tech-upkar') }}"
                    class="group rounded-2xl border border-border bg-card overflow-hidden transition-all hover:border-primary/30">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('assets/images/techupkar.png') }}" alt="Tech Upkar Portal"
                            class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-foreground mb-2 group-hover:text-primary transition-colors">TechUpkar Blog Theme</h3>
                        <p class=" text-sm">Preloaded Hindi typography and ad-sense layout compliance.</p>
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
                        <p class=" text-sm">High-converting Genesis child theme with zero-JS layouts.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- Footer Contact --}}
    @include('sections.contact')
@endsection
