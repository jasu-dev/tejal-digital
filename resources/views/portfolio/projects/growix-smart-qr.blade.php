@extends('layouts.app')

@section('head')
    <title>Growix Smart QR | Custom Google Review Filter & Reputation SaaS</title>
    <meta name="description"
        content="Discover how Tejal Digital built Growix, a premium review filtering SaaS using dynamic QR codes. Divert negative reviews to private logs while routing positive ones to Google.">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="keywords"
        content="Growix, Smart QR code review, Google reviews filter, online reputation management software, customer rating SaaS, Razorpay subscription Laravel, feedback routing platform">

    <!-- Open Graph -->
    <meta property="og:title" content="Growix Smart QR Case Study | Tejal Digital">
    <meta property="og:description"
        content="Building a reputation management SaaS with Laravel, dynamic QR generation, and custom rating redirect rules.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/images/growix.png') }}">

    <!-- Twitter Card -->
    <meta name="twitter:title" content="Growix Smart QR | Project Showcase">
    <meta name="twitter:description"
        content="Scaling businesses with intelligent QR codes that filter reviews and enhance online standings.">
    <meta name="twitter:image" content="{{ asset('assets/images/growix.png') }}">
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
                    <li class="text-on-surface font-medium">Growix: Smart QR</li>
                </ol>
            </nav>

            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 mb-4 rounded-full bg-primary/10 border border-primary/30 text-primary-500 backdrop-blur-xl">
                        <span class="text-xs font-semibold">Custom SaaS Platform</span>
                    </div>
                    <h1 class="text-3xl lg:text-5xl font-bold text-foreground mb-5">
                        Growix: <br>
                        <span class="text-gradient">Smart QR System</span>
                    </h1>
                    <p class="text-xl text-on-surface/60 leading-relaxed mb-8">
                        An intelligent reputation engine using dynamic QR routing blocks to direct positive reviews directly to Google, while collecting critical feedback privately.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="{{ route('contact') }}">
                            <x-form.primary-button type="button" class="rounded-full">
                                Build Similar SaaS
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
                            <img src="{{ asset('assets/images/growix.png') }}" alt="Growix Application Dashboard" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                    </div>
                    {{-- Floating Tags --}}
                    <div
                        class="absolute -top-7 right-10 flex items-center gap-2 rounded-xl border border-border bg-background/95 backdrop-blur-xl px-4 py-3">
                        <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-500/15 text-green-500">
                            <x-icons.star class="w-4 h-4" />
                        </span>
                        <div class="text-xs">
                            <div class="text-muted-foreground">Rating</div>
                            <div class="font-semibold text-foreground">85% Boost Rate</div>
                        </div>
                    </div>
                    <div
                        class="absolute -bottom-7 left-10 flex items-center gap-2 rounded-xl px-4 py-3 border border-border bg-background/95 backdrop-blur-xl">
                        <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-500/15 text-green-500">
                            <x-icons.target class="w-4 h-4" />
                        </span>
                        <div class="text-xs">
                            <div class="text-muted-foreground">Routing</div>
                            <div class="font-semibold text-foreground">Reviews Filtered</div>
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
                "Filtering public customer opinions, generating customizable dynamic QR layouts, and tracking multi-store feedback logs. We engineered a robust reputation management SaaS portal."
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
                    Dissatisfied clients rush to write negative public reviews, while happy ones rarely do. The goal was to build a filtering loop:
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Objective 1 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <x-icons.target class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3">Intelligent Filter</h3>
                    <p class="text-sm leading-relaxed">Direct 4-5 star reviews directly to Google, while steering lower ratings to private logs forms.</p>
                </div>
                <!-- Objective 2 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <x-icons.plugin class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3">Dynamic QR Codes</h3>
                    <p class="text-sm leading-relaxed">Generate unique vectors matching business IDs instantly, allowing quick downloads for counter placards.</p>
                </div>
                <!-- Objective 3 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <x-icons.launch class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3">Subscription Billing</h3>
                    <p class="text-sm leading-relaxed">Automate month/year subscription setups via Razorpay, enabling clean dynamic paywall gates.</p>
                </div>
                <!-- Objective 4 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <x-icons.users class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3">Feedback Alerts</h3>
                    <p class="text-sm leading-relaxed">Notify store owners via real-time alerts the moment a negative rating is captured to enable quick resolutions.</p>
                </div>
            </div>
            <div class="mt-12 text-center text-sm">
                Deploying a <span class="font-semibold">custom reputation management portal</span> increases positive ratings and preserves consumer trust.
            </div>
        </div>
    </section>

    <!-- Services / Solutions Section -->
    <section class="py-24 border-b border-outline-variant/30">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-foreground mb-6">
                    How We Built It: <span class="text-gradient">SaaS Solutions Architecture</span>
                </h2>
                <p class="text-xl text-on-surface/50 max-w-5xl mx-auto">
                    We engineered a robust platform using Laravel multi-tenant subscriptions, dynamic QR vectors generation, and database ratings routing logic.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-14">
                <!-- Solution 1 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">01</span>
                    <h3 class="text-xl font-bold mb-3">Rating Filter Logic</h3>
                    <p class="text-sm leading-relaxed">Routing customer feedback endpoints dynamically based on raw star counts to direct users to correct public or private destinations.</p>
                </div>
                <!-- Solution 2 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">02</span>
                    <h3 class="text-xl font-bold mb-3">Dynamic QR Renders</h3>
                    <p class="text-sm leading-relaxed">Leveraging PHP vectors library to render custom QR codes matching business dashboard settings dynamically without latency.</p>
                </div>
                <!-- Solution 3 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">03</span>
                    <h3 class="text-xl font-bold mb-3">Razorpay SaaS Flow</h3>
                    <p class="text-sm leading-relaxed">Seamless recurring subscription billing models mapped in Laravel to provision client access gates smoothly.</p>
                </div>
                <!-- Solution 4 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">04</span>
                    <h3 class="text-xl font-bold mb-3">Private Feedback Logs</h3>
                    <p class="text-sm leading-relaxed">Securing negative review logs inside encrypted MySQL database schema logs, accessible only by verified administrators.</p>
                </div>
                <!-- Solution 5 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">05</span>
                    <h3 class="text-xl font-bold mb-3">Instant Alerts Pipeline</h3>
                    <p class="text-sm leading-relaxed">Connecting SMS and email triggers to notify client executives instantly when negative logs are posted.</p>
                </div>
                <!-- Solution 6 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">06</span>
                    <h3 class="text-xl font-bold mb-3">White-Label Branding</h3>
                    <p class="text-sm leading-relaxed">Implementing dynamic client theme stylesheets, allowing store owners to customize feedback headers with brand vectors.</p>
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
                        <span class="text-primary">Q.</span> How does the smart routing logic direct reviews?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        When a customer scans a table QR, they are presented with a rating screen. If they choose 4 or 5 stars, they are routed to the public Google Review page. If they choose 1-3 stars, they are sent to a private contact page.
                    </p>
                </div>
                <!-- Q2 -->
                <div class="p-6 rounded-2xl border border-border bg-card">
                    <h3 class="text-lg font-bold mb-3 flex items-start gap-2">
                        <span class="text-primary">Q.</span> Can we customize the landing pages for each business table?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        Yes. The SaaS console includes color pickers and image upload controls, letting businesses white-label review screens with their custom logos and styling.
                    </p>
                </div>
                <!-- Q3 -->
                <div class="p-6 rounded-2xl border border-border bg-card">
                    <h3 class="text-lg font-bold mb-3 flex items-start gap-2">
                        <span class="text-primary">Q.</span> How does the notification pipeline dispatch alerts?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        Low reviews trigger background jobs that dispatch instant SMS and email notifications to the restaurant manager, giving them the chance to resolve issues before the customer leaves.
                    </p>
                </div>
                <!-- Q4 -->
                <div class="p-6 rounded-2xl border border-border bg-card">
                    <h3 class="text-lg font-bold mb-3 flex items-start gap-2">
                        <span class="text-primary">Q.</span> Are subscription paywalls handled automatically?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        Yes. Razorpay handles payment events. If a user cancels or misses a renewal payment, webhook triggers automatically freeze their active QR redirection pages.
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
                <a href="{{ route('portfolio.kifayat-card') }}"
                    class="group rounded-2xl border border-border bg-card overflow-hidden transition-all hover:border-primary/30">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('assets/images/kifayatcard.png') }}" alt="Kifayat Card"
                            class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-foreground mb-2 group-hover:text-primary transition-colors">Kifayat Card</h3>
                        <p class="text-on-surface/60 text-sm">Merchant loyalty ledger system with secure QR code scanners.</p>
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
