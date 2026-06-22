@extends('layouts.app')

@section('head')
    <title>eCommerce Website Development Services | Build High-Converting Online Stores</title>
    <meta name="description"
        content="Professional eCommerce website development services. We build fast, secure, and custom online stores, multi-vendor platforms, and marketplaces using Shopify, WooCommerce, and Laravel.">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="keywords"
        content="eCommerce Website Development Services, Custom Online Store Development, eCommerce Web Design Company, WooCommerce Development, Shopify Store Builders, B2B Marketplace Portal, Multi-vendor Platforms, Laravel eCommerce">

    <!-- Open Graph -->
    <meta property="og:title" content="eCommerce Website Development Services | Tejal Digital">
    <meta property="og:description"
        content="Turn clicks into conversions. We engineer custom, lightning-fast digital storefronts and enterprise marketplaces designed to maximize your online sales.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/images/og-image.png') }}">
@endsection

@section('content')
    {{-- Service Hero --}}
    <section class="relative pb-24 -mt-20 pt-35 overflow-hidden border-b border-border bg-cover"
        style="background-image: url('{{ asset('assets/images/background/doted.svg') }}')">

        <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
            <nav class="flex mb-8" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-sm text-on-surface/60">
                    <li><a href="{{ route('home') }}" class="hover:text-primary transition-colors">Home</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li><a href="{{ route('services.index') }}" class="hover:text-primary transition-colors">Services</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li class="text-on-surface font-medium">eCommerce Development</li>
                </ol>
            </nav>

            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>

                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 mb-4 rounded-full bg-primary/10 border border-primary/30 text-primary-500 backdrop-blur-xl">
                        <span class="text-xs font-semibold">High-Converting Retail Engineering</span>
                    </div>
                    <h1 class="text-3xl lg:text-5xl font-bold text-foreground mb-5">
                        High-Performance <span class="text-gradient">eCommerce Website </span>Development Services
                    </h1>
                    <p class="text-lg leading-relaxed mb-8">
                        Launch an online retail space that turns passive browsing into immediate transactions. We engineer
                        specialized, secure, and exceptionally fast e-commerce architectures optimized across layout
                        visibility metrics to grow your digital margins.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('contact') }}">
                            <x-form.primary-button type="button" class="rounded-full">
                                Start Your Project
                                <span class="w-7 h-7 rounded-full bg-white flex items-center justify-center">
                                    <x-icons.go class="w-4 h-4 text-foreground" />
                                </span>
                            </x-form.primary-button>
                        </a>
                    </div>
                </div>
                <div class="relative">
                    <div
                        class="max-w-md h-80 mx-auto border border-border/50 bg-background backdrop-blur-xl rounded-2xl p-12 flex items-center justify-center relative overflow-hidden group">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-green-500/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        </div>
                        <x-icons.shopify class="w-32 h-32 text-green-500 relative z-10" />
                    </div>
                    {{-- Floating Tags --}}
                    <div
                        class="absolute -bottom-7 left-1/2 -translate-x-1/2 flex items-center gap-2 rounded-xl px-4 py-3 border border-border bg-background/95 backdrop-blur-xl">
                        <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-500/15 text-green-500">
                            <x-icons.launch class="w-4 h-4" />
                        </span>
                        <div class="text-xs">
                            <div class="text-muted-foreground">PCI-DSS Secure</div>
                            <div class="font-semibold text-foreground">High-Speed Checkout</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Strategic Value: How eCommerce Helps Business Grow -->
    <section class="py-24 border-b border-outline-variant/30 bg-card/10">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-primary font-bold text-xs uppercase tracking-widest block mb-2">Scale Globally</span>
                <h2 class="text-3xl lg:text-4xl font-bold text-foreground mb-6">How an eCommerce Website Helps Your Business
                    Grow Online</h2>
                <p class="text-md text-on-surface/60">
                    Transitioning from localized retail patterns or expanding a digital footprint unlocking uninterrupted
                    market equity.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="p-6 rounded-2xl bg-card border border-border">
                    <h4 class="text-lg font-bold text-foreground mb-3 flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> 24/7 Global Sales Channel
                    </h4>
                    <p class="text-xs sm:text-sm text-on-surface/70 leading-relaxed">Break geographical limitations and
                        timezone constraints. Your storefront runs continuously, closing acquisitions automatically without
                        staff dependencies.</p>
                </div>
                <div class="p-6 rounded-2xl bg-card border border-border">
                    <h4 class="text-lg font-bold text-foreground mb-3 flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> Direct Behavioral Insights
                    </h4>
                    <p class="text-xs sm:text-sm text-on-surface/70 leading-relaxed">Gather precise transactional telemetry
                        data, tracking cart drop factors, item affinity matrices, and real customer pathways to improve
                        operational layout decisions.</p>
                </div>
                <div class="p-6 rounded-2xl bg-card border border-border">
                    <h4 class="text-lg font-bold text-foreground mb-3 flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> Frictionless Overhead Scaling
                    </h4>
                    <p class="text-xs sm:text-sm text-on-surface/70 leading-relaxed">Process hundreds of orders
                        concurrently. Digital structures manage inventory expansion profiles without demanding matching
                        physical showroom investments.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Supported Platforms Grid Section -->
    <section id="platforms" class="py-24 border-b border-outline-variant/30">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <span class="text-primary font-bold text-xs uppercase tracking-widest block mb-2">Core Competency
                    Matrix</span>
                <h2 class="text-4xl lg:text-5xl font-bold text-foreground mb-6">
                    eCommerce Platforms We Work With
                </h2>
                <p class="text-xl text-on-surface/50 max-w-4xl mx-auto">
                    We code clean, robust storefront pipelines utilizing the industry's premier foundational environments to
                    match your team's administrative workflow needs.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- WooCommerce -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden group">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32"></div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <x-icons.wordpress class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-foreground">WooCommerce Solutions</h3>
                    <p class="text-sm text-on-surface/70 leading-relaxed">Perfect for complete data ownership and
                        content-driven brands. We construct custom WordPress themes and custom operational extensions built
                        to keep transactional processes smooth without recurrent software tax structures.</p>
                </div>

                <!-- Shopify -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden group">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32"></div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <x-icons.shopify class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-foreground">Shopify Development</h3>
                    <p class="text-sm text-on-surface/70 leading-relaxed">Built for rapid market scaling and flawless
                        checkout management. We assemble light Liquid system templates or ultra-responsive headless
                        storefront structures that eliminate server administration stress.</p>
                </div>

                <!-- Laravel -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden group">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32"></div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <x-icons.laravel class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-foreground">Custom Laravel Engines</h3>
                    <p class="text-sm text-on-surface/70 leading-relaxed">Designed for enterprise setups running complex
                        logic rules. We write custom database applications from scratch, maintaining exact numeric precision
                        types across global order catalogs.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-24 border-b border-outline-variant/30 bg-card/20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-20">
                <span class="text-primary font-bold text-xs uppercase tracking-widest block mb-2">Our Capabilities</span>
                <h2 class="text-4xl font-bold text-foreground mb-6">Targeted eCommerce Development Services</h2>
                <p class="text-lg text-on-surface/60">
                    We deliver comprehensive engineering scopes to keep your product visibility, data syncs, and shopping
                    funnels completely streamlined.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div
                    class="p-8 rounded-2xl bg-card border border-border hover:border-primary/40 transition duration-300 flex flex-col justify-between">
                    <div>
                        <div class="text-xs font-bold uppercase tracking-widest text-primary mb-4">01</div>
                        <h3 class="text-xl font-bold text-foreground mb-3">Online Store Development</h3>
                        <p class="text-on-surface/70 text-sm leading-relaxed">Turnkey direct-to-consumer storefront
                            structures. We code optimized item pages, complex product filters, and rapid payment gateway
                            paths designed to boost average cart values.</p>
                    </div>
                </div>

                <!-- Service 2 -->
                <div
                    class="p-8 rounded-2xl bg-card border border-border hover:border-primary/40 transition duration-300 flex flex-col justify-between">
                    <div>
                        <div class="text-xs font-bold uppercase tracking-widest text-primary mb-4">02</div>
                        <h3 class="text-xl font-bold text-foreground mb-3">B2B & B2C Marketplaces</h3>
                        <p class="text-on-surface/70 text-sm leading-relaxed">Architecting enterprise commerce logic
                            networks. From advanced tier pricing matrices, dynamic tax calculation algorithms, and custom
                            volume bulk purchase flows.</p>
                    </div>
                </div>

                <!-- Service 3 -->
                <div
                    class="p-8 rounded-2xl bg-card border border-border hover:border-primary/40 transition duration-300 flex flex-col justify-between">
                    <div>
                        <div class="text-xs font-bold uppercase tracking-widest text-primary mb-4">03</div>
                        <h3 class="text-xl font-bold text-foreground mb-3">Multi-vendor Platforms</h3>
                        <p class="text-on-surface/70 text-sm leading-relaxed">Complex multi-tenant environments similar to
                            Amazon. We construct independent store dashboards, dynamic vendor commission splits, and unified
                            shipping pipelines.</p>
                    </div>
                </div>

                <!-- Service 4 -->
                <div
                    class="p-8 rounded-2xl bg-card border border-border hover:border-primary/40 transition duration-300 flex flex-col justify-between">
                    <div>
                        <div class="text-xs font-bold uppercase tracking-widest text-primary mb-4">04</div>
                        <h3 class="text-xl font-bold text-foreground mb-3">Ecommerce Website Design</h3>
                        <p class="text-on-surface/70 text-sm leading-relaxed">Bespoke UI/UX digital layouts focusing
                            heavily on mobile usability. We eliminate unnecessary design steps, crafting clear paths from
                            cart view to checkout confirmation.</p>
                    </div>
                </div>

                <!-- Service 5 -->
                <div
                    class="p-8 rounded-2xl bg-card border border-border hover:border-primary/40 transition duration-300 flex flex-col justify-between">
                    <div>
                        <div class="text-xs font-bold uppercase tracking-widest text-primary mb-4">05</div>
                        <h3 class="text-xl font-bold text-foreground mb-3">Platform Migrations</h3>
                        <p class="text-on-surface/70 text-sm leading-relaxed">Safely extract historical asset pools. We
                            manage complete transaction logs, user account files, and complex product variation sets with
                            zero data loss or ranking drop alerts.</p>
                    </div>
                </div>

                <!-- Service 6 -->
                <div
                    class="p-8 rounded-2xl bg-card border border-border hover:border-primary/40 transition duration-300 flex flex-col justify-between">
                    <div>
                        <div class="text-xs font-bold uppercase tracking-widest text-primary mb-4">06</div>
                        <h3 class="text-xl font-bold text-foreground mb-3">Continuous Enterprise Support</h3>
                        <p class="text-on-surface/70 text-sm leading-relaxed">Ensuring system reliability during peak
                            traffic spikes. We handle API validation loops, secure patch maintenance, and checkout routine
                            stress tests.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Interactive Action CTA Container --}}
    <section id="contact" class="py-24">
        <div class="max-w-6xl mx-auto px-6">
            <div class="relative bg-card rounded-3xl p-10 sm:p-16 border border-border overflow-hidden shadow-2xl">
                <div
                    class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-primary/10 rounded-full blur-[100px] -ml-64 -mb-64">
                </div>
                <div class="relative z-10 text-center max-w-3xl mx-auto">
                    <span class="text-primary font-bold text-sm tracking-widest uppercase block mb-3">Let’s Discuss Your
                        Tech Strategy</span>
                    <h2 class="text-3xl sm:text-5xl font-bold text-foreground mb-6">Launch Your High-Performance Store
                        Today</h2>
                    <p class="text-on-surface/70 text-lg mb-8 leading-relaxed">
                        Don't let clunky templates or buggy checkout steps slow down your digital revenue growth. Connect
                        with our technical engineering division to design a secure, fast web store.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ route('contact') }}" data-aos="fade-up" data-aos-delay="100"
                            data-aos-duration="800">
                            <x-form.primary-button type="button" class="px-7 py-3 rounded-2xl">
                                <span>Get Free Consultation</span>
                                <x-icons.go class="w-4 h-4" />
                            </x-form.primary-button>
                        </a>
                        <a href="{{ config('staticdata.whatsapp_url') }}" data-aos="fade-up" data-aos-delay="100"
                            data-aos-duration="800">
                            <x-form.secondary-button type="button" class="px-7 py-3 rounded-2xl">
                                <x-icons.whatsapp class="w-5 h-5" />
                                <span>Chat on WhatsApp</span>
                            </x-form.secondary-button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us for eCommerce Website Development -->
    <section class="py-24 border-b border-outline-variant/30">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-primary font-bold text-xs uppercase tracking-widest block mb-2">The Engineering
                    Standard</span>
                <h2 class="text-4xl font-bold text-foreground mb-6">Why Choose Us for eCommerce Website Development?</h2>
                <p class="text-lg text-on-surface/50">
                    We balance clean performance metrics with operational safety structures to keep your platform completely
                    stable.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Item 1 -->
                <div
                    class="relative overflow-hidden p-6 rounded-2xl border border-border bg-card flex flex-col justify-between group">
                    <div class="absolute top-0 right-0 w-48 h-48 bg-primary/5 rounded-full blur-[60px] -mr-24 -mt-24">
                    </div>
                    <div>
                        <div
                            class="w-12 h-12 bg-primary/10 text-primary rounded-full border border-outline-variant/20 mb-5 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <x-icons.launch class="w-5 h-5" />
                        </div>
                        <h3 class="text-lg font-bold text-foreground mb-2">Core Web Vitals Blueprint</h3>
                        <p class="text-on-surface/70 text-xs sm:text-sm leading-relaxed">We optimize your store code for
                            speed. Fast loading speeds help reduce bounce rates and improve visibility in search engine
                            layouts.</p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div
                    class="relative overflow-hidden p-6 rounded-2xl border border-border bg-card flex flex-col justify-between group">
                    <div class="absolute top-0 right-0 w-48 h-48 bg-primary/5 rounded-full blur-[60px] -mr-24 -mt-24">
                    </div>
                    <div>
                        <div
                            class="w-12 h-12 bg-primary/10 text-primary rounded-full border border-outline-variant/20 mb-5 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <x-icons.security class="w-5 h-5" />
                        </div>
                        <h3 class="text-lg font-bold text-foreground mb-2">Ironclad Security Defenses</h3>
                        <p class="text-on-surface/70 text-xs sm:text-sm leading-relaxed">We secure order data handling
                            processes, deploying directory hardening rules, cross-site transaction protection, and automated
                            anomaly scans.</p>
                    </div>
                </div>

                <!-- Item 3 -->
                <div
                    class="relative overflow-hidden p-6 rounded-2xl border border-border bg-card flex flex-col justify-between group">
                    <div class="absolute top-0 right-0 w-48 h-48 bg-primary/5 rounded-full blur-[60px] -mr-24 -mt-24">
                    </div>
                    <div>
                        <div
                            class="w-12 h-12 bg-primary/10 text-primary rounded-full border border-outline-variant/20 mb-5 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <x-icons.deep-search class="w-5 h-5" />
                        </div>
                        <h3 class="text-lg font-bold text-foreground mb-2">Structured Schema Injection</h3>
                        <p class="text-on-surface/70 text-xs sm:text-sm leading-relaxed">We deploy validated, rich product
                            schemas and aggregate price review data parameters, helping your inventory stand out clearly in
                            Google Shopping layouts.</p>
                    </div>
                </div>

                <!-- Item 4 -->
                <div
                    class="relative overflow-hidden p-6 rounded-2xl border border-border bg-card flex flex-col justify-between group">
                    <div class="absolute top-0 right-0 w-48 h-48 bg-primary/5 rounded-full blur-[60px] -mr-24 -mt-24">
                    </div>
                    <div>
                        <div
                            class="w-12 h-12 bg-primary/10 text-primary rounded-full border border-outline-variant/20 mb-5 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <x-icons.plugin class="w-5 h-5" />
                        </div>
                        <h3 class="text-lg font-bold text-foreground mb-2">Seamless System Syncs</h3>
                        <p class="text-on-surface/70 text-xs sm:text-sm leading-relaxed">We keep systems unified, ensuring
                            web platforms communicate cleanly with third-party tracking portals and internal management
                            tools.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Featured Work Section --}}
    <section class="py-24 bg-surface-container/30">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-foreground mb-4">Our Featured Work</h2>
                    <p class="text-on-surface/60">High-converting digital storefronts built to process sales seamlessly.
                    </p>
                </div>
                <a href="{{ route('portfolio') }}" class="text-primary font-bold hover:underline">View All Projects</a>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Project 1 -->
                <a href="#"
                    class="group rounded-2xl border border-border bg-card overflow-hidden transition-all hover:border-primary/30">
                    <div class="aspect-video overflow-hidden relative">
                        <div class="absolute inset-0 bg-slate-950/40 z-10"></div>
                        <img src="{{ asset('assets/images/technukti.png') }}" alt="Custom Retail Storefront"
                            class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <span class="text-xs uppercase tracking-widest text-primary font-mono block mb-2">// WooCommerce
                            Architecture</span>
                        <h3 class="text-xl font-bold text-foreground mb-2 group-hover:text-primary transition-colors">
                            Performance-Tuned Brand Hub</h3>
                        <p class="text-on-surface/60 text-sm">Custom SKU option handling built for fast transactions and
                            low cart abandonment rates.</p>
                    </div>
                </a>
                <!-- Project 2 -->
                <a href="#"
                    class="group rounded-2xl border border-border bg-card overflow-hidden transition-all hover:border-primary/30">
                    <div class="aspect-video overflow-hidden relative">
                        <div class="absolute inset-0 bg-slate-950/40 z-10"></div>
                        <img src="{{ asset('assets/images/techupkar.png') }}" alt="B2B Marketplace Platform"
                            class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <span class="text-xs uppercase tracking-widest text-primary font-mono block mb-2">// Headless
                            Laravel Engine</span>
                        <h3 class="text-xl font-bold text-foreground mb-2 group-hover:text-primary transition-colors">
                            Enterprise B2B Wholesale System</h3>
                        <p class="text-on-surface/60 text-sm">Bespoke bulk price calculation tables integrated seamlessly
                            with back-office inventory networks.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- FAQs Section -->
    <section class="py-24 border-t border-outline-variant/20 bg-card/10">
        <div class="max-w-4xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-foreground">Frequently Asked Questions</h2>
            </div>

            <div class="space-y-6">
                <!-- Q1 -->
                <div class="bg-card p-6 sm:p-8 rounded-2xl border border-border relative overflow-hidden">
                    <h3 class="text-lg font-bold text-foreground mb-3 flex items-start gap-2">
                        <span class="text-primary">Q.</span> How do I decide the best platform for eCommerce web
                        development?
                    </h3>
                    <p class="text-on-surface/70 pl-6 text-sm sm:text-base leading-relaxed">
                        It depends entirely on your catalog size and workflow. <span
                            class="text-foreground font-medium">Shopify</span> is ideal for rapid launches with zero
                        infrastructure management burdens. <span class="text-foreground font-medium">WooCommerce</span>
                        works perfectly for brands wanting full layout customization and data ownership via WordPress. For
                        complex enterprise workflows or custom logic rules, a standalone <span
                            class="text-foreground font-medium">Laravel build</span> offers absolute scalability.
                    </p>
                </div>
                <!-- Q2 -->
                <div class="bg-card p-6 sm:p-8 rounded-2xl border border-border relative overflow-hidden">
                    <h3 class="text-lg font-bold text-foreground mb-3 flex items-start gap-2">
                        <span class="text-primary">Q.</span> How long does it take to develop an eCommerce website?
                    </h3>
                    <p class="text-on-surface/70 pl-6 text-sm sm:text-base leading-relaxed">
                        Standard custom builds configured on Shopify or WooCommerce typically scale across 4 to 6 weeks.
                        Deeply integrated B2B marketplaces, custom multi-vendor platforms, or bespoke corporate Laravel
                        infrastructure require 12 to 16 weeks depending on integration data complexities.
                    </p>
                </div>
                <!-- Q3 -->
                <div class="bg-card p-6 sm:p-8 rounded-2xl border border-border relative overflow-hidden">
                    <h3 class="text-lg font-bold text-foreground mb-3 flex items-start gap-2">
                        <span class="text-primary">Q.</span> Do you offer eCommerce website hosting?
                    </h3>
                    <p class="text-on-surface/70 pl-6 text-sm sm:text-base leading-relaxed">
                        We help deploy your application to optimal high-speed environments. For Shopify, hosting runs
                        natively on their infrastructure. For WooCommerce and Laravel platforms, we configure scalable cloud
                        environments (AWS, DigitalOcean, or Google Cloud) to maintain fast performance during holiday
                        traffic spikes.
                    </p>
                </div>
                <!-- Q4 -->
                <div class="bg-card p-6 sm:p-8 rounded-2xl border border-border relative overflow-hidden">
                    <h3 class="text-lg font-bold text-foreground mb-3 flex items-start gap-2">
                        <span class="text-primary">Q.</span> Is it possible to integrate my existing CRM or inventory
                        system with the new eCommerce site?
                    </h3>
                    <p class="text-on-surface/70 pl-6 text-sm sm:text-base leading-relaxed">
                        Yes. We build custom API sync bridges linking your front-end store directly with existing legacy
                        tools, HubSpot CRM pipelines, external logistics systems, and accounting tools to keep operations
                        synchronized automatically.
                    </p>
                </div>
                <!-- Q5 -->
                <div class="bg-card p-6 sm:p-8 rounded-2xl border border-border relative overflow-hidden">
                    <h3 class="text-lg font-bold text-foreground mb-3 flex items-start gap-2">
                        <span class="text-primary">Q.</span> Will my eCommerce website be mobile-friendly?
                    </h3>
                    <p class="text-on-surface/70 pl-6 text-sm sm:text-base leading-relaxed">
                        Absolutely. Over 60% of all global online traffic purchases via mobile screens. Every digital store
                        we deploy utilizes mobile-first design practices, ensuring search engine indexability and
                        frictionless checkout workflows for mobile shoppers.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer Contact Include --}}
    @include('sections.contact')
@endsection
