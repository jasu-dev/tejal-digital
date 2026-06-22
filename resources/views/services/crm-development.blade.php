@extends('layouts.app')

@section('head')
    <title>Custom CRM & ERP Development Services | Scalable Business Systems</title>
    <meta name="description"
        content="Boost business efficiency with custom CRM & ERP systems. Manage leads, track sales pipelines, automate workflows, and integrate ERP systems with Tejal Digital.">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="keywords"
        content="Custom CRM Development, ERP Software Services, Sales Pipeline Software, Lead Management System, Bespoke CRM Solutions, Enterprise Resource Planning, Business Automation Software">

    <!-- Open Graph -->
    <meta property="og:title" content="Custom CRM & ERP Development Services | Tejal Digital">
    <meta property="og:description"
        content="Scale your sales and operations with a custom CRM/ERP system designed specifically for your business workflow.">
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
                    <li class="text-on-surface font-medium">Custom CRM Development</li>
                </ol>
            </nav>

            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 mb-4 rounded-full bg-primary/10 border border-primary/30 text-primary-500 backdrop-blur-xl">
                        <span class="text-xs font-semibold">Bespoke Enterprise Operations</span>
                    </div>
                    <h1 class="text-3xl lg:text-5xl font-bold text-foreground mb-5">
                        Custom CRM & <br>
                        <span class="text-gradient">ERP Development</span> Services
                    </h1>
                    <p class="text-xl text-on-surface/60 leading-relaxed mb-8">
                        Stop struggling with generic SaaS tools and per-user monthly licensing fees. We build bespoke Customer Relationship Management (CRM) and Enterprise Resource Planning (ERP) systems that align perfectly with your operations and scale with your growth.
                    </p>
                    <div class="flex flex-wrap gap-4">
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
                            class="absolute inset-0 bg-gradient-to-br from-primary/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        </div>
                        <x-icons.users class="w-32 h-32 text-primary relative z-10" />
                    </div>
                    {{-- Floating Tags --}}
                    <div
                        class="absolute -top-7 right-10 flex items-center gap-2 rounded-xl border border-border bg-background/95 backdrop-blur-xl px-4 py-3">
                        <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-500/15 text-green-500">
                            <x-icons.security class="w-4 h-4" />
                        </span>
                        <div class="text-xs">
                            <div class="text-muted-foreground">Security</div>
                            <div class="font-semibold text-foreground">100% Data Ownership</div>
                        </div>
                    </div>
                    <div
                        class="absolute -bottom-7 left-10 flex items-center gap-2 rounded-xl px-4 py-3 border border-border bg-background/95 backdrop-blur-xl">
                        <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-500/15 text-green-500">
                            <x-icons.launch class="w-4 h-4" />
                        </span>
                        <div class="text-xs">
                            <div class="text-muted-foreground">Licensing</div>
                            <div class="font-semibold text-foreground">No Per-User Fees</div>
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
                "No per-user licensing fees, no rigid workflow limits, and absolute data control. We design tailormade business administration platforms that optimize operations, streamline communication, and eliminate manual redundancy."
            </p>
        </div>
    </section>

    <!-- Why Choose CRM/ERP Section -->
    <section class="py-24 border-b border-outline-variant/30">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-foreground mb-6">
                    Why Invest in <span class="text-gradient">Custom CRM & ERP Platforms</span>?
                </h2>
                <p class="text-xl text-on-surface/50 max-w-5xl mx-auto">
                    Off-the-shelf software forces your business to adapt to its limitations. Our custom engineering keeps you in control of your data, rules, and workflows.
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
                    <h3 class="text-xl font-bold mb-3">Zero License Fees</h3>
                    <p class="text-sm leading-relaxed">Eliminate unpredictable monthly subscription costs. Pay once for development and add unlimited team members without added fees.</p>
                </div>
                <!-- Benefit 2 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border-1 border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <x-icons.tools class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3">100% Tailored Workflows</h3>
                    <p class="text-sm leading-relaxed">Bespoke modules engineered precisely around your sales pipeline stages, asset tracking, inventory rules, and operational workflows.</p>
                </div>
                <!-- Benefit 3 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border-1 border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <x-icons.security class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3">Complete Data Control</h3>
                    <p class="text-sm leading-relaxed">Keep sensitive customer logs, lead source lists, and proprietary company transactions private on your own secured cloud infrastructure.</p>
                </div>
                <!-- Benefit 4 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <x-icons.plugin class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3">Seamless Automations</h3>
                    <p class="text-sm leading-relaxed">Connect bidirectionally with business tools, transaction gateways, CRM pipelines, accounting tools, and external logistics tracking portals.</p>
                </div>
            </div>
            <div class="mt-12 text-center text-sm">
                Investing in <span class="font-semibold">custom CRM & ERP engineering</span> guarantees a future-proof, unified system tailored for business automation.
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-24 border-b border-outline-variant/30">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-foreground mb-6">
                    Our Custom <span class="text-gradient">CRM & ERP Solutions</span>
                </h2>
                <p class="text-xl text-on-surface/50 max-w-5xl mx-auto">
                    We offer end-to-end CRM and ERP development to centralize and automate your business operations.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-14">
                <!-- Service 1 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">01</span>
                    <h3 class="text-xl font-bold mb-3">Custom CRM Development</h3>
                    <p class="text-sm leading-relaxed">Design drag-and-drop deal pipelines, log client contact histories, track conversion rates, and build custom sales dashboards for agency and service teams.</p>
                </div>
                <!-- Service 2 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">02</span>
                    <h3 class="text-xl font-bold mb-3">Bespoke ERP Software</h3>
                    <p class="text-sm leading-relaxed">Centralize resource management. Track real-time inventory levels, manage supplier networks, log assets, and structure automated procurement pipelines.</p>
                </div>
                <!-- Service 3 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">03</span>
                    <h3 class="text-xl font-bold mb-3">Lead Routing Automation</h3>
                    <p class="text-sm leading-relaxed">Build smart routers that capture leads from website forms, social campaigns, and third-party feeds, assigning them instantly to sales agents.</p>
                </div>
                <!-- Service 4 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">04</span>
                    <h3 class="text-xl font-bold mb-3">Invoice & Payment Modules</h3>
                    <p class="text-sm leading-relaxed">Integrate subscription billing portals, generate automated HTML/PDF invoices, handle automated client notifications, and track payment collections.</p>
                </div>
                <!-- Service 5 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">05</span>
                    <h3 class="text-xl font-bold mb-3">Task & Calendar Tracking</h3>
                    <p class="text-sm leading-relaxed">Bespoke team calendars, activity logging logs, notification reminders, task management boards, and client meeting notes in a single portal.</p>
                </div>
                <!-- Service 6 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">06</span>
                    <h3 class="text-xl font-bold mb-3">Operational Reporting</h3>
                    <p class="text-sm leading-relaxed">Develop customized query builders and visual reports to evaluate customer lifetime value, pipeline trends, sales goals, and financial metrics.</p>
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
                        <span class="text-primary">Q.</span> Why should I build a custom CRM/ERP instead of using Salesforce or HubSpot?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        Off-the-shelf software charges high monthly per-user licensing fees, which become very expensive as your team expands. They also offer rigid feature structures that force you to adapt your workflows. A custom CRM/ERP has a one-time development cost, allows unlimited users, and matches your business processes exactly.
                    </p>
                </div>
                <!-- Q2 -->
                <div class="p-6 rounded-2xl border border-border bg-card">
                    <h3 class="text-lg font-bold mb-3 flex items-start gap-2">
                        <span class="text-primary">Q.</span> Can our custom CRM/ERP integrate with tools we already use?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        Yes, absolutely. We design custom API connectors to sync your CRM/ERP with external channels like Outlook/Gmail, payment gateways (Stripe, Razorpay), QuickBooks, marketing tools, and logistics platforms.
                    </p>
                </div>
                <!-- Q3 -->
                <div class="p-6 rounded-2xl border border-border bg-card">
                    <h3 class="text-lg font-bold mb-3 flex items-start gap-2">
                        <span class="text-primary">Q.</span> Who owns the source code and data of our custom system?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        You do. Once development is finalized and payments are cleared, your business receives 100% intellectual property rights, database ownership, and full source code control.
                    </p>
                </div>
                <!-- Q4 -->
                <div class="p-6 rounded-2xl border border-border bg-card">
                    <h3 class="text-lg font-bold mb-3 flex items-start gap-2">
                        <span class="text-primary">Q.</span> Is a custom CRM/ERP secure for storing sensitive business data?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        Security is our priority. We implement OAuth/JWT authentication, database encryption, rate limiting, secure directory permissions, and SSL/TLS to protect all user logs and client metrics.
                    </p>
                </div>
                <!-- Q5 -->
                <div class="p-6 rounded-2xl border border-border bg-card">
                    <h3 class="text-lg font-bold mb-3 flex items-start gap-2">
                        <span class="text-primary">Q.</span> How long does it take to build a custom CRM/ERP system?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        Depending on operational complexity, module counts, and database sync requirements, custom development typically takes 8 to 14 weeks. We build the platform in clear phases to ensure team testing at each milestone.
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
                    <h2 class="text-3xl lg:text-4xl font-bold text-foreground mb-4">Related Projects</h2>
                    <p class="text-on-surface/60">See how we've built custom systems to help businesses manage growth.</p>
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
                        <p class="text-on-surface/60 text-sm">Internal CRM for managing employee check-ins and performance.</p>
                    </div>
                </a>
                <a href="{{ route('portfolio.promofusion360') }}"
                    class="group rounded-2xl border border-border bg-card overflow-hidden transition-all hover:border-primary/30">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('assets/images/promofusion360.png') }}" alt="PromoFusion360 Portal"
                            class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-foreground mb-2 group-hover:text-primary transition-colors">PromoFusion360 Portal</h3>
                        <p class="text-on-surface/60 text-sm">User and admin panels for tracking referrals and sales earnings.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- Footer Contact --}}
    @include('sections.contact')
@endsection
