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
    {{-- Hero Section --}}
    <section
        class="relative -mt-20 pt-20 pb-20 px-2 flex flex-col items-center text-sm bg-cover bg-center bg-no-repeat border-b border-outline-variant/30"
        style="background-image: url('{{ asset('assets/images/hero-gradient-bg.png') }}')">

        <div
            class="flex flex-wrap items-center justify-center p-2 px-4 mt-10 md:mt-28 bg-white/50 backdrop-blur-xl border border-white/20 rounded-2xl">
            <x-icons.hot class="w-4 h-4" />
            <p class="ml-2 text-foreground">What We Offer</p>
        </div>

        <h1 class="text-3xl md:text-6xl text-center font-bold max-w-3xl my-5 text-secondary">
            Digital Solutions for<br> Your Business
        </h1>
        <p class="text-foreground md:text-base text-center max-w-xl mt-3">
            End-to-end IT solutions tailored to your business needs.
        </p>

        <div class="flex flex-col justify-center sm:flex-row gap-4 mt-8">
            <a href="{{ route('contact') }}">
                <x-form.primary-button type="button" class="px-7 py-3 rounded-2xl">
                    <span>Get a Quote</span>
                    <x-icons.go class="w-4 h-4" />
                </x-form.primary-button>
            </a>
            <a href="{{ config('staticdata.whatsapp_url') }}">
                <x-form.secondary-button type="button" class="px-7 py-3 rounded-2xl">
                    <x-icons.whatsapp class="w-4 h-4" />
                    <span>Chat Now</span>
                </x-form.secondary-button>
            </a>
        </div>
    </section>
    {{-- Technologies We Use --}}
    @include('sections.technologies-we-use', ['class' => 'bg-surface-container'])
    {{-- Services Section --}}
    @php
        $services = [
            [
                'icon' => 'laravel',
                'popular' => true,
                'link' => route('services.laravel-development'),
                'title' => 'Custom Website Development (Laravel)',
                'description' =>
                    'Scalable, ultra-secure custom web applications built with Laravel to streamline complex business workflows.',
                'key_points' => [
                    'Tailored business logic architecture',
                    'High-performance backend coding',
                    'Optimized database engineering',
                    'Advanced built-in security',
                    'Scalable, future-proof codebase',
                ],
            ],
            [
                'icon' => 'wordpress',
                'popular' => true,
                'link' => route('services.wordpress-development'),
                'title' => 'WordPress Website Development',
                'description' =>
                    'Lightweight, WordPress websites built from scratch for full control without template bloat.',
                'key_points' => [
                    'Bespoke theme development',
                    'Bloat-free, high-speed coding',
                    'Easy Gutenberg & ACF editing',
                    'Advanced security hardening',
                    'Clean custom plugin integration',
                ],
            ],
            [
                'icon' => 'cart',
                'popular' => true,
                'link' => route('services.ecommerce-development'),
                'title' => 'eCommerce Website Development',
                'description' =>
                    'High-converting storefronts equipped with streamlined checkouts, automated inventory, and secure payments.',
                'key_points' => [
                    'Secure payment gateway integration',
                    'Automated inventory tracking',
                    'Mobile-optimized checkout funnels',
                    'Custom discounts & shipping rules',
                    'High-traffic database scaling',
                ],
            ],
            [
                'icon' => 'dashboard',
                'popular' => true,
                'title' => 'SaaS Application Development',
                'link' => route('services.saas-development'),
                'description' =>
                    'Turn your software idea into a profitable subscription product with secure multi-tenant infrastructure.',
                'key_points' => [
                    'Secure multi-tenant architecture',
                    'Automated subscription billing systems',
                    'Frictionless user onboarding flows',
                    'Scalable cloud architecture infrastructure',
                    'Admin analytics control panels',
                ],
            ],
            [
                'icon' => 'users',
                'popular' => false,
                'title' => 'Custom CRM & ERP Development',
                'link' => route('services.crm-development'),
                'description' =>
                    'Centralize your operations, automate manual workflows, and track customer data with a tailored system.',
                'key_points' => [
                    'Custom lead tracking systems',
                    'Automated billing & workflows',
                    'Role-based data access (RBAC)',
                    'Real-time analytics dashboards',
                    'Internal communication tools',
                ],
            ],
            [
                'icon' => 'plugin',
                'popular' => false,
                'link' => route('services.api-development'),
                'title' => 'Third-Party API Development & Integration',
                'description' =>
                    'Securely connect external tools, payment processors, and logistics systems to synchronize your data.',
                'key_points' => [
                    'RESTful & GraphQL development',
                    'Flawless third-party integrations',
                    'Automated real-time data sync',
                    'Robust error-handling & webhooks',
                    'Secure OAuth2 / JWT protocols',
                ],
            ],
            [
                'icon' => 'window',
                'popular' => false,
                'title' => 'Corporate & Business Website Development',
                'description' =>
                    'Professional, fast websites engineered to build brand authority and convert visitors into customers.',
                'key_points' => [
                    'Mobile-first, responsive design',
                    'SEO-optimized site architecture',
                    'High-converting CTA placements',
                    'Fast-loading, clean code',
                    'Full hosting & launch setup',
                ],
            ],
            [
                'icon' => 'security',
                'popular' => false,
                'title' => 'Website Speed & Security Optimization',
                'description' =>
                    'Boost search engine rankings and shield digital assets by accelerating speed and fixing vulnerabilities.',
                'key_points' => [
                    'Database & server-side caching',
                    'Core Web Vitals remediation',
                    'Malware scanning & firewalls',
                    'Image & asset compression',
                    'SSL & security header setup',
                ],
            ],
            [
                'icon' => 'tools',
                'popular' => false,
                'title' => 'Ongoing Website & App Maintenance',
                'description' =>
                    'Prevent unexpected downtime and patch bugs via proactive updates and secure cloud backups.',
                'key_points' => [
                    'Regular core & framework patches',
                    'Automated daily cloud backups',
                    '24/7 server uptime monitoring',
                    'Continuous bug fixing support',
                    'Periodic database health tune-ups',
                ],
            ],
        ];
    @endphp

    <section class="py-10 sm:py-14 px-3 sm:px-6 lg:px-8 border-b border-outline-variant/30">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-10" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 mb-5 rounded-full bg-primary/10 border border-primary/30 text-primary-500 backdrop-blur-xl">
                    <span class="text-xs sm:text-sm font-semibold">Our Services</span>
                </div>
                <h2 class="text-3xl lg:text-5xl font-bold text-primary mb-5">
                    What We Create
                </h2>
                <p class="text-md sm:text-lg max-w-3xl mx-auto">
                    From simple websites to complex applications, we deliver digital solutions that grow your business
                </p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                @foreach ($services as $service)
                    <div class="rounded-2xl border border-border bg-card transition-all duration-300 group relative overflow-hidden"
                        data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}" data-aos-duration="600">
                        @if ($service['popular'])
                            <div class="absolute right-5 top-5">
                                <div
                                    class="inline-flex items-center rounded-full text-xs font-semibold bg-primary/10 text-on-surface px-4 py-1">
                                    <x-icons.star class="w-3 h-3 mr-1" />
                                    <span>Most Popular</span>
                                </div>
                            </div>
                        @endif
                        <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                        </div>
                        <div class="space-y-6 p-8">
                            <div
                                class="w-14 h-14 bg-primary/10 text-primary rounded-full border-1 border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <x-dynamic-component :component="'icons.' . $service['icon']" class="w-6 h-6" />
                            </div>
                            <h3 class="text-xl lg:text-2xl font-bold text-foreground">
                                {{ $service['title'] }}
                            </h3>
                            <p class="text-muted-foreground">
                                {{ $service['description'] }}
                            </p>
                            <div class="space-y-3">
                                @foreach ($service['key_points'] as $point)
                                    <div class="flex items-center gap-3 text-sm text-muted-foreground">
                                        <span class="h-1.5 w-1.5 rounded-full bg-primary"></span>
                                        {{ $point }}
                                    </div>
                                @endforeach
                            </div>
                            @if (isset($service['link']))
                                <div class="flex items-center justify-end">
                                    <a href="{{ $service['link'] }}"
                                        class="group/btn inline-flex items-center gap-2 text-sm font-bold text-primary">
                                        <span>Explore service</span>
                                        <x-icons.chevron-right
                                            class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform" />
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
    </section>

    {{-- Process Section --}}
    @include('sections.working-process')

    {{-- Contact Section --}}
    @include('sections.contact')
@endsection
