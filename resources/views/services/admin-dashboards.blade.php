@extends('layouts.app')

@section('head')
    <title>Custom Admin Dashboards | Manage Your Business Data with Precision</title>
    <meta name="description"
        content="Get a custom-built admin dashboard to manage your application data, track performance, and automate business tasks. We build secure, interactive dashboards tailored to your needs.">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="keywords"
        content="Custom Admin Dashboard, Business Intelligence Dashboard, Laravel Admin Panel, Data Management System, SaaS Dashboard Development, Real-time Analytics Dashboard">

    <!-- Open Graph -->
    <meta property="og:title" content="Custom Admin Dashboards | Tejal Digital">
    <meta property="og:description"
        content="Take control of your data with a bespoke admin dashboard designed for efficiency and clarity.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/images/og-image.png') }}">
@endsection

@section('content')
    {{-- Service Hero --}}
    <section class="relative py-24 overflow-hidden border-b border-outline-variant/20">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-amber-500/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-orange-500/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
            <nav class="flex mb-8" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-sm text-on-surface/60">
                    <li><a href="{{ route('home') }}" class="hover:text-primary transition-colors">Home</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li><a href="{{ route('services') }}" class="hover:text-primary transition-colors">Services</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li class="text-on-surface font-medium">Admin Dashboards</li>
                </ol>
            </nav>

            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right" data-aos-duration="1000">
                    <span class="inline-block px-4 py-1.5 mb-6 text-[10px] font-bold uppercase tracking-widest text-amber-400 bg-amber-500/10 rounded-full border border-amber-500/20">
                        Operational Excellence
                    </span>
                    <h1 class="text-4xl lg:text-6xl font-black text-white leading-tight mb-6">
                        Custom Admin <br>
                        <span class="text-gradient from-amber-400 to-orange-500">Dashboards</span>
                    </h1>
                    <p class="text-xl text-on-surface/60 leading-relaxed mb-8">
                        Stop fighting with complex databases. We build intuitive, secure, and fast-acting admin panels that give you full control over your application's data and business metrics.
                    </p>
                    <div class="flex flex-wrap gap-4">
                         <a href="{{ route('contact') }}">
                            <x-form.primary-button type="button" class="px-8 py-4 rounded-2xl bg-amber-600 hover:bg-amber-700 border-amber-600">
                                <span>Get a Dashboard Quote</span>
                                <x-icons.go class="w-4 h-4" />
                            </x-form.primary-button>
                        </a>
                    </div>
                </div>
                <div class="relative" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="aspect-square max-w-md mx-auto bg-surface-container rounded-[40px] border border-outline-variant/20 p-12 flex items-center justify-center relative overflow-hidden group">
                        <div class="absolute inset-0 bg-gradient-to-br from-amber-500/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <x-icons.dashboard class="w-32 h-32 text-amber-400 relative z-10" />
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
                    {{-- The Importance of UX in Admin Panels --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-6 flex items-center gap-4">
                            <span class="w-8 h-1 bg-amber-500 rounded-full"></span>
                            Data Management, Simplified
                        </h2>
                        <div class="prose prose-invert max-w-none text-on-surface/70 leading-relaxed space-y-4">
                            <p>
                                An admin dashboard is the cockpit of your digital business. If it's poorly designed, your team's productivity suffers. We believe that internal tools deserve the same level of UI/UX attention as customer-facing websites.
                            </p>
                            <p>
                                Our custom dashboards are built to handle large datasets while remaining responsive and easy to navigate. Whether you need to manage users, process orders, or track real-time analytics, our solutions are tailored to your specific administrative workflows.
                            </p>
                        </div>
                    </div>

                    {{-- Dashboard Features --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-8">Dashboard Capabilities</h2>
                        <div class="grid md:grid-cols-2 gap-6">
                            @php
                                $features = [
                                    ['title' => 'Role-Based Access Control', 'desc' => 'Define granular permissions for different team members to ensure data security.'],
                                    ['title' => 'Real-time Data Sync', 'desc' => 'Monitor live application activity and metrics without refreshing the page.'],
                                    ['title' => 'Interactive Analytics', 'desc' => 'Turn raw data into visual insights with custom charts, graphs, and heatmaps.'],
                                    ['title' => 'Bulk Content Management', 'desc' => 'Efficiently update, delete, or export large amounts of data with ease.'],
                                    ['title' => 'Automated Reports', 'desc' => 'Schedule and receive PDF or CSV reports directly to your inbox or cloud storage.'],
                                    ['title' => 'API Activity Monitoring', 'desc' => 'Track the health and usage of your external and internal API integrations.'],
                                ];
                            @endphp
                            @foreach ($features as $f)
                                <div class="p-6 bg-surface-container rounded-2xl border border-outline-variant/10 hover:border-amber-500/30 transition-all group">
                                    <h4 class="text-lg font-bold text-white mb-2 group-hover:text-amber-400 transition-colors">{{ $f['title'] }}</h4>
                                    <p class="text-on-surface/60 text-sm leading-relaxed">{{ $f['desc'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Our Tech Stack for Panels --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-6">Built for Speed & Security</h2>
                        <div class="prose prose-invert max-w-none text-on-surface/70 leading-relaxed">
                            <p>
                                We use modern frameworks to ensure your dashboard is future-proof:
                            </p>
                            <ul class="list-disc pl-5 space-y-2">
                                <li><strong>Laravel & MySQL:</strong> For a robust backend and reliable data integrity.</li>
                                <li><strong>Alpine.js & Livewire:</strong> To build dynamic, interactive interfaces without the overhead of heavy SPA frameworks.</li>
                                <li><strong>Tailwind CSS:</strong> For highly responsive and professional-looking UI components.</li>
                                <li><strong>Chart.js / ApexCharts:</strong> For beautiful and interactive data visualizations.</li>
                                <li><strong>Redis Caching:</strong> To ensure that even the largest reports load instantly.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Right Side: Meta Info & CTA --}}
                <div class="space-y-8">
                    <div class="p-8 bg-surface-container rounded-3xl border border-outline-variant/20 sticky top-24">
                        <h3 class="text-xl font-bold text-white mb-6">Panel Benefits</h3>
                        <ul class="space-y-4 mb-8">
                            <li class="flex gap-3 text-on-surface/70 text-sm">
                                <x-icons.check class="w-5 h-5 text-amber-400 shrink-0" />
                                Intuitive Interface Design
                            </li>
                            <li class="flex gap-3 text-on-surface/70 text-sm">
                                <x-icons.check class="w-5 h-5 text-amber-400 shrink-0" />
                                Advanced Search & Filters
                            </li>
                            <li class="flex gap-3 text-on-surface/70 text-sm">
                                <x-icons.check class="w-5 h-5 text-amber-400 shrink-0" />
                                Secure Single Sign-On (SSO)
                            </li>
                            <li class="flex gap-3 text-on-surface/70 text-sm">
                                <x-icons.check class="w-5 h-5 text-amber-400 shrink-0" />
                                Mobile-Friendly Management
                            </li>
                        </ul>
                        <div class="pt-6 border-t border-outline-variant/10">
                             <a href="{{ route('contact') }}">
                                <x-form.primary-button type="button" class="w-full justify-center py-4 rounded-2xl bg-amber-600 hover:bg-amber-700 border-amber-600">
                                    <span>Build My Dashboard</span>
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
                    <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">Dashboard Case Studies</h2>
                    <p class="text-on-surface/60">Take a look at the admin systems we've built for our clients.</p>
                </div>
                <a href="{{ route('portfolio') }}" class="text-primary font-bold hover:underline">View All Projects</a>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                 <a href="{{ route('portfolio.attendance-manager') }}" class="group bg-surface-container rounded-3xl overflow-hidden border border-outline-variant/20 hover:border-primary/30 transition-all">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('assets/images/attendance.png') }}" alt="Attendance Manager" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-primary transition-colors">Attendance Manager Admin</h3>
                        <p class="text-on-surface/60 text-sm">Comprehensive dashboard for managing employee records and geo-location logs.</p>
                    </div>
                </a>
                <a href="{{ route('portfolio.gujjutak-news') }}" class="group bg-surface-container rounded-3xl overflow-hidden border border-outline-variant/20 hover:border-primary/30 transition-all">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('assets/images/gujjutak.png') }}" alt="Gujjutak News" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-primary transition-colors">Gujjutak Editorial Panel</h3>
                        <p class="text-on-surface/60 text-sm">High-speed news publishing dashboard with SEO and ad controls.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- Footer Contact --}}
    @include('sections.contact')
@endsection
