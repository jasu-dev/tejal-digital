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
                        "name": "Custom Website Development (Laravel)",
                        "description": "Scalable, ultra-secure custom web applications built with Laravel to streamline complex business workflows."
                    }
                    },
                    {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "WordPress Website Development",
                        "description": "Lightweight, WordPress websites built from scratch for full control without template bloat."
                    }
                    },
                    {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "eCommerce Website Development",
                        "description": "High-converting storefronts equipped with streamlined checkouts, automated inventory, and secure payments."
                    }
                    },
                    {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "SaaS Application Development",
                        "description": "Turn your software idea into a profitable subscription product with secure multi-tenant infrastructure."
                    }
                    },
                    {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Custom CRM & ERP Development",
                        "description": "Centralize your operations, automate manual workflows, and track customer data with a tailored system."
                    }
                    },
                    {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Third-Party API Development & Integration",
                        "description": "Securely connect external tools, payment processors, and logistics systems to synchronize your data."
                    }
                    },
                    {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Corporate & Business Website Development",
                        "description": "Professional, fast websites engineered to build brand authority and convert visitors into customers."
                    }
                    },
                    {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Website Speed & Security Optimization",
                        "description": "Boost search engine rankings and shield digital assets by accelerating speed and fixing vulnerabilities."
                    }
                    },
                    {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Ongoing Website & App Maintenance",
                        "description": "Prevent unexpected downtime and patch bugs via proactive updates and secure cloud backups."
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

    @include('sections.projects-slider')

    {{-- Industries We Serve Section --}}
    @include('sections.industries')

    {{-- Services Section --}}
    @include('home.sections.services')

    {{-- Lead Section --}}
    @include('home.sections.lead')

    {{-- Technologies We Use Section --}}
    @include('sections.technologies-we-use')

    {{-- Working Process Section --}}
    @include('sections.working-process')

    {{-- Projects Section --}}
    @include('home.sections.projects')

    {{-- Testimonials Section --}}
    @include('home.sections.testimonials')

    {{-- Contact Section --}}
    @include('sections.contact')
@endsection
