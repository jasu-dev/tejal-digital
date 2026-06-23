@extends('layouts.app')

@section('head')
    <title>REST API Development & Integration Services | Secure & Scalable APIs</title>
    <meta name="description"
        content="Professional REST API development and integration services. We design secure, scalable, and high-performance APIs, webhooks, and microservices for your digital platforms.">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="keywords"
        content="REST API Development, API Integration Services, Third-party API Integration, Custom API Development, Webhook Integration, Payment Gateway Integration, RESTful Web Services, JSON API Developer">

    <!-- Open Graph -->
    <meta property="og:title" content="REST API Development & Integration Services | Tejal Digital">
    <meta property="og:description"
        content="Scale your digital ecosystem with secure, high-performance APIs and seamless third-party integrations.">
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
                    <li class=" font-medium">API Development</li>
                </ol>
            </nav>

            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 mb-4 rounded-full bg-primary/10 border border-primary/30 text-primary-500 backdrop-blur-xl">
                        <span class="text-xs font-semibold">Secure & Scalable Connectivity</span>
                    </div>
                    <h1 class="text-3xl lg:text-5xl font-bold text-foreground mb-5">
                        REST API <br>
                        <span class="text-gradient">Development & Integration</span> Services
                    </h1>
                    <p class="text-xl  leading-relaxed mb-8">
                        Build secure, lightning-fast, and standardized APIs to power your web applications, mobile platforms, and business systems. We design robust microservices and integrate third-party APIs seamlessly.
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
                        <x-icons.plugin class="w-32 h-32 text-primary relative z-10" />
                    </div>
                    {{-- Floating Tags --}}
                    <div
                        class="absolute -top-7 right-10 flex items-center gap-2 rounded-xl border border-border bg-background/95 backdrop-blur-xl px-4 py-3">
                        <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-500/15 text-green-500">
                            <x-icons.security class="w-4 h-4" />
                        </span>
                        <div class="text-xs">
                            <div class="text-muted-foreground">Security</div>
                            <div class="font-semibold text-foreground">OAuth 2.0 & JWT</div>
                        </div>
                    </div>
                    <div
                        class="absolute -bottom-7 left-10 flex items-center gap-2 rounded-xl px-4 py-3 border border-border bg-background/95 backdrop-blur-xl">
                        <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-500/15 text-green-500">
                            <x-icons.launch class="w-4 h-4" />
                        </span>
                        <div class="text-xs">
                            <div class="text-muted-foreground">Performance</div>
                            <div class="font-semibold text-foreground">Fast JSON Responses</div>
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
                "Whether you need to build custom APIs to power your mobile application, develop scalable microservices, or integrate third-party services like payment gateways and CRMs, we deliver secure, optimized solutions that connect your digital ecosystem."
            </p>
        </div>
    </section>

    <!-- Why Choose REST API Section -->
    <section class="py-24 border-b border-outline-variant/30">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-foreground mb-6">
                    Why Choose <span class="text-gradient">Our REST API Services</span> for Your Project?
                </h2>
                <p class="text-xl  max-w-5xl mx-auto">
                    We build robust, secure, and clean RESTful APIs that act as the reliable core of your digital platform, making integrations frictionless and operations automated.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Benefit 1 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <x-icons.security class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3">Enterprise Security</h3>
                    <p class="text-sm leading-relaxed">Built-in protections utilizing OAuth 2.0, JWT tokens, rate limiting, and CORS headers to prevent unauthorized resource access.</p>
                </div>
                <!-- Benefit 2 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border-1 border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <x-icons.launch class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3">Lightning-Fast Latency</h3>
                    <p class="text-sm leading-relaxed">Highly responsive endpoints optimized with Redis data caching, query pagination, and payload minimization for optimal speed.</p>
                </div>
                <!-- Benefit 3 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border-1 border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <x-icons.code class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3">Standardized Design</h3>
                    <p class="text-sm leading-relaxed">Stateless RESTful APIs adhering to standard HTTP verbs, uniform resource names (URNs), JSON structures, and proper status codes.</p>
                </div>
                <!-- Benefit 4 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <x-icons.plugin class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3">Seamless Integrations</h3>
                    <p class="text-sm leading-relaxed">Smooth connectivity with payment gateways, CRM databases, shipping tracking systems, and other third-party SaaS platforms.</p>
                </div>
            </div>
            <div class="mt-12 text-center text-sm">
                Investing in <span class="font-semibold">professional API development</span> guarantees a future-proof, interconnected foundation for your product.
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-24 border-b border-outline-variant/30">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-foreground mb-6">
                    Our Comprehensive <span class="text-gradient">API Development Services</span>
                </h2>
                <p class="text-xl  max-w-5xl mx-auto">
                    We offer end-to-end API design, development, and system integrations to create a unified and automated digital ecosystem.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-14">
                <!-- Service 1 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">01</span>
                    <h3 class="text-xl font-bold mb-3">Custom RESTful API Development</h3>
                    <p class="text-sm leading-relaxed">We design and build custom, scalable JSON APIs tailored specifically to power web portals, mobile apps, and enterprise microservices, ensuring reliable system integration.</p>
                </div>
                <!-- Service 2 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">02</span>
                    <h3 class="text-xl font-bold mb-3">Third-Party API Integration</h3>
                    <p class="text-sm leading-relaxed">Connect your site or application with global payment gateways (Stripe, PayPal, Razorpay), CRM software (Salesforce, HubSpot), Twilio for SMS, and shipping carriers easily.</p>
                </div>
                <!-- Service 3 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">03</span>
                    <h3 class="text-xl font-bold mb-3">Webhook & Real-Time Sync</h3>
                    <p class="text-sm leading-relaxed">Create event-driven webhooks and WebSockets to push instant data notifications, automate CRM workflow pipelines, and synchronize inventory catalogs in real time.</p>
                </div>
                <!-- Service 4 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">04</span>
                    <h3 class="text-xl font-bold mb-3">Microservices & API Gateways</h3>
                    <p class="text-sm leading-relaxed">Implement modular microservice architectures governed by a secure API gateway that routes requests, verifies security credentials, and handles load balancing seamlessly.</p>
                </div>
                <!-- Service 5 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">05</span>
                    <h3 class="text-xl font-bold mb-3">Legacy System API Wrappers</h3>
                    <p class="text-sm leading-relaxed">Construct secure REST API wrappers over monolithic legacy structures and custom database arrays, making them accessible to modern software applications.</p>
                </div>
                <!-- Service 6 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">06</span>
                    <h3 class="text-xl font-bold mb-3">Interactive API Documentation</h3>
                    <p class="text-sm leading-relaxed">We write precise, interactive documentation using OpenAPI (Swagger) and create organized Postman collections to ensure rapid, hassle-free integration for developer teams.</p>
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
                        <span class="text-primary">Q.</span> What is the difference between REST APIs and SOAP APIs?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        REST APIs are stateless, lightweight, and typically exchange JSON data over HTTP, making them ideal for mobile apps and modern web systems. SOAP APIs are protocol-based, XML-only, and strictly structured, often preferred for legacy enterprise systems requiring ACID compliance.
                    </p>
                </div>
                <!-- Q2 -->
                <div class="p-6 rounded-2xl border border-border bg-card">
                    <h3 class="text-lg font-bold mb-3 flex items-start gap-2">
                        <span class="text-primary">Q.</span> How do you secure APIs from unauthorized access?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        We implement multiple security layers, including HTTPS (SSL/TLS), OAuth 2.0 or JWT (JSON Web Tokens) for user authorization, API keys for client verification, CORS policies, input validation/sanitization, and strict rate-limiting to prevent brute force and DDoS attacks.
                    </p>
                </div>
                <!-- Q3 -->
                <div class="p-6 rounded-2xl border border-border bg-card">
                    <h3 class="text-lg font-bold mb-3 flex items-start gap-2">
                        <span class="text-primary">Q.</span> Can you integrate APIs with legacy business systems?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        Yes, absolutely. We regularly build API wrappers and custom connectors for outdated monolithic software, legacy databases, or proprietary ERPs, allowing modern web interfaces and third-party apps to securely interact with them.
                    </p>
                </div>
                <!-- Q4 -->
                <div class="p-6 rounded-2xl border border-border bg-card">
                    <h3 class="text-lg font-bold mb-3 flex items-start gap-2">
                        <span class="text-primary">Q.</span> How do you document the APIs you build?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        We use industry-standard tools like Swagger and OpenAPI to generate interactive, self-documenting developer portals. We also provide Postman collections, example request/response payloads, and clear error code documentation to make integration effortless.
                    </p>
                </div>
                <!-- Q5 -->
                <div class="p-6 rounded-2xl border border-border bg-card">
                    <h3 class="text-lg font-bold mb-3 flex items-start gap-2">
                        <span class="text-primary">Q.</span> How do you handle API versioning for ongoing changes?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        We use URI versioning (e.g., /v1/, /v2/) or custom request headers to manage API versions. This ensures that when we introduce updates or deprecations, existing clients continue to function perfectly without breaking.
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
                    <p class="">See how we've used APIs to deliver real-world value.</p>
                </div>
                <a href="{{ route('portfolio') }}" class="text-primary font-bold hover:underline">View All Projects</a>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                <a href="{{ route('portfolio.jixicloud') }}"
                    class="group rounded-2xl border border-border bg-card overflow-hidden transition-all hover:border-primary/30">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('assets/images/jixicloud.png') }}" alt="Jixicloud Hosting Portal"
                            class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-foreground mb-2 group-hover:text-primary transition-colors">Jixicloud Hosting Portal</h3>
                        <p class=" text-sm">Deep integration with domain registrar APIs for live rates.</p>
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
                        <p class=" text-sm">Automated payment processing via multiple gateway APIs.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- Footer Contact --}}
    @include('sections.contact')
@endsection
