@php
    $pageUrl = \App\Support\SiteUrl::to('website-development-company-in-lucknow');

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

    $trustStats = [
        ['value' => config('staticdata.projects') . '+', 'label' => 'Projects delivered'],
        ['value' => config('staticdata.clients') . '+', 'label' => 'Happy clients'],
        ['value' => config('staticdata.experience_years') . '+', 'label' => 'Years of experience'],
        ['value' => '2 hrs', 'label' => 'Typical reply time'],
    ];

    $process = [
        ['title' => 'Discovery', 'description' => 'We learn your business goals, audience and competitors.'],
        ['title' => 'Design', 'description' => 'We create an interface that fits your brand.'],
        ['title' => 'Development', 'description' => 'We build your website with a modern, secure stack.'],
        ['title' => 'Deployment', 'description' => 'We launch, monitor performance and keep improving.'],
    ];

    $testimonials = [
        ['initials' => 'AT', 'name' => 'Animesh Tripathi', 'role' => 'Founder, Truly Digitally', 'quote' => 'Tejal Digital has been an outstanding development partner, delivering top-notch Laravel applications with reliability and precision.'],
        ['initials' => 'KK', 'name' => 'Krishna Kant Soni', 'role' => 'Founder, Krishna Academy', 'quote' => 'Built a powerful and seamless LMS platform for us using Laravel. Their expertise, responsiveness, and attention to detail truly exceeded our expectations!'],
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
                    'url' => \App\Support\SiteUrl::to('/'),
                    'logo' => \App\Support\SiteUrl::to('assets/images/logo.svg'),
                    'telephone' => config('staticdata.phone'),
                    'email' => config('staticdata.email'),
                ],
            ],
            [
                '@type' => 'BreadcrumbList',
                'itemListElement' => [
                    ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => \App\Support\SiteUrl::to('/')],
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
    <link rel="canonical" href="@siteUrl">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Website Development Company in Lucknow | Tejal Digital">
    <meta property="og:description"
        content="Fast, custom-built websites, online stores and web applications for Lucknow businesses. 150+ projects delivered. Get a free quote.">
    <meta property="og:url" content="@siteUrl">
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
    {{-- Hero: simple, left-aligned introduction --}}
    <section class="border-b border-border bg-gradient-to-b from-primary-50/60 to-background">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 pt-10 pb-12 md:pt-14 md:pb-16">
            <nav aria-label="Breadcrumb" class="mb-6">
                <ol class="flex items-center gap-1.5 text-sm text-muted-foreground">
                    <li><a href="{{ route('home') }}" class="hover:text-primary transition-colors">Home</a></li>
                    <li><x-icons.chevron-right class="w-3.5 h-3.5" /></li>
                    <li class="text-foreground font-medium" aria-current="page">Website Development in Lucknow</li>
                </ol>
            </nav>

            <div class="max-w-3xl">
                <p class="inline-flex items-center gap-1.5 rounded-full bg-primary/10 text-primary-700 px-3 py-1 text-sm font-semibold mb-4">
                    <x-icons.map-pin class="w-4 h-4" /> Serving businesses across Lucknow
                </p>
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold tracking-tight leading-tight mb-5">
                    Website Development Company in Lucknow
                </h1>
                <p class="text-lg text-foreground/80 leading-relaxed mb-8">
                    Tejal Digital is a website development company serving Lucknow businesses with fast, custom-built
                    websites, online stores and web applications. Over {{ config('staticdata.experience_years') }}+ years
                    we have delivered {{ config('staticdata.projects') }}+ projects for {{ config('staticdata.clients') }}+
                    clients, and you work directly with the developers who write your code.
                </p>
                <div class="flex flex-col sm:flex-row gap-3">
                    <a href="{{ route('contact') }}">
                        <x-form.primary-button type="button" class="w-full sm:w-auto justify-center px-6 py-3 rounded-xl text-base">
                            <span>Get a Free Quote</span>
                            <x-icons.go class="w-4 h-4" />
                        </x-form.primary-button>
                    </a>
                    <a href="{{ config('staticdata.whatsapp_url') }}" target="_blank" rel="noopener">
                        <x-form.secondary-button type="button" class="w-full sm:w-auto justify-center px-6 py-3 rounded-xl text-base border-border bg-card hover:border-primary/40">
                            <x-icons.whatsapp class="w-5 h-5 text-[#25D366]" />
                            <span>Chat on WhatsApp</span>
                        </x-form.secondary-button>
                    </a>
                </div>
            </div>

            <dl class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-10">
                @foreach ($trustStats as $stat)
                    <div class="rounded-2xl border border-border bg-card px-5 py-4">
                        <dt class="text-sm text-muted-foreground">{{ $stat['label'] }}</dt>
                        <dd class="text-2xl font-bold tracking-tight mt-1">{{ $stat['value'] }}</dd>
                    </div>
                @endforeach
            </dl>
        </div>
    </section>

    {{-- Content + sticky quote card --}}
    <div class="max-w-6xl mx-auto px-4 sm:px-6 py-12 md:py-16 lg:grid lg:grid-cols-[minmax(0,1fr)_300px] lg:gap-12">
        <article class="space-y-16 min-w-0">

            {{-- Services --}}
            <section>
                <h2 class="text-2xl md:text-3xl font-bold tracking-tight mb-3">Website development services in Lucknow</h2>
                <p class="text-foreground/75 leading-relaxed mb-6">
                    One team handles strategy, design, development, launch and long-term support.
                </p>
                <div class="grid sm:grid-cols-2 gap-4">
                    @foreach ($services as $service)
                        <div class="rounded-2xl border border-border bg-card p-5 flex flex-col">
                            <div class="flex items-center gap-3 mb-3">
                                <span class="w-10 h-10 shrink-0 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
                                    <x-dynamic-component :component="'icons.' . $service['icon']" class="w-5 h-5" />
                                </span>
                                <h3 class="font-bold leading-snug">{{ $service['title'] }}</h3>
                            </div>
                            <p class="text-sm text-foreground/75 leading-relaxed">{{ $service['description'] }}</p>
                            @isset($service['link'])
                                <a href="{{ $service['link'] }}"
                                    class="group mt-auto pt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary">
                                    Learn more<span class="sr-only"> about {{ $service['title'] }}</span>
                                    <x-icons.chevron-right class="w-4 h-4 group-hover:translate-x-0.5 transition-transform" />
                                </a>
                            @endisset
                        </div>
                    @endforeach
                </div>
            </section>

            {{-- Industries --}}
            <section>
                <h2 class="text-2xl md:text-3xl font-bold tracking-tight mb-3">Web development for Lucknow's key industries</h2>
                <p class="text-foreground/75 leading-relaxed mb-6">
                    We have built websites and software for businesses like these:
                </p>
                <div class="grid sm:grid-cols-2 gap-4">
                    @foreach ($industries as $industry)
                        <div class="flex gap-4 rounded-2xl border border-border bg-card p-5">
                            <span class="w-10 h-10 shrink-0 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
                                <x-dynamic-component :component="'icons.' . $industry['icon']" class="w-5 h-5" />
                            </span>
                            <div>
                                <h3 class="font-bold mb-1">{{ $industry['title'] }}</h3>
                                <p class="text-sm text-foreground/75 leading-relaxed">{{ $industry['description'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>

            {{-- Why choose us --}}
            <section>
                <h2 class="text-2xl md:text-3xl font-bold tracking-tight mb-6">Why Lucknow businesses choose Tejal Digital</h2>
                <div class="grid sm:grid-cols-2 gap-4">
                    @foreach ($reasons as $reason)
                        <div class="rounded-2xl border border-border bg-card p-5 {{ $loop->last ? 'sm:col-span-2' : '' }}">
                            <div class="flex items-center gap-2 mb-2">
                                <x-icons.check class="w-5 h-5 shrink-0 text-primary" />
                                <h3 class="font-bold">{{ rtrim($reason['title'], '.') }}</h3>
                            </div>
                            <p class="text-sm text-foreground/75 leading-relaxed">{{ $reason['description'] }}</p>
                        </div>
                    @endforeach
                </div>
            </section>

            {{-- Process --}}
            <section>
                <h2 class="text-2xl md:text-3xl font-bold tracking-tight mb-6">Our website development process</h2>
                <ol class="grid sm:grid-cols-2 gap-4">
                    @foreach ($process as $step)
                        <li class="rounded-2xl border border-border bg-card p-5">
                            <span class="inline-flex w-8 h-8 rounded-full bg-primary text-white text-sm font-bold items-center justify-center mb-3">{{ $loop->iteration }}</span>
                            <h3 class="font-bold mb-1">{{ $step['title'] }}</h3>
                            <p class="text-sm text-foreground/75 leading-relaxed">{{ $step['description'] }}</p>
                        </li>
                    @endforeach
                </ol>
            </section>

            {{-- Recent work --}}
            <section>
                <div class="flex items-end justify-between gap-4 mb-6">
                    <h2 class="text-2xl md:text-3xl font-bold tracking-tight">Recent work</h2>
                    <a href="{{ route('portfolio') }}" class="group shrink-0 inline-flex items-center gap-1 text-sm font-semibold text-primary">
                        View full portfolio
                        <x-icons.chevron-right class="w-4 h-4 group-hover:translate-x-0.5 transition-transform" />
                    </a>
                </div>
                <div class="grid sm:grid-cols-3 gap-4">
                    @foreach ($projects as $project)
                        <a href="{{ $project['link'] }}"
                            class="group rounded-2xl border border-border bg-card overflow-hidden hover:border-primary/40 transition-colors flex flex-col">
                            <div class="aspect-[16/10] bg-zinc-100 overflow-hidden border-b border-border">
                                <img src="{{ asset($project['image']) }}" alt="{{ $project['alt'] }}" loading="lazy"
                                    class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                            </div>
                            <div class="p-4 flex flex-col flex-1">
                                <p class="text-xs font-semibold uppercase tracking-wider text-primary mb-1">{{ $project['category'] }}</p>
                                <h3 class="font-bold mb-1 group-hover:text-primary transition-colors">{{ $project['title'] }}</h3>
                                <p class="text-sm text-foreground/75 leading-relaxed">{{ $project['desc'] }}</p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </section>

            {{-- Cost --}}
            <section class="rounded-2xl border border-primary/20 bg-primary-50/50 p-6 md:p-8">
                <h2 class="text-2xl md:text-3xl font-bold tracking-tight mb-3">Website development cost in Lucknow</h2>
                <p class="text-foreground/80 leading-relaxed mb-6">
                    Cost depends on the number of pages, design complexity and features. We share a clear, itemized
                    quote before any work begins, with no hidden charges.
                </p>
                <a href="{{ route('contact') }}">
                    <x-form.primary-button type="button" class="px-6 py-3 rounded-xl">
                        <span>Get Your Quote</span>
                        <x-icons.go class="w-4 h-4" />
                    </x-form.primary-button>
                </a>
            </section>

            {{-- Testimonials --}}
            <section>
                <h2 class="text-2xl md:text-3xl font-bold tracking-tight mb-6">What our clients say</h2>
                <div class="grid sm:grid-cols-2 gap-4">
                    @foreach ($testimonials as $testimonial)
                        <figure class="rounded-2xl border border-border bg-card p-6 flex flex-col">
                            <div class="flex gap-0.5 text-amber-500 mb-3" aria-label="5 out of 5 stars">
                                @for ($i = 0; $i < 5; $i++)
                                    <x-icons.star class="w-4 h-4 fill-current" />
                                @endfor
                            </div>
                            <blockquote class="text-foreground/85 leading-relaxed mb-5">“{{ $testimonial['quote'] }}”</blockquote>
                            <figcaption class="mt-auto flex items-center gap-3 pt-4 border-t border-border">
                                <span class="w-10 h-10 rounded-full bg-primary text-white text-sm font-bold flex items-center justify-center">{{ $testimonial['initials'] }}</span>
                                <span>
                                    <span class="block font-semibold">{{ $testimonial['name'] }}</span>
                                    <span class="block text-sm text-muted-foreground">{{ $testimonial['role'] }}</span>
                                </span>
                            </figcaption>
                        </figure>
                    @endforeach
                </div>
            </section>

            {{-- Areas served --}}
            <section>
                <h2 class="text-2xl md:text-3xl font-bold tracking-tight mb-3">Areas we serve in Lucknow</h2>
                <p class="text-foreground/75 leading-relaxed mb-5">
                    We work with businesses across {{ implode(', ', array_slice($areas, 0, -1)) }} and {{ end($areas) }},
                    as well as nearby {{ implode(', ', array_slice($nearby, 0, -1)) }} and {{ end($nearby) }}.
                </p>
                <ul class="flex flex-wrap gap-2">
                    @foreach (array_merge($areas, $nearby) as $area)
                        <li class="inline-flex items-center gap-1.5 rounded-full border border-border bg-card px-3 py-1.5 text-sm">
                            <x-icons.map-pin class="w-3.5 h-3.5 text-primary" />
                            {{ $area }}
                        </li>
                    @endforeach
                </ul>
            </section>

            {{-- FAQ --}}
            <section>
                <h2 class="text-2xl md:text-3xl font-bold tracking-tight mb-6">Frequently asked questions</h2>
                <div class="space-y-3">
                    @foreach ($faqs as $faq)
                        <details class="group rounded-2xl border border-border bg-card px-5 py-4 open:border-primary/40" @if ($loop->first) open @endif>
                            <summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-semibold [&::-webkit-details-marker]:hidden">
                                <h3>{{ $faq['question'] }}</h3>
                                <x-icons.chevron-right class="w-5 h-5 shrink-0 text-primary transition-transform group-open:rotate-90" />
                            </summary>
                            <p class="mt-3 text-foreground/75 leading-relaxed">{{ $faq['answer'] }}</p>
                        </details>
                    @endforeach
                </div>
            </section>
        </article>

        {{-- Sidebar quote card (desktop) --}}
        <aside class="hidden lg:block">
            <div class="sticky top-24 rounded-2xl border border-border bg-card p-6 shadow-sm">
                <h2 class="text-lg font-bold mb-2">Get a free quote</h2>
                <p class="text-sm text-foreground/75 leading-relaxed mb-5">
                    Tell us what you want to build. We reply within 2 hours with honest advice and a no-obligation estimate.
                </p>
                <a href="{{ route('contact') }}" class="block mb-3">
                    <x-form.primary-button type="button" class="w-full justify-center py-3 rounded-xl">
                        <span>Get Your Quote</span>
                        <x-icons.go class="w-4 h-4" />
                    </x-form.primary-button>
                </a>
                <a href="{{ config('staticdata.whatsapp_url') }}" target="_blank" rel="noopener"
                    class="flex items-center justify-center gap-2 w-full py-2.5 rounded-xl border border-border text-sm font-semibold hover:border-primary/40 transition-colors">
                    <x-icons.whatsapp class="w-4 h-4 text-[#25D366]" /> Chat on WhatsApp
                </a>
                <a href="tel:{{ config('staticdata.phone') }}"
                    class="mt-2 flex items-center justify-center gap-2 w-full py-2.5 rounded-xl border border-border text-sm font-semibold hover:border-primary/40 transition-colors">
                    <x-icons.call class="w-4 h-4 text-primary" /> {{ config('staticdata.phone') }}
                </a>
                <ul class="mt-5 pt-5 border-t border-border space-y-2 text-sm text-foreground/75">
                    <li class="flex items-center gap-2"><x-icons.check class="w-4 h-4 text-primary shrink-0" /> Free, itemized quote</li>
                    <li class="flex items-center gap-2"><x-icons.check class="w-4 h-4 text-primary shrink-0" /> Direct access to developers</li>
                    <li class="flex items-center gap-2"><x-icons.check class="w-4 h-4 text-primary shrink-0" /> MSME registered</li>
                </ul>
            </div>
        </aside>
    </div>

    {{-- Final CTA --}}
    <section class="px-4 sm:px-6 pb-16">
        <div class="max-w-6xl mx-auto rounded-3xl bg-zinc-900 text-white px-6 py-10 md:px-12 md:py-12 md:flex md:items-center md:justify-between gap-8">
            <div class="max-w-xl mb-6 md:mb-0">
                <h2 class="text-2xl md:text-3xl font-bold tracking-tight mb-2">Get a free quote for your Lucknow business</h2>
                <p class="text-white/75 leading-relaxed">
                    Tell us what you want to build. We reply within 2 hours with honest advice and a no-obligation estimate.
                </p>
            </div>
            <div class="flex flex-col sm:flex-row md:flex-col lg:flex-row gap-3 shrink-0">
                <a href="{{ route('contact') }}">
                    <x-form.primary-button type="button" class="w-full justify-center px-6 py-3 rounded-xl">
                        <span>Get Free Consultation</span>
                        <x-icons.go class="w-4 h-4" />
                    </x-form.primary-button>
                </a>
                <a href="tel:{{ config('staticdata.phone') }}"
                    class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl border border-white/20 font-medium hover:bg-white/10 transition-colors">
                    <x-icons.call class="w-4 h-4" /> Call {{ config('staticdata.phone') }}
                </a>
            </div>
        </div>
    </section>
@endsection
