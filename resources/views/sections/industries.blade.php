@php
    $industries = [
        [
            'icon' => 'shopping-bag',
            'title' => 'eCommerce & Retail',
            'description' => 'Custom online stores, multi-vendor marketplaces, and secure payment integrations.'
        ],
        [
            'icon' => 'activity',
            'title' => 'Healthcare & Wellness',
            'description' => 'Secure, HIPAA-compliant patient portals, appointment scheduling, and clinic dashboards.'
        ],
        [
            'icon' => 'building',
            'title' => 'Real Estate & Property',
            'description' => 'Dynamic listing portals, MLS/IDX API integrations, and CRM platforms for property managers.'
        ],
        [
            'icon' => 'graduation-cap',
            'title' => 'Education & EdTech',
            'description' => 'Custom Learning Management Systems (LMS), virtual courses, and student/parent portals.'
        ],
        [
            'icon' => 'truck',
            'title' => 'Logistics & Supply Chain',
            'description' => 'Real-time shipment tracking, fleet management software, and supplier API connections.'
        ],
        [
            'icon' => 'landmark',
            'title' => 'Finance & FinTech',
            'description' => 'Secure investor portals, financial dashboards, and custom banking utility applications.'
        ],
        [
            'icon' => 'globe',
            'title' => 'Travel & Hospitality',
            'description' => 'Custom booking search engines, travel itinerary builders, and luxury hotel websites.'
        ],
        [
            'icon' => 'briefcase',
            'title' => 'Professional Services',
            'description' => 'Intake forms, scheduling portals, and billing solutions for law firms and agencies.'
        ],
        [
            'icon' => 'factory',
            'title' => 'Manufacturing & Industrial',
            'description' => 'B2B ordering portals, inventory trackers, and legacy database modernizations.'
        ],
        [
            'icon' => 'utensils',
            'title' => 'Food & Restaurant',
            'description' => 'Direct ordering web apps, multi-location digital menus, and reservation tables.'
        ],
        [
            'icon' => 'play',
            'title' => 'Entertainment & Media',
            'description' => 'Video streaming platforms, premium member galleries, and digital download portals.'
        ],
        [
            'icon' => 'launch',
            'title' => 'SaaS & Tech Startups',
            'description' => 'Multi-tenant subscription architectures, stripe billing checkouts, and custom API portals.'
        ]
    ];
@endphp

<section class="py-10 sm:py-14 px-3 sm:px-6 lg:px-8 border-b border-outline-variant/30">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
            <div class="inline-flex items-center gap-2 px-4 py-2 mb-5 rounded-full bg-primary/10 border border-primary/30 text-primary-500 backdrop-blur-xl">
                <span class="text-xs sm:text-sm font-semibold">Industries We Serve</span>
            </div>
            <h2 class="text-3xl lg:text-5xl font-bold text-primary mb-5 font-sans">
                Tailored Digital Solutions for Diverse Sectors
            </h2>
            <p class="text-md sm:text-lg max-w-3xl mx-auto text-muted-foreground">
                We build high-performance web applications, custom CRM platforms, and eCommerce ecosystems designed specifically to meet the unique challenges of your industry.
            </p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach ($industries as $industry)
                <div class="rounded-2xl border border-border bg-card transition-all duration-300 group relative overflow-hidden flex flex-col justify-between"
                    data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 50 }}" data-aos-duration="600">
                    <div class="space-y-4 p-6">
                        <div class="w-12 h-12 bg-primary/10 text-primary rounded-full border border-outline-variant/20 flex items-center justify-center group-hover:scale-110 transition-transform">
                            <x-dynamic-component :component="'icons.' . $industry['icon']" class="w-5 h-5" />
                        </div>
                        <h3 class="text-lg lg:text-xl font-bold text-foreground">
                            {{ $industry['title'] }}
                        </h3>
                        <p class="text-muted-foreground text-sm">
                            {{ $industry['description'] }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
