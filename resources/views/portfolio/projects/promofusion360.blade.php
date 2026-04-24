@extends('layouts.app')

@section('head')
    <title>PromoFusion360 | Laravel-Based Earning & Referral Platform</title>
    <meta name="description"
        content="Learn how we built PromoFusion360, a high-traffic earning platform featuring tiered subscriptions, dual payment gateways, and a robust referral system.">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="keywords"
        content="PromoFusion360, Earning Platform, Referral Marketing Software, Laravel E-commerce, UPI Payment Integration, Cashfree Gateway Laravel">

    <!-- Open Graph -->
    <meta property="og:title" content="PromoFusion360 Case Study | Tejal Digital">
    <meta property="og:description"
        content="Scaling a referral-based earning platform with Laravel and integrated payment solutions.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/images/promofusion360.png') }}">
@endsection

@section('content')
    {{-- Project Hero --}}
    <section class="relative py-24 overflow-hidden border-b border-outline-variant/20">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-pink-500/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-rose-500/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
            <nav class="flex mb-8" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-sm text-on-surface/60">
                    <li><a href="{{ route('home') }}" class="hover:text-primary transition-colors">Home</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li><a href="{{ route('portfolio') }}" class="hover:text-primary transition-colors">Portfolio</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li class="text-on-surface font-medium">PromoFusion360</li>
                </ol>
            </nav>

            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right" data-aos-duration="1000">
                    <span class="inline-block px-4 py-1.5 mb-6 text-[10px] font-bold uppercase tracking-widest text-pink-500 bg-pink-500/10 rounded-full border border-pink-500/20">
                        Earning Platform
                    </span>
                    <h1 class="text-4xl lg:text-6xl font-black text-white leading-tight mb-6">
                        PromoFusion360 <br>
                        <span class="text-gradient from-pink-400 to-rose-500">Platform</span>
                    </h1>
                    <p class="text-xl text-on-surface/60 leading-relaxed mb-8">
                        A dynamic Laravel-based ecosystem enabling users to monetize their time through video engagement and tiered referral networks.
                    </p>
                    <div class="flex flex-wrap gap-3 mb-10">
                        @foreach (['Laravel', 'UPI Integration', 'Cashfree', 'Multi-level Referral', 'Real-time Analytics'] as $tech)
                            <span class="px-4 py-2 bg-surface-container rounded-xl border border-outline-variant/20 text-sm font-medium text-on-surface/80">
                                {{ $tech }}
                            </span>
                        @endforeach
                    </div>
                </div>
                <div class="relative" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="aspect-video rounded-3xl overflow-hidden border border-outline-variant/30 shadow-2xl">
                        <img src="{{ asset('assets/images/promofusion360.png') }}" alt="PromoFusion360 Dashboard" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-6 -right-6 bg-surface-container p-6 rounded-2xl border border-outline-variant/20 shadow-xl hidden md:block">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-pink-500/20 flex items-center justify-center">
                                <x-icons.go class="w-6 h-6 text-pink-500" />
                            </div>
                            <div>
                                <p class="text-xs text-on-surface/60 font-bold uppercase tracking-wider">Scale</p>
                                <p class="text-lg font-black text-white">10k+ Active Users</p>
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
                            <span class="w-8 h-1 bg-pink-500 rounded-full"></span>
                            The Challenge
                        </h2>
                        <div class="prose prose-invert max-w-none text-on-surface/70 leading-relaxed space-y-4">
                            <p>
                                The client wanted to create a platform that could handle high concurrent traffic while maintaining strict financial integrity. The primary challenge was building a referral system that accurately tracks commissions across multiple levels without performance bottlenecks.
                            </p>
                            <p>
                                Key requirements included:
                            </p>
                            <ul class="list-disc pl-5 space-y-2">
                                <li>Secure automated payment processing for subscriptions.</li>
                                <li>Prevention of multi-account fraud and referral gaming.</li>
                                <li>Low-latency dashboard for real-time earning updates.</li>
                                <li>Scalable architecture to support rapid user growth.</li>
                            </ul>
                        </div>
                    </div>

                    {{-- The Solution --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-6 flex items-center gap-4">
                            <span class="w-8 h-1 bg-rose-500 rounded-full"></span>
                            The Solution
                        </h2>
                        <div class="prose prose-invert max-w-none text-on-surface/70 leading-relaxed space-y-4">
                            <p>
                                We leveraged Laravel's queue system to handle heavy referral calculations in the background, ensuring the front-facing user experience remained lightning-fast. For payments, we integrated dual gateways (UPI and Cashfree) to provide redundancy and a seamless checkout flow.
                            </p>
                            <p>
                                **Referral Engine:** A custom recursive algorithm was developed to manage multi-tiered rewards. Each referral is validated against IP and device fingerprints to maintain platform integrity.
                            </p>
                            <p>
                                **User Experience:** We built separate, optimized panels for Users and Admins. The User panel focuses on simplicity, showing clear CTA for earning tasks and transparent withdrawal tracking.
                            </p>
                        </div>
                    </div>

                    {{-- Key Features --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-8">Core Features</h2>
                        <div class="grid md:grid-cols-2 gap-6">
                            @php
                                $features = [
                                    ['title' => 'Tiered Subscriptions', 'desc' => 'Multiple plan levels with varying earning potential and referral benefits.'],
                                    ['title' => 'Dual Payment Gateway', 'desc' => 'Integrated UPI and Cashfree for 99.9% payment success rate.'],
                                    ['title' => 'Watch & Earn', 'desc' => 'Automated video engagement tracking with instant credit systems.'],
                                    ['title' => 'Referral Tracking', 'desc' => 'Detailed tree view of referrals and commission history.'],
                                    ['title' => 'Auto-Withdrawals', 'desc' => 'Streamlined payout system with admin verification workflows.'],
                                    ['title' => 'Security Suite', 'desc' => 'Anti-fraud mechanisms and secure API endpoints for financial data.'],
                                ];
                            @endphp
                            @foreach ($features as $f)
                                <div class="p-6 bg-surface-container rounded-2xl border border-outline-variant/10 hover:border-pink-500/30 transition-all group">
                                    <h4 class="text-lg font-bold text-white mb-2 group-hover:text-pink-400 transition-colors">{{ $f['title'] }}</h4>
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
                                <p class="text-[10px] font-bold text-pink-500 uppercase tracking-widest mb-1">Category</p>
                                <p class="text-on-surface/80 font-medium">FinTech / E-learning</p>
                            </div>
                            <div>
                                <p class="text-[10px] font-bold text-pink-500 uppercase tracking-widest mb-1">Tech Stack</p>
                                <p class="text-on-surface/80 font-medium">Laravel, MySQL, Bootstrap, Cashfree</p>
                            </div>
                            <div>
                                <p class="text-[10px] font-bold text-pink-500 uppercase tracking-widest mb-1">Status</p>
                                <p class="text-on-surface/80 font-medium">Live & Scaling</p>
                            </div>
                            <div class="pt-6 border-t border-outline-variant/10">
                                <a href="{{ route('contact') }}">
                                    <x-form.primary-button type="button" class="w-full justify-center py-4 rounded-2xl bg-pink-600 hover:bg-pink-700 border-pink-600">
                                        <span>Inquire Similar Project</span>
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
                 <a href="{{ route('portfolio.attendance-manager') }}" class="group bg-surface-container rounded-3xl overflow-hidden border border-outline-variant/20 hover:border-primary/30 transition-all">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('assets/images/attendance.png') }}" alt="Attendance Manager" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-primary transition-colors">Attendance Manager System</h3>
                        <p class="text-on-surface/60 text-sm">Geo-fenced attendance tracking with selfie verification.</p>
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
