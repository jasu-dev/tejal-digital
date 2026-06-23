@extends('layouts.app')

@section('head')
    <title>SaaS Application Development Services | Build Scalable Products</title>
    <meta name="description"
        content="Expert SaaS application development services. We build secure, multi-tenant cloud software with automated subscription billing, custom client dashboards, and startup MVPs.">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="keywords"
        content="SaaS Application Development, Multi-tenant Architecture, Subscription Billing System, SaaS MVP Development, Cloud Software Development, Stripe Billing Integration, Custom SaaS Dashboards">

    <!-- Open Graph -->
    <meta property="og:title" content="SaaS Application Development Services | Tejal Digital">
    <meta property="og:description"
        content="Turn your software concept into a profitable subscription product with secure multi-tenant infrastructure.">
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
                    <li class=" font-medium">SaaS Development</li>
                </ol>
            </nav>

            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 mb-4 rounded-full bg-primary/10 border border-primary/30 text-primary-500 backdrop-blur-xl">
                        <span class="text-xs font-semibold">Scalable Cloud Architectures</span>
                    </div>
                    <h1 class="text-3xl lg:text-5xl font-bold text-foreground mb-5">
                        High-Performance <br>
                        <span class="text-gradient">SaaS Application</span> Development
                    </h1>
                    <p class="text-xl  leading-relaxed mb-8">
                        Turn your software idea into a profitable subscription product. We build production-ready SaaS solutions featuring secure multi-tenant partitioning, automated billing, and optimized user dashboards.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="{{ route('contact') }}">
                            <x-form.primary-button type="button" class="rounded-full">
                                Start Your SaaS Project
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
                        <x-icons.dashboard class="w-32 h-32 text-primary relative z-10" />
                    </div>
                    {{-- Floating Tags --}}
                    <div
                        class="absolute -top-7 right-10 flex items-center gap-2 rounded-xl border border-border bg-background/95 backdrop-blur-xl px-4 py-3">
                        <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-500/15 text-green-500">
                            <x-icons.security class="w-4 h-4" />
                        </span>
                        <div class="text-xs">
                            <div class="text-muted-foreground">Infrastructure</div>
                            <div class="font-semibold text-foreground">Multi-Tenant Setup</div>
                        </div>
                    </div>
                    <div
                        class="absolute -bottom-7 left-10 flex items-center gap-2 rounded-xl px-4 py-3 border border-border bg-background/95 backdrop-blur-xl">
                        <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-500/15 text-green-500">
                            <x-icons.launch class="w-4 h-4" />
                        </span>
                        <div class="text-xs">
                            <div class="text-muted-foreground">Monetization</div>
                            <div class="font-semibold text-foreground">Stripe & Paddle Sync</div>
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
                "Monetize your business logic, automate subscriber management, and scale your cloud resource footprint globally. We build SaaS solutions optimized for quick market entry, high retention, and low churn."
            </p>
        </div>
    </section>

    <!-- Why Choose SaaS Section -->
    <section class="py-24 border-b border-outline-variant/30">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-foreground mb-6">
                    Why Partner with Us for <span class="text-gradient">SaaS Engineering</span>?
                </h2>
                <p class="text-xl  max-w-5xl mx-auto">
                    We combine robust backend security with frictionless billing integrations to deliver cloud applications that provide continuous business revenue.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Benefit 1 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border-1 border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <x-icons.security class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3">Multi-Tenant Security</h3>
                    <p class="text-sm leading-relaxed">Secure data isolation patterns, preventing any risk of tenant crossing or database integrity failures between account holders.</p>
                </div>
                <!-- Benefit 2 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border-1 border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <x-icons.launch class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3">Subscription Engines</h3>
                    <p class="text-sm leading-relaxed">Seamless integration of Stripe, Paddle, or Lemon Squeezy to automate plans, discount codes, upgrades, and subscription cycles.</p>
                </div>
                <!-- Benefit 3 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border-1 border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <x-icons.users class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3">Frictionless Signups</h3>
                    <p class="text-sm leading-relaxed">Optimized client registration pipelines, single sign-on (SSO), and setup flows to accelerate user conversion metrics.</p>
                </div>
                <!-- Benefit 4 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border-1 border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <x-icons.plugin class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3">Cloud Auto-Scaling</h3>
                    <p class="text-sm leading-relaxed">Stateless setups deploying auto-scaling policies on AWS, DigitalOcean, or Vercel to maintain load performance parameters.</p>
                </div>
            </div>
            <div class="mt-12 text-center text-sm">
                Investing in <span class="font-semibold">custom SaaS development</span> guarantees complete code ownership and unrestricted system scaling capabilities.
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-24 border-b border-outline-variant/30">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-foreground mb-6">
                    Our End-to-End <span class="text-gradient">SaaS Engineering Services</span>
                </h2>
                <p class="text-xl  max-w-5xl mx-auto">
                    We manage the entire development cycle, from software strategy and wireframing to infrastructure scaling.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-14">
                <!-- Service 1 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">01</span>
                    <h3 class="text-xl font-bold mb-3">SaaS MVP Development</h3>
                    <p class="text-sm leading-relaxed">Design and code a lean Minimum Viable Product containing core features to launch, capture user analytics, and secure early funding rounds.</p>
                </div>
                <!-- Service 2 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">02</span>
                    <h3 class="text-xl font-bold mb-3">Multi-Tenant Setup</h3>
                    <p class="text-sm leading-relaxed">Configuring secure tenant partitioning schemes—such as database-per-tenant, schema-per-tenant, or column separation rules.</p>
                </div>
                <!-- Service 3 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">03</span>
                    <h3 class="text-xl font-bold mb-3">Subscription Gateway Sync</h3>
                    <p class="text-sm leading-relaxed">Integrating payment platforms, webhook routers, dunning workflows, recurring billing logs, and tax compliance metrics seamlessly.</p>
                </div>
                <!-- Service 4 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">04</span>
                    <h3 class="text-xl font-bold mb-3">Interactive Dashboards</h3>
                    <p class="text-sm leading-relaxed">Building client-facing portals with dynamic graph views, setting panels, notification structures, and user profile management.</p>
                </div>
                <!-- Service 5 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">05</span>
                    <h3 class="text-xl font-bold mb-3">Centralized Admin Portals</h3>
                    <p class="text-sm leading-relaxed">Structure specialized admin dashboards, letting your back-office support manage customer plans, modify limits, and monitor logs.</p>
                </div>
                <!-- Service 6 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">06</span>
                    <h3 class="text-xl font-bold mb-3">API-First Integrations</h3>
                    <p class="text-sm leading-relaxed">Design developer-friendly REST/GraphQL APIs with token verification protocols to let enterprise buyers build custom integrations.</p>
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
                        <span class="text-primary">Q.</span> What is the difference between single-tenant and multi-tenant SaaS architecture?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        Single-tenant systems host dedicated software and database instances for each customer, offering ultimate isolation but higher hosting costs. Multi-tenant systems share infrastructure while logically partitioning data, keeping maintenance simple and cost-efficient.
                    </p>
                </div>
                <!-- Q2 -->
                <div class="p-6 rounded-2xl border border-border bg-card">
                    <h3 class="text-lg font-bold mb-3 flex items-start gap-2">
                        <span class="text-primary">Q.</span> Which subscription gateway should I use for global SaaS billing?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        Stripe is the industry standard for custom integrations, providing billing pipelines and portal features. If you need a Merchant of Record to handle global sales tax compliance, Paddle or Lemon Squeezy are excellent options.
                    </p>
                </div>
                <!-- Q3 -->
                <div class="p-6 rounded-2xl border border-border bg-card">
                    <h3 class="text-lg font-bold mb-3 flex items-start gap-2">
                        <span class="text-primary">Q.</span> Can you help us design and develop a SaaS MVP (Minimum Viable Product)?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        Yes, we specialize in MVP development. We help narrow your feature set to core value-adds, enabling you to launch quickly, collect real user feedback, and test market fit before making major investments.
                    </p>
                </div>
                <!-- Q4 -->
                <div class="p-6 rounded-2xl border border-border bg-card">
                    <h3 class="text-lg font-bold mb-3 flex items-start gap-2">
                        <span class="text-primary">Q.</span> Who owns the source code and IP for the custom SaaS application?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        You receive 100% intellectual property rights, database ownership, and full source code control once milestones are cleared, allowing you to scale or exit without vendor dependencies.
                    </p>
                </div>
                <!-- Q5 -->
                <div class="p-6 rounded-2xl border border-border bg-card">
                    <h3 class="text-lg font-bold mb-3 flex items-start gap-2">
                        <span class="text-primary">Q.</span> How do you handle tenant data security and privacy?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        We enforce secure database query partitioning, encrypted configuration variables, JWT session tokens, HTTPS protocols, and strict access controls to ensure complete customer isolation.
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
                    <p class="">See how we've built portals and SaaS tools to drive growth.</p>
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
                        <p class=" text-sm">Internal CRM for managing employee check-ins and performance.</p>
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
                        <p class=" text-sm">User and admin panels for tracking referrals and sales earnings.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- Footer Contact --}}
    @include('sections.contact')
@endsection
