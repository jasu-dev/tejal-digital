@extends('layouts.app')

@section('head')
    <title>Jixicloud | Custom WHMCS Hosting & Domain Management Portal</title>
    <meta name="description"
        content="Discover how Tejal Digital engineered Jixicloud, a Laravel-powered hosting management system with modular content management, live domain searches, and cPanel API hooks.">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="keywords"
        content="Jixicloud, Laravel hosting portal, WHMCS integration, live domain checker API, custom hosting CMS, cPanel automated billing, hosting dashboard developer">

    <!-- Open Graph -->
    <meta property="og:title" content="Jixicloud Case Study | Tejal Digital">
    <meta property="og:description"
        content="Scaling cloud hosting administration portals using Laravel, live API rate loops, and WHMCS panel integration.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/images/jixicloud.png') }}">

    <!-- Twitter Card -->
    <meta name="twitter:title" content="Jixicloud Hosting Platform | Project Showcase">
    <meta name="twitter:description"
        content="Building secure cPanel/WHMCS-powered custom billing portals for modern hosting brands.">
    <meta name="twitter:image" content="{{ asset('assets/images/jixicloud.png') }}">
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
                    <li class="text-on-surface font-medium">Jixicloud</li>
                </ol>
            </nav>

            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 mb-4 rounded-full bg-primary/10 border border-primary/30 text-primary-500 backdrop-blur-xl">
                        <span class="text-xs font-semibold">Custom Hosting SaaS</span>
                    </div>
                    <h1 class="text-3xl lg:text-5xl font-bold text-foreground mb-5">
                        Jixicloud <br>
                        <span class="text-gradient">Hosting Portal</span>
                    </h1>
                    <p class="text-xl text-on-surface/60 leading-relaxed mb-8">
                        A robust cloud services deployment dashboard featuring automated billing controls, cPanel orchestration hooks, and live domain searches.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="{{ route('contact') }}">
                            <x-form.primary-button type="button" class="rounded-full">
                                Build Similar Portal
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
                            <img src="{{ asset('assets/images/jixicloud.png') }}" alt="Jixicloud Portal Showcase" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                    </div>
                    {{-- Floating Tags --}}
                    <div
                        class="absolute -top-7 right-10 flex items-center gap-2 rounded-xl border border-border bg-background/95 backdrop-blur-xl px-4 py-3">
                        <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-500/15 text-green-500">
                            <x-icons.target class="w-4 h-4" />
                        </span>
                        <div class="text-xs">
                            <div class="text-muted-foreground">Domain Rates</div>
                            <div class="font-semibold text-foreground">API Sync Live</div>
                        </div>
                    </div>
                    <div
                        class="absolute -bottom-7 left-10 flex items-center gap-2 rounded-xl px-4 py-3 border border-border bg-background/95 backdrop-blur-xl">
                        <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-500/15 text-green-500">
                            <x-icons.plugin class="w-4 h-4" />
                        </span>
                        <div class="text-xs">
                            <div class="text-muted-foreground">Integration</div>
                            <div class="font-semibold text-foreground">WHMCS Automated</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Intro Context Block -->
    <section class="py-12 border-b border-outline-variant/20">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <p class="text-xl text-muted-foreground">
                "Checking domain registrar endpoints in real-time, executing hosting provisioning loops, and routing user billing invoices. We designed a clean, cPanel-integrated cloud portal."
            </p>
        </div>
    </section>

    <!-- Challenges & Objectives Section -->
    <section class="py-24 border-b border-outline-variant/20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-foreground mb-6">
                    Project <span class="text-gradient">Challenges & Objectives</span>
                </h2>
                <p class="text-xl text-on-surface/50 max-w-5xl mx-auto">
                    Displaying dynamic domain rates can trigger API timeouts. Hosting accounts provision needs secure automation:
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Objective 1 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <x-icons.launch class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3">Live Domain Lookup</h3>
                    <p class="text-sm leading-relaxed">Query external registrar REST APIs instantly without causing thread-blocks or slow client load times.</p>
                </div>
                <!-- Objective 2 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <x-icons.plugin class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3">WHMCS Panel Link</h3>
                    <p class="text-sm leading-relaxed">Integrate modular API layers with billing systems to display hosting product plans dynamically.</p>
                </div>
                <!-- Objective 3 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <x-icons.target class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3">Rate Schedulers</h3>
                    <p class="text-sm leading-relaxed">Implement scheduled chron processes to query exchange databases and adjust local domain purchase prices.</p>
                </div>
                <!-- Objective 4 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <x-icons.security class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3">cPanel Provision</h3>
                    <p class="text-sm leading-relaxed">Execute secure SSH API hooks to provision user hosting directory spaces upon receipt of payment.</p>
                </div>
            </div>
            <div class="mt-12 text-center text-sm">
                Deploying a <span class="font-semibold">custom-coded API gateway portal</span> yields robust hosting services performance.
            </div>
        </div>
    </section>

    <!-- Services / Solutions Section -->
    <section class="py-24 border-b border-outline-variant/20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-foreground mb-6">
                    How We Built It: <span class="text-gradient">API Solutions Architecture</span>
                </h2>
                <p class="text-xl text-on-surface/50 max-w-5xl mx-auto">
                    We engineered a secure cloud provisioning workflow using custom PHP wrapper classes, Redis database caching, and WHMCS client automation.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-14">
                <!-- Solution 1 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">01</span>
                    <h3 class="text-xl font-bold mb-3">Registrar API Wrapper</h3>
                    <p class="text-sm leading-relaxed">Developing secure HTTP lookup classes to fetch domain details, including availability and TLD purchase price metrics.</p>
                </div>
                <!-- Solution 2 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">02</span>
                    <h3 class="text-xl font-bold mb-3">WHMCS Automated Sync</h3>
                    <p class="text-sm leading-relaxed">Linking billing API tables directly in Laravel, displaying matching cloud pricing indexes inside user accounts.</p>
                </div>
                <!-- Solution 3 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">03</span>
                    <h3 class="text-xl font-bold mb-3">Domain Pricing Cache</h3>
                    <p class="text-sm leading-relaxed">Deploying Redis key-value cache lines to store domain records, preventing registrar rate throttling limits.</p>
                </div>
                <!-- Solution 4 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">04</span>
                    <h3 class="text-xl font-bold mb-3">Invoice Automation</h3>
                    <p class="text-sm leading-relaxed">Wiring webhooks database listeners to trigger order statuses changes, logging transaction records instantly.</p>
                </div>
                <!-- Solution 5 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">05</span>
                    <h3 class="text-xl font-bold mb-3">cPanel REST Automation</h3>
                    <p class="text-sm leading-relaxed">Executing authenticated UAPI commands to deploy user database tables, domains routing, and SSL configurations.</p>
                </div>
                <!-- Solution 6 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">06</span>
                    <h3 class="text-xl font-bold mb-3">Modular Layout Editor</h3>
                    <p class="text-sm leading-relaxed">Structuring a custom CMS console inside the control board, letting editors create hosting landings modularly.</p>
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
    <section class="py-24 border-b border-outline-variant/20">
        <div class="max-w-5xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-foreground mb-6">Frequently Asked Questions</h2>
            </div>

            <div class="space-y-6">
                <!-- Q1 -->
                <div class="p-6 rounded-2xl border border-border bg-card">
                    <h3 class="text-lg font-bold mb-3 flex items-start gap-2">
                        <span class="text-primary">Q.</span> How are live domain searches optimized to prevent timeouts?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        Searches use cached responses stored in Redis for up to 10 minutes. When a cache-miss occurs, asynchronous AJAX requests query the registrar API, maintaining sub-second frontend rendering speed.
                    </p>
                </div>
                <!-- Q2 -->
                <div class="p-6 rounded-2xl border border-border bg-card">
                    <h3 class="text-lg font-bold mb-3 flex items-start gap-2">
                        <span class="text-primary">Q.</span> Does Jixicloud support automated client currency updates?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        Yes. Chron schedulers query currency exchange APIs nightly, updating pricing models for international buyers across different billing countries automatically.
                    </p>
                </div>
                <!-- Q3 -->
                <div class="p-6 rounded-2xl border border-border bg-card">
                    <h3 class="text-lg font-bold mb-3 flex items-start gap-2">
                        <span class="text-primary">Q.</span> What happens when a user purchases a hosting plan?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        The webhook confirms transaction completion, then notifies the WHMCS registrar gateway. Jixicloud calls cPanel APIs to provision account folders and email login credentials automatically.
                    </p>
                </div>
                <!-- Q4 -->
                <div class="p-6 rounded-2xl border border-border bg-card">
                    <h3 class="text-lg font-bold mb-3 flex items-start gap-2">
                        <span class="text-primary">Q.</span> Can admins update hosting price matrix elements without modifying the theme?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        Yes. The admin dashboard features a custom dynamic product matrix editor, enabling super-admins to modify RAM, disk space, and prices directly in database fields.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Related Projects --}}
    <section class="py-24 border-b border-outline-variant/20">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-foreground mb-4">Other Projects</h2>
                    <p class="text-on-surface/60">See how we've built custom portals to drive growth.</p>
                </div>
                <a href="{{ route('portfolio') }}" class="text-primary font-bold hover:underline">View All Projects</a>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                <a href="{{ route('portfolio.gujjutak-news') }}"
                    class="group rounded-2xl border border-border bg-card overflow-hidden transition-all hover:border-primary/30">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('assets/images/gujjutak.png') }}" alt="Gujjutak News Portal"
                            class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-foreground mb-2 group-hover:text-primary transition-colors">Gujjutak News Portal</h3>
                        <p class="text-on-surface/60 text-sm">Multilingual media platform with Redis page caching frameworks.</p>
                    </div>
                </a>
                <a href="{{ route('portfolio.attendance-manager') }}"
                    class="group rounded-2xl border border-border bg-card overflow-hidden transition-all hover:border-primary/30">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('assets/images/attendance.png') }}" alt="Attendance Manager"
                            class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-foreground mb-2 group-hover:text-primary transition-colors">Attendance Manager System</h3>
                        <p class="text-on-surface/60 text-sm">Employee geolocation tracking with camera verification checks.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- Footer Contact --}}
    @include('sections.contact')
@endsection
