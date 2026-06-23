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
    <section class="relative pb-24 -mt-20 pt-35 overflow-hidden border-b border-border bg-cover"
        style="background-image: url('{{ asset('assets/images/background/doted.svg') }}')">

        <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
            <nav class="flex mb-8" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-sm ">
                    <li><a href="{{ route('home') }}" class="hover:text-primary transition-colors">Home</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li><a href="{{ route('services.index') }}" class="hover:text-primary transition-colors">Services</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li class=" font-medium">WordPress Development</li>
                </ol>
            </nav>

            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 mb-4 rounded-full bg-primary/10 border border-primary/30 text-primary-500 backdrop-blur-xl">
                        <span class="text-xs font-semibold">WordPress Development Company</span>
                    </div>
                    <h1 class="text-3xl lg:text-5xl font-bold text-foreground mb-5">
                        High-Performance <br>
                        <span class="text-gradient from-blue-400 to-blue-600">WordPress Website Development</span> Services
                    </h1>
                    <p class="text-lg leading-relaxed mb-8">
                        Transform your digital presence with a stunning, secure, and fast-loading website. As a specialized
                        WordPress web development agency, we build high-converting, custom digital experiences tailored
                        specifically to scale your business.
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
                            class="absolute inset-0 bg-gradient-to-br from-blue-500/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        </div>
                        <x-icons.wordpress class="w-32 h-32 text-blue-400 relative z-10" />
                    </div>
                    {{-- Floating Tags --}}
                    <div
                        class="absolute -bottom-7 left-1/2 -translate-x-1/2 flex items-center gap-2 rounded-xl px-4 py-3 border border-border bg-background/95 backdrop-blur-xl">
                        <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-500/15 text-green-500">
                            <x-icons.launch class="w-4 h-4" />
                        </span>
                        <div class="text-xs">
                            <div class="text-muted-foreground">Fast & Secure</div>
                            <div class="font-semibold text-foreground">Development</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Context Highlight Block -->
    <section class="py-12 border-b border-outline-variant/30">
        <div class="max-w-5xl mx-auto px-6 text-center">
            <p class="text-lg sm:text-xl  italic">
                "Whether you need an elegant corporate website, a fast-scaling WooCommerce storefront, or a complex
                enterprise multisite network, our <strong class="text-foreground">professional WordPress services</strong> turn
                your creative vision into a strategic business engine."
            </p>
        </div>
    </section>

    <!-- Why Choose WordPress Section -->
    <section class="py-24 border-b border-outline-variant/30">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-foreground mb-6">
                    Why Choose <span class="text-gradient">WordPress CMS</span> for Your Web Project?
                </h2>
                <p class="text-xl  max-w-5xl mx-auto">
                    WordPress powers over <span class="font-semibold text-foreground">40% of all websites</span> globally. It is
                    the gold standard for growth-focused brands because it pairs seamless marketing autonomy with infinite
                    scalability.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Benefit 1 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden group">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32"></div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <x-icons.planning class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-foreground">Easy Content Editing</h3>
                    <p class="text-sm  leading-relaxed">Empower your marketing team to update copy,
                        publish blogs, and launch landing pages instantly using the block editor without calling a
                        developer.</p>
                </div>

                <!-- Benefit 2 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden group">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32"></div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <x-icons.deep-search class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-foreground">SEO-Friendly Core</h3>
                    <p class="text-sm  leading-relaxed">Clean code structures, rapid indexing setups, and
                        semantic layouts ensure search engines love crawling your platform from day one.</p>
                </div>

                <!-- Benefit 3 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden group">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32"></div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <x-icons.launch class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-foreground">Infinite Scalability</h3>
                    <p class="text-sm  leading-relaxed">WordPress grows with you. Easily integrate
                        customized client portals, CRM sync pipes, and multilingual localizations as you expand.</p>
                </div>

                <!-- Benefit 4 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden group">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <x-icons.cart class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-foreground">WooCommerce Ready</h3>
                    <p class="text-sm  leading-relaxed">Seamlessly launch high-conversion digital
                        storefronts, handle dynamic cart logistics, and anchor into leading payment gateways securely.</p>
                </div>
            </div>

            <div class="mt-12 text-center text-sm ">
                Investing in <span class="font-semibold text-foreground">professional WordPress development services</span>
                guarantees a dynamic, secure, and easily manageable infrastructure.
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-24 border-b border-outline-variant/30 bg-card/20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-20">
                <h2 class="text-4xl font-bold text-foreground mb-6">Our Comprehensive WordPress Services</h2>
                <p class="text-lg ">
                    We deliver specialized, end-to-end <span class="text-foreground font-medium">WordPress application
                        development</span> workflows engineered for cross-device compatibility.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div
                    class="p-8 rounded-2xl bg-card border border-border hover:border-primary/40 transition duration-300 flex flex-col justify-between">
                    <div>
                        <div class="text-xs font-bold uppercase tracking-widest text-primary mb-4">01</div>
                        <h3 class="text-xl font-bold text-foreground mb-3">Custom WordPress Theme Development</h3>
                        <p class=" text-sm leading-relaxed">Say goodbye to bloated, slow off-the-shelf
                            templates. We hand-code lightweight, unique themes tailored to your exact branding standards for
                            pixel-perfect presentation.</p>
                    </div>
                </div>

                <!-- Service 2 -->
                <div
                    class="p-8 rounded-2xl bg-card border border-border hover:border-primary/40 transition duration-300 flex flex-col justify-between">
                    <div>
                        <div class="text-xs font-bold uppercase tracking-widest text-primary mb-4">02</div>
                        <h3 class="text-xl font-bold text-foreground mb-3">WooCommerce Development</h3>
                        <p class=" text-sm leading-relaxed">Transform your site into a global sales
                            powerhouse. We build optimized eCommerce architectures that maximize checkouts, manage thousands
                            of SKUs, and keep sales fluid.</p>
                    </div>
                </div>

                <!-- Service 3 -->
                <div
                    class="p-8 rounded-2xl bg-card border border-border hover:border-primary/40 transition duration-300 flex flex-col justify-between">
                    <div>
                        <div class="text-xs font-bold uppercase tracking-widest text-primary mb-4">03</div>
                        <h3 class="text-xl font-bold text-foreground mb-3">Custom Plugin Engineering</h3>
                        <p class=" text-sm leading-relaxed">Need custom business logic? Our engineering
                            team designs secure, light, custom plugins that extend the core functionalities of WordPress
                            without dragging down speeds.</p>
                    </div>
                </div>

                <!-- Service 4 -->
                <div
                    class="p-8 rounded-2xl bg-card border border-border hover:border-primary/40 transition duration-300 flex flex-col justify-between">
                    <div>
                        <div class="text-xs font-bold uppercase tracking-widest text-primary mb-4">04</div>
                        <h3 class="text-xl font-bold text-foreground mb-3">API & Third-Party Integrations</h3>
                        <p class=" text-sm leading-relaxed">We connect your WordPress engine with
                            enterprise applications, including internal ERP systems, complex Hubspot CRM pipelines,
                            marketing automation tools, and legacy software.</p>
                    </div>
                </div>

                <!-- Service 5 -->
                <div
                    class="p-8 rounded-2xl bg-card border border-border hover:border-primary/40 transition duration-300 flex flex-col justify-between">
                    <div>
                        <div class="text-xs font-bold uppercase tracking-widest text-primary mb-4">05</div>
                        <h3 class="text-xl font-bold text-foreground mb-3">CMS Headless WordPress Solutions</h3>
                        <p class=" text-sm leading-relaxed">Experience ultimate speed. We decoupled the
                            admin panel using REST/GraphQL APIs, rendering ultra-fast frontends via modern tech stacks like
                            Next.js or Nuxt.</p>
                    </div>
                </div>

                <!-- Service 6 -->
                <div
                    class="p-8 rounded-2xl bg-card border border-border hover:border-primary/40 transition duration-300 flex flex-col justify-between">
                    <div>
                        <div class="text-xs font-bold uppercase tracking-widest text-primary mb-4">06</div>
                        <h3 class="text-xl font-bold text-foreground mb-3">24/7 Support & Optimization</h3>
                        <p class=" text-sm leading-relaxed">Websites require ongoing vigilance. We manage
                            routine cloud backups, database tuning, proactive security updates, and regular optimization to
                            prevent slowdowns.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Interactive Call To Action Container -->
    <section id="contact" class="py-24">
        <div class="max-w-6xl mx-auto px-6">
            <div class="relative bg-card rounded-3xl p-10 sm:p-16 border border-border overflow-hidden shadow-2xl">
                <div
                    class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-primary/10 rounded-full blur-[100px] -ml-64 -mb-64">
                </div>
                <div class="relative z-10 text-center max-w-3xl mx-auto">
                    <span class="text-primary font-bold text-sm tracking-widest uppercase block mb-3">Let’s Discuss Your
                        Web Strategy</span>
                    <h2 class="text-3xl sm:text-5xl font-bold text-foreground mb-6">Build a Future-Proof WordPress Site Today
                    </h2>
                    <p class=" text-lg mb-8 leading-relaxed">
                        Don't let sluggish templates or outdated plugins limit your user experience. Connect with our
                        dedicated technical team to launch a fast, responsive custom application.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ route('contact') }}" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
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

    <!-- Why Hire Our Developers (Card Section style match) -->
    <section class="py-24 border-b border-outline-variant/30">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-primary font-bold text-xs uppercase tracking-widest block mb-2">Our Quality
                    Standard</span>
                <h2 class="text-4xl font-bold text-foreground mb-6">Why Hire Our Dedicated WordPress Developers?</h2>
                <p class="text-lg ">
                    We combine technical mastery with transparent project pipelines to ensure your development journey runs
                    smoothly.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <div class="relative overflow-hidden p-6 rounded-2xl border border-border bg-card flex flex-col justify-between group">
                    <div class="absolute top-0 right-0 w-48 h-48 bg-primary/5 rounded-full blur-[60px] -mr-24 -mt-24">
                    </div>
                    <div>
                        <div
                            class="w-12 h-12 bg-primary/10 text-primary rounded-full border border-outline-variant/20 mb-5 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <x-icons.launch class="w-5 h-5" />
                        </div>
                        <h3 class="text-lg font-bold text-foreground mb-2">Core Web Vitals Focus</h3>
                        <p class=" text-xs sm:text-sm leading-relaxed">We optimize for performance. We
                            eliminate render-blocking elements to secure high page-speed scores on mobile and desktop
                            platforms.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="relative overflow-hidden p-6 rounded-2xl border border-border bg-card flex flex-col justify-between group">
                    <div class="absolute top-0 right-0 w-48 h-48 bg-primary/5 rounded-full blur-[60px] -mr-24 -mt-24">
                    </div>
                    <div>
                        <div
                            class="w-12 h-12 bg-primary/10 text-primary rounded-full border border-outline-variant/20 mb-5 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <x-icons.security class="w-5 h-5" />
                        </div>
                        <h3 class="text-lg font-bold text-foreground mb-2">Bulletproof Security</h3>
                        <p class=" text-xs sm:text-sm leading-relaxed">Our <strong
                                class="font-medium text-foreground">expert WordPress developers</strong> implement strict
                            directory hardening, brute-force filters, and automated malware monitoring modules.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="relative overflow-hidden p-6 rounded-2xl border border-border bg-card flex flex-col justify-between group">
                    <div class="absolute top-0 right-0 w-48 h-48 bg-primary/5 rounded-full blur-[60px] -mr-24 -mt-24">
                    </div>
                    <div>
                        <div
                            class="w-12 h-12 bg-primary/10 text-primary rounded-full border border-outline-variant/20 mb-5 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <x-icons.discover class="w-5 h-5" />
                        </div>
                        <h3 class="text-lg font-bold text-foreground mb-2">Strict IP Protection</h3>
                        <p class=" text-xs sm:text-sm leading-relaxed">Your unique concepts, databases,
                            and structural assets belong entirely to you. We work under strict, transparent NDA agreements.
                        </p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="relative overflow-hidden p-6 rounded-2xl border border-border bg-card flex flex-col justify-between group">
                    <div class="absolute top-0 right-0 w-48 h-48 bg-primary/5 rounded-full blur-[60px] -mr-24 -mt-24">
                    </div>
                    <div>
                        <div
                            class="w-12 h-12 bg-primary/10 text-primary rounded-full border border-outline-variant/20 mb-5 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <x-icons.whatsapp class="w-5 h-5" />
                        </div>
                        <h3 class="text-lg font-bold text-foreground mb-2">Agile Communication</h3>
                        <p class=" text-xs sm:text-sm leading-relaxed">Stay updated with transparent
                            tracking, clean code logs, staging links, and structured project milestones.</p>
                    </div>
                </div>
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
                        <span class="text-primary">Q.</span> Will my custom WordPress site be slow?
                    </h3>
                    <p class=" pl-6 text-sm sm:text-base leading-relaxed">
                        No. Pre-made templates load unneeded scripts, causing them to slow down. Our developers custom-build
                        clean, lightweight code frameworks, reducing bloat to achieve excellent scores on Google PageSpeed
                        Insights.
                    </p>
                </div>
                <!-- Q2 -->
                <div class="bg-card p-6 sm:p-8 rounded-2xl border border-border relative overflow-hidden">
                    <h3 class="text-lg font-bold text-foreground mb-3 flex items-start gap-2">
                        <span class="text-primary">Q.</span> Can you securely migrate my existing website to WordPress?
                    </h3>
                    <p class=" pl-6 text-sm sm:text-base leading-relaxed">
                        Yes. We manage database migrations from platforms like Drupal, Joomla, Shopify, or custom HTML
                        architectures into WordPress seamlessly, protecting URL structures and historical database records
                        while keeping SEO intact.
                    </p>
                </div>
                <!-- Q3 -->
                <div class="bg-card p-6 sm:p-8 rounded-2xl border border-border relative overflow-hidden">
                    <h3 class="text-lg font-bold text-foreground mb-3 flex items-start gap-2">
                        <span class="text-primary">Q.</span> Who owns the website after development wraps up?
                    </h3>
                    <p class=" pl-6 text-sm sm:text-base leading-relaxed">
                        You do. Upon completing milestones and finalizing payments, your business retains 100% full
                        intellectual ownership of the code, themes, plugins, and hosting server setups.
                    </p>
                </div>
            </div>
        </div>
    </section>



    {{-- Related Projects --}}
    <section class="py-24 border-t border-outline-variant/20">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-foreground mb-4">WordPress Showcase</h2>
                    <p class="">Blazing fast themes we've built for our clients.</p>
                </div>
                <a href="{{ route('portfolio') }}" class="text-primary font-bold hover:underline">View All Projects</a>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                <a href="{{ route('portfolio.tech-nukti') }}"
                    class="group rounded-2xl border border-border bg-card overflow-hidden transition-all hover:border-primary/30">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('assets/images/technukti.png') }}" alt="Tech Nukti"
                            class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-foreground mb-2 group-hover:text-primary transition-colors">Tech Nukti
                            – Custom Theme</h3>
                        <p class=" text-sm">100/100 PageSpeed scores with zero caching plugins.</p>
                    </div>
                </a>
                <a href="{{ route('portfolio.tech-upkar') }}"
                    class="group rounded-2xl border border-border bg-card overflow-hidden transition-all hover:border-primary/30">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('assets/images/techupkar.png') }}" alt="Tech Upkar"
                            class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-foreground mb-2 group-hover:text-primary transition-colors">TechUpkar
                            Theme</h3>
                        <p class=" text-sm">High-performance Genesis child theme for content sites.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- Footer Contact --}}
    @include('sections.contact')
@endsection
