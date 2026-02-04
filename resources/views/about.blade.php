@extends('layouts.app')
@section('head')
    <!-- About Page -->
    <title>About Us | Tejal Digital - Expert Web Developers</title>
    <meta name="description"
        content="Learn about Tejal Digital’s journey and team. We build scalable web solutions using Laravel, WordPress, and modern tech to power businesses globally.">
    <link rel="canonical" href="https://www.tejaldigital.in/about">
    <meta name="keywords"
        content="About Tejal Digital, Web Developers, Development Company, Laravel Experts, Web Agency, Scalable Web Solutions">
    <!-- Open Graph -->
    <meta property="og:title" content="About Us | Tejal Digital">
    <meta property="og:description"
        content="Meet the team behind Tejal Digital – building high-quality, scalable web solutions for global clients.">
    <meta property="og:url" content="https://tejaldigital.in/about">
    <meta property="og:image" content="{{ asset('assets/images/og-image.png') }}">
    <!-- Twitter Card -->
    <meta name="twitter:title" content="About Tejal Digital | Web Experts">
    <meta name="twitter:description"
        content="Discover the story, vision, and mission behind Tejal Digital’s success in global web development.">
    <meta name="twitter:image" content="{{ asset('assets/images/og-image.png') }}">
@endsection
@section('content')
    {{-- Hero Section --}}
    <section class="relative pt-20 pb-32 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-slate-50 via-white to-secondary-50/20"></div>
        <div
            class="absolute top-20 right-10 w-72 h-72 bg-gradient-to-br from-secondary-400/20 to-primary-500/30 rounded-full blur-3xl">
        </div>
        <div
            class="absolute bottom-20 left-10 w-96 h-96 bg-gradient-to-br from-primary-400/10 to-secondary-500/20 rounded-full blur-3xl">
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-4xl mx-auto">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-secondary-100 rounded-full mb-6">
                    <x-icons.users class="w-4 h-4" />
                    <span class="text-sm font-medium text-secondary-800">About Our Team</span>
                </div>
                <h1 class="text-5xl lg:text-7xl font-bold leading-tight mb-6">
                    <span class="text-slate-900">Meet the</span><br>
                    <span class="text-gradient">Creative Minds</span>
                </h1>
                <p class="text-xl text-slate-600 leading-relaxed mb-8 max-w-3xl mx-auto">We're a passionate team of
                    developers, designers, and digital strategists dedicated to creating exceptional web experiences
                    that drive business growth.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('contact') }}">
                        <x-form.primary-button type="button" class="px-7 py-3 rounded-2xl">
                            <span>Start Your Project</span>
                            <x-icons.go class="w-4 h-4" />
                        </x-form.primary-button>
                    </a>
                    <a href="{{ route('portfolio') }}">
                        <x-form.secondary-button type="button" class="px-7 py-3 rounded-2xl">
                            <x-icons.play class="w-4 h-4" />
                            <span>View Our Work</span>
                        </x-form.secondary-button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- Stats Section --}}
    @include('home.sections.stats')
    {{-- About Section --}}
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="space-y-8">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-secondary-100 rounded-full">
                        <x-icons.target class="w-4 h-4" />
                        <span class="text-sm font-medium text-secondary-800">Our Mission</span>
                    </div>
                    <h2 class="text-4xl lg:text-5xl font-bold text-slate-900">
                        Empowering <span class="text-gradient">Digital Success</span></h2>
                    <div class="space-y-6">
                        <p class="text-lg text-slate-600 leading-relaxed">
                            To empower businesses with cutting-edge web solutions that not only look stunning but also
                            drive measurable results. We believe in the power of great design and robust development to
                            transform how businesses connect with their customers.
                        </p>
                        <p class="text-lg text-slate-600 leading-relaxed">
                            Every project we undertake is an opportunity to push boundaries, explore new technologies,
                            and create digital experiences that make a lasting impact.
                        </p>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-center gap-3">
                            <x-icons.check class="w-5 h-5 text-primary-500 flex-shrink-0" />
                            <span class="text-slate-700">{{ config('staticdata.experience_years') }}+ years of industry
                                experience</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <x-icons.check class="w-5 h-5 text-primary-500 flex-shrink-0" />
                            <span class="text-slate-700">{{ config('staticdata.projects') }}+ successful projects
                                completed</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <x-icons.check class="w-5 h-5 text-primary-500 flex-shrink-0" />
                            <span class="text-slate-700">{{ config('staticdata.satisfaction') }}% client satisfaction
                                rate</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <x-icons.check class="w-5 h-5 text-primary-500 flex-shrink-0" />
                            <span class="text-slate-700">24/7 support and maintenance</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <x-icons.check class="w-5 h-5 text-primary-500 flex-shrink-0" />
                            <span class="text-slate-700">Cutting-edge technology stack</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <x-icons.check class="w-5 h-5 text-primary-500 flex-shrink-0" />
                            <span class="text-slate-700">Transparent pricing and communication</span>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="relative bg-white rounded-3xl shadow-2xl p-8 border">
                        <div class="text-center space-y-6">
                            <div class="w-20 h-20 bg-primary-500 rounded-2xl mx-auto flex items-center justify-center">
                                <x-icons.target class="w-10 h-10 text-white" />
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900">Our Vision</h3>
                            <p class="text-slate-600">To be the leading digital partner for businesses worldwide,
                                creating innovative solutions that drive growth and success.
                            </p>
                            <div class="grid grid-cols-2 gap-4 pt-4">
                                <div
                                    class="bg-gradient-to-br from-secondary-50 to-primary-50 rounded-lg p-4 border border-secondary-200">
                                    <div class="text-2xl font-bold text-secondary-600">{{ config('staticdata.experience_years') }}+</div>
                                    <div class="text-sm text-secondary-700">Years Experience</div>
                                </div>
                                <div
                                    class="bg-gradient-to-br from-primary-50 to-secondary-50 rounded-lg p-4 border border-primary-200">
                                    <div class="text-2xl font-bold text-primary-600">{{ config('staticdata.clients') }}+</div>
                                    <div class="text-sm text-primary-700">Happy Clients</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="absolute -top-4 -right-4 w-20 h-20 bg-gradient-to-br from-secondary-400 to-primary-500 rounded-2xl opacity-80 blur-sm">
                    </div>
                    <div
                        class="absolute -bottom-4 -left-4 w-16 h-16 bg-gradient-to-br from-primary-400 to-secondary-500 rounded-2xl opacity-60 blur-sm">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Our Values Section --}}
    <section class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-secondary-100 rounded-full mb-6">
                    <span class="text-sm font-medium text-secondary-800">Our Values</span>
                </div>
                <h2 class="text-4xl lg:text-5xl font-bold text-slate-900 mb-6">
                    What Drives <span class="text-gradient">Our Work</span>
                </h2>
                <p class="text-xl text-slate-600">The principles that guide everything we do</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div
                    class="rounded-lg bg-white text-gray-800 group hover:shadow-xl transition-all duration-300 border text-center">
                    <div class="p-8">
                        <div
                            class="w-16 h-16 bg-primary-500 rounded-2xl mx-auto mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                            <x-icons.target class="w-6 h-6 text-white" />
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Excellence</h3>
                        <p class="text-slate-600">We strive for perfection in every project, ensuring the highest
                            quality standards.
                        </p>
                    </div>
                </div>
                <div
                    class="rounded-lg bg-white text-gray-800 group hover:shadow-xl transition-all duration-300 border text-center">
                    <div class="p-8">
                        <div
                            class="w-16 h-16 bg-primary-500 rounded-2xl mx-auto mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                            <x-icons.users class="w-6 h-6 text-white" />
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Collaboration</h3>
                        <p class="text-slate-600">We work closely with our clients as partners, not just service
                            providers.
                        </p>
                    </div>
                </div>
                <div
                    class="rounded-lg bg-white text-gray-800 group hover:shadow-xl transition-all duration-300 border text-center">
                    <div class="p-8">
                        <div
                            class="w-16 h-16 bg-primary-500 rounded-2xl mx-auto mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                            <x-icons.love class="w-6 h-6 text-white" />
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Passion</h3>
                        <p class="text-slate-600">We love what we do and it shows in the quality of our work.</p>
                    </div>
                </div>
                <div
                    class="rounded-lg bg-white text-gray-800 group hover:shadow-xl transition-all duration-300 border text-center">
                    <div class="p-8">
                        <div
                            class="w-16 h-16 bg-primary-500 rounded-2xl mx-auto mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                            <x-icons.hot class="w-6 h-6 text-white" />
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Innovation</h3>
                        <p class="text-slate-600">We stay ahead of trends and use cutting-edge technologies.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Contact Section --}}
    <section class="py-24 bg-primary-600 relative overflow-hidden border-b border-brand-dark-200/50">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0"
                style="background-image: url(&quot;data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fillRule='evenodd'%3E%3Cg fill='%23ffffff' fillOpacity='0.4'%3E%3Ccircle cx='30' cy='30' r='2'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E&quot;); background-size: 60px 60px;">
            </div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6">
                Ready to Work Together?
            </h2>
            <p class="text-xl text-white mb-8 max-w-2xl mx-auto">
                Let's discuss how we can help bring your digital vision to life
            </p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center">

                <a href="{{ route('contact') }}">
                    <x-form.secondary-button type="button" class="px-7 py-2 bg-white border-white rounded-lg">
                        <span>Get Free Consultation</span>
                        <x-icons.go class="w-4 h-4" />
                    </x-form.secondary-button>
                </a>

                <a href="{{ config('staticdata.whatsapp_url') }}">
                    <x-form.secondary-button type="button" class="px-7 py-2 text-white border-white rounded-lg">
                        <x-icons.whatsapp class="w-5 h-5" />
                        <span>Chat Now</span>
                    </x-form.secondary-button>
                </a>
            </div>
        </div>
    </section>
@endsection
