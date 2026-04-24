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
    <section class="relative py-24 overflow-hidden border-b border-outline-variant/20">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-primary/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-secondary/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
            <nav class="flex mb-8" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-sm text-on-surface/60">
                    <li><a href="{{ route('home') }}" class="hover:text-primary transition-colors">Home</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li><a href="{{ route('portfolio') }}" class="hover:text-primary transition-colors">Portfolio</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li class="text-on-surface font-medium">Attendance Manager</li>
                </ol>
            </nav>

            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right" data-aos-duration="1000">
                    <span class="inline-block px-4 py-1.5 mb-6 text-[10px] font-bold uppercase tracking-widest text-primary bg-primary/10 rounded-full border border-primary/20">
                        Custom Software Development
                    </span>
                    <h1 class="text-4xl lg:text-6xl font-black text-white leading-tight mb-6">
                        Attendance Manager <br>
                        <span class="text-gradient">System</span>
                    </h1>
                    <p class="text-xl text-on-surface/60 leading-relaxed mb-8">
                        A robust, Laravel-powered solution designed to streamline employee tracking through advanced geo-fencing and visual verification.
                    </p>
                    <div class="flex flex-wrap gap-3 mb-10">
                        @foreach (['Laravel', 'MySQL', 'Geo-Fencing', 'Selfie Verification', 'Real-time Dashboard'] as $tech)
                            <span class="px-4 py-2 bg-surface-container rounded-xl border border-outline-variant/20 text-sm font-medium text-on-surface/80">
                                {{ $tech }}
                            </span>
                        @endforeach
                    </div>
                </div>
                <div class="relative" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="aspect-video rounded-3xl overflow-hidden border border-outline-variant/30 shadow-2xl">
                        <img src="{{ asset('assets/images/attendance.png') }}" alt="Attendance Manager Dashboard" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-6 -right-6 bg-surface-container p-6 rounded-2xl border border-outline-variant/20 shadow-xl hidden md:block">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-primary/20 flex items-center justify-center">
                                <x-icons.users class="w-6 h-6 text-primary" />
                            </div>
                            <div>
                                <p class="text-xs text-on-surface/60 font-bold uppercase tracking-wider">Impact</p>
                                <p class="text-lg font-black text-white">100% Precise Tracking</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Project Details Section --}}
    <section class="py-24 bg-surface">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-3 gap-12">
                {{-- Left Side: Main Content --}}
                <div class="lg:col-span-2 space-y-16">
                    {{-- The Challenge --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-6 flex items-center gap-4">
                            <span class="w-8 h-1 bg-primary rounded-full"></span>
                            The Challenge
                        </h2>
                        <div class="prose prose-invert max-w-none text-on-surface/70 leading-relaxed space-y-4">
                            <p>
                                Modern agencies often struggle with verifying employee attendance, especially when teams are mobile or working from multiple client locations. Traditional methods like paper logs or simple app check-ins are prone to "buddy punching" or falsified location data.
                            </p>
                            <p>
                                Our client needed a system that could:
                            </p>
                            <ul class="list-disc pl-5 space-y-2">
                                <li>Ensure users are physically present at the designated office or site location.</li>
                                <li>Provide visual proof of identity during check-in/check-out.</li>
                                <li>Manage leave applications and approvals in a centralized dashboard.</li>
                                <li>Work seamlessly across mobile and desktop browsers without heavy app downloads.</li>
                            </ul>
                        </div>
                    </div>

                    {{-- The Solution --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-6 flex items-center gap-4">
                            <span class="w-8 h-1 bg-secondary rounded-full"></span>
                            The Solution
                        </h2>
                        <div class="prose prose-invert max-w-none text-on-surface/70 leading-relaxed space-y-4">
                            <p>
                                We developed a custom web application using the **Laravel framework**, leveraging its robust security and scalability features. The core of the solution lies in the integration of browser-based Geolocation APIs and a secure camera interface.
                            </p>
                            <p>
                                **Geo-Fencing Mechanism:** We implemented a system where admins can define specific "Office Zones" with a set radius. The application checks the user's real-time coordinates against these zones before allowing any attendance action.
                            </p>
                            <p>
                                **Selfie Verification:** To prevent proxy attendance, we integrated a mandatory "Selfie Check-in." The system captures a live photo, which is then stored and linked to the attendance record for admin audit.
                            </p>
                        </div>
                    </div>

                    {{-- Key Features --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-8">Core Features</h2>
                        <div class="grid md:grid-cols-2 gap-6">
                            @php
                                $features = [
                                    ['title' => 'Geo-Restriction', 'desc' => 'Restrict check-ins to specific GPS coordinates with adjustable radius.'],
                                    ['title' => 'Visual Proof', 'desc' => 'Mandatory selfie capture for every check-in/check-out event.'],
                                    ['title' => 'Leave Management', 'desc' => 'Complete workflow for applying, tracking, and approving employee leaves.'],
                                    ['title' => 'Admin Dashboard', 'desc' => 'Comprehensive view of team presence, late arrivals, and attendance history.'],
                                    ['title' => 'Role-Based Access', 'desc' => 'Separate panels for Super Admins, Managers, and Employees.'],
                                    ['title' => 'Real-time Reports', 'desc' => 'Exportable attendance logs and monthly performance summaries.'],
                                ];
                            @endphp
                            @foreach ($features as $f)
                                <div class="p-6 bg-surface-container rounded-2xl border border-outline-variant/10 hover:border-primary/30 transition-all group">
                                    <h4 class="text-lg font-bold text-white mb-2 group-hover:text-primary transition-colors">{{ $f['title'] }}</h4>
                                    <p class="text-on-surface/60 text-sm leading-relaxed">{{ $f['desc'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Right Side: Meta Info & CTA --}}
                <div class="space-y-8">
                    <div class="p-8 bg-surface-container rounded-3xl border border-outline-variant/20 sticky top-24">
                        <h3 class="text-xl font-bold text-white mb-6">Project Info</h3>
                        <div class="space-y-6">
                            <div>
                                <p class="text-[10px] font-bold text-primary uppercase tracking-widest mb-1">Client Category</p>
                                <p class="text-on-surface/80 font-medium">Service-based Agency</p>
                            </div>
                            <div>
                                <p class="text-[10px] font-bold text-primary uppercase tracking-widest mb-1">Timeline</p>
                                <p class="text-on-surface/80 font-medium">4 Weeks</p>
                            </div>
                            <div>
                                <p class="text-[10px] font-bold text-primary uppercase tracking-widest mb-1">Services Provided</p>
                                <p class="text-on-surface/80 font-medium">UI/UX Design, Web Development, Cloud Deployment</p>
                            </div>
                            <div class="pt-6 border-t border-outline-variant/10">
                                <a href="{{ route('contact') }}">
                                    <x-form.primary-button type="button" class="w-full justify-center py-4 rounded-2xl">
                                        <span>Build Similar App</span>
                                        <x-icons.go class="w-4 h-4" />
                                    </x-form.primary-button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Tech Stack Visual --}}
    <section class="py-24 bg-surface-container/30 border-t border-outline-variant/20">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-white mb-12">Technologies Behind the Project</h2>
            <div class="flex flex-wrap justify-center gap-12 opacity-60 grayscale hover:grayscale-0 transition-all duration-500">
                {{-- These would be tech icons, for now just labels with stylized text --}}
                <div class="flex flex-col items-center gap-3">
                    <div class="text-3xl font-black text-on-surface">Laravel</div>
                    <span class="text-[10px] font-bold text-primary uppercase tracking-widest">Backend</span>
                </div>
                <div class="flex flex-col items-center gap-3">
                    <div class="text-3xl font-black text-on-surface">MySQL</div>
                    <span class="text-[10px] font-bold text-primary uppercase tracking-widest">Database</span>
                </div>
                <div class="flex flex-col items-center gap-3">
                    <div class="text-3xl font-black text-on-surface">Tailwind</div>
                    <span class="text-[10px] font-bold text-primary uppercase tracking-widest">Styling</span>
                </div>
                <div class="flex flex-col items-center gap-3">
                    <div class="text-3xl font-black text-on-surface">JS APIs</div>
                    <span class="text-[10px] font-bold text-primary uppercase tracking-widest">Features</span>
                </div>
            </div>
        </div>
    </section>

    {{-- More Projects --}}
    <section class="py-24 border-t border-outline-variant/20">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">Other Case Studies</h2>
                    <p class="text-on-surface/60">Explore more of our recent work and digital transformations.</p>
                </div>
                <a href="{{ route('portfolio') }}" class="text-primary font-bold hover:underline">View All Projects</a>
            </div>
            {{-- Simple Grid for other projects --}}
            <div class="grid md:grid-cols-2 gap-8">
                 <a href="{{ route('portfolio.promofusion360') }}" class="group bg-surface-container rounded-3xl overflow-hidden border border-outline-variant/20 hover:border-primary/30 transition-all">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('assets/images/promofusion360.png') }}" alt="PromoFusion360" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-primary transition-colors">PromoFusion360 – Earning Platform</h3>
                        <p class="text-on-surface/60 text-sm">Laravel-based earning platform with multi-gateway support.</p>
                    </div>
                </a>
                <a href="{{ route('portfolio.krishna-academy') }}" class="group bg-surface-container rounded-3xl overflow-hidden border border-outline-variant/20 hover:border-primary/30 transition-all">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('assets/images/krishna-academy.png') }}" alt="Krishna Academy" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-primary transition-colors">KrishnaAcademy – LMS Platform</h3>
                        <p class="text-on-surface/60 text-sm">Educational platform with video lessons and quiz modules.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- Footer Contact --}}
    @include('sections.contact')
@endsection
