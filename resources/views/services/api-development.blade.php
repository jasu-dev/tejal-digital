@extends('layouts.app')

@section('head')
    <title>API Development & Integration | Connect Your Digital Ecosystem</title>
    <meta name="description"
        content="Build robust RESTful APIs and integrate third-party services seamlessly. Expert API development for mobile apps, web platforms, and business automation from Tejal Digital.">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="keywords"
        content="API Development Services, RESTful API Integration, Webhook Development, JSON API Laravel, Third-party API Integration, Payment Gateway API">

    <!-- Open Graph -->
    <meta property="og:title" content="API Development & Integration | Tejal Digital">
    <meta property="og:description"
        content="Scale your digital ecosystem with high-performance APIs and seamless third-party integrations.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/images/og-image.png') }}">
@endsection

@section('content')
    {{-- Service Hero --}}
    <section class="relative py-24 overflow-hidden border-b border-outline-variant/20">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-indigo-500/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
            <nav class="flex mb-8" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-sm text-on-surface/60">
                    <li><a href="{{ route('home') }}" class="hover:text-primary transition-colors">Home</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li><a href="{{ route('services') }}" class="hover:text-primary transition-colors">Services</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li class="text-on-surface font-medium">API Development</li>
                </ol>
            </nav>

            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right" data-aos-duration="1000">
                    <span class="inline-block px-4 py-1.5 mb-6 text-[10px] font-bold uppercase tracking-widest text-indigo-400 bg-indigo-500/10 rounded-full border border-indigo-500/20">
                        Seamless Connectivity
                    </span>
                    <h1 class="text-4xl lg:text-6xl font-black text-white leading-tight mb-6">
                        API Development <br>
                        <span class="text-gradient from-indigo-400 to-purple-500">& Integration</span>
                    </h1>
                    <p class="text-xl text-on-surface/60 leading-relaxed mb-8">
                        Connect your software with the world. We build secure, high-performance APIs and integrate 3rd-party services to create a unified and automated digital ecosystem for your business.
                    </p>
                    <div class="flex flex-wrap gap-4">
                         <a href="{{ route('contact') }}">
                            <x-form.primary-button type="button" class="px-8 py-4 rounded-2xl bg-indigo-600 hover:bg-indigo-700 border-indigo-600">
                                <span>Integrate Now</span>
                                <x-icons.go class="w-4 h-4" />
                            </x-form.primary-button>
                        </a>
                    </div>
                </div>
                <div class="relative" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="aspect-square max-w-md mx-auto bg-surface-container rounded-[40px] border border-outline-variant/20 p-12 flex items-center justify-center relative overflow-hidden group">
                        <div class="absolute inset-0 bg-gradient-to-br from-indigo-500/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <x-icons.plugin class="w-32 h-32 text-indigo-400 relative z-10" />
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
                    {{-- The Bridge --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-6 flex items-center gap-4">
                            <span class="w-8 h-1 bg-indigo-500 rounded-full"></span>
                            The Backbone of Modern Apps
                        </h2>
                        <div class="prose prose-invert max-w-none text-on-surface/70 leading-relaxed space-y-4">
                            <p>
                                In today's interconnected world, applications don't live in isolation. APIs (Application Programming Interfaces) are the glue that allows different software systems to talk to each other, share data, and trigger actions.
                            </p>
                            <p>
                                Whether you need to build a custom API to power your mobile application or you need to integrate a third-party service like a payment gateway, shipping provider, or CRM, our team ensures the connection is secure, fast, and reliable.
                            </p>
                        </div>
                    </div>

                    {{-- API Services --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-8">Our API Expertise</h2>
                        <div class="grid md:grid-cols-2 gap-6">
                            @php
                                $services = [
                                    ['title' => 'Custom RESTful APIs', 'desc' => 'Developing JSON-based APIs for web and mobile platforms with robust authentication.'],
                                    ['title' => 'Third-party Integrations', 'desc' => 'Connecting your app with services like Stripe, PayPal, Razorpay, or Twilio.'],
                                    ['title' => 'Webhook Development', 'desc' => 'Real-time event notifications to automate workflows between different systems.'],
                                    ['title' => 'Legacy System API Wrappers', 'desc' => 'Building modern API layers on top of older systems to make them accessible.'],
                                    ['title' => 'Social Media Integration', 'desc' => 'Implementing Facebook, Google, and Twitter APIs for login and social features.'],
                                    ['title' => 'API Documentation', 'desc' => 'Comprehensive documentation using Swagger/OpenAPI for easy developer adoption.'],
                                ];
                            @endphp
                            @foreach ($services as $s)
                                <div class="p-6 bg-surface-container rounded-2xl border border-outline-variant/10 hover:border-indigo-500/30 transition-all group">
                                    <h4 class="text-lg font-bold text-white mb-2 group-hover:text-indigo-400 transition-colors">{{ $s['title'] }}</h4>
                                    <p class="text-on-surface/60 text-sm leading-relaxed">{{ $s['desc'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Technical Focus --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-6">Security & Performance</h2>
                        <div class="prose prose-invert max-w-none text-on-surface/70 leading-relaxed">
                            <p>
                                We prioritize the integrity and speed of every API we build:
                            </p>
                            <ul class="list-disc pl-5 space-y-2">
                                <li><strong>JWT & OAuth2:</strong> Industry-standard authentication for secure access.</li>
                                <li><strong>Rate Limiting:</strong> Protecting your resources from abuse and DDoS attacks.</li>
                                <li><strong>Data Caching:</strong> Using Redis to serve frequent requests with sub-millisecond latency.</li>
                                <li><strong>JSON Optimization:</strong> Keeping payloads small for faster mobile network delivery.</li>
                                <li><strong>Comprehensive Error Logging:</strong> Real-time monitoring to identify and fix issues instantly.</li>
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
                                <x-icons.check class="w-5 h-5 text-indigo-400 shrink-0" />
                                Scalable Microservices Ready
                            </li>
                            <li class="flex gap-3 text-on-surface/70 text-sm">
                                <x-icons.check class="w-5 h-5 text-indigo-400 shrink-0" />
                                Secure Data Transmission
                            </li>
                            <li class="flex gap-3 text-on-surface/70 text-sm">
                                <x-icons.check class="w-5 h-5 text-indigo-400 shrink-0" />
                                Developer-Friendly Docs
                            </li>
                            <li class="flex gap-3 text-on-surface/70 text-sm">
                                <x-icons.check class="w-5 h-5 text-indigo-400 shrink-0" />
                                Fast Response Times
                            </li>
                        </ul>
                        <div class="pt-6 border-t border-outline-variant/10">
                             <a href="{{ route('contact') }}">
                                <x-form.primary-button type="button" class="w-full justify-center py-4 rounded-2xl bg-indigo-600 hover:bg-indigo-700 border-indigo-600">
                                    <span>Discuss Your API Needs</span>
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
                    <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">Integration Showcase</h2>
                    <p class="text-on-surface/60">Projects that leverage the power of APIs and connectivity.</p>
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
                        <p class="text-on-surface/60 text-sm">Deep integration with domain registrar APIs for live rates.</p>
                    </div>
                </a>
                <a href="{{ route('portfolio.promofusion360') }}" class="group bg-surface-container rounded-3xl overflow-hidden border border-outline-variant/20 hover:border-primary/30 transition-all">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('assets/images/promofusion360.png') }}" alt="PromoFusion360" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-primary transition-colors">PromoFusion360 Portal</h3>
                        <p class="text-on-surface/60 text-sm">Automated payment processing via multiple gateway APIs.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- Footer Contact --}}
    @include('sections.contact')
@endsection
