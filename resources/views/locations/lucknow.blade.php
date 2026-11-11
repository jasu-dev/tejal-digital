@php
    $pageUrl = 'https://www.tejaldigital.in/website-development-company-in-lucknow';

    $services = [
        [
            'icon' => 'window',
            'title' => 'Business and corporate website development',
            'description' => 'Professional, mobile-first websites that build trust and turn visitors into enquiries. Every site ships with SEO-ready structure and clear calls to action.',
        ],
        [
            'icon' => 'wordpress',
            'title' => 'WordPress website development',
            'description' => 'Lightweight WordPress websites built from scratch, without template bloat. You can edit pages yourself using Gutenberg and ACF.',
            'link' => route('services.wordpress-development'),
        ],
        [
            'icon' => 'cart',
            'title' => 'eCommerce website development',
            'description' => 'Online stores with secure payment gateway integration, automated inventory tracking and a checkout designed for mobile shoppers.',
            'link' => route('services.ecommerce-development'),
        ],
        [
            'icon' => 'laravel',
            'title' => 'Custom web development with Laravel',
            'description' => 'Secure, scalable web applications shaped around your business workflows, with optimized databases and high-performance backend code.',
            'link' => route('services.laravel-development'),
        ],
        [
            'icon' => 'users',
            'title' => 'Custom CRM and ERP development',
            'description' => 'Track leads, automate billing and manage your team from one system, with role-based access for staff.',
            'link' => route('services.crm-development'),
        ],
        [
            'icon' => 'dashboard',
            'title' => 'SaaS application development',
            'description' => 'Turn your software idea into a subscription product with multi-tenant architecture, automated billing and smooth user onboarding.',
            'link' => route('services.saas-development'),
        ],
        [
            'icon' => 'plugin',
            'title' => 'API development and integration',
            'description' => 'Connect payment processors, logistics systems and other third-party tools so your data stays in sync.',
            'link' => route('services.api-development'),
        ],
        [
            'icon' => 'security',
            'title' => 'Website speed and security optimization',
            'description' => 'Fix Core Web Vitals, add caching, and protect your site with malware scanning and firewalls.',
        ],
        [
            'icon' => 'tools',
            'title' => 'Website maintenance and support',
            'description' => 'Regular updates, daily cloud backups and uptime monitoring, so your website keeps running after launch.',
        ],
    ];

    $industries = [
        ['icon' => 'shopping-bag', 'title' => 'Chikankari and zardozi sellers', 'description' => 'Online stores with product catalogues, online payments and shipping integration to sell across India.'],
        ['icon' => 'activity', 'title' => 'Clinics and hospitals', 'description' => 'Appointment booking, doctor profiles and patient enquiry forms.'],
        ['icon' => 'graduation-cap', 'title' => 'Coaching institutes and schools', 'description' => 'Course websites and learning platforms with video lessons, quizzes and online fee payment.'],
        ['icon' => 'building', 'title' => 'Real estate developers and brokers', 'description' => 'Property listing portals with lead capture and CRM.'],
        ['icon' => 'utensils', 'title' => 'Restaurants and hotels', 'description' => 'Digital menus, direct ordering and reservation systems.'],
        ['icon' => 'launch', 'title' => 'Startups', 'description' => 'MVPs and SaaS products built to scale.'],
        ['icon' => 'factory', 'title' => 'Manufacturers and traders', 'description' => 'B2B catalogues and ordering portals.'],
    ];

    $reasons = [
        ['title' => 'Custom-built, not templated.', 'description' => 'Clean, hand-written code with no bloated themes or lock-in.'],
        ['title' => 'Direct access to developers.', 'description' => 'You talk to the people building your website, not an account manager.'],
        ['title' => 'Fast and SEO-ready.', 'description' => 'Mobile-first design and search-friendly architecture from day one.'],
        ['title' => 'Support after launch.', 'description' => 'Maintenance, backups and improvements for as long as you need them.'],
        ['title' => 'Clear communication, wherever you are.', 'description' => 'We are based in Nagaur, Rajasthan and work with Lucknow clients over video calls, phone and WhatsApp, with regular progress updates.'],
    ];

    $projects = [
        [
            'title' => 'KrishnaAcademy LMS',
            'alt' => 'KrishnaAcademy LMS built by Tejal Digital',
            'link' => route('portfolio.krishna-academy'),
            'category' => 'Learning Platform',
            'image' => 'assets/images/krishna-academy.png',
            'desc' => 'A learning platform with video courses, automated quizzes and Razorpay payments.',
            'tags' => ['Laravel', 'Razorpay', 'LMS'],
        ],
        [
            'title' => 'Attendance Manager System',
            'alt' => 'Attendance Manager System built by Tejal Digital',
            'link' => route('portfolio.attendance-manager'),
            'category' => 'Attendance System',
            'image' => 'assets/images/attendance.png',
            'desc' => 'Geo-restricted attendance with selfie verification and leave management.',
            'tags' => ['Laravel', 'MySQL', 'Geo Location'],
        ],
        [
            'title' => 'Kifayat Card System',
            'alt' => 'Kifayat Card loyalty platform built by Tejal Digital',
            'link' => route('portfolio.kifayat-card'),
            'category' => 'Loyalty Program',
            'image' => 'assets/projects/kifayatcard.webp',
            'desc' => 'A B2B loyalty platform with QR codes and shop-owner panels.',
            'tags' => ['Laravel', 'QR Code', 'SaaS'],
        ],
    ];

    $areas = ['Gomti Nagar', 'Hazratganj', 'Aliganj', 'Indira Nagar', 'Alambagh', 'Mahanagar', 'Aminabad', 'Chowk', 'Jankipuram', 'Rajajipuram', 'Chinhat'];
    $nearby = ['Kanpur', 'Barabanki', 'Unnao'];

    $faqs = [
        [
            'question' => 'How much does website development cost in Lucknow?',
            'answer' => 'It depends on the type of website, number of pages and features. Share your requirements and we will send a free, itemized quote.',
        ],
        [
            'question' => 'Do you have an office in Lucknow?',
            'answer' => 'No. We are based in Nagaur, Rajasthan and serve Lucknow clients remotely through video calls, phone and WhatsApp. You get direct access to your developer throughout the project.',
        ],
        [
            'question' => 'How long does it take to build a website?',
            'answer' => 'It depends on scope. A business website is the quickest to deliver, while eCommerce stores and custom applications take longer depending on features. You get a clear timeline with your quote.',
        ],
        [
            'question' => 'Will my website be mobile-friendly and SEO-ready?',
            'answer' => 'Yes. Every website is responsive and built with search-friendly structure, fast loading and clean code.',
        ],
        [
            'question' => 'Should I choose WordPress or Laravel?',
            'answer' => 'WordPress suits business websites and blogs you want to edit yourself. Laravel suits custom applications such as CRMs, portals and SaaS products. We recommend one after understanding your needs.',
        ],
        [
            'question' => 'Can you redesign or speed up my existing website?',
            'answer' => 'Yes. We redesign outdated websites and fix slow ones through caching, database tuning and Core Web Vitals improvements.',
        ],
        [
            'question' => 'Do you provide support after the website is live?',
            'answer' => 'Yes. Our maintenance plans cover updates, daily backups, security and uptime monitoring.',
        ],
    ];

    $schema = [
        '@context' => 'https://schema.org',
        '@graph' => [
            [
                '@type' => 'Service',
                'name' => 'Website Development in Lucknow',
                'serviceType' => 'Website Development',
                'url' => $pageUrl,
                'description' => 'Fast, custom-built websites, online stores and web applications for Lucknow businesses.',
                'areaServed' => [
                    ['@type' => 'City', 'name' => 'Lucknow'],
                    ...array_map(fn($city) => ['@type' => 'City', 'name' => $city], $nearby),
                ],
                'provider' => [
                    '@type' => 'Organization',
                    'name' => 'Tejal Digital',
                    'url' => 'https://www.tejaldigital.in/',
                    'logo' => 'https://www.tejaldigital.in/assets/images/logo.svg',
                    'telephone' => config('staticdata.phone'),
                    'email' => config('staticdata.email'),
                ],
            ],
            [
                '@type' => 'BreadcrumbList',
                'itemListElement' => [
                    ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => 'https://www.tejaldigital.in/'],
                    ['@type' => 'ListItem', 'position' => 2, 'name' => 'Website Development Company in Lucknow', 'item' => $pageUrl],
                ],
            ],
            [
                '@type' => 'FAQPage',
                'mainEntity' => array_map(fn($faq) => [
                    '@type' => 'Question',
                    'name' => $faq['question'],
                    'acceptedAnswer' => ['@type' => 'Answer', 'text' => $faq['answer']],
                ], $faqs),
            ],
        ],
    ];
@endphp

@extends('layouts.app')

@section('head')
    <title>Website Development Company in Lucknow | Tejal Digital</title>
    <meta name="description"
        content="Looking for a website development company in Lucknow? Tejal Digital builds fast WordPress, Laravel and eCommerce websites. 150+ projects. Free quote.">
    <link rel="canonical" href="{{ $pageUrl }}">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Website Development Company in Lucknow | Tejal Digital">
    <meta property="og:description"
        content="Fast, custom-built websites, online stores and web applications for Lucknow businesses. 150+ projects delivered. Get a free quote.">
    <meta property="og:url" content="{{ $pageUrl }}">
    <meta property="og:image" content="{{ asset('assets/images/og-image.png') }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Website Development Company in Lucknow | Tejal Digital">
    <meta name="twitter:description"
        content="WordPress, Laravel and eCommerce websites for Lucknow businesses. Free, no-obligation quote.">
    <meta name="twitter:image" content="{{ asset('assets/images/og-image.png') }}">

    <script type="application/ld+json">{!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) !!}</script>
@endsection

@section('content')
    {{-- Hero --}}
    <section
        class="relative -mt-20 pt-20 pb-14 px-4 flex flex-col items-center text-sm bg-cover bg-center bg-no-repeat border-b border-outline-variant/30"
        style="background-image: url('{{ asset('assets/images/hero-gradient-bg.png') }}')">

        <nav class="mt-10 md:mt-20" aria-label="Breadcrumb">
            <ol class="flex items-center gap-2 text-foreground/70">
                <li><a href="{{ route('home') }}" class="hover:text-primary transition-colors">Home</a></li>
                <li><x-icons.chevron-right class="w-4 h-4" /></li>
                <li class="font-medium text-foreground" aria-current="page">Website Development in Lucknow</li>
            </ol>
        </nav>

        <h1 class="text-4xl md:text-6xl text-center font-bold tracking-tight leading-[1.05] max-w-4xl mt-6 mb-5">
            Website Development Company <span class="text-gradient">in Lucknow</span>
        </h1>
        <p class="text-foreground/80 text-base md:text-lg text-center max-w-3xl leading-relaxed">
            Tejal Digital is a website development company serving Lucknow businesses with fast, custom-built websites,
            online stores and web applications. Over {{ config('staticdata.experience_years') }}+ years we have delivered
            {{ config('staticdata.projects') }}+ projects for {{ config('staticdata.clients') }}+ clients, and you work
            directly with the developers who write your code.
        </p>

        <div class="flex flex-col justify-center sm:flex-row gap-3 mt-8 w-full sm:w-auto">
            <a href="{{ route('contact') }}" class="w-full sm:w-auto">
                <x-form.primary-button type="button"
                    class="w-full justify-center px-7 py-3.5 rounded-2xl text-base shadow-lg shadow-primary-500/25">
                    <span>Get a Free Quote</span>
                    <x-icons.go class="w-4 h-4" />
                </x-form.primary-button>
            </a>
            <a href="{{ config('staticdata.whatsapp_url') }}" target="_blank" rel="noopener" class="w-full sm:w-auto">
                <x-form.secondary-button type="button" class="w-full justify-center px-7 py-3.5 rounded-2xl text-base">
                    <x-icons.whatsapp class="w-5 h-5" />
                    <span>Chat on WhatsApp</span>
                </x-form.secondary-button>
            </a>
        </div>

        <ul class="flex flex-wrap items-center justify-center gap-x-6 gap-y-2 mt-6 text-foreground/70">
            <li class="flex items-center gap-1.5"><x-icons.check class="w-4 h-4 text-primary" /> {{ config('staticdata.projects') }}+ projects delivered</li>
            <li class="flex items-center gap-1.5"><x-icons.check class="w-4 h-4 text-primary" /> {{ config('staticdata.clients') }}+ happy clients</li>
            <li class="flex items-center gap-1.5"><x-icons.check class="w-4 h-4 text-primary" /> {{ config('staticdata.experience_years') }}+ years of experience</li>
            <li class="flex items-center gap-1.5"><x-icons.check class="w-4 h-4 text-primary" /> MSME registered</li>
            <li class="flex items-center gap-1.5"><x-icons.check class="w-4 h-4 text-primary" /> Reply within 2 hours</li>
        </ul>
    </section>

    {{-- Services --}}
    <section class="py-14 sm:py-20 px-3 sm:px-6 lg:px-8 border-b border-outline-variant/30">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl lg:text-5xl font-bold tracking-tight mb-5">
                    Website development services in Lucknow
                </h2>
                <p class="text-md sm:text-lg text-muted-foreground max-w-3xl mx-auto">
                    One team handles strategy, design, development, launch and long-term support.
                </p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($services as $service)
                    <div class="rounded-2xl border border-border bg-card p-7 flex flex-col transition-colors hover:border-primary/40"
                        data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 50 }}">
                        <div class="w-12 h-12 bg-primary/10 text-primary rounded-2xl mb-5 flex items-center justify-center">
                            <x-dynamic-component :component="'icons.' . $service['icon']" class="w-5 h-5" />
                        </div>
                        <h3 class="text-xl font-bold tracking-tight mb-3">{{ $service['title'] }}</h3>
                        <p class="text-muted-foreground leading-relaxed">{{ $service['description'] }}</p>
                        @isset($service['link'])
                            <a href="{{ $service['link'] }}"
                                class="group mt-auto pt-5 inline-flex items-center gap-1.5 text-sm font-bold text-primary">
                                Learn more<span class="sr-only"> about {{ $service['title'] }}</span>
                                <x-icons.chevron-right class="w-4 h-4 group-hover:translate-x-1 transition-transform" />
                            </a>
                        @endisset
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Industries --}}
    <section class="py-14 sm:py-20 px-3 sm:px-6 lg:px-8 border-b border-outline-variant/30">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl lg:text-5xl font-bold tracking-tight text-center mb-12" data-aos="fade-up">
                Web development for Lucknow's key industries
            </h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
                @foreach ($industries as $industry)
                    <div class="rounded-2xl border border-border bg-card p-6" data-aos="fade-up"
                        data-aos-delay="{{ $loop->iteration * 50 }}">
                        <div class="w-11 h-11 bg-primary/10 text-primary rounded-xl mb-4 flex items-center justify-center">
                            <x-dynamic-component :component="'icons.' . $industry['icon']" class="w-5 h-5" />
                        </div>
                        <h3 class="text-lg font-bold tracking-tight mb-2">{{ $industry['title'] }}</h3>
                        <p class="text-sm text-muted-foreground leading-relaxed">{{ $industry['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Why choose us --}}
    <section class="py-14 sm:py-20 px-3 sm:px-6 lg:px-8 border-b border-outline-variant/30">
        <div class="max-w-6xl mx-auto grid lg:grid-cols-5 gap-10 lg:gap-14 items-start">
            <div class="lg:col-span-2" data-aos="fade-up">
                <h2 class="text-3xl lg:text-5xl font-bold tracking-tight mb-5">
                    Why Lucknow businesses choose <span class="text-gradient">Tejal Digital</span>
                </h2>
                <a href="{{ route('contact') }}">
                    <x-form.primary-button type="button" class="px-7 py-3 rounded-2xl mt-3">
                        <span>Get a Free Quote</span>
                        <x-icons.go class="w-4 h-4" />
                    </x-form.primary-button>
                </a>
            </div>
            <ul class="lg:col-span-3 space-y-4">
                @foreach ($reasons as $reason)
                    <li class="flex gap-4 rounded-2xl border border-border bg-card p-5" data-aos="fade-up"
                        data-aos-delay="{{ $loop->iteration * 50 }}">
                        <x-icons.check class="w-5 h-5 mt-0.5 shrink-0 text-primary" />
                        <p class="leading-relaxed">
                            <strong class="font-bold">{{ $reason['title'] }}</strong>
                            <span class="text-muted-foreground">{{ $reason['description'] }}</span>
                        </p>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    {{-- Process --}}
    @include('sections.working-process')

    {{-- Recent work --}}
    <section class="py-14 sm:py-20 px-3 sm:px-6 lg:px-8 border-b border-outline-variant/30">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl lg:text-5xl font-bold tracking-tight text-center mb-12" data-aos="fade-up">
                Recent work
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                @foreach ($projects as $project)
                    <x-product-card :project="$project" />
                @endforeach
            </div>
            <div class="text-center mt-10">
                <a href="{{ route('portfolio') }}">
                    <x-form.secondary-button type="button"
                        class="px-7 py-3 rounded-2xl border-border bg-card hover:border-primary/40">
                        <span>View Full Portfolio</span>
                        <x-icons.go class="w-4 h-4" />
                    </x-form.secondary-button>
                </a>
            </div>
        </div>
    </section>

    {{-- Cost --}}
    <section class="py-14 sm:py-20 px-3 sm:px-6 lg:px-8 border-b border-outline-variant/30">
        <div class="max-w-4xl mx-auto rounded-3xl border border-border bg-card p-8 sm:p-12 text-center" data-aos="fade-up">
            <h2 class="text-3xl lg:text-4xl font-bold tracking-tight mb-5">Website development cost in Lucknow</h2>
            <p class="text-md sm:text-lg text-muted-foreground max-w-2xl mx-auto leading-relaxed mb-8">
                Cost depends on the number of pages, design complexity and features. We share a clear, itemized quote
                before any work begins, with no hidden charges.
            </p>
            <a href="{{ route('contact') }}">
                <x-form.primary-button type="button" class="px-7 py-3.5 rounded-2xl text-base shadow-lg shadow-primary-500/25">
                    <span>Get Your Quote</span>
                    <x-icons.go class="w-4 h-4" />
                </x-form.primary-button>
            </a>
        </div>
    </section>

    {{-- Testimonials --}}
    @include('home.sections.testimonials')

    {{-- Areas served --}}
    <section class="py-14 sm:py-20 px-3 sm:px-6 lg:px-8 border-b border-outline-variant/30">
        <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
            <h2 class="text-3xl lg:text-4xl font-bold tracking-tight mb-5">Areas we serve in Lucknow</h2>
            <p class="text-md sm:text-lg text-muted-foreground leading-relaxed mb-8">
                We work with businesses across {{ implode(', ', array_slice($areas, 0, -1)) }} and {{ end($areas) }},
                as well as nearby {{ implode(', ', array_slice($nearby, 0, -1)) }} and {{ end($nearby) }}.
            </p>
            <ul class="flex flex-wrap justify-center gap-2">
                @foreach (array_merge($areas, $nearby) as $area)
                    <li class="inline-flex items-center gap-1.5 rounded-full border border-border bg-card px-3.5 py-1.5 text-sm font-medium">
                        <x-icons.map-pin class="w-3.5 h-3.5 text-primary" />
                        {{ $area }}
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    {{-- FAQ --}}
    <section class="py-14 sm:py-20 px-3 sm:px-6 lg:px-8 border-b border-outline-variant/30">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-3xl lg:text-4xl font-bold tracking-tight text-center mb-10">Frequently asked questions</h2>
            <div class="space-y-3">
                @foreach ($faqs as $faq)
                    <details class="group rounded-2xl border border-border bg-card px-6 py-5 open:border-primary/40" @if ($loop->first) open @endif>
                        <summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-bold text-lg [&::-webkit-details-marker]:hidden">
                            <h3>{{ $faq['question'] }}</h3>
                            <x-icons.chevron-right class="w-5 h-5 shrink-0 text-primary transition-transform group-open:rotate-90" />
                        </summary>
                        <p class="mt-3 text-muted-foreground leading-relaxed">{{ $faq['answer'] }}</p>
                    </details>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Final CTA --}}
    <section class="py-20 sm:py-25 px-3 sm:px-6 lg:px-8 relative overflow-hidden bg-gradient-to-b from-background via-[#fffbee] to-primary-500/20">
        <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
            <h2 class="text-3xl lg:text-5xl font-bold mb-5 tracking-tight">
                Get a free quote for your Lucknow business
            </h2>
            <p class="text-md sm:text-lg text-foreground/80 max-w-2xl mx-auto leading-relaxed mb-10">
                Tell us what you want to build. We reply within 2 hours with honest advice and a no-obligation estimate.
            </p>
            <div class="flex flex-col sm:flex-row gap-3 justify-center items-center">
                <a href="{{ route('contact') }}">
                    <x-form.primary-button type="button" class="px-7 py-3.5 rounded-2xl text-base shadow-lg shadow-primary-500/25">
                        <span>Get Free Consultation</span>
                        <x-icons.go class="w-4 h-4" />
                    </x-form.primary-button>
                </a>
                <a href="{{ config('staticdata.whatsapp_url') }}" target="_blank" rel="noopener">
                    <x-form.secondary-button type="button" class="px-7 py-3.5 rounded-2xl text-base">
                        <x-icons.whatsapp class="w-5 h-5" />
                        <span>Chat on WhatsApp</span>
                    </x-form.secondary-button>
                </a>
                <a href="tel:{{ config('staticdata.phone') }}">
                    <x-form.secondary-button type="button" class="px-7 py-3.5 rounded-2xl text-base">
                        <x-icons.call class="w-5 h-5" />
                        <span>Call {{ config('staticdata.phone') }}</span>
                    </x-form.secondary-button>
                </a>
            </div>
        </div>
    </section>
@endsection
