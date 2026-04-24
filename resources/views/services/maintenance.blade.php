@extends('layouts.app')

@section('head')
    <title>Website Maintenance & Support | Keep Your Digital Assets Healthy</title>
    <meta name="description"
        content="Professional website maintenance services to keep your platform secure, updated, and performing optimally. We offer monthly support plans for Laravel, WordPress, and custom apps.">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="keywords"
        content="Website Maintenance Services, Monthly Support Plans, Laravel Maintenance, WordPress Support, Site Monitoring, Managed Web Services">

    <!-- Open Graph -->
    <meta property="og:title" content="Website Maintenance & Support | Tejal Digital">
    <meta property="og:description"
        content="Focus on your business while we take care of your website. Professional maintenance for long-term stability and growth.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/images/og-image.png') }}">
@endsection

@section('content')
    {{-- Service Hero --}}
    <section class="relative py-24 overflow-hidden border-b border-outline-variant/20">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-gray-500/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-slate-500/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
            <nav class="flex mb-8" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-sm text-on-surface/60">
                    <li><a href="{{ route('home') }}" class="hover:text-primary transition-colors">Home</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li><a href="{{ route('services') }}" class="hover:text-primary transition-colors">Services</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li class="text-on-surface font-medium">Maintenance & Support</li>
                </ol>
            </nav>

            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right" data-aos-duration="1000">
                    <span class="inline-block px-4 py-1.5 mb-6 text-[10px] font-bold uppercase tracking-widest text-on-surface/60 bg-surface-container rounded-full border border-outline-variant/20">
                        Long-term Support
                    </span>
                    <h1 class="text-4xl lg:text-6xl font-black text-white leading-tight mb-6">
                        Website <br>
                        <span class="text-gradient from-on-surface/80 to-on-surface">Maintenance</span>
                    </h1>
                    <p class="text-xl text-on-surface/60 leading-relaxed mb-8">
                        Your website is a living asset that requires constant care. Our maintenance plans ensure your application remains secure, up-to-date, and always available for your customers.
                    </p>
                    <div class="flex flex-wrap gap-4">
                         <a href="{{ route('contact') }}">
                            <x-form.primary-button type="button" class="px-8 py-4 rounded-2xl bg-surface-container hover:bg-surface-container-high border-outline-variant/30 text-white">
                                <span>View Support Plans</span>
                                <x-icons.go class="w-4 h-4" />
                            </x-form.primary-button>
                        </a>
                    </div>
                </div>
                <div class="relative" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="aspect-square max-w-md mx-auto bg-surface-container rounded-[40px] border border-outline-variant/20 p-12 flex items-center justify-center relative overflow-hidden group">
                        <div class="absolute inset-0 bg-gradient-to-br from-on-surface/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <x-icons.tools class="w-32 h-32 text-on-surface/60 relative z-10" />
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
                    {{-- The Maintenance Mindset --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-6 flex items-center gap-4">
                            <span class="w-8 h-1 bg-on-surface/40 rounded-full"></span>
                            Protecting Your Investment
                        </h2>
                        <div class="prose prose-invert max-w-none text-on-surface/70 leading-relaxed space-y-4">
                            <p>
                                Launching a website is just the beginning. Without regular updates, security patches, and performance monitoring, even the best-built applications can become slow, vulnerable, or broken over time.
                            </p>
                            <p>
                                Our maintenance services are designed to give business owners peace of mind. We take care of the technical heavy lifting—from server management and security audits to content updates and bug fixes—allowing you to focus entirely on running your business.
                            </p>
                        </div>
                    </div>

                    {{-- Maintenance Services --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-8">What's Included</h2>
                        <div class="grid md:grid-cols-2 gap-6">
                            @php
                                $services = [
                                    ['title' => 'Security Patches & Updates', 'desc' => 'Regularly updating Laravel, WordPress, and server software to the latest secure versions.'],
                                    ['title' => 'Daily Off-site Backups', 'desc' => 'Ensuring your data is safe and recoverable in case of any server-side issues.'],
                                    ['title' => 'Performance Monitoring', 'desc' => '24/7 monitoring of site speed and uptime to ensure a consistent user experience.'],
                                    ['title' => 'Malware Scanning', 'desc' => 'Proactive scanning to detect and remove any malicious code before it causes harm.'],
                                    ['title' => 'Technical Support', 'desc' => 'A dedicated line for any technical questions or quick changes you need on your site.'],
                                    ['title' => 'Bug Fixes & Tweaks', 'desc' => 'Resolving any front-end or back-end issues that arise during day-to-day operations.'],
                                ];
                            @endphp
                            @foreach ($services as $s)
                                <div class="p-6 bg-surface-container rounded-2xl border border-outline-variant/10 hover:border-on-surface/30 transition-all group">
                                    <h4 class="text-lg font-bold text-white mb-2 group-hover:text-on-surface transition-colors">{{ $s['title'] }}</h4>
                                    <p class="text-on-surface/60 text-sm leading-relaxed">{{ $s['desc'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Why Support Matters --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-6">Long-Term Growth</h2>
                        <div class="prose prose-invert max-w-none text-on-surface/70 leading-relaxed">
                            <p>
                                Maintenance is not just about fixing things when they break; it's about continuous improvement. Our support plans include:
                            </p>
                            <ul class="list-disc pl-5 space-y-2">
                                <li><strong>Monthly Health Reports:</strong> Insights into your site's traffic, performance, and security status.</li>
                                <li><strong>Content Updates:</strong> Assistance with adding new blog posts, products, or updating existing pages.</li>
                                <li><strong>SEO Monitoring:</strong> Tracking your keyword rankings and identifying technical SEO improvements.</li>
                                <li><strong>Consultation:</strong> Strategic advice on how to evolve your digital presence as your business grows.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Right Side: Meta Info & CTA --}}
                <div class="space-y-8">
                    <div class="p-8 bg-surface-container rounded-3xl border border-outline-variant/20 sticky top-24">
                        <h3 class="text-xl font-bold text-white mb-6">Plan Benefits</h3>
                        <ul class="space-y-4 mb-8">
                            <li class="flex gap-3 text-on-surface/70 text-sm">
                                <x-icons.check class="w-5 h-5 text-on-surface/60 shrink-0" />
                                24/7 Uptime Monitoring
                            </li>
                            <li class="flex gap-3 text-on-surface/70 text-sm">
                                <x-icons.check class="w-5 h-5 text-on-surface/60 shrink-0" />
                                Guaranteed Response Times
                            </li>
                            <li class="flex gap-3 text-on-surface/70 text-sm">
                                <x-icons.check class="w-5 h-5 text-on-surface/60 shrink-0" />
                                Disaster Recovery Ready
                            </li>
                            <li class="flex gap-3 text-on-surface/70 text-sm">
                                <x-icons.check class="w-5 h-5 text-on-surface/60 shrink-0" />
                                Priority Developer Access
                            </li>
                        </ul>
                        <div class="pt-6 border-t border-outline-variant/10">
                             <a href="{{ route('contact') }}">
                                <x-form.primary-button type="button" class="w-full justify-center py-4 rounded-2xl bg-surface-container-high border-outline-variant/20 text-white">
                                    <span>Choose Your Plan</span>
                                    <x-icons.go class="w-4 h-4" />
                                </x-form.primary-button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer Contact --}}
    @include('sections.contact')
@endsection
