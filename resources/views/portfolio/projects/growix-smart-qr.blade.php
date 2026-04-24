@extends('layouts.app')

@section('head')
    <title>Growix Smart QR | Review Management & Reputation SaaS</title>
    <meta name="description"
        content="Discover how we built Growix, a smart QR code system for businesses to manage online reviews and improve their digital reputation using Laravel.">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="keywords"
        content="Growix, Smart QR, Review Management Software, Reputation SaaS, Laravel SaaS Development, Google Reviews Filtering">

    <!-- Open Graph -->
    <meta property="og:title" content="Growix Smart QR Case Study | Tejal Digital">
    <meta property="og:description"
        content="A unique review management SaaS built with Laravel, featuring dynamic QR codes and payment integration.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/images/growix.png') }}">
@endsection

@section('content')
    {{-- Project Hero --}}
    <section class="relative py-24 overflow-hidden border-b border-outline-variant/20">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-indigo-500/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
            <nav class="flex mb-8" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-sm text-on-surface/60">
                    <li><a href="{{ route('home') }}" class="hover:text-primary transition-colors">Home</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li><a href="{{ route('portfolio') }}" class="hover:text-primary transition-colors">Portfolio</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li class="text-on-surface font-medium">Growix: Smart QR</li>
                </ol>
            </nav>

            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right" data-aos-duration="1000">
                    <span class="inline-block px-4 py-1.5 mb-6 text-[10px] font-bold uppercase tracking-widest text-purple-400 bg-purple-500/10 rounded-full border border-purple-500/20">
                        SaaS Development
                    </span>
                    <h1 class="text-4xl lg:text-6xl font-black text-white leading-tight mb-6">
                        Growix: <br>
                        <span class="text-gradient from-purple-400 to-indigo-500">Smart QR System</span>
                    </h1>
                    <p class="text-xl text-on-surface/60 leading-relaxed mb-8">
                        An innovative reputation management platform that leverages dynamic QR technology to help businesses capture positive feedback and manage concerns privately.
                    </p>
                    <div class="flex flex-wrap gap-3 mb-10">
                        @foreach (['Laravel', 'QR Engine', 'Razorpay', 'SaaS', 'Admin Panels'] as $tech)
                            <span class="px-4 py-2 bg-surface-container rounded-xl border border-outline-variant/20 text-sm font-medium text-on-surface/80">
                                {{ $tech }}
                            </span>
                        @endforeach
                    </div>
                </div>
                <div class="relative" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="aspect-video rounded-3xl overflow-hidden border border-outline-variant/30 shadow-2xl">
                        <img src="{{ asset('assets/images/growix.png') }}" alt="Growix Application Dashboard" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-6 -right-6 bg-surface-container p-6 rounded-2xl border border-outline-variant/20 shadow-xl hidden md:block">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-purple-500/20 flex items-center justify-center">
                                <x-icons.star class="w-6 h-6 text-purple-400" />
                            </div>
                            <div>
                                <p class="text-xs text-on-surface/60 font-bold uppercase tracking-wider">Result</p>
                                <p class="text-lg font-black text-white">85% Review Improvement</p>
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
                            <span class="w-8 h-1 bg-purple-500 rounded-full"></span>
                            The Challenge
                        </h2>
                        <div class="prose prose-invert max-w-none text-on-surface/70 leading-relaxed space-y-4">
                            <p>
                                Online reviews can make or break a business. Often, happy customers forget to leave reviews, while unhappy ones are quick to vent on public platforms like Google or Yelp. Business owners needed a way to encourage positive reviews while intercepting negative feedback privately to resolve issues.
                            </p>
                            <p>
                                The project required:
                            </p>
                            <ul class="list-disc pl-5 space-y-2">
                                <li>A way to distinguish between satisfied and dissatisfied customers instantly.</li>
                                <li>Dynamic QR codes for each business that link to a custom landing page.</li>
                                <li>A subscription model for business owners to access the service.</li>
                                <li>Automated redirection based on user rating.</li>
                            </ul>
                        </div>
                    </div>

                    {{-- The Solution --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-6 flex items-center gap-4">
                            <span class="w-8 h-1 bg-indigo-500 rounded-full"></span>
                            The Solution
                        </h2>
                        <div class="prose prose-invert max-w-none text-on-surface/70 leading-relaxed space-y-4">
                            <p>
                                We developed Growix as a comprehensive SaaS platform using Laravel. The heart of the system is the "Review Filter" logic. When a customer scans the QR code, they are asked to rate their experience.
                            </p>
                            <p>
                                **The Filter Logic:** If the customer selects 4 or 5 stars, the system automatically redirects them to the business's official Google Review page. If they select 3 stars or less, they are redirected to a private feedback form that notifies the owner immediately.
                            </p>
                            <p>
                                **SaaS Management:** We integrated Razorpay to handle monthly and yearly subscriptions, providing business owners with a dashboard to track their QR scans, review redirections, and private feedback received.
                            </p>
                        </div>
                    </div>

                    {{-- Key Features --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-8">Core Features</h2>
                        <div class="grid md:grid-cols-2 gap-6">
                            @php
                                $features = [
                                    ['title' => 'Smart Redirection', 'desc' => 'Logic-based routing that sends happy customers to public review sites and others to private forms.'],
                                    ['title' => 'Dynamic QR Engine', 'desc' => 'Generate and manage high-quality QR codes for tables, counters, or marketing materials.'],
                                    ['title' => 'Admin Dashboard', 'desc' => 'Track analytics on total scans, star ratings received, and redirection success.'],
                                    ['title' => 'Subscription Billing', 'desc' => 'Automated recurring payments and plan management using Razorpay.'],
                                    ['title' => 'Feedback Portal', 'desc' => 'Private area for owners to read and respond to customer concerns before they go public.'],
                                    ['title' => 'White-Label Options', 'desc' => 'Allow businesses to customize the landing page with their own logos and brand colors.'],
                                ];
                            @endphp
                            @foreach ($features as $f)
                                <div class="p-6 bg-surface-container rounded-2xl border border-outline-variant/10 hover:border-purple-500/30 transition-all group">
                                    <h4 class="text-lg font-bold text-white mb-2 group-hover:text-purple-400 transition-colors">{{ $f['title'] }}</h4>
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
                                <p class="text-[10px] font-bold text-purple-400 uppercase tracking-widest mb-1">Service Type</p>
                                <p class="text-on-surface/80 font-medium">SaaS Platform Development</p>
                            </div>
                            <div>
                                <p class="text-[10px] font-bold text-purple-400 uppercase tracking-widest mb-1">Industry</p>
                                <p class="text-on-surface/80 font-medium">Digital Marketing / Hospitality</p>
                            </div>
                            <div>
                                <p class="text-[10px] font-bold text-purple-400 uppercase tracking-widest mb-1">Core Tech</p>
                                <p class="text-on-surface/80 font-medium">Laravel, MySQL, Razorpay, QR Library</p>
                            </div>
                            <div class="pt-6 border-t border-outline-variant/10">
                                <a href="{{ route('contact') }}">
                                    <x-form.primary-button type="button" class="w-full justify-center py-4 rounded-2xl bg-purple-600 hover:bg-purple-700 border-purple-600">
                                        <span>Build SaaS Like This</span>
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
                 <a href="{{ route('portfolio.kifayat-card') }}" class="group bg-surface-container rounded-3xl overflow-hidden border border-outline-variant/20 hover:border-primary/30 transition-all">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('assets/images/kifayatcard.png') }}" alt="Kifayat Card" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-primary transition-colors">Kifayat Card</h3>
                        <p class="text-on-surface/60 text-sm">Digital loyalty point system for merchants.</p>
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
