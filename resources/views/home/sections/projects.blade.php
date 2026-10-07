@php
    $projects = [
        [
            'title' => 'Attendance Manager System',
            'link' => route('portfolio.attendance-manager'),
            'category' => 'Attendance System',
            'image' => '/assets/images/attendance.png',
            'desc' =>
                'Laravel-powered system featuring geo-restriction, selfie verification, and real-time leave management.',
            'tags' => ['Laravel', 'MySQL', 'Geo Location'],
        ],
        [
            'title' => 'KrishnaAcademy LMS',
            'link' => route('portfolio.krishna-academy'),
            'category' => 'Learning Platform',
            'image' => 'assets/images/krishna-academy.png',
            'desc' => 'Comprehensive LMS for video courses and automated quizzes with Razorpay integration.',
            'tags' => ['Laravel', 'Razorpay', 'LMS'],
        ],
        [
            'title' => 'Kifayat Card System',
            'link' => route('portfolio.kifayat-card'),
            'category' => 'Loyalty Program',
            'image' => 'assets/projects/kifayatcard.webp',
            'desc' => 'B2B loyalty point system with real-time tracking, shop owner panels, and redemption logic.',
            'tags' => ['Laravel', 'QR Code', 'SaaS'],
        ]
    ];
@endphp
<section class="py-14 sm:py-20 px-3 overflow-hidden border-b border-outline-variant/30">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
            <div
                class="inline-flex items-center gap-2 px-4 py-2 mb-6 rounded-full bg-primary/10 border border-primary/30 text-primary-500 backdrop-blur-xl">
                <span class="text-xs sm:text-sm font-semibold">Featured Case Studies</span>
            </div>
            <h2 class="text-3xl lg:text-5xl font-bold mb-5 tracking-tight">
                Software We've Built <span class="text-gradient">for Real Businesses</span>
            </h2>
            <p class="text-md sm:text-lg text-muted-foreground max-w-3xl mx-auto">
                Custom platforms running in production today - from learning portals to loyalty systems and
                workforce tools.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            @foreach ($projects as $project)
                <x-product-card :project="$project" />
            @endforeach
        </div>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-3 mt-12">
            <a href="{{ route('portfolio') }}">
                <x-form.secondary-button type="button"
                    class="px-7 py-3 rounded-2xl border-border bg-card hover:border-primary/40">
                    <span>Explore Full Portfolio</span>
                    <x-icons.go class="w-4 h-4" />
                </x-form.secondary-button>
            </a>
            <a href="{{ route('contact') }}">
                <x-form.primary-button type="button" class="px-7 py-3 rounded-2xl">
                    <span>Discuss a Similar Project</span>
                    <x-icons.go class="w-4 h-4" />
                </x-form.primary-button>
            </a>
        </div>
    </div>
</section>
