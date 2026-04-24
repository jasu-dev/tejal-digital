@extends('layouts.app')

@section('head')
    <title>Custom CRM Development | Build Your Sales & Lead Management System</title>
    <meta name="description"
        content="Boost your business efficiency with a custom-built CRM. Manage leads, track sales pipelines, and improve customer relationships with tailored CRM solutions from Tejal Digital.">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="keywords"
        content="Custom CRM Development, Sales Pipeline Software, Lead Management System, Bespoke CRM Solutions, Customer Relationship Management, CRM for Agencies">

    <!-- Open Graph -->
    <meta property="og:title" content="Custom CRM Development | Tejal Digital">
    <meta property="og:description"
        content="Scale your sales and operations with a custom CRM system designed specifically for your business workflow.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/images/og-image.png') }}">
@endsection

@section('content')
    {{-- Service Hero --}}
    <section class="relative py-24 overflow-hidden border-b border-outline-variant/20">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-emerald-500/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-teal-500/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
            <nav class="flex mb-8" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-sm text-on-surface/60">
                    <li><a href="{{ route('home') }}" class="hover:text-primary transition-colors">Home</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li><a href="{{ route('services') }}" class="hover:text-primary transition-colors">Services</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li class="text-on-surface font-medium">Custom CRM Development</li>
                </ol>
            </nav>

            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right" data-aos-duration="1000">
                    <span class="inline-block px-4 py-1.5 mb-6 text-[10px] font-bold uppercase tracking-widest text-emerald-400 bg-emerald-500/10 rounded-full border border-emerald-500/20">
                        Relationship Management
                    </span>
                    <h1 class="text-4xl lg:text-6xl font-black text-white leading-tight mb-6">
                        Custom CRM <br>
                        <span class="text-gradient from-emerald-400 to-teal-500">Development</span>
                    </h1>
                    <p class="text-xl text-on-surface/60 leading-relaxed mb-8">
                        Stop struggling with generic CRM tools. We build bespoke Customer Relationship Management systems that mirror your unique sales processes and help you close deals faster.
                    </p>
                    <div class="flex flex-wrap gap-4">
                         <a href="{{ route('contact') }}">
                            <x-form.primary-button type="button" class="px-8 py-4 rounded-2xl bg-emerald-600 hover:bg-emerald-700 border-emerald-600">
                                <span>Get Your CRM Quote</span>
                                <x-icons.go class="w-4 h-4" />
                            </x-form.primary-button>
                        </a>
                    </div>
                </div>
                <div class="relative" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="aspect-square max-w-md mx-auto bg-surface-container rounded-[40px] border border-outline-variant/20 p-12 flex items-center justify-center relative overflow-hidden group">
                        <div class="absolute inset-0 bg-gradient-to-br from-emerald-500/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <x-icons.users class="w-32 h-32 text-emerald-400 relative z-10" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Service Details Section --}}
    <section class="py-24 bg-surface">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-3 gap-12">
                {{-- Left Side: Main Content --}}
                <div class="lg:col-span-2 space-y-16">
                    {{-- The Need --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-6 flex items-center gap-4">
                            <span class="w-8 h-1 bg-emerald-500 rounded-full"></span>
                            Why a Custom CRM?
                        </h2>
                        <div class="prose prose-invert max-w-none text-on-surface/70 leading-relaxed space-y-4">
                            <p>
                                Standard CRM platforms often come with high monthly fees and hundreds of features you'll never use, which clutter your workspace and slow down your team. A custom CRM is designed around your specific business logic, ensuring that every button and dashboard serves a purpose.
                            </p>
                            <p>
                                Whether you're an agency tracking multiple leads or a service-based business managing recurring client interactions, our custom CRM solutions provide the visibility and automation you need to grow without the overhead.
                            </p>
                        </div>
                    </div>

                    {{-- CRM Features --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-8">Core CRM Features</h2>
                        <div class="grid md:grid-cols-2 gap-6">
                            @php
                                $features = [
                                    ['title' => 'Lead Management', 'desc' => 'Capture and track leads from multiple sources in a centralized dashboard.'],
                                    ['title' => 'Sales Pipeline Tracking', 'desc' => 'Visual stages to monitor the progress of deals from initial contact to closure.'],
                                    ['title' => 'Automated Notifications', 'desc' => 'Stay on top of follow-ups with automated email and SMS reminders.'],
                                    ['title' => 'Client History & Logs', 'desc' => 'Detailed activity logs for every interaction, ensuring your team is always in sync.'],
                                    ['title' => 'Document Storage', 'desc' => 'Attach contracts, proposals, and project files directly to client profiles.'],
                                    ['title' => 'Advanced Analytics', 'desc' => 'Real-time reports on sales performance, lead conversion rates, and team activity.'],
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

                    {{-- Integration & Automation --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-6">Automation & Integration</h2>
                        <div class="prose prose-invert max-w-none text-on-surface/70 leading-relaxed">
                            <p>
                                A CRM doesn't live in isolation. We ensure your custom system talks to the tools you already use:
                            </p>
                            <ul class="list-disc pl-5 space-y-2">
                                <li><strong>Email Integration:</strong> Sync with Gmail or Outlook for seamless communication tracking.</li>
                                <li><strong>Payment Gateways:</strong> Connect with Stripe or Razorpay to track payments and generate invoices.</li>
                                <li><strong>Marketing Tools:</strong> Integrate with Mailchimp or WhatsApp APIs for automated outreach.</li>
                                <li><strong>Third-party APIs:</strong> Pull data from external lead-gen platforms or industry-specific tools.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Right Side: Meta Info & CTA --}}
                <div class="space-y-8">
                    <div class="p-8 bg-surface-container rounded-3xl border border-outline-variant/20 sticky top-24">
                        <h3 class="text-xl font-bold text-white mb-6">Service Benefits</h3>
                        <ul class="space-y-4 mb-8">
                            <li class="flex gap-3 text-on-surface/70 text-sm">
                                <x-icons.check class="w-5 h-5 text-emerald-400 shrink-0" />
                                One-time Development Cost
                            </li>
                            <li class="flex gap-3 text-on-surface/70 text-sm">
                                <x-icons.check class="w-5 h-5 text-emerald-400 shrink-0" />
                                No Per-User Monthly Fees
                            </li>
                            <li class="flex gap-3 text-on-surface/70 text-sm">
                                <x-icons.check class="w-5 h-5 text-emerald-400 shrink-0" />
                                Full Data Ownership
                            </li>
                            <li class="flex gap-3 text-on-surface/70 text-sm">
                                <x-icons.check class="w-5 h-5 text-emerald-400 shrink-0" />
                                Infinite Customization
                            </li>
                        </ul>
                        <div class="pt-6 border-t border-outline-variant/10">
                             <a href="{{ route('contact') }}">
                                <x-form.primary-button type="button" class="w-full justify-center py-4 rounded-2xl bg-emerald-600 hover:bg-emerald-700 border-emerald-600">
                                    <span>Build My CRM</span>
                                    <x-icons.go class="w-4 h-4" />
                                </x-form.primary-button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Related Projects --}}
    <section class="py-24 border-t border-outline-variant/20 bg-surface-container/30">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">Case Studies</h2>
                    <p class="text-on-surface/60">How our custom systems are helping businesses manage growth.</p>
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
                        <p class="text-on-surface/60 text-sm">Internal CRM for managing employee check-ins and performance.</p>
                    </div>
                </a>
                <a href="{{ route('portfolio.promofusion360') }}" class="group bg-surface-container rounded-3xl overflow-hidden border border-outline-variant/20 hover:border-primary/30 transition-all">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('assets/images/promofusion360.png') }}" alt="PromoFusion360" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-primary transition-colors">PromoFusion360 Portal</h3>
                        <p class="text-on-surface/60 text-sm">User and admin panels for tracking referrals and sales earnings.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- Footer Contact --}}
    @include('sections.contact')
@endsection
