@php
    $projects = [
        [
            'title' => 'Attendance Manager System',
            'link' => route('portfolio.attendance-manager'),
            'category' => 'Attendance System',
            'image' => '/assets/images/attendance.png',
            'desc' =>
                'Laravel-powered system featuring geo-restriction, selfie verification, and real-time leave management.',
            'tags' => ['Laravel', 'Geo Location', 'Tailwind'],
        ],
        [
            'title' => 'KrishnaAcademy LMS',
            'link' => route('portfolio.krishna-academy'),
            'category' => 'Learning Platform',
            'image' => 'assets/images/krishna-academy.png',
            'desc' => 'Comprehensive LMS for video courses and automated quizzes with Razorpay integration.',
            'tags' => ['LMS', 'Razorpay', 'PHP'],
        ],
        [
            'title' => 'Kifayat Card System',
            'link' => route('portfolio.kifayat-card'),
            'category' => 'Loyalty Program',
            'image' => 'assets/images/kifayatcard.png',
            'desc' => 'B2B loyalty point system with real-time tracking, shop owner panels, and redemption logic.',
            'tags' => ['Reward System', 'MySQL', 'Laravel'],
        ],
        [
            'title' => 'Jixicloud - Custom Laravel Website',
            'link' => route('portfolio.jixicloud'),
            'category' => 'Custom Website',
            'desc' =>
                'Laravel-powered Website with admin tools for managing pricing and dynamic data. Integrated 3rd-party APIs for live domain rates and more. Fully responsive design with ongoing maintenance since launch.',
            'image' => 'assets/images/jixicloud.png',
            'tags' => ['Laravel', 'PHP', 'Bootstrap', 'MySQL', '3rd Party APIs'],
        ],
    ];
@endphp
<section class="py-10 sm:py-14 px-3 overflow-hidden border-b border-outline-variant/30">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-10">
            <div
                class="inline-flex items-center gap-2 px-4 py-2 mb-6 rounded-full bg-primary/10 border border-primary/30 text-primary-500 backdrop-blur-xl">
            <span class="text-xs sm:text-sm font-semibold">Portfolio</span>
            </div>
            <h2 class="text-3xl lg:text-5xl font-bold mb-5 tracking-tight">
                Our Projects
            </h2>
            <p class="text-md sm:text-lg max-w-3xl mx-auto">
                See how we've helped businesses transform their digital presence.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 overflow-hidden">
            @foreach ($projects as $project)
                <x-product-card :project="$project" />
            @endforeach
        </div>
    </div>
</section>
