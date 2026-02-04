@extends('layouts.app')
@section('head')
    <!-- Primary SEO Meta Tags -->
    <title>Tejal Digital | Best Web Development Agency</title>
    <meta name="description"
        content="Tejal Digital is a trusted web development agency offering Laravel, WordPress, CRM, e-commerce, API integration & custom web development solutions.">
    <meta name="keywords"
        content="Web Development Nagaur, Laravel Development Rajasthan, WordPress Theme Development, Custom CRM Rajasthan, E-commerce Development, Web Portals, API Integration India, Custom Admin Dashboards, Website Maintenance, Custom Web Development Agency">
    <meta name="author" content="Tejal Digital">
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Tejal Digital | Best Web Development Agency">
    <meta property="og:description"
        content="Custom web apps, Laravel solutions, WordPress development, CRMs, APIs & e-commerce by Tejal Digital. Based in Nagaur, Rajasthan.">
    <meta property="og:url" content="https://tejaldigital.in/">
    <meta property="og:image" content="{{ asset('assets/images/og-image.jpg') }}">
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Tejal Digital | Best Web Development Agency">
    <meta name="twitter:description"
        content="Custom websites, Laravel apps, WordPress themes, CRMs, APIs & more. Contact Tejal Digital in Rajasthan.">
    <meta name="twitter:image" content="{{ asset('assets/images/og-image.jpg') }}">
    <!-- Canonical URL -->
    <link rel="canonical" href="https://www.tejaldigital.in/">
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
    @include('home.sections.hero')

    {{-- Stats Section --}}
    @include('home.sections.stats')

    {{-- Services Section --}}
    @include('home.sections.services')

    {{-- Lead Section --}}
    @include('home.sections.lead')

    {{-- Technologies We Use Section --}}
    @include('sections.technologies-we-use')

    {{-- Projects Section --}}
    @include('home.sections.projects')

    {{-- Testimonials Section --}}
    @include('home.sections.testimonials')

    {{-- Contact Section --}}
    @include('home.sections.contact')
@endsection
