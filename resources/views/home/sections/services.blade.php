@php
    $services = [
        [
            'icon' => 'laravel',
            'popular' => true,
            'link' => "route('services.laravel-development')",
            'title' => 'Custom Web App Development (Laravel)',
            'description' =>
                'Scalable, ultra-secure custom web applications built with Laravel to streamline complex business workflows.',
        ],
        [
            'icon' => 'window',
            'popular' => true,
            'link' => "route('services.wordpress-websites')",
            'title' => 'Corporate & Business Website Development',
            'description' =>
                'Professional, fast websites engineered to build brand authority and convert visitors into customers.',
        ],
        [
            'icon' => 'wordpress',
            'popular' => true,
            'link' => "route('services.wordpress-websites')",
            'title' => 'WordPress Website Development',
            'description' =>
                'Lightweight, WordPress websites built from scratch for full control without template bloat.',
        ],
        [
            'icon' => 'cart',
            'popular' => true,
            'title' => 'eCommerce Development (Shopify & WooCommerce)',
            'description' =>
                'High-converting storefronts equipped with streamlined checkouts, automated inventory, and secure payments.',
        ],
        [
            'icon' => 'dashboard',
            'popular' => true,
            'title' => 'SaaS Application Development',
            'description' =>
                'Turn your software idea into a profitable subscription product with secure multi-tenant infrastructure.',
        ],
        [
            'icon' => 'users',
            'popular' => false,
            'title' => 'Custom CRM & ERP Development',
            'description' =>
                'Centralize your operations, automate manual workflows, and track customer data with a tailored system.',
        ],
        [
            'icon' => 'plugin',
            'popular' => false,
            'title' => 'Third-Party API Development & Integration',
            'description' =>
                'Securely connect external tools, payment processors, and logistics systems to synchronize your data.',
        ],
        [
            'icon' => 'security',
            'popular' => false,
            'title' => 'Website Speed & Security Optimization',
            'description' =>
                'Boost search engine rankings and shield digital assets by accelerating speed and fixing vulnerabilities.',
        ],
        [
            'icon' => 'tools',
            'popular' => false,
            'title' => 'Ongoing Website & App Maintenance',
            'description' =>
                'Prevent unexpected downtime and patch bugs via proactive updates and secure cloud backups.',
        ],
    ];
@endphp

<section class="py-15 border-b border-outline-variant/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
            <div
                class="inline-flex items-center gap-2 px-4 py-2 mb-6 rounded-full bg-primary/10 border border-primary/30 text-primary-500 backdrop-blur-xl">
                <span class="text-sm font-semibold">Our Services</span>
            </div>
            <h2 class="text-4xl lg:text-5xl font-bold text-primarymb-6">
                What We Create
            </h2>
            <p class="text-xl text-on-surface max-w-3xl mx-auto">
                From simple websites to complex applications, we deliver digital solutions that grow your business
            </p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
            @foreach ($services as $service)
                <div class="rounded-2xl border border-border bg-card transition-all duration-300 group relative overflow-hidden"
                    data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 50 }}" data-aos-duration="600">
                    @if ($service['popular'])
                        <div class="absolute right-5 top-5">
                            <div
                                class="inline-flex items-center rounded-full text-xs font-semibold bg-primary/10 text-on-surface px-4 py-1">
                                <x-icons.star class="w-3 h-3 mr-1" />
                                <span>Most Popular</span>
                            </div>
                        </div>
                    @endif
                    <div class="space-y-6 p-8">
                        <div
                            class="w-12 h-12 bg-primary/10 text-primary rounded-full border border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                            <x-dynamic-component :component="'icons.' . $service['icon']" class="w-5 h-5" />
                        </div>
                        <h3 class="text-xl lg:text-2xl font-bold text-foreground">
                            {{ $service['title'] }}
                        </h3>
                        <p class="text-muted-foreground">
                            {{ $service['description'] }}
                        </p>
                        <div class="flex items-center justify-end">
                            <a href="{{ route('services.laravel-development') }}"
                                class="group/btn inline-flex items-center gap-2 text-sm font-bold text-primary">
                                <span>Explore service</span>
                                <x-icons.chevron-right
                                    class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform" />
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
</section>
