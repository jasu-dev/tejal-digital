@extends('layouts.app')
@section('head')
    <!-- Portfolio Page -->
    <title>Our Work | Web Development Projects by Tejal Digital</title>
    <meta name="description"
        content="Browse featured projects from Tejal Digital – custom web apps, Laravel solutions, WordPress development, CRMs, and e-commerce builds.">
    <link rel="canonical" href="https://www.tejaldigital.in/portfolio">
    <meta name="keywords"
        content="Web Portfolio, Web Development Projects, Laravel Work, CRM Showcase, WordPress Projects, E-commerce Examples">

    <!-- Open Graph -->
    <meta property="og:title" content="Portfolio | Web Projects by Tejal Digital">
    <meta property="og:description"
        content="Explore our portfolio of Laravel apps, WordPress themes, CRMs, and custom software solutions.">
    <meta property="og:url" content="https://www.tejaldigital.in/portfolio">
    <meta property="og:image" content="{{ asset('assets/images/og-image.png') }}">

    <!-- Twitter Card -->
    <meta name="twitter:title" content="Our Portfolio | Tejal Digital Projects">
    <meta name="twitter:description"
        content="See how Tejal Digital delivers real-world value through custom web solutions.">
    <meta name="twitter:image" content="{{ asset('assets/images/og-image.png') }}">
@endsection
@section('content')
    {{-- Hero Section --}}
    <section class="relative pt-20 pb-32 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-slate-50 via-white to-secondary-50/20"></div>
        <div
            class="absolute top-20 right-10 w-72 h-72 bg-gradient-to-br from-secondary-400/20 to-primary-500/30 rounded-full blur-3xl">
        </div>
        <div
            class="absolute bottom-20 left-10 w-96 h-96 bg-gradient-to-br from-primary-400/10 to-secondary-500/20 rounded-full blur-3xl">
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-4xl mx-auto">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-secondary-100 rounded-full mb-6">
                    <x-icons.users class="w-4 h-4" />
                    <span class="text-sm font-medium text-secondary-800">Our Work</span>
                </div>
                <h1 class="text-5xl lg:text-7xl font-bold leading-tight mb-6">
                    <span class="text-slate-900">Explore</span><br>
                    <span class="text-gradient">Our Portfolio</span>
                </h1>
                <p class="text-xl text-slate-600 leading-relaxed mb-8 max-w-3xl mx-auto">
                    Explore our collection of successful projects that showcase our expertise in web development,
                    design, and digital solutions.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('contact') }}">
                        <x-form.primary-button type="button" class="px-7 py-3 rounded-2xl">
                            <span>Start Your Project</span>
                            <x-icons.go class="w-4 h-4" />
                        </x-form.primary-button>
                    </a>
                    <a href="{{ config('staticdata.whatsapp_url') }}">
                        <x-form.secondary-button type="button" class="px-7 py-3 rounded-2xl">
                            <x-icons.whatsapp class="w-4 h-4" />
                            <span>Chat with Us</span>
                        </x-form.secondary-button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- Stats Section --}}
    @include('home.sections.stats')
    {{-- list of projects --}}
    <section class="py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12">

                <div
                    class="rounded-lg bg-white group hover:shadow-xl transition-all duration-300 border-0 shadow-lg overflow-hidden">
                    <div class="aspect-video bg-gradient-to-br from-blue-100 to-sky-100 relative overflow-hidden">
                        <img alt="Attendance Manager Software" loading="lazy" width="600" height="400" decoding="async"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                            src="{{ asset('assets/images/attendance.png') }}">
                        <div class="absolute top-4 left-4">
                            <div
                                class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-hidden focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 bg-white/90 text-slate-700 border-0">
                                Attendance System
                            </div>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-slate-900 mb-3">Attendance Manager System
                        </h3>
                        <p class="text-slate-600 mb-6">A Laravel-powered attendance system for agencies, featuring
                            geo-restriction, selfie verification, and leave applications. Built with a clean interface
                            for both admin and employees.</p>
                        <div class="space-y-4 mb-6">
                            <div>
                                <h4 class="font-semibold text-sm text-slate-800 mb-2">Challenge</h4>
                                <p class="text-sm text-slate-600">Create a secure and flexible check-in system with
                                    validation for user presence in office area and visual proof using a selfie upload
                                    system.</p>
                            </div>
                            <div>
                                <h4 class="font-semibold text-sm text-slate-800 mb-2">Solution</h4>
                                <p class="text-sm text-slate-600">Built a role-based web app using Laravel and MySQL.
                                    Users can check in only within the geo-fenced office radius and must upload a
                                    selfie. Leave requests and approvals are managed through a clean Bootstrap +
                                    Tailwind-powered dashboard.</p>
                            </div>
                        </div>
                        <div class="mb-6">
                            <h4 class="font-semibold text-sm text-slate-800 mb-3">Technologies Used</h4>
                            <div class="flex flex-wrap gap-2">
                                <x-ui.tag>Laravel</x-ui.tag>
                                <x-ui.tag>MySQL</x-ui.tag>
                                <x-ui.tag>Bootstrap</x-ui.tag>
                                <x-ui.tag>Tailwind CSS</x-ui.tag>
                                <x-ui.tag>Geo Location</x-ui.tag>
                                <x-ui.tag>Selfie Attendance</x-ui.tag>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="hidden rounded-lg bg-white group hover:shadow-xl transition-all duration-300 border-0 shadow-lg overflow-hidden">
                    <div class="aspect-video bg-gradient-to-br from-pink-100 to-rose-100 relative overflow-hidden">
                        <img alt="PromoFusion360 Earning Platform" loading="lazy" width="600" height="400"
                            decoding="async"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                            src="{{ asset('assets/images/promofusion360.png') }}">
                        <div class="absolute top-4 left-4">
                            <div
                                class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-hidden focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 bg-white/90 text-slate-700 border-0">
                                Earning Platform
                            </div>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-slate-900 mb-3">PromoFusion360 – Earning Platform</h3>
                        <p class="text-slate-600 mb-6">A Laravel-based platform that allows users to earn by watching
                            videos and referring new users after subscribing to a plan. Built with dual payment gateway
                            support and a smooth multi-panel experience.</p>
                        <div class="space-y-4 mb-6">
                            <div>
                                <h4 class="font-semibold text-sm text-slate-800 mb-2">Challenge</h4>
                                <p class="text-sm text-slate-600">Create a stable referral-based earning system with
                                    payment integration and tiered subscriptions, while keeping the experience
                                    beginner-friendly and scalable.</p>
                            </div>
                            <div>
                                <h4 class="font-semibold text-sm text-slate-800 mb-2">Solution</h4>
                                <p class="text-sm text-slate-600">Developed using Laravel and Bootstrap + Tailwind CSS
                                    with integrated UPI and Cashfree gateways. Includes user and admin panels, referral
                                    tracking, and earnings management dashboard. Ongoing updates and maintenance handled
                                    actively.</p>
                            </div>
                        </div>
                        <div class="mb-6">
                            <h4 class="font-semibold text-sm text-slate-800 mb-3">Technologies Used</h4>
                            <div class="flex flex-wrap gap-2">
                                <x-ui.tag>Laravel</x-ui.tag>
                                <x-ui.tag>Bootstrap</x-ui.tag>
                                <x-ui.tag>Tailwind CSS</x-ui.tag>
                                <x-ui.tag>MySQL</x-ui.tag>
                                <x-ui.tag>UPI</x-ui.tag>
                                <x-ui.tag>Cashfree</x-ui.tag>
                                <x-ui.tag>Referral System</x-ui.tag>
                            </div>
                        </div>
                    </div>
                </div>


                <div
                    class="rounded-lg bg-white group hover:shadow-xl transition-all duration-300 border-0 shadow-lg overflow-hidden">
                    <div class="aspect-video bg-gradient-to-br from-indigo-100 to-purple-100 relative overflow-hidden">
                        <img alt="KrishnaAcademy LMS" loading="lazy" width="600" height="400" decoding="async"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                            src="{{ asset('assets/images/krishna-academy.png') }}">
                        <div class="absolute top-4 left-4">
                            <div
                                class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-hidden focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 bg-white/90 text-slate-700 border-0">
                                Learning Platform
                            </div>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-slate-900 mb-3">KrishnaAcademy – LMS Platform</h3>
                        <p class="text-slate-600 mb-6">A Laravel-powered Learning Management System for delivering
                            video
                            courses, quizzes with auto-evaluation and solutions, and downloadable PDFs. Includes
                            role-based access for admins, teachers, and students with Razorpay-integrated checkout flow.
                        </p>
                        <div class="space-y-4 mb-6">
                            <div>
                                <h4 class="font-semibold text-sm text-slate-800 mb-2">Challenge</h4>
                                <p class="text-sm text-slate-600">Developing an intuitive and scalable course-selling
                                    platform with performance in mind and multi-role panel separation for smooth
                                    operations.</p>
                            </div>
                            <div>
                                <h4 class="font-semibold text-sm text-slate-800 mb-2">Solution</h4>
                                <p class="text-sm text-slate-600">Crafted using Laravel + Bootstrap with a clean UI.
                                    Supports quizzes, certificates, PDF lessons, Razorpay integration, and performance
                                    tracking. Panels for admins, teachers, and users are clearly separated with custom
                                    permissions.</p>
                            </div>
                        </div>
                        <div class="mb-6">
                            <h4 class="font-semibold text-sm text-slate-800 mb-3">Technologies Used</h4>
                            <div class="flex flex-wrap gap-2">
                                <x-ui.tag>Laravel</x-ui.tag>
                                <x-ui.tag>PHP</x-ui.tag>
                                <x-ui.tag>Bootstrap</x-ui.tag>
                                <x-ui.tag>MySQL</x-ui.tag>
                                <x-ui.tag>Razorpay</x-ui.tag>
                                <x-ui.tag>LMS</x-ui.tag>
                            </div>
                        </div>
                    </div>
                </div>


                <div
                    class="rounded-lg bg-white group hover:shadow-xl transition-all duration-300 border-0 shadow-lg overflow-hidden">
                    <div class="aspect-video bg-gradient-to-br from-emerald-100 to-lime-100 relative overflow-hidden">
                        <img alt="Kifayat Card" loading="lazy" width="600" height="400" decoding="async"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                            src="{{ asset('assets/images/kifayatcard.png') }}">
                        <div class="absolute top-4 left-4">
                            <div
                                class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-hidden focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 bg-white/90 text-slate-700 border-0">
                                Loyalty Program
                            </div>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-slate-900 mb-3">Kifayat Card (formerly Bachatcard)</h3>
                        <p class="text-slate-600 mb-6">A Laravel-based loyalty point system for shop owners. Merchants
                            register and assign digital reward cards to their customers, who earn and redeem points on
                            purchases. Full admin and user panel with real-time tracking and redemption options.</p>
                        <div class="space-y-4 mb-6">
                            <div>
                                <h4 class="font-semibold text-sm text-slate-800 mb-2">Challenge</h4>
                                <p class="text-sm text-slate-600">Creating a reward system that works seamlessly for
                                    both merchants and customers while managing card assignments and tracking points.
                                </p>
                            </div>
                            <div>
                                <h4 class="font-semibold text-sm text-slate-800 mb-2">Solution</h4>
                                <p class="text-sm text-slate-600">Developed a Laravel + MySQL platform with intuitive
                                    admin and user interfaces. Designed for easy customer enrollment, QR-based card
                                    generation, point management, and gift redemption. Ongoing maintenance is provided.
                                </p>
                            </div>
                        </div>
                        <div class="mb-6">
                            <h4 class="font-semibold text-sm text-slate-800 mb-3">Technologies Used</h4>
                            <div class="flex flex-wrap gap-2">
                                <x-ui.tag>Laravel</x-ui.tag>
                                <x-ui.tag>PHP</x-ui.tag>
                                <x-ui.tag>Bootstrap</x-ui.tag>
                                <x-ui.tag>MySQL</x-ui.tag>
                                <x-ui.tag>QR Code</x-ui.tag>
                                <x-ui.tag>Loyalty Program</x-ui.tag>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="rounded-lg bg-white group hover:shadow-xl transition-all duration-300 border-0 shadow-lg overflow-hidden">
                    <div class="aspect-video bg-gradient-to-br from-yellow-100 to-amber-100 relative overflow-hidden">
                        <img alt="Tech Nukti WordPress Theme" loading="lazy" width="600" height="400"
                            decoding="async"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                            src="{{ asset('assets/images/technukti.png') }}">
                        <div class="absolute top-4 left-4">
                            <div
                                class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-hidden focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 bg-white/90 text-slate-700 border-0">
                                WordPress Theme
                            </div>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-slate-900 mb-3">Tech Nukti – Custom WP Theme</h3>
                        <p class="text-slate-600 mb-6">A blazing-fast, custom WordPress theme built from scratch for
                            Technukti.com. Designed with a clean, minimal layout, full responsiveness, and zero
                            dependence on optimization plugins.</p>
                        <div class="space-y-4 mb-6">
                            <div>
                                <h4 class="font-semibold text-sm text-slate-800 mb-2">Challenge</h4>
                                <p class="text-sm text-slate-600">Creating a lightweight and elegant theme that passes
                                    all Core Web Vitals metrics without using 3rd-party speed tools or heavy plugins.
                                </p>
                            </div>
                            <div>
                                <h4 class="font-semibold text-sm text-slate-800 mb-2">Solution</h4>
                                <p class="text-sm text-slate-600">Hand-coded theme using HTML, CSS, and native
                                    WordPress
                                    functions. Integrated a live search experience similar to the Newspaper theme. All
                                    content loads instantly, with seamless navigation and optimized code structure.</p>
                            </div>
                        </div>
                        <div class="mb-6">
                            <h4 class="font-semibold text-sm text-slate-800 mb-3">Technologies Used</h4>
                            <div class="flex flex-wrap gap-2">
                                <x-ui.tag>WordPress</x-ui.tag>
                                <x-ui.tag>PHP</x-ui.tag>
                                <x-ui.tag>HTML</x-ui.tag>
                                <x-ui.tag>CSS</x-ui.tag>
                                <x-ui.tag>Live Search</x-ui.tag>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="rounded-lg bg-white group hover:shadow-xl transition-all duration-300 border-0 shadow-lg overflow-hidden">
                    <div class="aspect-video bg-gradient-to-br from-purple-100 to-indigo-100 relative overflow-hidden">
                        <img alt="Growix Smart QR" loading="lazy" width="600" height="400" decoding="async"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                            src="{{ asset('assets/images/growix.png') }}">
                        <div class="absolute top-4 left-4">
                            <div
                                class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-hidden focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 bg-white/90 text-slate-700 border-0">
                                Custom Software
                            </div>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-slate-900 mb-3">Growix: Smart QR</h3>
                        <p class="text-slate-600 mb-6">Custom Laravel-based software for filtering negative reviews
                            using unique QR codes for businesses. Admin and user panels included with Razorpay
                            integration for seamless plan management and purchases.</p>
                        <div class="space-y-4 mb-6">
                            <div>
                                <h4 class="font-semibold text-sm text-slate-800 mb-2">Challenge</h4>
                                <p class="text-sm text-slate-600">Building a review system that helps business owners
                                    control online reputation while integrating secure payments and user-friendly
                                    dashboards.</p>
                            </div>
                            <div>
                                <h4 class="font-semibold text-sm text-slate-800 mb-2">Solution</h4>
                                <p class="text-sm text-slate-600">Developed with Laravel and Bootstrap, integrated
                                    Razorpay gateway, and built dynamic admin/user panels with MySQL backend. Ongoing
                                    updates and app maintenance included.</p>
                            </div>
                        </div>
                        <div class="mb-6">
                            <h4 class="font-semibold text-sm text-slate-800 mb-3">Technologies Used</h4>
                            <div class="flex flex-wrap gap-2">
                                <x-ui.tag>Laravel</x-ui.tag>
                                <x-ui.tag>Bootstrap</x-ui.tag>
                                <x-ui.tag>MySQL</x-ui.tag>
                                <x-ui.tag>Razorpay</x-ui.tag>
                                <x-ui.tag>QR System</x-ui.tag>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="rounded-lg bg-white group hover:shadow-xl transition-all duration-300 border-0 shadow-lg overflow-hidden">
                    <div class="aspect-video bg-gradient-to-br from-lime-100 to-emerald-100 relative overflow-hidden">
                        <img alt="TechUpkar Theme" loading="lazy" width="600" height="400" decoding="async"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                            src="{{ asset('assets/images/techupkar.png') }}">
                        <div class="absolute top-4 left-4">
                            <div
                                class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-hidden focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 bg-white/90 text-slate-700 border-0">
                                WordPress Theme
                            </div>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-slate-900 mb-3">TechUpkar Theme</h3>
                        <p class="text-slate-600 mb-6">A blazing-fast, hand-coded WordPress theme built for
                            <strong>100/100 PageSpeed</strong> scores — no caching, no optimization plugins. Fully
                            responsive, clean design, and optimized to pass all Core Web Vitals flawlessly.
                        </p>
                        <div class="space-y-4 mb-6">
                            <div>
                                <h4 class="font-semibold text-sm text-slate-800 mb-2">Challenge</h4>
                                <p class="text-sm text-slate-600">Deliver a high-performance blog theme that achieves
                                    perfect Lighthouse scores and replicates the smooth navigation of premium themes —
                                    without any bloated dependencies.</p>
                            </div>
                            <div>
                                <h4 class="font-semibold text-sm text-slate-800 mb-2">Solution</h4>
                                <p class="text-sm text-slate-600">Crafted a fully optimized theme using native
                                    WordPress
                                    functions, pure HTML/CSS, and a custom live search system. Achieves instant page
                                    loads and perfect Web Vitals scores out-of-the-box.</p>
                            </div>
                        </div>
                        <div class="mb-6">
                            <h4 class="font-semibold text-sm text-slate-800 mb-3">Technologies Used</h4>
                            <div class="flex flex-wrap gap-2">
                                <x-ui.tag>WordPress</x-ui.tag>
                                <x-ui.tag>PHP</x-ui.tag>
                                <x-ui.tag>HTML</x-ui.tag>
                                <x-ui.tag>CSS</x-ui.tag>
                                <x-ui.tag>Live Search</x-ui.tag>
                                <x-ui.tag>Core Web Vitals</x-ui.tag>
                            </div>
                        </div>
                    </div>
                </div>



                <div
                    class="rounded-lg bg-white group hover:shadow-xl transition-all duration-300 border-0 shadow-lg overflow-hidden">
                    <div class="aspect-video bg-gradient-to-br from-sky-100 to-blue-100 relative overflow-hidden">
                        <img alt="Jixicloud CMS" loading="lazy" width="600" height="400" decoding="async"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                            src="{{ asset('assets/images/jixicloud.png') }}">
                        <div class="absolute top-4 left-4">
                            <div
                                class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-hidden focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 bg-white/90 text-slate-700 border-0">
                                Custom Website
                            </div>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-slate-900 mb-3">Jixicloud - Custom Laravel Website</h3>
                        <p class="text-slate-600 mb-6">Laravel-powered Website with admin tools for managing pricing
                            and
                            dynamic data. Integrated 3rd-party APIs for live domain rates and more. Fully responsive
                            design with ongoing maintenance since launch.</p>
                        <div class="space-y-4 mb-6">
                            <div>
                                <h4 class="font-semibold text-sm text-slate-800 mb-2">Challenge</h4>
                                <p class="text-sm text-slate-600">Building a modular CMS with external API integration
                                    and seamless control over dynamic content like domain pricing.</p>
                            </div>
                            <div>
                                <h4 class="font-semibold text-sm text-slate-800 mb-2">Solution</h4>
                                <p class="text-sm text-slate-600">Developed a Laravel-based CMS with Bootstrap admin
                                    panel, integrated APIs, and MySQL backend. Also ensured long-term support and
                                    scalability.</p>
                            </div>
                        </div>
                        <div class="mb-6">
                            <h4 class="font-semibold text-sm text-slate-800 mb-3">Technologies Used</h4>
                            <div class="flex flex-wrap gap-2">
                                <x-ui.tag>Laravel</x-ui.tag>
                                <x-ui.tag>PHP</x-ui.tag>
                                <x-ui.tag>Bootstrap</x-ui.tag>
                                <x-ui.tag>MySQL</x-ui.tag>
                                <x-ui.tag>3rd Party APIs</x-ui.tag>
                            </div>
                        </div>
                    </div>
                </div>


                <div
                    class="rounded-lg bg-white group hover:shadow-xl transition-all duration-300 border-0 shadow-lg overflow-hidden">
                    <div class="aspect-video bg-gradient-to-br from-green-100 to-lime-100 relative overflow-hidden">
                        <img alt="Gujjutak News Portal" loading="lazy" width="600" height="400" decoding="async"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                            src="{{ asset('assets/images/gujjutak.png') }}">
                        <div class="absolute top-4 left-4">
                            <div
                                class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-hidden focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 bg-white/90 text-slate-700 border-0">
                                News Portal
                            </div>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-slate-900 mb-3">Gujjutak News Portal</h3>
                        <p class="text-slate-600 mb-6">Gujarati news portal powered by Laravel with a full-featured
                            admin panel for article management, SEO tools, sitemap control, and ad placements. Clean,
                            responsive UI with a robust backend.</p>
                        <div class="space-y-4 mb-6">
                            <div>
                                <h4 class="font-semibold text-sm text-slate-800 mb-2">Challenge</h4>
                                <p class="text-sm text-slate-600">Developing a scalable regional news platform with
                                    admin control, ad management, and SEO support in a multilingual context.</p>
                            </div>
                            <div>
                                <h4 class="font-semibold text-sm text-slate-800 mb-2">Solution</h4>
                                <p class="text-sm text-slate-600">Built a Laravel-based CMS using MySQL and Bootstrap
                                    UI
                                    with integrated SEO settings, responsive layout, and ad zones via admin panel.</p>
                            </div>
                        </div>
                        <div class="mb-6">
                            <h4 class="font-semibold text-sm text-slate-800 mb-3">Technologies Used</h4>
                            <div class="flex flex-wrap gap-2">
                                <x-ui.tag>Laravel</x-ui.tag>
                                <x-ui.tag>PHP</x-ui.tag>
                                <x-ui.tag>Bootstrap</x-ui.tag>
                                <x-ui.tag>MySQL</x-ui.tag>
                                <x-ui.tag>jQuery</x-ui.tag>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="rounded-lg bg-white group hover:shadow-xl transition-all duration-300 border-0 shadow-lg overflow-hidden">
                    <div class="aspect-video bg-gradient-to-br from-amber-100 to-orange-100 relative overflow-hidden">
                        <img alt="GMJ Child Pro Theme" loading="lazy" width="600" height="400" decoding="async"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                            src="{{ asset('assets/images/gmjchildpro.png') }}">
                        <div class="absolute top-4 left-4">
                            <div
                                class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-hidden focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 bg-white/90 text-slate-700 border-0">
                                WordPress Theme
                            </div>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-slate-900 mb-3">GMJ Child Pro Theme</h3>
                        <p class="text-slate-600 mb-6">Custom child theme built on the Genesis Framework. Optimized for
                            speed, written in HTML & CSS only (JS-free), and tailored for Hindi blog websites.</p>
                        <div class="space-y-4 mb-6">
                            <div>
                                <h4 class="font-semibold text-sm text-slate-800 mb-2">Challenge</h4>
                                <p class="text-sm text-slate-600">Creating a blazing fast, lightweight theme for Hindi
                                    blogs without JavaScript dependency.</p>
                            </div>
                            <div>
                                <h4 class="font-semibold text-sm text-slate-800 mb-2">Solution</h4>
                                <p class="text-sm text-slate-600">Developed using semantic HTML, custom CSS, and
                                    Genesis
                                    hooks to eliminate JS while maintaining modern UI/UX.</p>
                            </div>
                        </div>
                        <div class="mb-6">
                            <h4 class="font-semibold text-sm text-slate-800 mb-3">Technologies Used</h4>
                            <div class="flex flex-wrap gap-2">
                                <x-ui.tag>Genesis Framework</x-ui.tag>
                                <x-ui.tag>HTML5</x-ui.tag>
                                <x-ui.tag>CSS3</x-ui.tag>
                                <x-ui.tag>WordPress</x-ui.tag>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Contact Section --}}
    <section class="py-24 bg-primary-600 relative overflow-hidden border-b border-brand-dark-200/50">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0"
                style="background-image: url(&quot;data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fillRule='evenodd'%3E%3Cg fill='%23ffffff' fillOpacity='0.4'%3E%3Ccircle cx='30' cy='30' r='2'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E&quot;); background-size: 60px 60px;">
            </div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6">
                Have a Project Idea in Mind?
            </h2>
            <p class="text-xl text-white mb-8 max-w-2xl mx-auto">
                Let's discuss your project and see how we can help bring your vision to life.
            </p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center">

                <a href="{{ route('contact') }}">
                    <x-form.secondary-button type="button" class="px-7 py-2 bg-white border-white rounded-lg">
                        <span>Get Free Consultation</span>
                        <x-icons.go class="w-4 h-4" />
                    </x-form.secondary-button>
                </a>

                <a href="{{ config('staticdata.whatsapp_url') }}">
                    <x-form.secondary-button type="button" class="px-7 py-2 text-white border-white rounded-lg">
                        <x-icons.whatsapp class="w-5 h-5" />
                        <span>Start Chatting</span>
                    </x-form.secondary-button>
                </a>
            </div>
        </div>
    </section>
@endsection
