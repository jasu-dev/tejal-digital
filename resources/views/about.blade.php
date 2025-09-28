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
    <meta property="og:image" content="https://tejaldigital.in/assets/images/og-image.png">

    <!-- Twitter Card -->
    <meta name="twitter:title" content="About Tejal Digital | Web Experts">
    <meta name="twitter:description"
        content="Discover the story, vision, and mission behind Tejal Digital’s success in global web development.">
    <meta name="twitter:image" content="https://tejaldigital.in/assets/images/og-image.png">
@endsection
@section('content')
    <div class="min-h-screen bg-white">
        <section class="relative pt-20 pb-32 overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-slate-50 via-white to-amber-50/30"></div>
            <div
                class="absolute top-20 right-10 w-72 h-72 bg-gradient-to-br from-amber-400/20 to-orange-500/20 rounded-full blur-3xl">
            </div>
            <div
                class="absolute bottom-20 left-10 w-96 h-96 bg-gradient-to-br from-orange-400/10 to-red-500/10 rounded-full blur-3xl">
            </div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-4xl mx-auto">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-amber-100 rounded-full mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="w-4 h-4 text-amber-600">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                        <span class="text-sm font-medium text-amber-800">About Our Team</span>
                    </div>
                    <h1 class="text-5xl lg:text-7xl font-bold leading-tight mb-6">
                        <span class="text-slate-900">Meet the</span><br>
                        <span class="bg-primary bg-clip-text text-transparent">Creative Minds</span>
                    </h1>
                    <p class="text-xl text-slate-600 leading-relaxed mb-8 max-w-3xl mx-auto">We're a passionate team of
                        developers, designers, and digital strategists dedicated to creating exceptional web experiences
                        that drive business growth.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <button
                            class="ring-offset-background focus-visible:outline-hidden focus-visible:ring-ring inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-colors focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 hover:bg-primary/90 h-11 rounded-md px-8 bg-primary hover:from-amber-600 hover:to-orange-700 text-white shadow-lg">
                            <a href="{{ route('contact') }}" class="flex items-center gap-2">
                                Work With Us
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="w-4 h-4">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg>
                            </a>
                        </button>
                        <button
                            class="ring-offset-background focus-visible:outline-hidden focus-visible:ring-ring inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-colors focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 hover:text-accent-foreground border h-11 rounded-md px-8 border-slate-300 hover:bg-slate-50 bg-transparent">
                            <a href="{{ route('portfolio') }}">See Our Work</a>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-20 bg-slate-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="text-center group">
                        <div class="text-4xl font-bold text-slate-900 mb-2">200+</div>
                        <div class="text-slate-600">Projects Completed</div>
                    </div>
                    <div class="text-center group">
                        <div class="text-4xl font-bold text-slate-900 mb-2">98%</div>
                        <div class="text-slate-600">Client Satisfaction</div>
                    </div>
                    <div class="text-center group">
                        <div class="text-4xl font-bold text-slate-900 mb-2">100+</div>
                        <div class="text-slate-600">Happy Clients</div>
                    </div>
                    <div class="text-center group">
                        <div class="text-4xl font-bold text-slate-900 mb-2">5+</div>
                        <div class="text-slate-600">Years Experience</div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    <div class="space-y-8">
                        <div class="inline-flex items-center gap-2 px-4 py-2 bg-amber-100 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="w-4 h-4 text-amber-600">
                                <circle cx="12" cy="12" r="10"></circle>
                                <circle cx="12" cy="12" r="6"></circle>
                                <circle cx="12" cy="12" r="2"></circle>
                            </svg>
                            <span class="text-sm font-medium text-amber-800">Our Mission</span>
                        </div>
                        <h2 class="text-4xl lg:text-5xl font-bold text-slate-900">Empowering <span
                                class="text-primary">Digital Success</span></h2>
                        <div class="space-y-6">
                            <p class="text-lg text-slate-600 leading-relaxed">To empower businesses with cutting-edge web
                                solutions that not only look stunning but also drive measurable results. We believe in the
                                power of great design and robust development to transform how businesses connect with their
                                customers.
                            </p>
                            <p class="text-lg text-slate-600 leading-relaxed">Every project we undertake is an opportunity
                                to push boundaries, explore new technologies, and create digital experiences that make a
                                lasting impact.
                            </p>
                        </div>
                        <div class="space-y-4">
                            <div class="flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="w-5 h-5 text-amber-500 flex-shrink-0">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                </svg>
                                <span class="text-slate-700">5+ years of industry experience</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="w-5 h-5 text-amber-500 flex-shrink-0">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                </svg>
                                <span class="text-slate-700">200+ successful projects completed</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="w-5 h-5 text-amber-500 flex-shrink-0">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                </svg>
                                <span class="text-slate-700">98% client satisfaction rate</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="w-5 h-5 text-amber-500 flex-shrink-0">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                </svg>
                                <span class="text-slate-700">24/7 support and maintenance</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="w-5 h-5 text-amber-500 flex-shrink-0">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                </svg>
                                <span class="text-slate-700">Cutting-edge technology stack</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="w-5 h-5 text-amber-500 flex-shrink-0">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                </svg>
                                <span class="text-slate-700">Transparent pricing and communication</span>
                            </div>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="relative bg-white rounded-3xl shadow-2xl p-8 border border-slate-200">
                            <div class="text-center space-y-6">
                                <div class="w-20 h-20 bg-primary rounded-2xl mx-auto flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-10 h-10 text-white">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <circle cx="12" cy="12" r="6"></circle>
                                        <circle cx="12" cy="12" r="2"></circle>
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-slate-900">Our Vision</h3>
                                <p class="text-slate-600">To be the leading digital partner for businesses worldwide,
                                    creating innovative solutions that drive growth and success.
                                </p>
                                <div class="grid grid-cols-2 gap-4 pt-4">
                                    <div
                                        class="bg-gradient-to-br from-amber-50 to-orange-50 rounded-lg p-4 border border-amber-200">
                                        <div class="text-2xl font-bold text-amber-600">5+</div>
                                        <div class="text-sm text-amber-700">Years Experience</div>
                                    </div>
                                    <div
                                        class="bg-gradient-to-br from-orange-50 to-red-50 rounded-lg p-4 border border-orange-200">
                                        <div class="text-2xl font-bold text-orange-600">100+</div>
                                        <div class="text-sm text-orange-700">Happy Clients</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="absolute -top-4 -right-4 w-20 h-20 bg-gradient-to-br from-amber-400 to-orange-500 rounded-2xl opacity-80 blur-sm">
                        </div>
                        <div
                            class="absolute -bottom-4 -left-4 w-16 h-16 bg-gradient-to-br from-orange-400 to-red-500 rounded-2xl opacity-60 blur-sm">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-24 bg-slate-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-amber-100 rounded-full mb-6"><span
                            class="text-sm font-medium text-amber-800">Our Values</span></div>
                    <h2 class="text-4xl lg:text-5xl font-bold text-slate-900 mb-6">What Drives <span
                            class="text-primary">Our Work</span></h2>
                    <p class="text-xl text-slate-600">The principles that guide everything we do</p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div
                        class="rounded-lg bg-white text-gray-800 group hover:shadow-xl transition-all duration-300 border-none shadow-lg text-center">
                        <div class="p-8">
                            <div
                                class="w-16 h-16 bg-primary rounded-2xl mx-auto mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="w-8 h-8 text-white">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <circle cx="12" cy="12" r="6"></circle>
                                    <circle cx="12" cy="12" r="2"></circle>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-4">Excellence</h3>
                            <p class="text-slate-600">We strive for perfection in every project, ensuring the highest
                                quality standards.
                            </p>
                        </div>
                    </div>
                    <div
                        class="rounded-lg bg-white text-gray-800 group hover:shadow-xl transition-all duration-300 border-none shadow-lg text-center">
                        <div class="p-8">
                            <div
                                class="w-16 h-16 bg-primary rounded-2xl mx-auto mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="w-8 h-8 text-white">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-4">Collaboration</h3>
                            <p class="text-slate-600">We work closely with our clients as partners, not just service
                                providers.
                            </p>
                        </div>
                    </div>
                    <div
                        class="rounded-lg bg-white text-gray-800 group hover:shadow-xl transition-all duration-300 border-none shadow-lg text-center">
                        <div class="p-8">
                            <div
                                class="w-16 h-16 bg-primary rounded-2xl mx-auto mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="w-8 h-8 text-white">
                                    <path
                                        d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-4">Passion</h3>
                            <p class="text-slate-600">We love what we do and it shows in the quality of our work.</p>
                        </div>
                    </div>
                    <div
                        class="rounded-lg bg-white text-gray-800 group hover:shadow-xl transition-all duration-300 border-none shadow-lg text-center">
                        <div class="p-8">
                            <div
                                class="w-16 h-16 bg-primary rounded-2xl mx-auto mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="w-8 h-8 text-white">
                                    <circle cx="12" cy="8" r="6"></circle>
                                    <path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-4">Innovation</h3>
                            <p class="text-slate-600">We stay ahead of trends and use cutting-edge technologies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-24 bg-primary relative overflow-hidden">
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6">Ready to Work Together?</h2>
                <p class="text-xl text-amber-100 mb-8 max-w-2xl mx-auto">Let's discuss how we can help bring your digital
                    vision to life
                </p>
                <button
                    class="ring-offset-background focus-visible:outline-hidden focus-visible:ring-ring inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-colors focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 h-11 rounded-md px-8 bg-white text-amber-600 hover:bg-amber-50 shadow-lg">
                    <a href="{{ route('contact') }}">Start a Conversation</a>
                </button>
            </div>
        </section>
    </div>
@endsection