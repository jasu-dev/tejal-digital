@extends('layouts.app')

@section('head')
    <title>Laravel Web App Development Services | Custom & Scalable Solutions</title>
    <meta name="description"
        content="Expert Laravel web development services to build secure, scalable, and high-performance applications tailored to your business needs.">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="keywords"
        content="Laravel Development, Custom Laravel Web Apps, Laravel Specialist, Scalable Web Applications, Laravel PHP Framework, Secure Web Solutions">

    <!-- Open Graph -->
    <meta property="og:title" content="Laravel Web App Development | Tejal Digital">
    <meta property="og:description"
        content="High-performance, secure, and scalable Laravel applications built by industry experts.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/images/og-image.png') }}">
@endsection

@section('content')
    {{-- Service Hero --}}
    <section class="relative py-24 overflow-hidden border-b border-outline-variant/20">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-primary/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-secondary/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
            <nav class="flex mb-8" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-sm text-on-surface/60">
                    <li><a href="{{ route('home') }}" class="hover:text-primary transition-colors">Home</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li><a href="{{ route('services') }}" class="hover:text-primary transition-colors">Services</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li class="text-on-surface font-medium">Laravel Development</li>
                </ol>
            </nav>

            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right" data-aos-duration="1000">
                    <span class="inline-block px-4 py-1.5 mb-6 text-[10px] font-bold uppercase tracking-widest text-primary bg-primary/10 rounded-full border border-primary/20">
                        Expert PHP Development
                    </span>
                    <h1 class="text-4xl lg:text-6xl font-black text-white leading-tight mb-6">
                        Laravel Web App <br>
                        <span class="text-gradient">Development</span>
                    </h1>
                    <p class="text-xl text-on-surface/60 leading-relaxed mb-8">
                        Build powerful, secure, and future-proof web applications with the world's most popular PHP framework. We deliver custom solutions that scale with your business.
                    </p>
                    <div class="flex flex-wrap gap-4">
                         <a href="{{ route('contact') }}">
                            <x-form.primary-button type="button" class="px-8 py-4 rounded-2xl">
                                <span>Start Your Project</span>
                                <x-icons.go class="w-4 h-4" />
                            </x-form.primary-button>
                        </a>
                    </div>
                </div>
                <div class="relative" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="aspect-square max-w-md mx-auto bg-surface-container rounded-[40px] border border-outline-variant/20 p-12 flex items-center justify-center relative overflow-hidden group">
                        <div class="absolute inset-0 bg-gradient-to-br from-primary/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <x-icons.laravel class="w-32 h-32 text-primary relative z-10" />
                        
                        {{-- Floating Tags --}}
                        <div class="absolute top-10 right-10 p-3 bg-surface rounded-xl border border-outline-variant/20 shadow-xl animate-bounce" style="animation-duration: 3s;">
                            <span class="text-xs font-bold text-primary">Scalable</span>
                        </div>
                        <div class="absolute bottom-20 left-10 p-3 bg-surface rounded-xl border border-outline-variant/20 shadow-xl animate-bounce" style="animation-duration: 4s;">
                            <span class="text-xs font-bold text-secondary">Secure</span>
                        </div>
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
                    {{-- Why Laravel? --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-6 flex items-center gap-4">
                            <span class="w-8 h-1 bg-primary rounded-full"></span>
                            Why Choose Laravel?
                        </h2>
                        <div class="prose prose-invert max-w-none text-on-surface/70 leading-relaxed space-y-4">
                            <p>
                                Laravel is the premier PHP framework for building modern web applications. Its elegant syntax, robust security features, and extensive ecosystem make it the ideal choice for businesses looking to build high-quality digital products.
                            </p>
                            <p>
                                At Tejal Digital, we leverage the full potential of Laravel to create applications that are not just functional, but also maintainable and scalable. From simple APIs to complex enterprise systems, our Laravel expertise ensures your project is built on a solid foundation.
                            </p>
                        </div>
                    </div>

                    {{-- Our Laravel Services --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-8">What We Offer</h2>
                        <div class="grid md:grid-cols-2 gap-6">
                            @php
                                $subservices = [
                                    ['title' => 'Custom Web Apps', 'desc' => 'Bespoke applications tailored to your specific business logic and workflows.'],
                                    ['title' => 'RESTful API Development', 'desc' => 'High-performance APIs for mobile apps, internal tools, or third-party integrations.'],
                                    ['title' => 'E-commerce Solutions', 'desc' => 'Secure and scalable online stores built with Laravel and custom checkout flows.'],
                                    ['title' => 'Enterprise Portals', 'desc' => 'Internal tools and dashboards for data management and business automation.'],
                                    ['title' => 'Legacy Migration', 'desc' => 'Modernizing old PHP applications by migrating them to the latest Laravel version.'],
                                    ['title' => 'Laravel Performance Tuning', 'desc' => 'Optimizing queries, caching, and infrastructure for maximum speed.'],
                                ];
                            @endphp
                            @foreach ($subservices as $s)
                                <div class="p-6 bg-surface-container rounded-2xl border border-outline-variant/10 hover:border-primary/30 transition-all group">
                                    <h4 class="text-lg font-bold text-white mb-2 group-hover:text-primary transition-colors">{{ $s['title'] }}</h4>
                                    <p class="text-on-surface/60 text-sm leading-relaxed">{{ $s['desc'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Technical Expertise --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-6">Technical Expertise</h2>
                        <div class="prose prose-invert max-w-none text-on-surface/70 leading-relaxed">
                            <p>
                                Our Laravel development process follows industry best practices, including:
                            </p>
                            <ul class="list-disc pl-5 space-y-2">
                                <li><strong>MVC Architecture:</strong> Clean separation of logic, data, and presentation.</li>
                                <li><strong>Eloquent ORM:</strong> Efficient and expressive database management.</li>
                                <li><strong>Blade Templating:</strong> Fast and modular UI components.</li>
                                <li><strong>Queue & Jobs:</strong> Handling heavy tasks in the background for a smooth UX.</li>
                                <li><strong>Automated Testing:</strong> Ensuring stability with PHPUnit and Laravel Dusk.</li>
                                <li><strong>Security First:</strong> Protection against XSS, CSRF, and SQL injection out of the box.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Right Side: Meta Info & CTA --}}
                <div class="space-y-8">
                    <div class="p-8 bg-surface-container rounded-3xl border border-outline-variant/20 sticky top-24">
                        <h3 class="text-xl font-bold text-white mb-6">Key Benefits</h3>
                        <ul class="space-y-4 mb-8">
                            <li class="flex gap-3 text-on-surface/70 text-sm">
                                <x-icons.check class="w-5 h-5 text-primary shrink-0" />
                                Rapid Development Cycles
                            </li>
                            <li class="flex gap-3 text-on-surface/70 text-sm">
                                <x-icons.check class="w-5 h-5 text-primary shrink-0" />
                                Scalable Infrastructure
                            </li>
                            <li class="flex gap-3 text-on-surface/70 text-sm">
                                <x-icons.check class="w-5 h-5 text-primary shrink-0" />
                                Robust Security Standards
                            </li>
                            <li class="flex gap-3 text-on-surface/70 text-sm">
                                <x-icons.check class="w-5 h-5 text-primary shrink-0" />
                                Large Community Support
                            </li>
                        </ul>
                        <div class="pt-6 border-t border-outline-variant/10">
                             <a href="{{ route('contact') }}">
                                <x-form.primary-button type="button" class="w-full justify-center py-4 rounded-2xl">
                                    <span>Get Free Quote</span>
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
                    <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">Related Projects</h2>
                    <p class="text-on-surface/60">See how we've used Laravel to deliver real-world value.</p>
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
