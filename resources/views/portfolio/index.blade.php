@extends('layouts.app')
@section('head')
    <!-- Portfolio Page -->
    <title>Our Work | Web Development Projects by Tejal Digital</title>
    <meta name="description"
        content="Browse featured projects from Tejal Digital – custom web apps, Laravel solutions, WordPress development, CRMs, and e-commerce builds.">
    <link rel="canonical" href="https://www.tejaldigital.in/portfolio">
    <meta name="keywords"
        content="Web Portfolio, Web Development Projects, Laravel Work, CRM Showcase, WordPress Projects, E-commerce Examples">

    <!-- Open Graph -->
    <meta property="og:title" content="Portfolio | Web Projects by Tejal Digital">
    <meta property="og:description"
        content="Explore our portfolio of Laravel apps, WordPress themes, CRMs, and custom software solutions.">
    <meta property="og:url" content="https://www.tejaldigital.in/portfolio">
    <meta property="og:image" content="{{ asset('assets/images/og-image.png') }}">

    <!-- Twitter Card -->
    <meta name="twitter:title" content="Our Portfolio | Tejal Digital Projects">
    <meta name="twitter:description"
        content="See how Tejal Digital delivers real-world value through custom web solutions.">
    <meta name="twitter:image" content="{{ asset('assets/images/og-image.png') }}">
@endsection
@section('content')
    {{-- Hero Section --}}
    <section class="relative py-24 overflow-hidden border-b border-outline-variant/20">
        <div
            class="absolute -top-24 -right-24 w-72 h-72 bg-gradient-to-br from-secondary-400/20 to-primary-500/30 rounded-full blur-3xl">
        </div>
        <div
            class="hidden sm:block absolute -bottom-24 -left-24 w-96 h-96 bg-gradient-to-br from-primary-400/10 to-secondary-500/20 rounded-full blur-3xl">
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-4xl mx-auto">
                <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 gradient-primary rounded-full text-white">
                    <x-icons.users class="w-4 h-4" />
                    <span class="text-sm font-medium">Our Portfolio</span>
                </div>
                <h1 class="text-5xl lg:text-7xl font-bold leading-tight mb-6">
                    <span class="text-white">Explore</span><br>
                    <span class="text-gradient">Our Portfolio</span>
                </h1>
                <p class="text-xl text-on-surface/60 leading-relaxed mb-8 max-w-3xl mx-auto">
                    Explore our collection of successful projects that showcase our expertise in web development,
                    design, and digital solutions.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('contact') }}">
                        <x-form.primary-button type="button" class="px-7 py-3 rounded-2xl">
                            <span>Start Your Project</span>
                            <x-icons.go class="w-4 h-4" />
                        </x-form.primary-button>
                    </a>
                    <a href="{{ config('staticdata.whatsapp_url') }}">
                        <x-form.secondary-button type="button" class="px-7 py-3 rounded-2xl">
                            <x-icons.whatsapp class="w-4 h-4" />
                            <span>Chat with Us</span>
                        </x-form.secondary-button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- Stats Section --}}
    @include('home.sections.stats')
    {{-- list of projects --}}
    @include('portfolio.projects')
    {{-- Testimonials --}}
    @include('home.sections.testimonials')
    {{-- Contact Section --}}
    <section class="py-26 relative overflow-hidden">
    {{-- Background Ambient Glow --}}
    <div
        class="absolute -top-24 -right-24 w-72 h-72 bg-gradient-to-br from-secondary-400/20 to-primary-500/30 rounded-full blur-3xl">
    </div>
    <div
        class="absolute -bottom-24 -left-24 w-96 h-96 bg-gradient-to-br from-primary-400/10 to-secondary-500/20 rounded-full blur-3xl">
    </div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-8 text-center">
        <div data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
            <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 gradient-primary rounded-full text-white">
                <span class="text-sm font-medium">Get in Touch</span>
            </div>
            <h2 class="text-4xl lg:text-6xl font-black text-white mb-8">
                Have a Project Idea in Mind?
            </h2>

            <p class="text-xl text-on-surface/60 mb-12 max-w-2xl mx-auto leading-relaxed">
                Let's discuss your project and see how we can help bring your vision to life.
            </p>
        </div>

        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            
            <a href="{{ route('contact') }}" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                <x-form.primary-button type="button" class="px-7 py-3 rounded-2xl">
                    <span>Get Free Consultation</span>
                    <x-icons.go class="w-4 h-4" />
                </x-form.primary-button>
            </a>
            <a href="{{ config('staticdata.whatsapp_url') }}" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
                <x-form.secondary-button type="button" class="px-7 py-3 rounded-2xl">
                    <x-icons.whatsapp class="w-5 h-5" />
                <span>Chat on WhatsApp</span>
                </x-form.secondary-button>
            </a>
        </div>
    </div>
</section>
@endsection
