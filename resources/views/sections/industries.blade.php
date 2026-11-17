@php
    // Only industries we have shipped real work for, each with the project that proves it
    $industries = [
        [
            'icon' => 'graduation-cap',
            'title' => 'Education & Coaching',
            'description' => 'Learning platforms with video courses, quizzes, certificates and online fee payment.',
            'example' => 'KrishnaAcademy LMS',
            'link' => route('portfolio.krishna-academy'),
        ],
        [
            'icon' => 'shopping-bag',
            'title' => 'Retail & Loyalty Programs',
            'description' => 'Reward-point systems, QR cards and shop-owner panels that bring customers back.',
            'example' => 'Kifayat Card',
            'link' => route('portfolio.kifayat-card'),
        ],
        [
            'icon' => 'launch',
            'title' => 'SaaS & Startups',
            'description' => 'Subscription products with user and admin panels, payments and referral systems.',
            'example' => 'Growix Smart QR, PromoFusion360',
            'link' => route('portfolio.growix-smart-qr'),
        ],
        [
            'icon' => 'globe',
            'title' => 'News, Media & Blogs',
            'description' => 'Fast publishing websites with custom CMS, SEO tools and ad placements.',
            'example' => 'Gujjutak News, Tech Nukti, TechUpkar',
            'link' => route('portfolio.gujjutak-news'),
        ],
        [
            'icon' => 'briefcase',
            'title' => 'Local & Service Businesses',
            'description' => 'Lead-generating websites for interior designers, movers, clinics and hosting companies.',
            'example' => 'Alacritys Interior, Jasol Packers & Movers, JixiCloud',
            'link' => route('portfolio'),
        ],
    ];
@endphp

<section class="py-10 sm:py-14 px-3 sm:px-6 lg:px-8 border-b border-outline-variant/30">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
            <div class="inline-flex items-center gap-2 px-4 py-2 mb-5 rounded-full bg-primary/10 border border-primary/30 text-primary-500 backdrop-blur-xl">
                <span class="text-xs sm:text-sm font-semibold">Industries We Serve</span>
            </div>
            <h2 class="text-3xl lg:text-5xl font-bold tracking-tight mb-5">
                Industries We Have <span class="text-gradient">Built For</span>
            </h2>
            <p class="text-md sm:text-lg max-w-3xl mx-auto text-muted-foreground">
                Every industry below comes with a real project you can look at.
            </p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($industries as $industry)
                <a href="{{ $industry['link'] }}"
                    class="rounded-2xl border border-border bg-card transition-all duration-300 hover:border-primary/40 group relative overflow-hidden flex flex-col"
                    data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 50 }}" data-aos-duration="600">
                    <div class="space-y-4 p-6 flex-1">
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
                    <div class="px-6 py-4 border-t border-border text-sm flex items-center justify-between gap-3">
                        <span><span class="text-muted-foreground">Example:</span> <span class="font-semibold">{{ $industry['example'] }}</span></span>
                        <x-icons.chevron-right class="w-4 h-4 shrink-0 text-primary group-hover:translate-x-1 transition-transform" />
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
