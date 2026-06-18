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
    <section class="relative py-24 overflow-hidden border-b border-outline-variant/20"
        style="background:var(--color-gradient-hero)">
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
                    <span
                        class="inline-block px-4 py-1.5 mb-6 text-[10px] font-bold uppercase tracking-widest text-primary bg-primary/10 rounded-full border border-primary/20">
                        Expert PHP Development
                    </span>
                    <h1 class="text-4xl lg:text-6xl font-black text-foreground leading-tight mb-6">
                        Laravel Web App <br>
                        <span class="text-gradient">Development</span>
                    </h1>
                    <p class="text-xl text-on-surface/60 leading-relaxed mb-8">
                        Build powerful, secure, and future-proof web applications with the world's most popular PHP
                        framework. We deliver custom solutions that scale with your business.
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
                    <div
                        class="max-w-md h-80 mx-auto border border-border bg-card rounded-2xl p-12 flex items-center justify-center relative overflow-hidden group">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-primary/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        </div>
                        <x-icons.laravel class="w-32 h-32 text-red-500 relative z-10" />
                    </div>
                    {{-- Floating Tags --}}
                    <div
                        class="absolute -top-7 right-10 flex items-center gap-2 rounded-xl bg-surface/95 px-4 py-3 ring-1 ring-border backdrop-blur">
                        <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-500/15 text-green-500">
                            <x-icons.target class="w-4 h-4" />
                        </span>
                        <div class="text-xs">
                            <div class="text-muted-foreground">Scalable</div>
                            <div class="font-semibold text-foreground">10x Faster Delivery</div>
                        </div>
                    </div>
                    <div
                        class="absolute -bottom-7 left-10 flex items-center gap-2 rounded-xl bg-surface/95 px-4 py-3 ring-1 ring-border backdrop-blur">
                        <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-500/15 text-green-500">
                            <x-icons.security class="w-4 h-4" />
                        </span>
                        <div class="text-xs">
                            <div class="text-muted-foreground">Security</div>
                            <div class="font-semibold text-foreground">100% Secure</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Intro Context Block -->
    <section class="py-12 border-b border-outline-variant/20">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <p class="text-xl text-muted-foreground">
                "Whether you are a fast-growing startup looking to build a Minimum Viable Product (MVP) or an established
                enterprise migrating a legacy system, we build bespoke, high-performance web applications tailored to your
                unique business goals."
            </p>
        </div>
    </section>

    <!-- Why Choose Laravel Section -->
    <section class="py-24 border-b border-outline-variant/20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-foreground mb-6">
                    Why Choose <span class="text-gradient">Laravel Framework</span> for Your Project?
                </h2>
                <p class="text-xl text-on-surface/50 max-w-5xl mx-auto">
                    Laravel has rightfully earned its reputation as <span class="font-semibold">"The PHP Framework for Web
                        Artisans."</span> It is the go-to choice for modern enterprises because it streamlines development
                    without compromising features.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Benefit 1 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border-1 border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <x-icons.security class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3">Unmatched Security</h3>
                    <p class="text-sm leading-relaxed">Built-in protection against SQL injection, cross-site
                        request forgery (CSRF), and cross-site scripting (XSS).</p>
                </div>
                <!-- Benefit 2 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border-1 border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <x-icons.launch class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3">High Performance</h3>
                    <p class="text-sm leading-relaxed">Powerful caching systems and seamless database
                        migration tools to handle intense traffic loads effortlessly.</p>
                </div>
                <!-- Benefit 3 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border-1 border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <x-icons.time class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3">Faster Time-to-Market</h3>
                    <p class="text-sm leading-relaxed">Modular architecture and pre-built packages allow our
                        <strong>dedicated Laravel developers</strong> to deploy fast.
                    </p>
                </div>
                <!-- Benefit 4 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-full border-1 border-outline-variant/20 mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <x-icons.plugin class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-bold mb-3">Seamless Integrations</h3>
                    <p class="text-sm leading-relaxed">Connects flawlessly with complex third-party tools,
                        global payment gateways, and business CRMs.</p>
                </div>
            </div>
            <div class="mt-12 text-center text-sm">
                Investing in <span class="font-semibold">professional Laravel services</span> guarantees a
                future-proof foundation for your product.
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-24 border-b border-outline-variant/20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-foreground mb-6">
                    Our Comprehensive <span class="text-gradient">Laravel Development Services</span>
                </h2>
                <p class="text-xl text-on-surface/50 max-w-5xl mx-auto">
                    We offer end-to-end <span class="font-semibold">Laravel application development</span>
                    to cover every stage of your digital transformation journey.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-14">
                <!-- Service 1 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">01</span>
                    <h3 class="text-xl font-bold mb-3">Custom Laravel Web Development
                    </h3>
                    <p class="text-sm leading-relaxed">We build tailor-made,
                        feature-rich web applications from scratch, ensuring the architecture aligns perfectly with your
                        workflow.</p>
                </div>
                <!-- Service 2 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">02</span>
                    <h3 class="text-xl font-bold mb-3">Laravel Enterprise Solutions
                    </h3>
                    <p class="text-sm leading-relaxed">For large-scale
                        corporations requiring complex data handling, we build robust applications designed to scale
                        cleanly.</p>
                </div>
                <!-- Service 3 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">03</span>
                    <h3 class="text-xl font-bold mb-3">Laravel eCommerce Development
                    </h3>
                    <p class="text-sm leading-relaxed">Launch an online store
                        leveraging flexible, highly secure, fast-loading, and conversion-optimized checkout layouts.</p>
                </div>
                <!-- Service 4 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">04</span>
                    <h3 class="text-xl font-bold mb-3">API Development & Integration
                    </h3>
                    <p class="text-sm leading-relaxed">We specialize in building
                        secure, well-documented RESTful APIs that connect seamlessly with external software.</p>
                </div>
                <!-- Service 5 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">05</span>
                    <h3 class="text-xl font-bold mb-3">Legacy Migration to Laravel
                    </h3>
                    <p class="text-sm leading-relaxed">Outdated frameworks
                        slowing you down? Our specialized <strong class="font-medium">Laravel migration services</strong>
                        ensure safely transitioned codebases.</p>
                </div>
                <!-- Service 6 -->
                <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider block mb-2">06</span>
                    <h3 class="text-xl font-bold mb-3">24/7 Support & Maintenance
                    </h3>
                    <p class="text-sm leading-relaxed">From regular security
                        patches and performance optimization to feature additions, we keep your platform running perfectly.
                    </p>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="{{ route('contact') }}" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                    <x-form.primary-button type="button" class="px-7 py-3 rounded-2xl">
                        <span>Get Free Consultation</span>
                        <x-icons.go class="w-4 h-4" />
                    </x-form.primary-button>
                </a>
                <a href="{{ config('staticdata.whatsapp_url') }}" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="800">
                    <x-form.secondary-button type="button" class="px-7 py-3 rounded-2xl">
                        <x-icons.whatsapp class="w-5 h-5" />
                        <span>Chat on WhatsApp</span>
                    </x-form.secondary-button>
                </a>
            </div>
        </div>
    </section>

    <!-- FAQs Section -->
    <section class="py-24 border-b border-outline-variant/20">
        <div class="max-w-5xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-foreground mb-6">Frequently Asked Questions</h2>
            </div>

            <div class="space-y-6">
                <!-- Q1 -->
                <div class="p-6 rounded-2xl border border-border bg-card">
                    <h3 class="text-lg font-bold mb-3 flex items-start gap-2">
                        <span class="text-laravel">Q.</span> Why should I choose Laravel over other PHP frameworks?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        Laravel stands out because of its elegant syntax, robust built-in security features, excellent
                        documentation, and extensive ecosystem (like Forge, Vapor, and Nova). It significantly reduces
                        development time while ensuring top-tier application performance.
                    </p>
                </div>
                <!-- Q2 -->
                <div class="p-6 rounded-2xl border border-border bg-card">
                    <h3 class="text-lg font-bold mb-3 flex items-start gap-2">
                        <span class="text-laravel">Q.</span> How much does a Laravel web development project cost?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        The cost of <strong class="font-medium">Laravel application development</strong>
                        depends entirely on the scope, complexity, integrated features, and timeline of your project. We
                        offer customized pricing models to fit both startup budgets and enterprise demands. Contact us for a
                        detailed breakdown.
                    </p>
                </div>
                <!-- Q3 -->
                <div class="p-6 rounded-2xl border border-border bg-card">
                    <h3 class="text-lg font-bold mb-3 flex items-start gap-2">
                        <span class="text-laravel">Q.</span> Can you migrate my existing website to Laravel?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        Yes, absolutely. We specialize in migrating legacy PHP applications, CodeIgniter, or WordPress sites
                        over to Laravel smoothly, ensuring complete data integrity and zero data loss.
                    </p>
                </div>
                <!-- Q4 -->
                <div class="p-6 rounded-2xl border border-border bg-card">
                    <h3 class="text-lg font-bold mb-3 flex items-start gap-2">
                        <span class="text-laravel">Q.</span> Will I have full ownership of the source code?
                    </h3>
                    <p class="text-sm leading-relaxed">
                        Yes. Once the project is completed and payment milestones are cleared, you will own 100% of the
                        source code, intellectual property rights, and documentation.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Related Projects --}}
    <section class="py-24 border-b border-outline-variant/20">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-foreground mb-4">Related Projects</h2>
                    <p class="text-on-surface/60">See how we've used Laravel to deliver real-world value.</p>
                </div>
                <a href="{{ route('portfolio') }}" class="text-primary font-bold hover:underline">View All Projects</a>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                <a href="{{ route('portfolio.attendance-manager') }}"
                    class="group rounded-2xl border border-border bg-card overflow-hidden transition-all hover:border-primary/30">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('assets/images/attendance.png') }}" alt="Attendance Manager"
                            class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-foreground mb-2 group-hover:text-primary transition-colors">Attendance
                            Manager System</h3>
                        <p class="text-on-surface/60 text-sm">Geo-fenced attendance tracking with selfie verification.</p>
                    </div>
                </a>
                <a href="{{ route('portfolio.krishna-academy') }}"
                    class="group rounded-2xl border border-border bg-card overflow-hidden transition-all hover:border-primary/30">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('assets/images/krishna-academy.png') }}" alt="Krishna Academy"
                            class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-foreground mb-2 group-hover:text-primary transition-colors">
                            KrishnaAcademy – LMS Platform</h3>
                        <p class="text-on-surface/60 text-sm">Educational platform with video lessons and quiz modules.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- Footer Contact --}}
    @include('sections.contact')
@endsection
