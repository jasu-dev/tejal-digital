@extends('layouts.app')
@section('head')
    <!-- Contact Page -->
    <title>Contact Us | Tejal Digital - Let's Build Something Great</title>
    <meta name="description"
        content="Need a custom web app or site? Contact Tejal Digital for Laravel, CRM, WordPress, and API development services. Let’s discuss your project today.">
    <link rel="canonical" href="https://www.tejaldigital.in/contact">
    <meta name="keywords"
        content="Contact Web Developer, Hire Laravel Expert, Discuss Project, Web Development Inquiry, Get in Touch, Custom Website Quote">

    <!-- Open Graph -->
    <meta property="og:title" content="Contact Tejal Digital | Web Development Agency">
    <meta property="og:description"
        content="Reach out to Tejal Digital for secure, scalable web development solutions built for your business goals.">
    <meta property="og:url" content="https://tejaldigital.in/contact">
    <meta property="og:image" content="https://tejaldigital.in/assets/images/og-image.png">

    <!-- Twitter Card -->
    <meta name="twitter:title" content="Contact Tejal Digital | Start Your Project">
    <meta name="twitter:description"
        content="Let’s collaborate to build your next web app, CRM, or digital platform. Contact our expert team now.">
    <meta name="twitter:image" content="https://tejaldigital.in/assets/images/og-image.png">
    
    @verbatim
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ContactPage",
      "url": "https://tejaldigital.in/contact-us",
      "mainEntity": {
        "@type": "Organization",
        "name": "Tejal Digital",
        "contactPoint": [
          {
            "@type": "ContactPoint",
            "contactType": "customer service",
            "telephone": "+91-89497118",
            "email": "team@tejaldigital.in",
            "areaServed": "IN",
            "availableLanguage": ["English", "Hindi"]
          }            
        ]
      }
    }
    </script>
    @endverbatim
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
                        <x-icons.whatsapp class="w-4 h-4 text-amber-600" />
                        <span class="text-sm font-medium text-amber-800">Get In Touch</span>
                    </div>
                    <h1 class="text-5xl lg:text-7xl font-bold leading-tight mb-6"><span class="text-slate-900">Let's Build
                            Something</span><br><span class="bg-primary bg-clip-text text-transparent">Amazing
                            Together</span>
                    </h1>
                    <p class="text-xl text-slate-600 leading-relaxed mb-8 max-w-3xl mx-auto">Ready to transform your digital
                        presence? Get in touch with our team of experts and let's discuss your project.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="#contactForm">
                            <button
                                class="ring-offset-background focus-visible:outline-hidden focus-visible:ring-ring inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-colors focus-visible:ring-2 focus-visible:ring-offset-2  hover:bg-primary/90 h-11 rounded-md px-8 bg-primary hover:from-amber-600 hover:to-orange-700 text-white shadow-lg">
                                <x-icons.date class="mr-2 w-5 h-5" />
                                Schedule a Call
                            </button>
                        </a>
                        <a href="https://wa.me/918949714118?text=Hi%2C%20I'm%20interested%20in%20your%20web%20development%20services.%20Can%20we%20discuss%20further%3F"
                            target="_blank" rel="noopener noreferrer"
                            class="ring-offset-background focus-visible:outline-hidden focus-visible:ring-ring inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-colors focus-visible:ring-2 focus-visible:ring-offset-2 hover:text-accent-foreground border h-11 rounded-md px-8 border-slate-300 hover:bg-slate-50 bg-transparent">
                            <x-icons.whatsapp class="mr-2 w-5 h-5" />
                            Live Chat
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-amber-100 rounded-full mb-6"><span
                            class="text-sm font-medium text-amber-800">Contact Information</span></div>
                    <h2 class="text-4xl lg:text-5xl font-bold text-slate-900 mb-6">Get In <span
                            class="text-primary">Touch</span></h2>
                    <p class="text-xl text-slate-600 max-w-3xl mx-auto">Multiple ways to reach us - choose what works best
                        for you
                    </p>
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
                                    <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3">Email Us</h3>
                            <p class="text-lg font-medium text-slate-800 mb-2">team@tejaldigital.in</p>
                            <p class="text-slate-600 text-sm">Send us an email anytime</p>
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
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3">Call Us</h3>
                            <p class="text-lg font-medium text-slate-800 mb-2">+91 8949714118</p>
                            <p class="text-slate-600 text-sm">Mon-Fri from 8am to 6pm</p>
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
                                    <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3">Visit Us</h3>
                            <p class="text-lg font-medium text-slate-800 mb-2">Plot No. 3, Shiv Colony</p>
                            <p class="text-slate-600 text-sm">Nagaur, 341001</p>
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
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3">Working Hours</h3>
                            <p class="text-lg font-medium text-slate-800 mb-2">Mon - Fri: 8:00 AM - 6:00 PM</p>
                            <p class="text-slate-600 text-sm">Weekend: By appointment</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-24 bg-slate-50" id="contactForm">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-16">
                    <div class="relative">
                        <div class="lg:sticky top-15 rounded-lg bg-white text-gray-800 border-0 shadow-xl">
                            <div class="p-8">
                                <h3 class="text-2xl font-bold text-slate-900 mb-6">Send us a message</h3>
                                @if (session('success'))
                                    <div class="text-green-600 font-medium mb-4">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                                    @csrf
                                    <div class="grid sm:grid-cols-2 gap-4">
                                        <div>
                                            <label
                                                class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-slate-700"
                                                for="firstName">First Name</label>
                                            <input
                                                class="flex h-10 w-full rounded-md border bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-hidden focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 mt-1 border-slate-300 focus:border-amber-500 focus:ring-amber-500"
                                                id="firstName" name="firstName" placeholder="John" type="text"
                                                value="{{ old('firstName') }}">

                                            @error('firstName')
                                                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div>
                                            <label
                                                class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-slate-700"
                                                for="lastName">Last Name</label>
                                            <input
                                                class="flex h-10 w-full rounded-md border bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-hidden focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 mt-1 border-slate-300 focus:border-amber-500 focus:ring-amber-500"
                                                id="lastName" name="lastName" placeholder="Doe" type="text"
                                                value="{{ old('lastName') }}">
                                            @error('lastName')
                                                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div>
                                        <label
                                            class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-slate-700"
                                            for="email">Email</label>
                                        <input
                                            class="flex h-10 w-full rounded-md border bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-hidden focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 mt-1 border-slate-300 focus:border-amber-500 focus:ring-amber-500"
                                            id="email" name="email" placeholder="john@example.com" type="email"
                                            value="{{ old('email') }}">

                                        @error('email')
                                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label
                                            class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-slate-700"
                                            for="phone">Phone (Optional)</label>
                                        <input
                                            class="flex h-10 w-full rounded-md border bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-hidden focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 mt-1 border-slate-300 focus:border-amber-500 focus:ring-amber-500"
                                            id="phone" name="phone" placeholder="+1 (555) 123-4567" type="tel"
                                            value="{{ old('phone') }}">

                                        @error('phone')
                                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label
                                            class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-slate-700"
                                            for="service">Service Interested In</label>
                                        <select id="service" name="service"
                                            class="mt-1 w-full px-3 py-2 border border-slate-300 rounded-md shadow-sm focus:border-amber-500 focus:ring-amber-500">
                                            <option value="">Select a service</option>
                                            <option value="Custom Web Development">Custom Web Development</option>
                                            <option value="Laravel Web App Development">Laravel Web App Development</option>
                                            <option value="Web Portals & Custom Software">Web Portals & Custom Software
                                            </option>
                                            <option value="Custom CRM Development">Custom CRM Development</option>
                                            <option value="WordPress Theme Development">WordPress Theme Development</option>
                                            <option value="E-commerce Development">E-commerce Development</option>
                                            <option value="Custom Admin Dashboards">Custom Admin Dashboards</option>
                                            <option value="API Development & Integration">API Development & Integration
                                            </option>
                                            <option value="Security & Performance Optimization">Security & Performance
                                                Optimization</option>
                                            <option value="Website Maintenance">Website Maintenance</option>
                                        </select>
                                        @error('service')
                                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label
                                            class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-slate-700"
                                            for="message">Message</label>
                                        <textarea
                                            class="flex min-h-[80px] w-full rounded-md border bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-hidden focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 mt-1 border-slate-300 focus:border-amber-500 focus:ring-amber-500"
                                            id="message" name="message" placeholder="Tell us about your project..."
                                            rows="5">{{ old('message') }}</textarea>

                                        @error('message')
                                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <button
                                        class="ring-offset-background focus-visible:outline-hidden focus-visible:ring-ring inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 hover:bg-primary/90 h-10 px-4 py-2 w-full bg-primary hover:from-amber-600 hover:to-orange-700 text-white"
                                        type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="mr-2 w-4 h-4">
                                            <path d="m22 2-7 20-4-9-9-4Z"></path>
                                            <path d="M22 2 11 13"></path>
                                        </svg>
                                        Send Message
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-8">
                        <div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-6">Why Choose Tejal Digital?</h3>
                            <div class="space-y-4">
                                <div class="flex items-center gap-3">
                                    <x-icons.check class="w-5 h-5 text-amber-500 flex-shrink-0" />
                                    <span class="text-slate-700">5+ years of industry experience</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <x-icons.check class="w-5 h-5 text-amber-500 flex-shrink-0" />
                                    <span class="text-slate-700">200+ successful projects completed</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <x-icons.check class="w-5 h-5 text-amber-500 flex-shrink-0" />
                                    <span class="text-slate-700">98% client satisfaction rate</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <x-icons.check class="w-5 h-5 text-amber-500 flex-shrink-0" />
                                    <span class="text-slate-700">24/7 support and maintenance</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <x-icons.check class="w-5 h-5 text-amber-500 flex-shrink-0" />
                                    <span class="text-slate-700">Cutting-edge technology stack</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <x-icons.check class="w-5 h-5 text-amber-500 flex-shrink-0" />
                                    <span class="text-slate-700">Transparent pricing and communication</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-6">Frequently Asked Questions</h3>
                            <div class="space-y-4">
                                <div
                                    class="rounded-lg bg-white text-gray-800 shadow-2xs border border-slate-200 hover:shadow-md transition-shadow">
                                    <div class="p-6">
                                        <h4 class="font-bold text-slate-800 mb-2">How long does a typical project take?
                                        </h4>
                                        <p class="text-slate-600 text-sm">Project timelines vary based on complexity, but
                                            most websites take 4-8 weeks from start to finish.
                                        </p>
                                    </div>
                                </div>
                                <div
                                    class="rounded-lg bg-white text-gray-800 shadow-2xs border border-slate-200 hover:shadow-md transition-shadow">
                                    <div class="p-6">
                                        <h4 class="font-bold text-slate-800 mb-2">Do you provide ongoing support?</h4>
                                        <p class="text-slate-600 text-sm">Yes, we offer comprehensive maintenance and
                                            support packages to keep your website running smoothly.
                                        </p>
                                    </div>
                                </div>
                                <div
                                    class="rounded-lg bg-white text-gray-800 shadow-2xs border border-slate-200 hover:shadow-md transition-shadow">
                                    <div class="p-6">
                                        <h4 class="font-bold text-slate-800 mb-2">What's your development process?</h4>
                                        <p class="text-slate-600 text-sm">We follow a structured 6-step process: Discovery,
                                            Planning, Design, Development, Testing, and Launch.
                                        </p>
                                    </div>
                                </div>
                                <div
                                    class="rounded-lg bg-white text-gray-800 shadow-2xs border border-slate-200 hover:shadow-md transition-shadow">
                                    <div class="p-6">
                                        <h4 class="font-bold text-slate-800 mb-2">Can you work with our existing brand?
                                        </h4>
                                        <p class="text-slate-600 text-sm">We can work with your existing brand guidelines
                                            or help develop new branding.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-24 bg-primary relative overflow-hidden">
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6">Ready to Get Started?</h2>
                <p class="text-xl text-amber-100 mb-8 max-w-2xl mx-auto">Join 100+ satisfied clients who have transformed
                    their businesses with our solutions
                </p>
                <div class="flex items-center justify-center gap-8 text-amber-100">
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="w-5 h-5">
                            <circle cx="12" cy="8" r="6"></circle>
                            <path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"></path>
                        </svg>
                        <span>Award Winning</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="w-5 h-5">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                        <span>Expert Team</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="w-5 h-5">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                        <span>Proven Results</span>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection