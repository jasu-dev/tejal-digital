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
                    <x-icons.hot class="w-4 h-4" />
                    <span class="text-sm font-medium">What We Offer</span>
                </div>
                <h1 class="text-5xl lg:text-7xl font-bold leading-tight mb-6">
                    <span class="text-white">Digital Solutions</span><br>
                    <span class="text-gradient">for Your Business</span>
                </h1>
                <p class="text-xl text-on-surface/60 leading-relaxed mb-8 max-w-3xl mx-auto">
                    End-to-end digital solutions tailored to your business needs.
                </p>
                <div class="flex flex-wrap gap-4 justify-center">
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
    {{-- Technologies We Use --}}
    @include('sections.technologies-we-use', ['class' => 'bg-surface-container'])
    {{-- Services Section --}}
    @include('home.sections.services')
    {{-- Process Section --}}
    @include('sections.working-process')

    {{-- Contact Section --}}
    @include('sections.contact')
@endsection
