@extends('layouts.app')

@section('head')
    <title>Web Portals & Custom Software Development | Tailored Business Solutions</title>
    <meta name="description"
        content="Custom software development and web portals designed to automate workflows, manage operations, and drive business growth. Expert solutions from Tejal Digital.">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="keywords"
        content="Custom Software Development, Web Portal Development, Business Automation, Client Portals, B2B Web Applications, Software Engineering Services">

    <!-- Open Graph -->
    <meta property="og:title" content="Web Portals & Custom Software | Tejal Digital">
    <meta property="og:description"
        content="Automate your business with bespoke web portals and custom software solutions tailored to your needs.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/images/og-image.png') }}">
@endsection

@section('content')
    {{-- Service Hero --}}
    <section class="relative py-24 overflow-hidden border-b border-outline-variant/20">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-sky-500/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
            <nav class="flex mb-8" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-sm text-on-surface/60">
                    <li><a href="{{ route('home') }}" class="hover:text-primary transition-colors">Home</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li><a href="{{ route('services') }}" class="hover:text-primary transition-colors">Services</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li class="text-on-surface font-medium">Custom Software</li>
                </ol>
            </nav>

            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right" data-aos-duration="1000">
                    <span class="inline-block px-4 py-1.5 mb-6 text-[10px] font-bold uppercase tracking-widest text-blue-400 bg-blue-500/10 rounded-full border border-blue-500/20">
                        Bespoke Solutions
                    </span>
                    <h1 class="text-4xl lg:text-6xl font-black text-white leading-tight mb-6">
                        Web Portals & <br>
                        <span class="text-gradient from-blue-400 to-sky-500">Custom Software</span>
                    </h1>
                    <p class="text-xl text-on-surface/60 leading-relaxed mb-8">
                        We transform complex business challenges into intuitive digital tools. Our custom software and portals help you automate tasks, manage data, and connect with stakeholders seamlessly.
                    </p>
                    <div class="flex flex-wrap gap-4">
                         <a href="{{ route('contact') }}">
                            <x-form.primary-button type="button" class="px-8 py-4 rounded-2xl bg-blue-600 hover:bg-blue-700 border-blue-600">
                                <span>Get a Consultation</span>
                                <x-icons.go class="w-4 h-4" />
                            </x-form.primary-button>
                        </a>
                    </div>
                </div>
                <div class="relative" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="aspect-square max-w-md mx-auto bg-surface-container rounded-[40px] border border-outline-variant/20 p-12 flex items-center justify-center relative overflow-hidden group">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <x-icons.window class="w-32 h-32 text-blue-400 relative z-10" />
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
                    {{-- The Value --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-6 flex items-center gap-4">
                            <span class="w-8 h-1 bg-blue-500 rounded-full"></span>
                            Powering Business Operations
                        </h2>
                        <div class="prose prose-invert max-w-none text-on-surface/70 leading-relaxed space-y-4">
                            <p>
                                Off-the-shelf software often falls short of unique business requirements. Custom software development bridges this gap by providing solutions that are built specifically around your workflows, goals, and user needs.
                            </p>
                            <p>
                                Whether you need a client-facing portal for service management or an internal tool to track complex inventory, our team designs and develops robust web-based applications that improve efficiency and reduce operational costs.
                            </p>
                        </div>
                    </div>

                    {{-- Portal Solutions --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-8">What We Build</h2>
                        <div class="grid md:grid-cols-2 gap-6">
                            @php
                                $portals = [
                                    ['title' => 'B2B Client Portals', 'desc' => 'Secure areas where your clients can manage their accounts, view invoices, and track projects.'],
                                    ['title' => 'Internal Operations Tools', 'desc' => 'Dashboards and management systems for employee tracking, leave management, and task allocation.'],
                                    ['title' => 'Inventory & Asset Management', 'desc' => 'Real-time tracking of resources, stock levels, and equipment across multiple locations.'],
                                    ['title' => 'Community & Membership Sites', 'desc' => 'Platforms for member interaction, content delivery, and subscription management.'],
                                    ['title' => 'Data Visualization Dashboards', 'desc' => 'Turning raw data into actionable insights through interactive charts and reports.'],
                                    ['title' => 'SaaS MVP Development', 'desc' => 'Rapid prototyping and development of Minimum Viable Products for tech startups.'],
                                ];
                            @endphp
                            @foreach ($portals as $p)
                                <div class="p-6 bg-surface-container rounded-2xl border border-outline-variant/10 hover:border-blue-500/30 transition-all group">
                                    <h4 class="text-lg font-bold text-white mb-2 group-hover:text-blue-400 transition-colors">{{ $p['title'] }}</h4>
                                    <p class="text-on-surface/60 text-sm leading-relaxed">{{ $p['desc'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Approach --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-6">Our Development Approach</h2>
                        <div class="prose prose-invert max-w-none text-on-surface/70 leading-relaxed">
                            <p>
                                We follow a structured methodology to ensure the success of your custom software project:
                            </p>
                            <ul class="list-disc pl-5 space-y-2">
                                <li><strong>Requirement Discovery:</strong> Understanding your pain points and business objectives in detail.</li>
                                <li><strong>Architectural Design:</strong> Planning for scalability, security, and integration with existing systems.</li>
                                <li><strong>Agile Development:</strong> Iterative builds with regular feedback loops to ensure alignment.</li>
                                <li><strong>Security Auditing:</strong> Implementing role-based access control and data encryption.</li>
                                <li><strong>Smooth Deployment:</strong> Managing the transition to the new system with minimal downtime.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Right Side: Meta Info & CTA --}}
                <div class="space-y-8">
                    <div class="p-8 bg-surface-container rounded-3xl border border-outline-variant/20 sticky top-24">
                        <h3 class="text-xl font-bold text-white mb-6">Service Highlights</h3>
                        <ul class="space-y-4 mb-8">
                            <li class="flex gap-3 text-on-surface/70 text-sm">
                                <x-icons.check class="w-5 h-5 text-blue-400 shrink-0" />
                                100% Tailored Functionality
                            </li>
                            <li class="flex gap-3 text-on-surface/70 text-sm">
                                <x-icons.check class="w-5 h-5 text-blue-400 shrink-0" />
                                Secure User Authentication
                            </li>
                            <li class="flex gap-3 text-on-surface/70 text-sm">
                                <x-icons.check class="w-5 h-5 text-blue-400 shrink-0" />
                                Scalable Cloud Infrastructure
                            </li>
                            <li class="flex gap-3 text-on-surface/70 text-sm">
                                <x-icons.check class="w-5 h-5 text-blue-400 shrink-0" />
                                Third-Party API Integrations
                            </li>
                        </ul>
                        <div class="pt-6 border-t border-outline-variant/10">
                             <a href="{{ route('contact') }}">
                                <x-form.primary-button type="button" class="w-full justify-center py-4 rounded-2xl bg-blue-600 hover:bg-blue-700 border-blue-600">
                                    <span>Discuss Your Idea</span>
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
                    <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">Related Work</h2>
                    <p class="text-on-surface/60">Explore portals and custom software we've delivered recently.</p>
                </div>
                <a href="{{ route('portfolio') }}" class="text-primary font-bold hover:underline">View All Projects</a>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                 <a href="{{ route('portfolio.jixicloud') }}" class="group bg-surface-container rounded-3xl overflow-hidden border border-outline-variant/20 hover:border-primary/30 transition-all">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('assets/images/jixicloud.png') }}" alt="Jixicloud" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-primary transition-colors">Jixicloud Hosting Portal</h3>
                        <p class="text-on-surface/60 text-sm">Custom CMS with real-time domain rate integrations.</p>
                    </div>
                </a>
                <a href="{{ route('portfolio.kifayat-card') }}" class="group bg-surface-container rounded-3xl overflow-hidden border border-outline-variant/20 hover:border-primary/30 transition-all">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('assets/images/kifayatcard.png') }}" alt="Kifayat Card" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-primary transition-colors">Kifayat Card System</h3>
                        <p class="text-on-surface/60 text-sm">Digital loyalty point software for merchants and customers.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- Footer Contact --}}
    @include('sections.contact')
@endsection
