@extends('layouts.app')

@section('head')
    <title>Kifayat Card | Digital Loyalty & Reward Point System</title>
    <meta name="description"
        content="Discover how we built Kifayat Card, a Laravel-powered loyalty system that helps shop owners manage digital reward points and enhance customer retention.">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="keywords"
        content="Kifayat Card, Bachatcard, Loyalty System Laravel, Reward Management Software, Digital Merchant Tools, QR Code Rewards">

    <!-- Open Graph -->
    <meta property="og:title" content="Kifayat Card Case Study | Tejal Digital">
    <meta property="og:description"
        content="A custom loyalty and rewards platform built for small and medium businesses using Laravel.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/images/kifayatcard.png') }}">
@endsection

@section('content')
    {{-- Project Hero --}}
    <section class="relative py-24 overflow-hidden border-b border-outline-variant/20">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-emerald-500/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-lime-500/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
            <nav class="flex mb-8" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-sm text-on-surface/60">
                    <li><a href="{{ route('home') }}" class="hover:text-primary transition-colors">Home</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li><a href="{{ route('portfolio') }}" class="hover:text-primary transition-colors">Portfolio</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li class="text-on-surface font-medium">Kifayat Card</li>
                </ol>
            </nav>

            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right" data-aos-duration="1000">
                    <span class="inline-block px-4 py-1.5 mb-6 text-[10px] font-bold uppercase tracking-widest text-emerald-400 bg-emerald-500/10 rounded-full border border-emerald-500/20">
                        SaaS / Retail Tech
                    </span>
                    <h1 class="text-4xl lg:text-6xl font-black text-white leading-tight mb-6">
                        Kifayat Card <br>
                        <span class="text-gradient from-emerald-400 to-lime-500">Loyalty Platform</span>
                    </h1>
                    <p class="text-xl text-on-surface/60 leading-relaxed mb-8">
                        A modern digital solution replacing traditional paper-based loyalty cards with a secure, real-time reward point tracking system for merchants and customers.
                    </p>
                    <div class="flex flex-wrap gap-3 mb-10">
                        @foreach (['Laravel', 'QR Code Engine', 'Real-time Analytics', 'Merchant Portal', 'Responsive Web'] as $tech)
                            <span class="px-4 py-2 bg-surface-container rounded-xl border border-outline-variant/20 text-sm font-medium text-on-surface/80">
                                {{ $tech }}
                            </span>
                        @endforeach
                    </div>
                </div>
                <div class="relative" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="aspect-video rounded-3xl overflow-hidden border border-outline-variant/30 shadow-2xl">
                        <img src="{{ asset('assets/images/kifayatcard.png') }}" alt="Kifayat Card Dashboard" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-6 -right-6 bg-surface-container p-6 rounded-2xl border border-outline-variant/20 shadow-xl hidden md:block">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-emerald-500/20 flex items-center justify-center">
                                <x-icons.check class="w-6 h-6 text-emerald-400" />
                            </div>
                            <div>
                                <p class="text-xs text-on-surface/60 font-bold uppercase tracking-wider">Metric</p>
                                <p class="text-lg font-black text-white">40% Return Rate Increase</p>
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
                            <span class="w-8 h-1 bg-emerald-500 rounded-full"></span>
                            The Challenge
                        </h2>
                        <div class="prose prose-invert max-w-none text-on-surface/70 leading-relaxed space-y-4">
                            <p>
                                Small and medium businesses often find it difficult to maintain customer loyalty without expensive software. Paper cards are easily lost, and there is no way for merchants to track customer spending habits or reward patterns accurately.
                            </p>
                            <p>
                                The client needed a system that could:
                            </p>
                            <ul class="list-disc pl-5 space-y-2">
                                <li>Enable merchants to quickly register customers and issue points.</li>
                                <li>Allow customers to check their balances instantly via a simple QR scan.</li>
                                <li>Provide admins with a birds-eye view of all transactions across different stores.</li>
                                <li>Ensure point redemption is secure and prevents unauthorized manipulation.</li>
                            </ul>
                        </div>
                    </div>

                    {{-- The Solution --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-6 flex items-center gap-4">
                            <span class="w-8 h-1 bg-lime-500 rounded-full"></span>
                            The Solution
                        </h2>
                        <div class="prose prose-invert max-w-none text-on-surface/70 leading-relaxed space-y-4">
                            <p>
                                We developed Kifayat Card (formerly Bachatcard) as a centralized SaaS platform using Laravel. The system is designed with a "Merchant-First" approach, focusing on speed of operation at the checkout counter.
                            </p>
                            <p>
                                **QR-Based Identification:** Every customer receives a unique digital card with a QR code. Merchants scan this code to instantly pull up the customer's profile and add or redeem points.
                            </p>
                            <p>
                                **Dynamic Reward Logic:** Admins can configure different point-to-currency ratios for various merchants, allowing for a flexible ecosystem where different shops can have their own reward rules.
                            </p>
                        </div>
                    </div>

                    {{-- Key Features --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-8">Core Features</h2>
                        <div class="grid md:grid-cols-2 gap-6">
                            @php
                                $features = [
                                    ['title' => 'Merchant Dashboard', 'desc' => 'Simplified interface for store owners to manage customer enrollments and point assignments.'],
                                    ['title' => 'Customer Wallet', 'desc' => 'Mobile-friendly view for customers to track their points and see redemption history.'],
                                    ['title' => 'QR Code Generation', 'desc' => 'Automated generation of unique digital loyalty cards for every user.'],
                                    ['title' => 'Transaction Logs', 'desc' => 'Immutable audit trails for every point added or redeemed to ensure transparency.'],
                                    ['title' => 'Gift Redemption', 'desc' => 'Module for merchants to list rewards that can be claimed using accumulated points.'],
                                    ['title' => 'Store Analytics', 'desc' => 'Reports on customer footfall, popular reward items, and peak spending times.'],
                                ];
                            @endphp
                            @foreach ($features as $f)
                                <div class="p-6 bg-surface-container rounded-2xl border border-outline-variant/10 hover:border-emerald-500/30 transition-all group">
                                    <h4 class="text-lg font-bold text-white mb-2 group-hover:text-emerald-400 transition-colors">{{ $f['title'] }}</h4>
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
                                <p class="text-[10px] font-bold text-emerald-400 uppercase tracking-widest mb-1">Target Market</p>
                                <p class="text-on-surface/80 font-medium">SMBs / Retail Stores</p>
                            </div>
                            <div>
                                <p class="text-[10px] font-bold text-emerald-400 uppercase tracking-widest mb-1">Architecture</p>
                                <p class="text-on-surface/80 font-medium">Multi-tenant SaaS (Laravel)</p>
                            </div>
                            <div>
                                <p class="text-[10px] font-bold text-emerald-400 uppercase tracking-widest mb-1">Key Tech</p>
                                <p class="text-on-surface/80 font-medium">PHP 8, Laravel 10, MySQL, AlpineJS</p>
                            </div>
                            <div class="pt-6 border-t border-outline-variant/10">
                                <a href="{{ route('contact') }}">
                                    <x-form.primary-button type="button" class="w-full justify-center py-4 rounded-2xl bg-emerald-600 hover:bg-emerald-700 border-emerald-600">
                                        <span>Build Loyalty App</span>
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
