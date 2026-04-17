@php
    $projects = [
        [
            'title' => 'Attendance Manager System',
            'category' => 'Attendance System',
            'image' => '/assets/images/attendance.png',
            'desc' =>
                'Laravel-powered system featuring geo-restriction, selfie verification, and real-time leave management.',
            'tags' => ['Laravel', 'Geo Location', 'Tailwind'],
        ],
        [
            'title' => 'KrishnaAcademy LMS',
            'category' => 'Learning Platform',
            'image' => 'assets/images/krishna-academy.png',
            'desc' => 'Comprehensive LMS for video courses and automated quizzes with Razorpay integration.',
            'tags' => ['LMS', 'Razorpay', 'PHP'],
        ],
        [
            'title' => 'Kifayat Card System',
            'category' => 'Loyalty Program',
            'image' => 'assets/images/kifayatcard.png',
            'desc' => 'B2B loyalty point system with real-time tracking, shop owner panels, and redemption logic.',
            'tags' => ['Reward System', 'MySQL', 'Laravel'],
        ],
        [
            'title' => 'Jixicloud - Custom Laravel Website',
            'category' => 'Custom Website',
            'desc' =>
                'Laravel-powered Website with admin tools for managing pricing and dynamic data. Integrated 3rd-party APIs for live domain rates and more. Fully responsive design with ongoing maintenance since launch.',
            'image' => 'assets/images/jixicloud.png',
            'tags' => ['Laravel', 'PHP', 'Bootstrap', 'MySQL', '3rd Party APIs'],
        ],
    ];
@endphp
<section class="py-24">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Section title --}}
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 gradient-primary rounded-full text-white">
                <span class="text-sm font-medium">Portfolio</span>
            </div>
            <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6">
                Our Projects
            </h2>
            <p class="text-xl text-on-surface/50 max-w-3xl mx-auto">
                See how we've helped businesses transform their digital presence.
            </p>
        </div>

        {{-- Grid view cards --}}
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 overflow-hidden">
            @foreach ($projects as $project)
                <div
                    data-aos="{{ $loop->index % 2 == 0 ? 'fade-right' : 'fade-left' }}"
                    data-aos-duration="1000"
                    class="group bg-surface-container rounded-2xl border border-outline-variant/20 overflow-hidden transition-all duration-500 hover:border-primary/40 hover:bg-surface-container-high">

                    <div class="aspect-[16/10] overflow-hidden">
                        <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}"
                            class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700">
                    </div>

                    {{-- Content Area --}}
                    <div class="p-4">
                        <div class="flex items-center gap-2 mb-3">
                            <div class="w-1.5 h-1.5 rounded-full bg-primary"></div>
                            <span
                                class="text-[10px] font-bold text-on-surface/40 uppercase tracking-widest">{{ $project['category'] }}</span>
                        </div>

                        <h3 class="text-2xl font-bold text-on-surface mb-3 group-hover:text-primary transition-colors">
                            {{ $project['title'] }}
                        </h3>

                        <p class="text-on-surface/60 text-sm leading-relaxed mb-4">
                            {{ $project['desc'] }}
                        </p>

                        {{-- Bottom Action: Simple and Bold --}}
                        <div class="flex items-center justify-between pt-4 border-t border-outline-variant/10">
                            <div class="flex gap-4">
                                @foreach ($project['tags'] as $tag)
                                    <span class="text-[10px] font-medium text-on-surface/30">{{ $tag }}</span>
                                @endforeach
                            </div>

                            {{-- <a href="#"
                                class="inline-flex items-center gap-2 text-xs font-bold text-primary group-hover:translate-x-1 transition-transform">
                                VIEW CASE
                                <x-icons.arrow-right class="w-4 h-4" />
                            </a> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
