@extends('layouts.app')
@section('head')
    <!-- Services Page -->
    <title>Our Services | Laravel, CRM, WordPress & Web Solutions</title>
    <meta name="description"
        content="Explore Tejal Digital’s services including custom web development, Laravel apps, CRM platforms, WordPress themes, APIs, and e-commerce solutions.">
    <link rel="canonical" href="https://www.tejaldigital.in/services">
    <meta name="keywords"
        content="Web Development Services, Laravel Development, WordPress Customization, CRM Development, E-commerce Web Solutions, API Integration, Admin Dashboard Development">

    <!-- Open Graph -->
    <meta property="og:title" content="Our Web Development Services | Tejal Digital">
    <meta property="og:description"
        content="Full-stack web development services: custom Laravel apps, e-commerce, WordPress themes, APIs & more.">
    <meta property="og:url" content="https://www.tejaldigital.in/services">
    <meta property="og:image" content="https://www.tejaldigital.in/assets/images/og-image.png">

    <!-- Twitter Card -->
    <meta name="twitter:title" content="Our Services | Web Development by Tejal Digital">
    <meta name="twitter:description"
        content="Laravel, CRM, WordPress, APIs, e-commerce – explore end-to-end web solutions from Tejal Digital.">
    <meta name="twitter:image" content="https://www.tejaldigital.in/assets/images/og-image.png">
    
    @verbatim
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "name": "Web Development Services by Tejal Digital",
      "description": "Tejal Digital is a full-service web development agency offering a wide range of services, including custom software, e-commerce, and API development.",
      "provider": {
        "@type": "Organization",
        "name": "Tejal Digital",
        "url": "https://tejaldigital.in/",
        "logo": "https://tejaldigital.in/assets/images/logo.svg",
        "sameAs": [
          "https://www.facebook.com/tejaldigitalworks/",
          "https://www.instagram.com/tejal.digital/",
          "http://linkedin.com/jaswant-lohmror"
        ]
      },
      "offers": [
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Laravel Web App Development",
            "description": "Custom Laravel applications built with scalable, secure, and high-performance code."
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Web Portals & Custom Software",
            "description": "Development of enterprise-grade web portals and bespoke software solutions."
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Custom CRM Development",
            "description": "Tailor-made CRM solutions to manage customer relationships and business operations efficiently."
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "WordPress Theme Development",
            "description": "Custom WordPress themes designed for performance, SEO, and brand consistency."
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "E-commerce Development",
            "description": "Robust online stores with secure payment gateways and smooth shopping experiences."
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Custom Admin Dashboards",
            "description": "Interactive dashboards for data management and real-time analytics."
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "API Development & Integration",
            "description": "RESTful API development and integration with third-party platforms."
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Security & Performance Optimization",
            "description": "Enhancing application security, speed, and overall performance."
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Maintenance",
            "description": "Ongoing support and updates to keep websites and applications running smoothly."
          }
        }
      ]
    }
    </script>
    @endverbatim
@endsection
@section('content')
    <div class="min-h-screen bg-white">
        <section class="relative pt-20 pb-32 overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-slate-50 via-white to-amber-50/30"></div>
            <div
                class="absolute top-20 right-10 w-72 h-72 bg-gradient-to-br from-amber-400/20 to-orange-500/20 rounded-full blur-3xl">
            </div>
            <div
                class="absolute bottom-20 left-10 w-96 h-96 bg-gradient-to-br from-orange-400/10 to-red-500/10 rounded-full blur-3xl">
            </div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-4xl mx-auto">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-amber-100 rounded-full mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="w-4 h-4 text-amber-600">
                            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                        </svg>
                        <span class="text-sm font-medium text-amber-800">Our Services</span>
                    </div>
                    <h1 class="text-5xl lg:text-7xl font-bold leading-tight mb-6"><span class="text-slate-900">Digital
                            Solutions</span><br><span class="bg-primary bg-clip-text text-transparent">That
                            Deliver</span>
                    </h1>
                    <p class="text-xl text-slate-600 leading-relaxed mb-8 max-w-3xl mx-auto">Comprehensive digital solutions
                        to help your business thrive in the online world. From web development to digital strategy, we've
                        got you covered.
                    </p>
                    <button
                        class="ring-offset-background focus-visible:outline-hidden focus-visible:ring-ring inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-colors focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none  hover:bg-primary/90 h-11 rounded-md px-8 bg-primary hover:from-amber-600 hover:to-orange-700 text-white shadow-lg">
                        <a href="{{ route('contact') }}" class="flex items-center gap-2">
                            Get a Free Quote
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="w-4 h-4">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </a>
                    </button>
                </div>
            </div>
        </section>
        <section class="pb-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-amber-100 rounded-full mb-6"><span
                            class="text-sm font-medium text-amber-800">What We Offer</span></div>
                    <h2 class="text-4xl lg:text-5xl font-bold text-slate-900 mb-6">Our <span
                            class="text-primary">Services</span></h2>
                    <p class="text-xl text-slate-600 max-w-3xl mx-auto">End-to-end digital solutions tailored to your
                        business needs
                    </p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                    <div
                        class="rounded-lg bg-white group hover:shadow-xl transition-all duration-300 border-0 shadow-lg relative ring-2 ring-amber-500 scale-105">
                        <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                            <div
                                class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-hidden focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 bg-primary text-white px-4 py-1 shadow-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="w-3 h-3 mr-1">
                                    <polygon
                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                    </polygon>
                                </svg>
                                Most Popular
                            </div>
                        </div>
                        <div class="p-8">
                            <div
                                class="w-14 h-14 bg-primary rounded-xl mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <x-icons.laravel class="w-7 h-7 text-white" />
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3">Laravel Web App Development</h3>
                            <p class="text-slate-600 mb-6">Scalable and secure web applications using the Laravel framework
                            </p>
                            <div class="space-y-2 mb-6">
                                <div class="flex items-center gap-2 text-sm text-slate-600">
                                    <x-icons.check class="w-4 h-4 text-amber-500" />
                                    RESTful API Integration
                                </div>
                                <div class="flex items-center gap-2 text-sm text-slate-600">
                                    <x-icons.check class="w-4 h-4 text-amber-500" />
                                    MVC Architecture
                                </div>
                                <div class="flex items-center gap-2 text-sm text-slate-600">
                                    <x-icons.check class="w-4 h-4 text-amber-500" />
                                    Authentication & Authorization
                                </div>
                                <div class="flex items-center gap-2 text-sm text-slate-600">
                                    <x-icons.check class="w-4 h-4 text-amber-500" />
                                    Queue & Job Handling
                                </div>
                            </div>
                            <div class="hidden flex items-center justify-between">
                                <span class="text-lg font-bold text-amber-600">From $3,499</span>
                                <x-button-primary-outline>Learn More</x-button-primary-outline>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-lg bg-white group hover:shadow-xl transition-all duration-300 border-0 shadow-lg">
                        <div class="p-8">
                            <div
                                class="w-14 h-14 bg-primary rounded-xl mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <x-icons.window class="w-7 h-7 text-white" />
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3">Web Portals & Custom Software</h3>
                            <p class="text-slate-600 mb-6">End-to-end solutions for internal tools, client portals, and
                                business automation software
                            </p>
                            <div class="space-y-2 mb-6">
                                <div class="flex items-center gap-2 text-sm text-slate-600">
                                    <x-icons.check class="w-4 h-4 text-amber-500" />
                                    B2B/B2C Client Portals
                                </div>
                                <div class="flex items-center gap-2 text-sm text-slate-600">
                                    <x-icons.check class="w-4 h-4 text-amber-500" />
                                    Internal Business Tools
                                </div>
                                <div class="flex items-center gap-2 text-sm text-slate-600">
                                    <x-icons.check class="w-4 h-4 text-amber-500" />
                                    Project or Task Management Systems
                                </div>
                                <div class="flex items-center gap-2 text-sm text-slate-600">
                                    <x-icons.check class="w-4 h-4 text-amber-500" />
                                    Custom Laravel-Based Software
                                </div>
                            </div>
                            <div class="hidden flex items-center justify-between">
                                <span class="text-lg font-bold text-amber-600">From $4,000</span>
                                <x-button-primary-outline>Learn More</x-button-primary-outline>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-lg bg-white group hover:shadow-xl transition-all duration-300 border-0 shadow-lg">
                        <div class="p-8">
                            <div
                                class="w-14 h-14 bg-primary rounded-xl mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <x-icons.users class="w-7 h-7 text-white" />
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3">Custom CRM Development</h3>
                            <p class="text-slate-600 mb-6">Tailored CRM systems to manage clients, leads, and sales
                                pipelines
                            </p>
                            <div class="space-y-2 mb-6">
                                <div class="flex items-center gap-2 text-sm text-slate-600">
                                    <x-icons.check class="w-4 h-4 text-amber-500" />
                                    Lead Management
                                </div>
                                <div class="flex items-center gap-2 text-sm text-slate-600">
                                    <x-icons.check class="w-4 h-4 text-amber-500" />
                                    Contact Segmentation
                                </div>
                                <div class="flex items-center gap-2 text-sm text-slate-600">
                                    <x-icons.check class="w-4 h-4 text-amber-500" />
                                    Email Tracking
                                </div>
                                <div class="flex items-center gap-2 text-sm text-slate-600">
                                    <x-icons.check class="w-4 h-4 text-amber-500" />
                                    Activity Logs
                                </div>
                            </div>
                            <div class="hidden flex items-center justify-between">
                                <span class="text-lg font-bold text-amber-600">From $4,500</span>
                                <x-button-primary-outline>Learn More</x-button-primary-outline>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-lg bg-white group hover:shadow-xl transition-all duration-300 border-0 shadow-lg">
                        <div class="p-8">
                            <div
                                class="w-14 h-14 bg-primary rounded-xl mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <x-icons.wordpress class="w-7 h-7 text-white" />
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3">WordPress Theme Development</h3>
                            <p class="text-slate-600 mb-6">Pixel-perfect, fast-loading custom WordPress themes</p>
                            <div class="space-y-2 mb-6">
                                <div class="flex items-center gap-2 text-sm text-slate-600">
                                    <x-icons.check class="w-4 h-4 text-amber-500" />
                                    Gutenberg Compatible
                                </div>
                                <div class="flex items-center gap-2 text-sm text-slate-600">
                                    <x-icons.check class="w-4 h-4 text-amber-500" />
                                    Mobile Optimized
                                </div>
                                <div class="flex items-center gap-2 text-sm text-slate-600">
                                    <x-icons.check class="w-4 h-4 text-amber-500" />
                                    Cross-browser Tested
                                </div>
                                <div class="flex items-center gap-2 text-sm text-slate-600">
                                    <x-icons.check class="w-4 h-4 text-amber-500" />
                                    SEO Best Practices
                                </div>
                            </div>
                            <div class="hidden flex items-center justify-between">
                                <span class="text-lg font-bold text-amber-600">From $1,999</span>
                                <x-button-primary-outline>Learn More</x-button-primary-outline>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-lg bg-white group hover:shadow-xl transition-all duration-300 border-0 shadow-lg">
                        <div class="p-8">
                            <div
                                class="w-14 h-14 bg-primary rounded-xl mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <x-icons.cart class="w-7 h-7 text-white" />
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3">E-commerce Development</h3>
                            <p class="text-slate-600 mb-6">Robust online store solutions built on WooCommerce or Laravel
                            </p>
                            <div class="space-y-2 mb-6">
                                <div class="flex items-center gap-2 text-sm text-slate-600">
                                    <x-icons.check class="w-4 h-4 text-amber-500" />
                                    Product Catalog Setup
                                </div>
                                <div class="flex items-center gap-2 text-sm text-slate-600">
                                    <x-icons.check class="w-4 h-4 text-amber-500" />
                                    Secure Checkout
                                </div>
                                <div class="flex items-center gap-2 text-sm text-slate-600">
                                    <x-icons.check class="w-4 h-4 text-amber-500" />
                                    Payment Gateway Integration
                                </div>
                                <div class="flex items-center gap-2 text-sm text-slate-600">
                                    <x-icons.check class="w-4 h-4 text-amber-500" />
                                    Order & Inventory Management
                                </div>
                            </div>
                            <div class="hidden flex items-center justify-between">
                                <span class="text-lg font-bold text-amber-600">From $2,499</span>
                                <x-button-primary-outline>Learn More</x-button-primary-outline>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-lg bg-white group hover:shadow-xl transition-all duration-300 border-0 shadow-lg">
                        <div class="p-8">
                            <div
                                class="w-14 h-14 bg-primary rounded-xl mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <x-icons.dashboard class="w-7 h-7 text-white" />
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3">Custom Admin Dashboards</h3>
                            <p class="text-slate-600 mb-6">Interactive and scalable dashboards for managing business
                                operations
                            </p>
                            <div class="space-y-2 mb-6">
                                <div class="flex items-center gap-2 text-sm text-slate-600">
                                    <x-icons.check class="w-4 h-4 text-amber-500" />
                                    Real-Time Analytics
                                </div>
                                <div class="flex items-center gap-2 text-sm text-slate-600">
                                    <x-icons.check class="w-4 h-4 text-amber-500" />
                                    Role-Based Access
                                </div>
                                <div class="flex items-center gap-2 text-sm text-slate-600">
                                    <x-icons.check class="w-4 h-4 text-amber-500" />
                                    Custom Reports
                                </div>
                                <div class="flex items-center gap-2 text-sm text-slate-600">
                                    <x-icons.check class="w-4 h-4 text-amber-500" />
                                    CRUD Management
                                </div>
                            </div>
                            <div class="hidden flex items-center justify-between">
                                <span class="text-lg font-bold text-amber-600">From $3,000</span>
                                <x-button-primary-outline>Learn More</x-button-primary-outline>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-lg bg-white group hover:shadow-xl transition-all duration-300 border-0 shadow-lg">
                        <div class="p-8">
                            <div
                                class="w-14 h-14 bg-primary rounded-xl mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <x-icons.plugin class="w-7 h-7 text-white" />
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3">API Development & Integration</h3>
                            <p class="text-slate-600 mb-6">Robust RESTful APIs and seamless 3rd-party integrations</p>
                            <div class="space-y-2 mb-6">
                                <div class="flex items-center gap-2 text-sm text-slate-600">
                                    <x-icons.check class="w-4 h-4 text-amber-500" />
                                    REST & JSON APIs
                                </div>
                                <div class="flex items-center gap-2 text-sm text-slate-600">
                                    <x-icons.check class="w-4 h-4 text-amber-500" />
                                    Payment Gateways (Stripe, PayPal)
                                </div>
                                <div class="flex items-center gap-2 text-sm text-slate-600">
                                    <x-icons.check class="w-4 h-4 text-amber-500" />
                                    External API Integrations
                                </div>
                                <div class="flex items-center gap-2 text-sm text-slate-600">
                                    <x-icons.check class="w-4 h-4 text-amber-500" />
                                    Webhooks & Callbacks
                                </div>
                            </div>
                            <div class="hidden flex items-center justify-between">
                                <span class="text-lg font-bold text-amber-600">From $1,800</span>
                                <x-button-primary-outline>Learn More</x-button-primary-outline>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-lg bg-white group hover:shadow-xl transition-all duration-300 border-0 shadow-lg">
                        <div class="p-8">
                            <div
                                class="w-14 h-14 bg-primary rounded-xl mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <x-icons.security class="w-7 h-7 text-white" />
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3">Security & Performance Optimization</h3>
                            <p class="text-slate-600 mb-6">Hardening, speed tuning, and securing your applications</p>
                            <div class="space-y-2 mb-6">
                                <div class="flex items-center gap-2 text-sm text-slate-600">
                                    <x-icons.check class="w-4 h-4 text-amber-500" />
                                    Laravel Security Patches
                                </div>
                                <div class="flex items-center gap-2 text-sm text-slate-600">
                                    <x-icons.check class="w-4 h-4 text-amber-500" />
                                    WordPress Firewall Setup
                                </div>
                                <div class="flex items-center gap-2 text-sm text-slate-600">
                                    <x-icons.check class="w-4 h-4 text-amber-500" />
                                    Page Speed Improvements
                                </div>
                                <div class="flex items-center gap-2 text-sm text-slate-600">
                                    <x-icons.check class="w-4 h-4 text-amber-500" />
                                    DB Query Optimization
                                </div>
                            </div>
                            <div class="hidden flex items-center justify-between">
                                <span class="text-lg font-bold text-amber-600">From $999</span>
                                <x-button-primary-outline>Learn More</x-button-primary-outline>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-lg bg-white group hover:shadow-xl transition-all duration-300 border-0 shadow-lg">
                        <div class="p-8">
                            <div
                                class="w-14 h-14 bg-primary rounded-xl mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <x-icons.tools class="w-7 h-7 text-white" />
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3">Maintenance</h3>
                            <p class="text-slate-600 mb-6">Keep your website secure, updated, and performing at its best
                            </p>
                            <div class="space-y-2 mb-6">
                                <div class="flex items-center gap-2 text-sm text-slate-600">
                                    <x-icons.check class="w-4 h-4 text-amber-500" />
                                    Security Updates
                                </div>
                                <div class="flex items-center gap-2 text-sm text-slate-600">
                                    <x-icons.check class="w-4 h-4 text-amber-500" />
                                    Performance Monitoring
                                </div>
                                <div class="flex items-center gap-2 text-sm text-slate-600">
                                    <x-icons.check class="w-4 h-4 text-amber-500" />
                                    Backups
                                </div>
                                <div class="flex items-center gap-2 text-sm text-slate-600">
                                    <x-icons.check class="w-4 h-4 text-amber-500" />
                                    Support
                                </div>
                            </div>
                            <div class="hidden flex items-center justify-between">
                                <span class="text-lg font-bold text-amber-600">From $299/mo</span>
                                <x-button-primary-outline>Learn More</x-button-primary-outline>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-24 bg-slate-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-amber-100 rounded-full mb-6"><span
                            class="text-sm font-medium text-amber-800">How We Work</span></div>
                    <h2 class="text-4xl lg:text-5xl font-bold text-slate-900 mb-6">Our <span
                            class="text-primary">Process</span></h2>
                    <p class="text-xl text-slate-600 max-w-3xl mx-auto">A proven methodology that ensures successful
                        project delivery every time
                    </p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div
                        class="rounded-lg bg-white group hover:shadow-xl transition-all duration-300 border-0 shadow-lg text-center">
                        <div class="p-8">
                            <div class="text-center text-6xl mb-4 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-14 h-14 mx-auto" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20M7.88 7.88l-3.54 7.78 7.78-3.54 3.54-7.78zM10 11a1 1 0 1 1 0-2 1 1 0 0 1 0 2" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-4">Discovery</h3>
                            <p class="text-slate-600">We start by understanding your business goals, target audience, and
                                project requirements.
                            </p>
                        </div>
                    </div>
                    <div
                        class="rounded-lg bg-white group hover:shadow-xl transition-all duration-300 border-0 shadow-lg text-center">
                        <div class="p-8">
                            <div class="text-6xl mb-4 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-14 h-14 mx-auto" fill="currentColor"
                                    viewBox="0 0 52 52">
                                    <path
                                        d="m48.34 10-6.27-2v29.12L49.88 13a2.41 2.41 0 0 0-1.53-3zM20.52 5.59 16.81 6.8 3.66 11.08a2.42 2.42 0 0 0-1.55 3l10.18 31.35a2.41 2.41 0 0 0 3 1.57l14-4.56 2.85-.94a2.39 2.39 0 0 0 1.56-3L23.59 7.14a2.4 2.4 0 0 0-3-1.57zm16.82 28.47V7.3a2.41 2.41 0 0 0-2.41-2.41H27.8a6 6 0 0 1 .32.8l9.05 27.75a5 5 0 0 1 .17.62" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-4">Planning</h3>
                            <p class="text-slate-600">We create a detailed project plan with timelines, milestones, and
                                deliverables.
                            </p>
                        </div>
                    </div>
                    <div
                        class="rounded-lg bg-white group hover:shadow-xl transition-all duration-300 border-0 shadow-lg text-center">
                        <div class="p-8">
                            <div class="text-6xl mb-4 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-14 h-14 mx-auto" viewBox="0 0 30 30">
                                    <path
                                        style="opacity:1;fill:currentColor;fill-opacity:1;stroke:none;stroke-width:2;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                                        d="m8.283 5.453-2.83 2.83 1.063 1.06L7.93 7.93l.707.707-1.414 1.414 1.414 1.414 1.414-1.414.707.707-1.414 1.414 1.414 1.414 2.828-2.828zm13 .436-2.666 2.666 2.828 2.828 2.666-2.666a12 12 0 0 0-1.287-1.541 12 12 0 0 0-1.54-1.287m-4.08 4.08L6.596 20.576l-.707 3.535 3.535-.707L20.03 12.797Zm2.04 6.445-2.829 2.828 1.414 1.414 1.414-1.414.707.707-1.414 1.414 1.414 1.414 1.414-1.414.707.707-1.414 1.414 1.06 1.063 2.83-2.83z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-4">Design</h3>
                            <p class="text-slate-600">Our designers create wireframes and mockups that align with your
                                brand and goals.
                            </p>
                        </div>
                    </div>
                    <div
                        class="rounded-lg bg-white group hover:shadow-xl transition-all duration-300 border-0 shadow-lg text-center">
                        <div class="p-8">
                            <div class="text-6xl mb-4 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-14 h-14 mx-auto" viewBox="0 0 24 24"
                                    fill="none">
                                    <path d="m7 8-4 3.692L7 16m10-8 4 3.692L17 16M14 4l-4 16" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-4">Development</h3>
                            <p class="text-slate-600">Our developers bring the designs to life using the latest
                                technologies and best practices.
                            </p>
                        </div>
                    </div>
                    <div
                        class="rounded-lg bg-white group hover:shadow-xl transition-all duration-300 border-0 shadow-lg text-center">
                        <div class="p-8">
                            <div class="text-6xl mb-4 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-14 h-14 mx-auto" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2M9 17H7v-7h2zm4 0h-2V7h2zm4 0h-2v-4h2z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-4">Testing</h3>
                            <p class="text-slate-600">Rigorous testing ensures your website works perfectly across all
                                devices and browsers.
                            </p>
                        </div>
                    </div>
                    <div
                        class="rounded-lg bg-white group hover:shadow-xl transition-all duration-300 border-0 shadow-lg text-center">
                        <div class="p-8">
                            <div class="text-6xl mb-4 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-14 h-14 mx-auto" viewBox="0 0 16 16"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="m10 16 2-2v-4l1.657-1.657A8 8 0 0 0 16 2.686V0h-2.686a8 8 0 0 0-5.657 2.343L6 4H2L0 6zm.5-9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"
                                        fill="currentColor" />
                                    <path d="m4.927 13.756-2.683-2.683L0 15l1 1z" fill="currentColor" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-4">Launch</h3>
                            <p class="text-slate-600">We deploy your website and provide ongoing support to ensure
                                everything runs smoothly.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('sections.technologies-we-use', ['class' => 'bg-white'])
        <section class="py-24 bg-primary relative overflow-hidden">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute inset-0"
                    style="background-image: url(&quot;data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fillRule='evenodd'%3E%3Cg fill='%23ffffff' fillOpacity='0.4'%3E%3Ccircle cx='30' cy='30' r='2'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E&quot;); background-size: 60px 60px;">
                </div>
            </div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6">Ready to Get Started?</h2>
                <p class="text-xl text-amber-100 mb-8 max-w-2xl mx-auto">Let's discuss your project requirements and create
                    a custom solution for your business
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button
                        class="ring-offset-background focus-visible:outline-hidden focus-visible:ring-ring inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-colors focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none  h-11 rounded-md px-8 bg-white text-amber-600 hover:bg-amber-50 shadow-lg">
                        <a href="{{ route('contact') }}">Get Free Consultation</a>
                    </button>
                    <button
                        class="ring-offset-background focus-visible:outline-hidden focus-visible:ring-ring inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-colors focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none  border h-11 rounded-md px-8 border-white text-white hover:bg-white hover:text-amber-600 bg-transparent">
                        <a href="{{ route('portfolio') }}">View Our Work</a>
                    </button>
                </div>
            </div>
        </section>
    </div>
@endsection