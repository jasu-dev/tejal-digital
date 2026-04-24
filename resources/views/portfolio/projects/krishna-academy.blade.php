@extends('layouts.app')

@section('head')
    <title>KrishnaAcademy | Custom Laravel LMS with Razorpay Integration</title>
    <meta name="description"
        content="Explore how we built KrishnaAcademy, a comprehensive Learning Management System with video streaming, automated quizzes, and secure Razorpay integration.">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="keywords"
        content="KrishnaAcademy, LMS Platform, Laravel Education Software, Online Quiz System, Razorpay Integration Laravel, Video Course Platform">

    <!-- Open Graph -->
    <meta property="og:title" content="KrishnaAcademy LMS Case Study | Tejal Digital">
    <meta property="og:description"
        content="Building a scalable education platform with Laravel, featuring auto-evaluating quizzes and secure payments.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/images/krishna-academy.png') }}">
@endsection

@section('content')
    {{-- Project Hero --}}
    <section class="relative py-24 overflow-hidden border-b border-outline-variant/20">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-indigo-500/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
            <nav class="flex mb-8" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-sm text-on-surface/60">
                    <li><a href="{{ route('home') }}" class="hover:text-primary transition-colors">Home</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li><a href="{{ route('portfolio') }}" class="hover:text-primary transition-colors">Portfolio</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li class="text-on-surface font-medium">KrishnaAcademy</li>
                </ol>
            </nav>

            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right" data-aos-duration="1000">
                    <span class="inline-block px-4 py-1.5 mb-6 text-[10px] font-bold uppercase tracking-widest text-indigo-400 bg-indigo-500/10 rounded-full border border-indigo-500/20">
                        EdTech Solution
                    </span>
                    <h1 class="text-4xl lg:text-6xl font-black text-white leading-tight mb-6">
                        KrishnaAcademy <br>
                        <span class="text-gradient from-indigo-400 to-purple-500">LMS Platform</span>
                    </h1>
                    <p class="text-xl text-on-surface/60 leading-relaxed mb-8">
                        A feature-rich Learning Management System designed to deliver seamless educational experiences through video content, interactive assessments, and secure enrollment.
                    </p>
                    <div class="flex flex-wrap gap-3 mb-10">
                        @foreach (['Laravel', 'Razorpay', 'Video Streaming', 'Auto-Quizzes', 'Certification System'] as $tech)
                            <span class="px-4 py-2 bg-surface-container rounded-xl border border-outline-variant/20 text-sm font-medium text-on-surface/80">
                                {{ $tech }}
                            </span>
                        @endforeach
                    </div>
                </div>
                <div class="relative" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="aspect-video rounded-3xl overflow-hidden border border-outline-variant/30 shadow-2xl">
                        <img src="{{ asset('assets/images/krishna-academy.png') }}" alt="KrishnaAcademy Interface" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-6 -right-6 bg-surface-container p-6 rounded-2xl border border-outline-variant/20 shadow-xl hidden md:block">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-indigo-500/20 flex items-center justify-center">
                                <x-icons.play class="w-6 h-6 text-indigo-400" />
                            </div>
                            <div>
                                <p class="text-xs text-on-surface/60 font-bold uppercase tracking-wider">Content</p>
                                <p class="text-lg font-black text-white">500+ Video Lessons</p>
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
                            <span class="w-8 h-1 bg-indigo-500 rounded-full"></span>
                            The Challenge
                        </h2>
                        <div class="prose prose-invert max-w-none text-on-surface/70 leading-relaxed space-y-4">
                            <p>
                                The client required a scalable platform that could host thousands of students while providing a distraction-free learning environment. The core challenge was implementing a quiz system that could handle complex question types with automated grading and instant feedback.
                            </p>
                            <p>
                                Key objectives included:
                            </p>
                            <ul class="list-disc pl-5 space-y-2">
                                <li>Protecting premium video content from unauthorized downloads.</li>
                                <li>Building a multi-role system (Admin, Teacher, Student) with distinct permissions.</li>
                                <li>Integrating a reliable Indian payment gateway (Razorpay) for course sales.</li>
                                <li>Generating dynamic certificates upon course completion.</li>
                            </ul>
                        </div>
                    </div>

                    {{-- The Solution --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-6 flex items-center gap-4">
                            <span class="w-8 h-1 bg-purple-500 rounded-full"></span>
                            The Solution
                        </h2>
                        <div class="prose prose-invert max-w-none text-on-surface/70 leading-relaxed space-y-4">
                            <p>
                                We built KrishnaAcademy on the Laravel framework, utilizing its robust Eloquent ORM to manage complex relationships between courses, lessons, quizzes, and enrollments. 
                            </p>
                            <p>
                                **Assessment Engine:** We developed a custom quiz module that supports multiple choice, true/false, and descriptive questions. Results are calculated instantly, and students receive detailed performance analytics.
                            </p>
                            <p>
                                **Payment & Security:** Razorpay was integrated for seamless INR transactions. We also implemented secure URL signing and cloud-hosted video protection to ensure content remains exclusive to paid subscribers.
                            </p>
                        </div>
                    </div>

                    {{-- Key Features --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-8">Core Features</h2>
                        <div class="grid md:grid-cols-2 gap-6">
                            @php
                                $features = [
                                    ['title' => 'Structured Courses', 'desc' => 'Organize content into modules, lessons, and downloadable PDF resources.'],
                                    ['title' => 'Interactive Quizzes', 'desc' => 'Automated assessments with solutions, timer support, and retake options.'],
                                    ['title' => 'Razorpay Checkout', 'desc' => 'Secure payment processing with instant course activation.'],
                                    ['title' => 'Progress Tracking', 'desc' => 'Visual indicators for student progress across various course modules.'],
                                    ['title' => 'Digital Certificates', 'desc' => 'Automatically generated, verifiable PDF certificates for graduates.'],
                                    ['title' => 'Teacher Panel', 'desc' => 'Dedicated tools for instructors to upload content and track student performance.'],
                                ];
                            @endphp
                            @foreach ($features as $f)
                                <div class="p-6 bg-surface-container rounded-2xl border border-outline-variant/10 hover:border-indigo-500/30 transition-all group">
                                    <h4 class="text-lg font-bold text-white mb-2 group-hover:text-indigo-400 transition-colors">{{ $f['title'] }}</h4>
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
                                <p class="text-[10px] font-bold text-indigo-400 uppercase tracking-widest mb-1">Sector</p>
                                <p class="text-on-surface/80 font-medium">Education / EdTech</p>
                            </div>
                            <div>
                                <p class="text-[10px] font-bold text-indigo-400 uppercase tracking-widest mb-1">Technologies</p>
                                <p class="text-on-surface/80 font-medium">Laravel, PHP, MySQL, Razorpay</p>
                            </div>
                            <div>
                                <p class="text-[10px] font-bold text-indigo-400 uppercase tracking-widest mb-1">Scale</p>
                                <p class="text-on-surface/80 font-medium">5,000+ Enrolled Students</p>
                            </div>
                            <div class="pt-6 border-t border-outline-variant/10">
                                <a href="{{ route('contact') }}">
                                    <x-form.primary-button type="button" class="w-full justify-center py-4 rounded-2xl bg-indigo-600 hover:bg-indigo-700 border-indigo-600">
                                        <span>Build Your LMS</span>
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
                <a href="{{ route('portfolio.attendance-manager') }}" class="group bg-surface-container rounded-3xl overflow-hidden border border-outline-variant/20 hover:border-primary/30 transition-all">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('assets/images/attendance.png') }}" alt="Attendance Manager" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-primary transition-colors">Attendance Manager System</h3>
                        <p class="text-on-surface/60 text-sm">Geo-fenced attendance tracking with selfie verification.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- Footer Contact --}}
    @include('sections.contact')
@endsection
