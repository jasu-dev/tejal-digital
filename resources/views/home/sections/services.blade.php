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

<section class="py-14 sm:py-20 px-3 sm:px-6 lg:px-8 border-b border-outline-variant/30">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
            <div
                class="inline-flex items-center gap-2 px-4 py-2 mb-5 rounded-full bg-primary/10 border border-primary/30 text-primary-500 backdrop-blur-xl">
                <span class="text-xs sm:text-sm font-semibold">Our Services</span>
            </div>
            <h2 class="text-3xl lg:text-5xl font-bold tracking-tight mb-5">
                Website &amp; Software Development, <span class="text-gradient">End to End</span>
            </h2>
            <p class="text-md sm:text-lg text-muted-foreground max-w-3xl mx-auto">
                From a fast business website to a multi-tenant SaaS platform - one team handles strategy, design,
                development, launch and long-term support.
            </p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($services as $service)
                <div class="rounded-2xl border border-border bg-card transition-all duration-300 group relative overflow-hidden flex flex-col hover:border-primary/40 hover:shadow-xl hover:shadow-primary-500/5 hover:-translate-y-0.5"
                    data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 50 }}" data-aos-duration="600">
                    @if ($service['popular'])
                        <div class="absolute right-5 top-5">
                            <div
                                class="inline-flex items-center rounded-full text-xs font-semibold text-primary-700 bg-primary/10 px-3 py-1">
                                <x-icons.star class="w-3 h-3 mr-1 fill-current" />
                                <span>Most Popular</span>
                            </div>
                        </div>
                    @endif
                    <div class="flex flex-col flex-1 p-7">
                        <div
                            class="w-12 h-12 bg-primary/10 text-primary rounded-2xl mb-6 flex items-center justify-center group-hover:bg-primary group-hover:text-white transition-colors">
                            <x-dynamic-component :component="'icons.' . $service['icon']" class="w-5 h-5" />
                        </div>
                        <h3 class="text-xl font-bold tracking-tight text-foreground mb-3">
                            {{ $service['title'] }}
                        </h3>
                        <p class="text-muted-foreground leading-relaxed mb-5">
                            {{ $service['description'] }}
                        </p>
                        <ul class="space-y-2 mb-6 text-sm">
                            @foreach (array_slice($service['key_points'], 0, 3) as $point)
                                <li class="flex items-start gap-2">
                                    <x-icons.check class="w-4 h-4 mt-0.5 shrink-0 text-primary" />
                                    <span>{{ $point }}</span>
                                </li>
                            @endforeach
                        </ul>
                        <div class="mt-auto pt-5 border-t border-border flex items-center justify-between">
                            <a href="{{ route('contact') }}"
                                class="text-sm font-semibold text-foreground hover:text-primary transition-colors">
                                Get a quote
                            </a>
                            @if (isset($service['link']))
                                <a href="{{ $service['link'] }}"
                                    class="group/btn inline-flex items-center gap-1.5 text-sm font-bold text-primary">
                                    <span>Explore service</span>
                                    <x-icons.chevron-right
                                        class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform" />
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
