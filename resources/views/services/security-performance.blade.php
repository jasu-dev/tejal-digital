@extends('layouts.app')

@section('head')
    <title>Security & Performance Optimization | Harden & Speed Up Your Site</title>
    <meta name="description"
        content="Enhance your website's security and speed. We offer specialized optimization services to harden your applications against attacks and achieve perfect Lighthouse scores.">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="keywords"
        content="Web Performance Optimization, Website Security Hardening, Speed Up WordPress, Laravel Security Audit, Core Web Vitals Optimization, PageSpeed Insights Expert">

    <!-- Open Graph -->
    <meta property="og:title" content="Security & Performance Optimization | Tejal Digital">
    <meta property="og:description"
        content="Protect your digital assets and deliver instant experiences with our professional optimization services.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/images/og-image.png') }}">
@endsection

@section('content')
    {{-- Service Hero --}}
    <section class="relative py-24 overflow-hidden border-b border-outline-variant/20">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-red-500/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-orange-500/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
            <nav class="flex mb-8" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-sm text-on-surface/60">
                    <li><a href="{{ route('home') }}" class="hover:text-primary transition-colors">Home</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li><a href="{{ route('services') }}" class="hover:text-primary transition-colors">Services</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li class="text-on-surface font-medium">Security & Performance</li>
                </ol>
            </nav>

            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right" data-aos-duration="1000">
                    <span class="inline-block px-4 py-1.5 mb-6 text-[10px] font-bold uppercase tracking-widest text-red-400 bg-red-500/10 rounded-full border border-red-500/20">
                        Reliable & Fast
                    </span>
                    <h1 class="text-4xl lg:text-6xl font-black text-white leading-tight mb-6">
                        Security & <br>
                        <span class="text-gradient from-red-400 to-orange-500">Performance</span>
                    </h1>
                    <p class="text-xl text-on-surface/60 leading-relaxed mb-8">
                        A slow or insecure website is a liability. We harden your applications against cyber threats and optimize every line of code to ensure your users get the fastest experience possible.
                    </p>
                    <div class="flex flex-wrap gap-4">
                         <a href="{{ route('contact') }}">
                            <x-form.primary-button type="button" class="px-8 py-4 rounded-2xl bg-red-600 hover:bg-red-700 border-red-600">
                                <span>Harden My Site</span>
                                <x-icons.go class="w-4 h-4" />
                            </x-form.primary-button>
                        </a>
                    </div>
                </div>
                <div class="relative" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="aspect-square max-w-md mx-auto bg-surface-container rounded-[40px] border border-outline-variant/20 p-12 flex items-center justify-center relative overflow-hidden group">
                        <div class="absolute inset-0 bg-gradient-to-br from-red-500/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <x-icons.security class="w-32 h-32 text-red-400 relative z-10" />
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
                    {{-- The Dual Goal --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-6 flex items-center gap-4">
                            <span class="w-8 h-1 bg-red-500 rounded-full"></span>
                            Protecting Your Reputation
                        </h2>
                        <div class="prose prose-invert max-w-none text-on-surface/70 leading-relaxed space-y-4">
                            <p>
                                Performance and security are two sides of the same coin. A fast site improves user retention and SEO, while a secure site protects your brand's integrity and user data. At Tejal Digital, we don't treat these as afterthoughts—they are central to our development philosophy.
                            </p>
                            <p>
                                Our optimization services go beyond basic caching. We dive deep into server configurations, database queries, and frontend assets to shave off every possible millisecond. Simultaneously, we implement rigorous security protocols to safeguard your application from common vulnerabilities and targeted attacks.
                            </p>
                        </div>
                    </div>

                    {{-- Optimization Services --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-8">What We Optimize</h2>
                        <div class="grid md:grid-cols-2 gap-6">
                            @php
                                $services = [
                                    ['title' => 'Core Web Vitals Tuning', 'desc' => 'Optimizing LCP, FID, and CLS scores for better search engine rankings.'],
                                    ['title' => 'Server Hardening', 'desc' => 'Securing Linux servers, firewalls, and SSH access to prevent unauthorized entry.'],
                                    ['title' => 'Database Query Optimization', 'desc' => 'Identifying and fixing slow SQL queries that bottleneck your application.'],
                                    ['title' => 'WordPress Security Cleanup', 'desc' => 'Removing malware and implementing hardening measures for WP sites.'],
                                    ['title' => 'Code Auditing', 'desc' => 'Reviewing application code for security flaws like SQL injection and XSS.'],
                                    ['title' => 'CDN & Asset Optimization', 'desc' => 'Implementing Cloudflare or similar CDNs to serve assets globally with low latency.'],
                                ];
                            @endphp
                            @foreach ($services as $s)
                                <div class="p-6 bg-surface-container rounded-2xl border border-outline-variant/10 hover:border-red-500/30 transition-all group">
                                    <h4 class="text-lg font-bold text-white mb-2 group-hover:text-red-400 transition-colors">{{ $s['title'] }}</h4>
                                    <p class="text-on-surface/60 text-sm leading-relaxed">{{ $s['desc'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Technical Approach --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-6">Our Performance Stack</h2>
                        <div class="prose prose-invert max-w-none text-on-surface/70 leading-relaxed">
                            <p>
                                We use a combination of tools and techniques to achieve top-tier results:
                            </p>
                            <ul class="list-disc pl-5 space-y-2">
                                <li><strong>Asset Minification:</strong> Reducing JS/CSS sizes for faster initial load.</li>
                                <li><strong>Redis & Memcached:</strong> Implementing robust object caching for high-traffic apps.</li>
                                <li><strong>OPcache Tuning:</strong> Optimizing PHP execution for server-side speed.</li>
                                <li><strong>WebP Image Conversion:</strong> Serving high-quality images at a fraction of the size.</li>
                                <li><strong>SSL/TLS Configuration:</strong> Ensuring secure and fast encrypted connections.</li>
                                <li><strong>Security Headers:</strong> Implementing HSTS, CSP, and X-Frame-Options.</li>
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
                                <x-icons.check class="w-5 h-5 text-red-400 shrink-0" />
                                Higher Google Search Rankings
                            </li>
                            <li class="flex gap-3 text-on-surface/70 text-sm">
                                <x-icons.check class="w-5 h-5 text-red-400 shrink-0" />
                                Reduced Bounce Rates
                            </li>
                            <li class="flex gap-3 text-on-surface/70 text-sm">
                                <x-icons.check class="w-5 h-5 text-red-400 shrink-0" />
                                Protection Against Data Leaks
                            </li>
                            <li class="flex gap-3 text-on-surface/70 text-sm">
                                <x-icons.check class="w-5 h-5 text-red-400 shrink-0" />
                                Peace of Mind & Stability
                            </li>
                        </ul>
                        <div class="pt-6 border-t border-outline-variant/10">
                             <a href="{{ route('contact') }}">
                                <x-form.primary-button type="button" class="w-full justify-center py-4 rounded-2xl bg-red-600 hover:bg-red-700 border-red-600">
                                    <span>Audit My Application</span>
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
                    <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">Optimization Results</h2>
                    <p class="text-on-surface/60">Real-world examples of performance and security improvements.</p>
                </div>
                <a href="{{ route('portfolio') }}" class="text-primary font-bold hover:underline">View All Projects</a>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                 <a href="{{ route('portfolio.tech-nukti') }}" class="group bg-surface-container rounded-3xl overflow-hidden border border-outline-variant/20 hover:border-primary/30 transition-all">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('assets/images/technukti.png') }}" alt="Tech Nukti" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-primary transition-colors">Tech Nukti – 100/100 Scores</h3>
                        <p class="text-on-surface/60 text-sm">Custom WP theme achieving perfect PageSpeed scores without caching plugins.</p>
                    </div>
                </a>
                <a href="{{ route('portfolio.tech-upkar') }}" class="group bg-surface-container rounded-3xl overflow-hidden border border-outline-variant/20 hover:border-primary/30 transition-all">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('assets/images/techupkar.png') }}" alt="Tech Upkar" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-primary transition-colors">TechUpkar Performance</h3>
                        <p class="text-on-surface/60 text-sm">Optimized blog architecture for maximum speed and core web vitals success.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- Footer Contact --}}
    @include('sections.contact')
@endsection
