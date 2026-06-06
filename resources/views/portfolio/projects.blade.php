{{-- Repeatable Project Card --}}
@php
    $projects = [
        [
            'title' => 'Attendance Manager System',
            'category' => 'Attendance System',
            'link' => route('portfolio.attendance-manager'),
            'desc' =>
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
            'link' => route('portfolio.promofusion360'),
            'desc' =>
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
            'link' => route('portfolio.krishna-academy'),
            'desc' =>
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
            'link' => route('portfolio.kifayat-card'),
            'desc' =>
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
            'link' => route('portfolio.tech-nukti'),
            'desc' =>
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
            'link' => route('portfolio.growix-smart-qr'),
            'desc' =>
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
            'link' => route('portfolio.tech-upkar'),
            'desc' =>
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
            'link' => route('portfolio.jixicloud'),
            'desc' =>
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
            'link' => route('portfolio.gujjutak-news'),
            'desc' =>
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
            'link' => route('portfolio.gmj-child-pro'),
            'desc' =>
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
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 overflow-hidden">
            @foreach ($projects as $project)
                <x-product-card :project="$project" />
            @endforeach
        </div>
    </div>
</section>
