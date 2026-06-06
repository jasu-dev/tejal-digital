@php
    $services = [
        [
            'icon' => 'laravel',
            'popular' => true,
            'title' => 'Custom Web App Development (Laravel)',
            'description' => 'Scalable, ultra-secure custom web applications built with Laravel to streamline complex business workflows.',
            'key_points' => [
                'Tailored business logic architecture',
                'High-performance backend coding',
                'Optimized database engineering',
                'Advanced built-in security',
                'Scalable, future-proof codebase',
            ],
        ],
        [
            'icon' => 'window',
            'popular' => true,
            'title' => 'Corporate & Small Business Website Development',
            'description' => 'Professional, fast websites engineered to build brand authority and convert visitors into customers.',
            'key_points' => [
                'Mobile-first, responsive design',
                'SEO-optimized site architecture',
                'High-converting CTA placements',
                'Fast-loading, clean code',
                'Full hosting & launch setup',
            ],
        ],
        [
            'icon' => 'wordpress',
            'popular' => true,
            'title' => 'Custom WordPress Website Development',
            'description' => 'Lightweight, custom WordPress websites built from scratch for full control without template bloat.',
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
            'title' => 'eCommerce Development (Shopify & WooCommerce)',
            'description' => 'High-converting storefronts equipped with streamlined checkouts, automated inventory, and secure payments.',
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
            'description' => 'Turn your software idea into a profitable subscription product with secure multi-tenant infrastructure.',
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
            'description' => 'Centralize your operations, automate manual workflows, and track customer data with a tailored system.',
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
            'title' => 'Third-Party API Development & Integration',
            'description' => 'Securely connect external tools, payment processors, and logistics systems to synchronize your data.',
            'key_points' => [
                'RESTful & GraphQL development',
                'Flawless third-party integrations',
                'Automated real-time data sync',
                'Robust error-handling & webhooks',
                'Secure OAuth2 / JWT protocols',
            ],
        ],
        [
            'icon' => 'security',
            'popular' => false,
            'title' => 'Website Speed & Security Optimization',
            'description' => 'Boost search engine rankings and shield digital assets by accelerating speed and fixing vulnerabilities.',
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
            'description' => 'Prevent unexpected downtime and patch bugs via proactive updates and secure cloud backups.',
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

<section class="py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
            <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 gradient-primary rounded-full text-white">
                <span class="text-sm font-medium">Our Services</span>
            </div>
            <h2 class="text-4xl lg:text-5xl font-bold text-new-primary mb-6">
                What We <span class="text-primary">Create</span>
            </h2>
            <p class="text-xl text-on-surface max-w-3xl mx-auto">
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
                        <h3 class="text-xl lg:text-2xl font-bold text-white">
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
                        <div class="flex items-center justify-end">
                            <a href="{{ route('services.laravel-development') }}"
                                class="group/btn inline-flex items-center gap-2 text-sm font-bold text-primary">
                                <span>Learn More</span>
                                <x-icons.chevron-right
                                    class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform" />
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
</section>
