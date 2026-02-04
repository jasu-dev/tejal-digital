@extends('layouts.app')
@section('head')
    <!-- Services Page -->
    <title>Our Services | Laravel, CRM, WordPress & Web Solutions</title>
    <meta name="description"
        content="Explore Tejal Digital’s services including custom web development, Laravel apps, CRM platforms, WordPress themes, APIs, and e-commerce solutions.">
    <link rel="canonical" href="https://www.tejaldigital.in/services">
    <meta name="keywords"
        content="Web Development Services, Laravel Development, WordPress Customization, CRM Development, E-commerce Web Solutions, API Integration, Admin Dashboard Development">

    <!-- Open Graph -->
    <meta property="og:title" content="Our Web Development Services | Tejal Digital">
    <meta property="og:description"
        content="Full-stack web development services: custom Laravel apps, e-commerce, WordPress themes, APIs & more.">
    <meta property="og:url" content="https://www.tejaldigital.in/services">
    <meta property="og:image" content="https://www.tejaldigital.in/assets/images/og-image.png">

    <!-- Twitter Card -->
    <meta name="twitter:title" content="Our Services | Web Development by Tejal Digital">
    <meta name="twitter:description"
        content="Laravel, CRM, WordPress, APIs, e-commerce – explore end-to-end web solutions from Tejal Digital.">
    <meta name="twitter:image" content="https://www.tejaldigital.in/assets/images/og-image.png">

    @verbatim
        <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "name": "Web Development Services by Tejal Digital",
      "description": "Tejal Digital is a full-service web development agency offering a wide range of services, including custom software, e-commerce, and API development.",
      "provider": {
        "@type": "Organization",
        "name": "Tejal Digital",
        "url": "https://tejaldigital.in/",
        "logo": "https://tejaldigital.in/assets/images/logo.svg",
        "sameAs": [
          "https://www.facebook.com/tejaldigitalworks/",
          "https://www.instagram.com/tejal.digital/",
          "http://linkedin.com/jaswant-lohmror"
        ]
      },
      "offers": [
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Laravel Web App Development",
            "description": "Custom Laravel applications built with scalable, secure, and high-performance code."
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Web Portals & Custom Software",
            "description": "Development of enterprise-grade web portals and bespoke software solutions."
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Custom CRM Development",
            "description": "Tailor-made CRM solutions to manage customer relationships and business operations efficiently."
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "WordPress Theme Development",
            "description": "Custom WordPress themes designed for performance, SEO, and brand consistency."
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "E-commerce Development",
            "description": "Robust online stores with secure payment gateways and smooth shopping experiences."
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Custom Admin Dashboards",
            "description": "Interactive dashboards for data management and real-time analytics."
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "API Development & Integration",
            "description": "RESTful API development and integration with third-party platforms."
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Security & Performance Optimization",
            "description": "Enhancing application security, speed, and overall performance."
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Maintenance",
            "description": "Ongoing support and updates to keep websites and applications running smoothly."
          }
        }
      ]
    }
    </script>
    @endverbatim
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
                    <x-icons.hot class="w-4 h-4" />
                    <span class="text-sm font-medium text-secondary-800">What We Offer</span>
                </div>
                <h1 class="text-5xl lg:text-7xl font-bold leading-tight mb-6">
                    <span class="text-slate-900">Digital Solutions</span><br>
                    <span class="text-gradient">for Your Business</span>
                </h1>
                <p class="text-xl text-slate-600 leading-relaxed mb-8 max-w-3xl mx-auto">
                    End-to-end digital solutions tailored to your business needs.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('contact') }}">
                        <x-form.primary-button type="button" class="px-7 py-3 rounded-2xl">
                            <span>Get a Quote</span>
                            <x-icons.go class="w-4 h-4" />
                        </x-form.primary-button>
                    </a>
                    <a href="{{ config('staticdata.whatsapp_url') }}">
                        <x-form.secondary-button type="button" class="px-7 py-3 rounded-2xl">
                            <x-icons.whatsapp class="w-4 h-4" />
                            <span>Chat Now</span>
                        </x-form.secondary-button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- Services Section --}}
    @include('home.sections.services')
    {{-- Process Section --}}
    <section class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-amber-100 rounded-full mb-6"><span
                        class="text-sm font-medium text-amber-800">How We Work</span></div>
                <h2 class="text-4xl lg:text-5xl font-bold text-slate-900 mb-6">
                    Our <span class="text-gradient">Process</span>
                </h2>
                <p class="text-xl text-slate-600 max-w-3xl mx-auto">
                    A proven methodology that ensures successful project delivery every time
                </p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="rounded-lg bg-white group hover:shadow-xl transition-all duration-300 border text-center">
                    <div class="p-8">
                        <div class="text-center text-6xl mb-4 text-primary-500">
                            <x-icons.discover class="w-14 h-14 mx-auto" />
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Discovery</h3>
                        <p class="text-slate-600">We start by understanding your business goals, target audience, and
                            project requirements.
                        </p>
                    </div>
                </div>
                <div class="rounded-lg bg-white group hover:shadow-xl transition-all duration-300 border text-center">
                    <div class="p-8">
                        <div class="text-6xl mb-4 text-primary-500">
                            <x-icons.planning class="w-14 h-14 mx-auto" />
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Planning</h3>
                        <p class="text-slate-600">We create a detailed project plan with timelines, milestones, and
                            deliverables.
                        </p>
                    </div>
                </div>
                <div class="rounded-lg bg-white group hover:shadow-xl transition-all duration-300 border text-center">
                    <div class="p-8">
                        <div class="text-6xl mb-4 text-primary-500">
                            <x-icons.design class="w-14 h-14 mx-auto" />
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Design</h3>
                        <p class="text-slate-600">Our designers create wireframes and mockups that align with your
                            brand and goals.
                        </p>
                    </div>
                </div>
                <div class="rounded-lg bg-white group hover:shadow-xl transition-all duration-300 border text-center">
                    <div class="p-8">
                        <div class="text-6xl mb-4 text-primary-500">
                            <x-icons.code class="w-14 h-14 mx-auto" />
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Development</h3>
                        <p class="text-slate-600">Our developers bring the designs to life using the latest
                            technologies and best practices.
                        </p>
                    </div>
                </div>
                <div class="rounded-lg bg-white group hover:shadow-xl transition-all duration-300 border text-center">
                    <div class="p-8">
                        <div class="text-6xl mb-4 text-primary-500">
                            <x-icons.tools class="w-14 h-14 mx-auto" />
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Testing</h3>
                        <p class="text-slate-600">Rigorous testing ensures your website works perfectly across all
                            devices and browsers.
                        </p>
                    </div>
                </div>
                <div class="rounded-lg bg-white group hover:shadow-xl transition-all duration-300 border text-center">
                    <div class="p-8">
                        <div class="text-6xl mb-4 text-primary-500">
                            <x-icons.launch class="w-14 h-14 mx-auto" />
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Launch</h3>
                        <p class="text-slate-600">We deploy your website and provide ongoing support to ensure
                            everything runs smoothly.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Technologies We Use --}}
    @include('sections.technologies-we-use')

    {{-- Contact Section --}}
    <section class="py-24 bg-primary-600 relative overflow-hidden border-b border-brand-dark-200/50">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0"
                style="background-image: url(&quot;data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fillRule='evenodd'%3E%3Cg fill='%23ffffff' fillOpacity='0.4'%3E%3Ccircle cx='30' cy='30' r='2'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E&quot;); background-size: 60px 60px;">
            </div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6">
                Ready to Get Started?
            </h2>
            <p class="text-xl text-white mb-8 max-w-2xl mx-auto">
                Let's discuss your project requirements and create a custom solution for your business
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
                        <span>Start Chatting</span>
                    </x-form.secondary-button>
                </a>
            </div>
        </div>
    </section>
@endsection
