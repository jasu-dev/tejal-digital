{{-- Repeatable Project Card --}}
@php
    $projects = [
        [
            'title' => 'Attendance Manager System',
            'category' => 'Attendance System',
            'description' =>
                'A Laravel-powered attendance system for agencies, featuring geo-restriction, selfie verification, and leave applications. Built with a clean interface for both admin and employees.',
            'image' => 'assets/images/attendance.png',
            'gradient' => 'from-blue-100 to-sky-100',
            'challenge' =>
                'Create a secure and flexible check-in system with validation for user presence in office area and visual proof using a selfie upload system.',
            'solution' =>
                'Built a role-based web app using Laravel and MySQL. Users can check in only within the geo-fenced office radius and must upload a selfie. Leave requests and approvals are managed through a clean Bootstrap + Tailwind-powered dashboard.',
            'tags' => ['Laravel', 'MySQL', 'Bootstrap', 'Tailwind CSS', 'Geo Location', 'Selfie Attendance'],
            'visible' => true,
        ],
        [
            'title' => 'PromoFusion360 – Earning Platform',
            'category' => 'Earning Platform',
            'description' =>
                'A Laravel-based platform that allows users to earn by watching videos and referring new users after subscribing to a plan. Built with dual payment gateway support and a smooth multi-panel experience.',
            'image' => 'assets/images/promofusion360.png',
            'gradient' => 'from-pink-100 to-rose-100',
            'challenge' =>
                'Create a stable referral-based earning system with payment integration and tiered subscriptions, while keeping the experience beginner-friendly and scalable.',
            'solution' =>
                'Developed using Laravel and Bootstrap + Tailwind CSS with integrated UPI and Cashfree gateways. Includes user and admin panels, referral tracking, and earnings management dashboard. Ongoing updates and maintenance handled actively.',
            'tags' => ['Laravel', 'Bootstrap', 'Tailwind CSS', 'MySQL', 'UPI', 'Cashfree', 'Referral System'],
            'visible' => false, // hidden in original HTML (class="hidden")
        ],
        [
            'title' => 'KrishnaAcademy – LMS Platform',
            'category' => 'Learning Platform',
            'description' =>
                'A Laravel-powered Learning Management System for delivering video courses, quizzes with auto-evaluation and solutions, and downloadable PDFs. Includes role-based access for admins, teachers, and students with Razorpay-integrated checkout flow.',
            'image' => 'assets/images/krishna-academy.png',
            'gradient' => 'from-indigo-100 to-purple-100',
            'challenge' =>
                'Developing an intuitive and scalable course-selling platform with performance in mind and multi-role panel separation for smooth operations.',
            'solution' =>
                'Crafted using Laravel + Bootstrap with a clean UI. Supports quizzes, certificates, PDF lessons, Razorpay integration, and performance tracking. Panels for admins, teachers, and users are clearly separated with custom permissions.',
            'tags' => ['Laravel', 'PHP', 'Bootstrap', 'MySQL', 'Razorpay', 'LMS'],
            'visible' => true,
        ],
        [
            'title' => 'Kifayat Card (formerly Bachatcard)',
            'category' => 'Loyalty Program',
            'description' =>
                'A Laravel-based loyalty point system for shop owners. Merchants register and assign digital reward cards to their customers, who earn and redeem points on purchases. Full admin and user panel with real-time tracking and redemption options.',
            'image' => 'assets/images/kifayatcard.png',
            'gradient' => 'from-emerald-100 to-lime-100',
            'challenge' =>
                'Creating a reward system that works seamlessly for both merchants and customers while managing card assignments and tracking points.',
            'solution' =>
                'Developed a Laravel + MySQL platform with intuitive admin and user interfaces. Designed for easy customer enrollment, QR-based card generation, point management, and gift redemption. Ongoing maintenance is provided.',
            'tags' => ['Laravel', 'PHP', 'Bootstrap', 'MySQL', 'QR Code', 'Loyalty Program'],
            'visible' => true,
        ],
        [
            'title' => 'Tech Nukti – Custom WP Theme',
            'category' => 'WordPress Theme',
            'description' =>
                'A blazing-fast, custom WordPress theme built from scratch for Technukti.com. Designed with a clean, minimal layout, full responsiveness, and zero dependence on optimization plugins.',
            'image' => 'assets/images/technukti.png',
            'gradient' => 'from-yellow-100 to-amber-100',
            'challenge' =>
                'Creating a lightweight and elegant theme that passes all Core Web Vitals metrics without using 3rd-party speed tools or heavy plugins.',
            'solution' =>
                'Hand-coded theme using HTML, CSS, and native WordPress functions. Integrated a live search experience similar to the Newspaper theme. All content loads instantly, with seamless navigation and optimized code structure.',
            'tags' => ['WordPress', 'PHP', 'HTML', 'CSS', 'Live Search'],
            'visible' => true,
        ],
        [
            'title' => 'Growix: Smart QR',
            'category' => 'Custom Software',
            'description' =>
                'Custom Laravel-based software for filtering negative reviews using unique QR codes for businesses. Admin and user panels included with Razorpay integration for seamless plan management and purchases.',
            'image' => 'assets/images/growix.png',
            'gradient' => 'from-purple-100 to-indigo-100',
            'challenge' =>
                'Building a review system that helps business owners control online reputation while integrating secure payments and user-friendly dashboards.',
            'solution' =>
                'Developed with Laravel and Bootstrap, integrated Razorpay gateway, and built dynamic admin/user panels with MySQL backend. Ongoing updates and app maintenance included.',
            'tags' => ['Laravel', 'Bootstrap', 'MySQL', 'Razorpay', 'QR System'],
            'visible' => true,
        ],
        [
            'title' => 'TechUpkar Theme',
            'category' => 'WordPress Theme',
            'description' =>
                'A blazing-fast, hand-coded WordPress theme built for 100/100 PageSpeed scores — no caching, no optimization plugins. Fully responsive, clean design, and optimized to pass all Core Web Vitals flawlessly.',
            'image' => 'assets/images/techupkar.png',
            'gradient' => 'from-lime-100 to-emerald-100',
            'challenge' =>
                'Deliver a high-performance blog theme that achieves perfect Lighthouse scores and replicates the smooth navigation of premium themes — without any bloated dependencies.',
            'solution' =>
                'Crafted a fully optimized theme using native WordPress functions, pure HTML/CSS, and a custom live search system. Achieves instant page loads and perfect Web Vitals scores out-of-the-box.',
            'tags' => ['WordPress', 'PHP', 'HTML', 'CSS', 'Live Search', 'Core Web Vitals'],
            'visible' => true,
        ],
        [
            'title' => 'Jixicloud - Custom Laravel Website',
            'category' => 'Custom Website',
            'description' =>
                'Laravel-powered Website with admin tools for managing pricing and dynamic data. Integrated 3rd-party APIs for live domain rates and more. Fully responsive design with ongoing maintenance since launch.',
            'image' => 'assets/images/jixicloud.png',
            'gradient' => 'from-sky-100 to-blue-100',
            'challenge' =>
                'Building a modular CMS with external API integration and seamless control over dynamic content like domain pricing.',
            'solution' =>
                'Developed a Laravel-based CMS with Bootstrap admin panel, integrated APIs, and MySQL backend. Also ensured long-term support and scalability.',
            'tags' => ['Laravel', 'PHP', 'Bootstrap', 'MySQL', '3rd Party APIs'],
            'visible' => true,
        ],
        [
            'title' => 'Gujjutak News Portal',
            'category' => 'News Portal',
            'description' =>
                'Gujarati news portal powered by Laravel with a full-featured admin panel for article management, SEO tools, sitemap control, and ad placements. Clean, responsive UI with a robust backend.',
            'image' => 'assets/images/gujjutak.png',
            'gradient' => 'from-green-100 to-lime-100',
            'challenge' =>
                'Developing a scalable regional news platform with admin control, ad management, and SEO support in a multilingual context.',
            'solution' =>
                'Built a Laravel-based CMS using MySQL and Bootstrap UI with integrated SEO settings, responsive layout, and ad zones via admin panel.',
            'tags' => ['Laravel', 'PHP', 'Bootstrap', 'MySQL', 'jQuery'],
            'visible' => true,
        ],
        [
            'title' => 'GMJ Child Pro Theme',
            'category' => 'WordPress Theme',
            'description' =>
                'Custom child theme built on the Genesis Framework. Optimized for speed, written in HTML & CSS only (JS-free), and tailored for Hindi blog websites.',
            'image' => 'assets/images/gmjchildpro.png',
            'gradient' => 'from-amber-100 to-orange-100',
            'challenge' => 'Creating a blazing fast, lightweight theme for Hindi blogs without JavaScript dependency.',
            'solution' =>
                'Developed using semantic HTML, custom CSS, and Genesis hooks to eliminate JS while maintaining modern UI/UX.',
            'tags' => ['Genesis Framework', 'HTML5', 'CSS3', 'WordPress'],
            'visible' => true,
        ],
    ];
@endphp

<section class="py-24">
    <div class="max-w-6xl mx-auto px-6 space-y-12">
        @foreach ($projects as $project)
            <div
                class="group relative bg-surface-container rounded-2xl border border-outline-variant/20 overflow-hidden transition-all duration-500 hover:border-primary/30 shadow-2xl shadow-surface/50 overflow-hidden"
                data-aos="fade-up" data-aos-delay="{{ 50 * $loop->iteration }}" data-aos-duration="800">
                <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32"></div>
                <div class="grid lg:grid-cols-12 items-stretch">

                    {{-- Left Side: Image (Span 5) --}}
                    <div class="lg:col-span-5 relative overflow-hidden">
                        <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}"
                            class="w-full h-full object-cover grayscale-[20%] group-hover:grayscale-0 group-hover:scale-105 transition-all duration-700">

                        {{-- Category Badge --}}
                        <div class="absolute top-6 left-6">
                            <span
                                class="backdrop-blur-xl bg-surface/60 text-on-surface text-[10px] font-bold uppercase tracking-widest px-4 py-2 rounded-lg border border-on-surface/10">
                                {{ $project['category'] }}
                            </span>
                        </div>
                    </div>

                    {{-- Right Side: Content (Span 7) --}}
                    <div class="lg:col-span-7 p-8 lg:p-12 flex flex-col">
                        <h3 class="text-3xl font-black text-on-surface mb-6 group-hover:text-primary transition-colors">
                            {{ $project['title'] }}
                        </h3>

                        <div class="grid sm:grid-cols-2 gap-8 mb-8">
                            {{-- Challenge Section --}}
                            <div class="space-y-2">
                                <h4
                                    class="text-[10px] font-bold text-primary uppercase tracking-widest flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                                    Challenge
                                </h4>
                                <p class="text-on-surface/60 text-sm leading-relaxed">
                                    {{ $project['challenge'] }}
                                </p>
                            </div>

                            {{-- Solution Section --}}
                            <div class="space-y-2">
                                <h4
                                    class="text-[10px] font-bold text-primary uppercase tracking-widest flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                                    Solution
                                </h4>
                                <p class="text-on-surface/60 text-sm leading-relaxed">
                                    {{ $project['solution'] }}
                                </p>
                            </div>
                        </div>

                        {{-- Tech Stack & CTA --}}
                        <div
                            class="mt-auto pt-8 border-t border-outline-variant/10 flex flex-wrap items-center justify-between gap-6">
                            <div class="flex flex-wrap gap-2">
                                @foreach ($project['tags'] as $tag)
                                    <span
                                        class="text-[9px] font-bold text-on-surface/40 bg-surface px-2 py-1 rounded border border-outline-variant/10 uppercase">
                                        {{ $tag }}
                                    </span>
                                @endforeach
                            </div>

                            {{-- <a href="#"
                                class="inline-flex items-center gap-3 text-sm font-bold text-on-surface group/link">
                                <span class="relative">
                                    View Full Case Study
                                    <span
                                        class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary group-hover/link:w-full transition-all duration-300"></span>
                                </span>
                                <div
                                    class="w-8 h-8 rounded-full border border-outline-variant/30 flex items-center justify-center group-hover/link:bg-primary group-hover/link:border-primary transition-all">
                                    <x-icon.arrow-right class="w-4 h-4 text-on-surface group-hover/link:text-surface" />
                                </div>
                            </a> --}}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</section>
