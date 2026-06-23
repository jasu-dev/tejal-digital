@extends('layouts.app')

@section('head')
    <title>Attendance Manager System | Geo-Fenced Employee Tracking Solution</title>
    <meta name="description"
        content="Discover how Tejal Digital built a secure Laravel-powered attendance system featuring geo-restriction, selfie verification, and automated leave management for modern agencies.">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="keywords"
        content="Attendance Manager, Geo-Fenced Attendance, Laravel Web App, Selfie Verification System, Employee Tracking Software, HRMS Solution">

    <!-- Open Graph -->
    <meta property="og:title" content="Attendance Manager System | Case Study by Tejal Digital">
    <meta property="og:description"
        content="A deep dive into building a secure, geo-fenced attendance system using Laravel and MySQL.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/images/attendance.png') }}">

    <!-- Twitter Card -->
    <meta name="twitter:title" content="Attendance Manager System | Project Showcase">
    <meta name="twitter:description"
        content="Scaling agency operations with a custom geo-fenced attendance tracking system.">
    <meta name="twitter:image" content="{{ asset('assets/images/attendance.png') }}">
@endsection

@section('content')
    {{-- Project Hero --}}
    <section class="relative pb-24 -mt-20 pt-35 overflow-hidden border-b border-border bg-cover"
        style="background-image: url('{{ asset('assets/images/background/doted.svg') }}')">
        <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
            <nav class="flex mb-8" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-sm ">
                    <li><a href="{{ route('home') }}" class="hover:text-primary transition-colors">Home</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li><a href="{{ route('portfolio') }}" class="hover:text-primary transition-colors">Portfolio</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li class=" font-medium">Attendance Manager</li>
                </ol>
            </nav>

            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 mb-4 rounded-full bg-primary/10 border border-primary/30 text-primary-500 backdrop-blur-xl">
                        <span class="text-xs font-semibold">Custom Software Development</span>
                    </div>
                    <h1 class="text-3xl lg:text-5xl font-bold text-foreground mb-5">
                        Attendance Manager <br>
                        <span class="text-gradient">System Showcase</span>
                    </h1>
                    <p class="text-xl  leading-relaxed mb-8">
                        A robust, Laravel-powered web application designed to streamline employee tracking through advanced geo-fencing limits and live web camera visual verification.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="{{ route('contact') }}">
                            <x-form.primary-button type="button" class="rounded-full">
                                Build Similar App
                                <span class="w-7 h-7 rounded-full bg-white flex items-center justify-center">
                                    <x-icons.go class="w-4 h-4 text-foreground" />
                                </span>
                            </x-form.primary-button>
                        </a>
                    </div>
                </div>
                <div class="relative">
                    <div
                        class="max-w-md mx-auto border border-border/50 bg-background backdrop-blur-xl rounded-2xl p-4 flex items-center justify-center relative overflow-hidden group">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-primary/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        </div>
                        <div class="aspect-video rounded-xl overflow-hidden border border-outline-variant/30 relative z-10">
                            <img src="{{ asset('assets/images/attendance.png') }}" alt="Attendance Manager Dashboard" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                    </div>
                    {{-- Floating Tags --}}
                    <div
                        class="absolute -top-7 right-10 flex items-center gap-2 rounded-xl border border-border bg-background/95 backdrop-blur-xl px-4 py-3">
                        <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-500/15 text-green-500">
                            <x-icons.security class="w-4 h-4" />
                        </span>
                        <div class="text-xs">
                            <div class="text-muted-foreground">Security</div>
                            <div class="font-semibold text-foreground">Selfie Verification</div>
                        </div>
                    </div>
                    <div
                        class="absolute -bottom-7 left-10 flex items-center gap-2 rounded-xl px-4 py-3 border border-border bg-background/95 backdrop-blur-xl">
                        <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-500/15 text-green-500">
                            <x-icons.target class="w-4 h-4" />
                        </span>
                        <div class="text-xs">
                            <div class="text-muted-foreground">Accuracy</div>
                            <div class="font-semibold text-foreground">Geo-Fenced Bounds</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Intro Context Block -->
    <section class="py-12 border-b border-outline-variant/30">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <p class="text-xl text-muted-foreground">
                "Verifying employee locations, tracking real-time operations, and preventing buddy punching. We engineered a robust geo-fenced attendance system equipped with live camera selfie verification."
            </p>
        </div>
    </section>

    <!-- Challenges & Objectives Section -->
    <section class="py-24 border-b border-outline-variant/30">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-foreground mb-6">
                    Project <span class="text-gradient">Challenges & Objectives</span>
                </h2>
                <p class="text-xl  max-w-5xl mx-auto">
                    Modern agencies struggle with verifying employee attendance across mobile check-ins. Traditional methods are prone to buddy punching or falsified coordinates. Our objectives were clear:
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Benefit 1 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border-1 border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <x-icons.target class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3">Geo-Fenced Bounds</h3>
                    <p class="text-sm leading-relaxed">Restrict employee check-in capabilities to exact GPS coordinates within configured office radius bounds, eliminating remote proxy check-ins.</p>
                </div>
                <!-- Benefit 2 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border-1 border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <x-icons.security class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3">Selfie Verification</h3>
                    <p class="text-sm leading-relaxed">Integrate live camera capture mechanisms to prevent proxy attendance and check-in fraud, logging images securely for admin audit.</p>
                </div>
                <!-- Benefit 3 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border-1 border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <x-icons.time class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3">Leave Workflows</h3>
                    <p class="text-sm leading-relaxed">Centralized request pipelines allowing employees to apply and managers to approve leaves with automatic notification syncs.</p>
                </div>
                <!-- Benefit 4 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <x-icons.plugin class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3">Real-Time Audits</h3>
                    <p class="text-sm leading-relaxed">Direct analytics, exportable attendance reports, and late arrival flags for operational audits, optimizing workforce telemetry.</p>
                </div>
            </div>
            <div class="mt-12 text-center text-sm">
                Implementing a <span class="font-semibold">custom geo-tracked application</span> guarantees operational precision and team accountability.
            </div>
        </div>
    </section>

    <!-- Services / Technical Architecture Section -->
    <section class="py-24 border-b border-outline-variant/30">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-foreground mb-6">
                    How We Built It: <span class="text-gradient">Laravel Architecture</span>
                </h2>
                <p class="text-xl  max-w-5xl mx-auto">
                    We engineered a secure, lightweight web application using the Laravel framework, leveraging geolocation APIs and MySQL database logic.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-14">
                <!-- Service 1 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">01</span>
                    <h3 class="text-xl font-bold mb-3">Browser Geolocation API</h3>
                    <p class="text-sm leading-relaxed">Obtaining precise real-time coordinates of employees at the exact moment of check-in or check-out using native HTML5 interfaces, securely checking accuracy thresholds.</p>
                </div>
                <!-- Service 2 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">02</span>
                    <h3 class="text-xl font-bold mb-3">Live Camera Streams</h3>
                    <p class="text-sm leading-relaxed">Leveraging browser media devices to securely take check-in selfies. Image streams are optimized to prevent server storage bloat while keeping records auditable.</p>
                </div>
                <!-- Service 3 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">03</span>
                    <h3 class="text-xl font-bold mb-3">Radius Validation Calculations</h3>
                    <p class="text-sm leading-relaxed">Comparing check-in coordinates against configured office latitudes using the Haversine mathematical database formula to identify and block remote check-ins.</p>
                </div>
                <!-- Service 4 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">04</span>
                    <h3 class="text-xl font-bold mb-3">Central HRMS Dashboard</h3>
                    <p class="text-sm leading-relaxed">A comprehensive control dashboard displaying active presence, visual audits, and daily summaries for managers with late flags and check-in times.</p>
                </div>
                <!-- Service 5 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">05</span>
                    <h3 class="text-xl font-bold mb-3">Real-Time Alert Sync</h3>
                    <p class="text-sm leading-relaxed">Triggering automated notification emails or SMS follow-ups for late arrivals, check-in errors, and scheduled leave approvals.</p>
                </div>
                <!-- Service 6 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">06</span>
                    <h3 class="text-xl font-bold mb-3">Role-Based Access</h3>
                    <p class="text-sm leading-relaxed">Implementing strict role authorization logic separating Super Admins, Branch Managers, and General Employees for secure database separation.</p>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="{{ route('contact') }}">
                    <x-form.primary-button type="button" class="px-7 py-3 rounded-2xl">
                        <span>Get Free Consultation</span>
                        <x-icons.go class="w-4 h-4" />
                    </x-form.primary-button>
                </a>
                <a href="{{ config('staticdata.whatsapp_url') }}">
                    <x-form.secondary-button type="button" class="px-7 py-3 rounded-2xl">
                        <x-icons.whatsapp class="w-5 h-5" />
                        <span>Chat on WhatsApp</span>
                    </x-form.secondary-button>
                </a>
            </div>
        </div>
    </section>

    <!-- FAQs Section -->
    <section class="py-24 border-b border-outline-variant/30">
        <div class="max-w-5xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-foreground mb-6">Frequently Asked Questions</h2>
            </div>

            <div class="space-y-6">
                <!-- Q1 -->
                <div class="p-6 rounded-2xl border border-border bg-card">
                    <h3 class="text-lg font-bold mb-3 flex items-start gap-2">
                        <span class="text-laravel">Q.</span> How accurate is the geo-fencing check?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        It uses the browser's high-accuracy HTML5 geolocation API, which queries GPS, cell towers, and Wi-Fi networks, typically achieving accuracy within 5 to 15 meters.
                    </p>
                </div>
                <!-- Q2 -->
                <div class="p-6 rounded-2xl border border-border bg-card">
                    <h3 class="text-lg font-bold mb-3 flex items-start gap-2">
                        <span class="text-laravel">Q.</span> Does this require installing a native iOS or Android app?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        No. We engineered the attendance portal as a Progressive Web Application (PWA). Employees can check in directly from Safari or Chrome on their mobile phones.
                    </p>
                </div>
                <!-- Q3 -->
                <div class="p-6 rounded-2xl border border-border bg-card">
                    <h3 class="text-lg font-bold mb-3 flex items-start gap-2">
                        <span class="text-laravel">Q.</span> How is data privacy handled with the selfie verification?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        Captured selfies are securely stored in private cloud directories and only displayed to authorized managers on the secure admin console for audit purposes.
                    </p>
                </div>
                <!-- Q4 -->
                <div class="p-6 rounded-2xl border border-border bg-card">
                    <h3 class="text-lg font-bold mb-3 flex items-start gap-2">
                        <span class="text-laravel">Q.</span> Can we define multiple office locations or branches?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        Yes. The system has a multi-branch capability, allowing super admins to define distinct geographic bounds and radiuses for each branch.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Related Projects --}}
    <section class="py-24 border-b border-outline-variant/30">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-foreground mb-4">Other Projects</h2>
                    <p class="">See how we've built custom portals to drive growth.</p>
                </div>
                <a href="{{ route('portfolio') }}" class="text-primary font-bold hover:underline">View All Projects</a>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                <a href="{{ route('portfolio.promofusion360') }}"
                    class="group rounded-2xl border border-border bg-card overflow-hidden transition-all hover:border-primary/30">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('assets/images/promofusion360.png') }}" alt="PromoFusion360 Portal"
                            class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-foreground mb-2 group-hover:text-primary transition-colors">PromoFusion360 Portal</h3>
                        <p class=" text-sm">Automated payment processing via multiple gateway APIs.</p>
                    </div>
                </a>
                <a href="{{ route('portfolio.krishna-academy') }}"
                    class="group rounded-2xl border border-border bg-card overflow-hidden transition-all hover:border-primary/30">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('assets/images/krishna-academy.png') }}" alt="Krishna Academy"
                            class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-foreground mb-2 group-hover:text-primary transition-colors">
                            KrishnaAcademy – LMS Platform</h3>
                        <p class=" text-sm">Educational platform with video lessons and quiz modules.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- Footer Contact --}}
    @include('sections.contact')
@endsection
