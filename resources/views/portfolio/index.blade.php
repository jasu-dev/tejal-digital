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
    <section
        class="relative -mt-20 pt-20 pb-20 px-2 flex flex-col items-center text-sm bg-cover bg-center bg-no-repeat border-b border-outline-variant/30"
        style="background-image: url('{{ asset('assets/images/hero-gradient-bg.png') }}')">

        <div
            class="flex flex-wrap items-center justify-center p-2 px-4 mt-10 md:mt-28 bg-white/50 backdrop-blur-xl border border-white/20 rounded-2xl">
            <x-icons.launch class="w-4 h-4" />
            <p class="ml-2 text-foreground">Our Portfolio</p>
        </div>

        <h1 class="text-3xl md:text-6xl text-center font-bold max-w-3xl my-5 text-secondary">
            Our Portfolio of Successful Digital Projects
        </h1>
        <p class="text-foreground md:text-base text-center max-w-xl mt-3">
            Explore our collection of successful projects that showcase our expertise in web development, design, and
            digital solutions.
        </p>

        <div class="flex flex-col justify-center sm:flex-row gap-4 mt-8">
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
    </section>
    {{-- Stats Section --}}
    @include('home.sections.stats')
    {{-- list of projects --}}
    @include('portfolio.projects')
    {{-- Testimonials --}}
    @include('home.sections.testimonials')
    {{-- Contact Section --}}
    <section class="py-20 sm:py-25 px-3 sm:px-6 lg:px-8 relative overflow-hidden bg-gradient-to-b from-background via-[#fffbee] to-primary-500/20">
        <div class="max-w-7xl mx-auto text-center">
            <div data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 mb-6 rounded-full bg-primary/10 border border-primary/30 text-primary-500 backdrop-blur-xl">
                    <span class="text-xs sm:text-sm font-semibold">Get in Touch</span>
                </div>
                <h2 class="text-3xl lg:text-6xl font-bold mb-5 tracking-tight">
                    Have a Project Idea in Mind?
                </h2>

                <p class="text-md sm:text-lg max-w-2xl mx-auto leading-relaxed mb-10">
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
                <a href="{{ config('staticdata.whatsapp_url') }}" data-aos="fade-up" data-aos-delay="200"
                    data-aos-duration="800">
                    <x-form.secondary-button type="button" class="px-7 py-3 rounded-2xl">
                        <x-icons.whatsapp class="w-5 h-5" />
                        <span>Chat on WhatsApp</span>
                    </x-form.secondary-button>
                </a>
            </div>
        </div>
    </section>
@endsection
