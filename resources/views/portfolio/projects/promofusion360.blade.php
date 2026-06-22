@extends('layouts.app')

@section('head')
    <title>PromoFusion360 | Laravel-Based Earning & Referral Platform</title>
    <meta name="description"
        content="Learn how we built PromoFusion360, a high-traffic earning platform featuring tiered subscriptions, dual payment gateways, and a robust referral system.">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="keywords"
        content="PromoFusion360, Earning Platform, Referral Marketing Software, Laravel E-commerce, UPI Payment Integration, Cashfree Gateway Laravel">

    <!-- Open Graph -->
    <meta property="og:title" content="PromoFusion360 Case Study | Tejal Digital">
    <meta property="og:description"
        content="Scaling a referral-based earning platform with Laravel and integrated payment solutions.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/images/promofusion360.png') }}">

    <!-- Twitter Card -->
    <meta name="twitter:title" content="PromoFusion360 System | Project Showcase">
    <meta name="twitter:description"
        content="Scaling referral-based portals with custom commission engines.">
    <meta name="twitter:image" content="{{ asset('assets/images/promofusion360.png') }}">
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
                    <li class="text-on-surface font-medium">PromoFusion360</li>
                </ol>
            </nav>

            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 mb-4 rounded-full bg-primary/10 border border-primary/30 text-primary-500 backdrop-blur-xl">
                        <span class="text-xs font-semibold">Custom Fintech Portal</span>
                    </div>
                    <h1 class="text-3xl lg:text-5xl font-bold text-foreground mb-5">
                        PromoFusion360 <br>
                        <span class="text-gradient">Earning Platform</span>
                    </h1>
                    <p class="text-xl text-on-surface/60 leading-relaxed mb-8">
                        A high-traffic, Laravel-powered referral marketing system enabling user monetization through video watch-and-earn tasks, dual gateways, and automated payouts.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="{{ route('contact') }}">
                            <x-form.primary-button type="button" class="rounded-full">
                                Build Similar App
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
                            <img src="{{ asset('assets/images/promofusion360.png') }}" alt="PromoFusion360 Landing Overview" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                    </div>
                    {{-- Floating Tags --}}
                    <div
                        class="absolute -top-7 right-10 flex items-center gap-2 rounded-xl border border-border bg-background/95 backdrop-blur-xl px-4 py-3">
                        <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-500/15 text-green-500">
                            <x-icons.users class="w-4 h-4" />
                        </span>
                        <div class="text-xs">
                            <div class="text-muted-foreground">Scale</div>
                            <div class="font-semibold text-foreground">10k+ Active Users</div>
                        </div>
                    </div>
                    <div
                        class="absolute -bottom-7 left-10 flex items-center gap-2 rounded-xl px-4 py-3 border border-border bg-background/95 backdrop-blur-xl">
                        <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-500/15 text-green-500">
                            <x-icons.launch class="w-4 h-4" />
                        </span>
                        <div class="text-xs">
                            <div class="text-muted-foreground">Uptime</div>
                            <div class="font-semibold text-foreground">99.9% Success Rate</div>
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
                "Managing high concurrent user traffic, calculating multi-level referral commissions, and validating secure withdrawals. We built a robust fintech portal equipped with dual payment gateways and anti-fraud safeguards."
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
                    The primary challenges were tracking hierarchical commissions across multiple levels without latency and integrating payment routing systems securely.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Benefit 1 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border-1 border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <x-icons.launch class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3">Tiered Plans</h3>
                    <p class="text-sm leading-relaxed">Establish complex subscription levels with customized commission values and differing daily task allocations.</p>
                </div>
                <!-- Benefit 2 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border-1 border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <x-icons.security class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3">Dual Payment Gateways</h3>
                    <p class="text-sm leading-relaxed">Integrate double payment processors to maintain 99.9% uptime, failover paths, and direct payouts to user accounts.</p>
                </div>
                <!-- Benefit 3 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border-1 border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <x-icons.target class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3">Anti-Fraud Safeguards</h3>
                    <p class="text-sm leading-relaxed">Implement secure device fingerprinting and IP verification to block duplicate client accounts and referral system gaming.</p>
                </div>
                <!-- Benefit 4 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border-1 border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <x-icons.plugin class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3">Background Queue Calc</h3>
                    <p class="text-sm leading-relaxed">Offload multi-level network payouts to asynchronous queues to ensure rapid dashboard performance at peak hours.</p>
                </div>
            </div>
            <div class="mt-12 text-center text-sm">
                Implementing a <span class="font-semibold">custom fintech application</span> guarantees secure transaction records and absolute platform speed.
            </div>
        </div>
    </section>

    <!-- Services / Solutions Section -->
    <section class="py-24 border-b border-outline-variant/30">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-foreground mb-6">
                    How We Built It: <span class="text-gradient">Laravel Solutions</span>
                </h2>
                <p class="text-xl text-on-surface/50 max-w-5xl mx-auto">
                    We engineered a robust platform using Laravel, queues, secure session logs, and Cashfree payment routing.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-14">
                <!-- Service 1 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">01</span>
                    <h3 class="text-xl font-bold mb-3">Recursive Referral Trees</h3>
                    <p class="text-sm leading-relaxed">Coding multi-level network relationships with fast MySQL queries to compute precise referral commission cuts instantly.</p>
                </div>
                <!-- Service 2 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">02</span>
                    <h3 class="text-xl font-bold mb-3">Dual Gateway Failover</h3>
                    <p class="text-sm leading-relaxed">Integrating double payment gateway endpoints (Cashfree and UPI) to route deposit channels in case of vendor downtime.</p>
                </div>
                <!-- Service 3 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">03</span>
                    <h3 class="text-xl font-bold mb-3">Watch & Earn Tracker</h3>
                    <p class="text-sm leading-relaxed">Creating secure, tamper-proof JavaScript trackers to verify video watch minutes before rewarding credits in database tables.</p>
                </div>
                <!-- Service 4 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">04</span>
                    <h3 class="text-xl font-bold mb-3">Anti-Fraud Telemetry</h3>
                    <p class="text-sm leading-relaxed">Comparing user IP addresses, request footprints, and browser keys to intercept duplicate account creations and block proxy usage.</p>
                </div>
                <!-- Service 5 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">05</span>
                    <h3 class="text-xl font-bold mb-3">Central Admin Console</h3>
                    <p class="text-sm leading-relaxed">Structuring a powerful super-admin console to manage payouts, customize plan variables, and review financial reports.</p>
                </div>
                <!-- Service 6 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">06</span>
                    <h3 class="text-xl font-bold mb-3">Background Queue Handlers</h3>
                    <p class="text-sm leading-relaxed">Moving heavy commission distribution loops and email alert templates to background queue processes to ensure sub-second response times.</p>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="{{ route('contact') }}">
                    <x-form.primary-button type="button" class="px-7 py-3 rounded-2xl">
                        <span>Get Free Consultation</span>
                        <x-icons.go class="w-4 h-4" />
                    </x-form.primary-button>
                </a>
                <a href="{{ config('staticdata.whatsapp_url') }}" class="flex">
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
                        <span class="text-primary">Q.</span> How does the multi-level referral system track commissions?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        It uses a recursive database schema mapping parent-child relationships. When a user purchases a plan, the system traverses up to 3 levels, calculating specific percentages and dispatching payouts via queues.
                    </p>
                </div>
                <!-- Q2 -->
                <div class="p-6 rounded-2xl border border-border bg-card">
                    <h3 class="text-lg font-bold mb-3 flex items-start gap-2">
                        <span class="text-primary">Q.</span> Why integrate dual payment gateways?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        To provide redundancy. If Cashfree encounters temporary network issues, the UPI router handles transaction deposits automatically, maintaining 99.9% platform availability.
                    </p>
                </div>
                <!-- Q3 -->
                <div class="p-6 rounded-2xl border border-border bg-card">
                    <h3 class="text-lg font-bold mb-3 flex items-start gap-2">
                        <span class="text-primary">Q.</span> How do you prevent users from creating fake referral accounts?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        We deploy device fingerprinting, tracking browser footprints, cookies, IP coordinate checks, and email verification. Multiple accounts matching critical tracking footprints are flagged.
                    </p>
                </div>
                <!-- Q4 -->
                <div class="p-6 rounded-2xl border border-border bg-card">
                    <h3 class="text-lg font-bold mb-3 flex items-start gap-2">
                        <span class="text-primary">Q.</span> What tools are used to monitor server performance?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        We utilize Laravel Horizon to monitor queue execution health, coupled with performance diagnostics, to ensure background tasks complete under 500ms.
                    </p>
                </div>
                <!-- Q5 -->
                <div class="p-6 rounded-2xl border border-border bg-card">
                    <h3 class="text-lg font-bold mb-3 flex items-start gap-2">
                        <span class="text-primary">Q.</span> Can commission plans be customized dynamically by admins?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        Yes. The custom super-admin console includes configuration sliders to adjust commission rates, plan costs, and withdrawal boundaries without altering the source code.
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
                <a href="{{ route('portfolio.attendance-manager') }}"
                    class="group rounded-2xl border border-border bg-card overflow-hidden transition-all hover:border-primary/30">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('assets/images/attendance.png') }}" alt="Attendance Manager"
                            class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-foreground mb-2 group-hover:text-primary transition-colors">Attendance Manager System</h3>
                        <p class="text-on-surface/60 text-sm">Geo-fenced attendance tracking with selfie verification.</p>
                    </div>
                </a>
                <a href="{{ route('portfolio.krishna-academy') }}"
                    class="group rounded-2xl border border-border bg-card overflow-hidden transition-all hover:border-primary/30">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('assets/images/krishna-academy.png') }}" alt="Krishna Academy"
                            class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-foreground mb-2 group-hover:text-primary transition-colors">
                            KrishnaAcademy – LMS Platform</h3>
                        <p class="text-on-surface/60 text-sm">Educational platform with video lessons and quiz modules.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- Footer Contact --}}
    @include('sections.contact')
@endsection
