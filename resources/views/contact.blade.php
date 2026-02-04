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
    <meta property="og:image" content="{{ asset('assets/images/og-image.png') }}">
    <!-- Twitter Card -->
    <meta name="twitter:title" content="Contact Tejal Digital | Start Your Project">
    <meta name="twitter:description"
        content="Let’s collaborate to build your next web app, CRM, or digital platform. Contact our expert team now.">
    <meta name="twitter:image" content="{{ asset('assets/images/og-image.png') }}">
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
                    <x-icons.whatsapp class="w-4 h-4" />
                    <span class="text-sm font-medium text-secondary-800">Get in Touch</span>
                </div>
                <h1 class="text-5xl lg:text-7xl font-bold leading-tight mb-6">
                    <span class="text-slate-900">Let's Build Something</span><br>
                    <span class="text-gradient">Amazing Together</span>
                </h1>
                <p class="text-xl text-slate-600 leading-relaxed mb-8 max-w-3xl mx-auto">
                    Ready to transform your digital presence? Get in touch with our team of experts and let's discuss your
                    project.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#contactForm">
                        <x-form.primary-button type="button" class="px-7 py-3 rounded-2xl">
                            <span>Schedule a Call</span>
                            <x-icons.go class="w-4 h-4" />
                        </x-form.primary-button>
                    </a>
                    <a href="{{ config('staticdata.whatsapp_url') }}">
                        <x-form.secondary-button type="button" class="px-7 py-3 rounded-2xl">
                            <x-icons.whatsapp class="w-4 h-4" />
                            <span>Start a Chat</span>
                        </x-form.secondary-button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- Contact Options --}}
    <section class="pb-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-secondary-100 rounded-full mb-6">
                    <span class="text-sm font-medium text-secondary-800">Contact Information</span>
                </div>
                <h2 class="text-4xl lg:text-5xl font-bold text-slate-900 mb-6">
                    Get In <span class="text-gradient">Touch</span>
                </h2>
                <p class="text-xl text-slate-600 max-w-3xl mx-auto">
                    Multiple ways to reach us - choose what works best for you
                </p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div
                    class="rounded-lg bg-white text-gray-800 group hover:shadow-xl transition-all duration-300 border text-center">
                    <div class="p-8">
                        <div
                            class="w-16 h-16 bg-primary-500 rounded-2xl mx-auto mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                            <x-icons.email class="w-8 h-8 text-white" />
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Email Us</h3>
                        <p class="text-lg font-medium text-slate-800 mb-2">{{ config('staticdata.email') }}</p>
                        <p class="text-slate-600 text-sm">Send us an email anytime</p>
                    </div>
                </div>
                <div
                    class="rounded-lg bg-white text-gray-800 group hover:shadow-xl transition-all duration-300 border text-center">
                    <div class="p-8">
                        <div
                            class="w-16 h-16 bg-primary-500 rounded-2xl mx-auto mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                            <x-icons.call class="w-8 h-8 text-white" />
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Call Us</h3>
                        <p class="text-lg font-medium text-slate-800 mb-2">{{ config('staticdata.phone') }}</p>
                        <p class="text-slate-600 text-sm">Mon-Fri from 8am to 6pm</p>
                    </div>
                </div>
                <div
                    class="rounded-lg bg-white text-gray-800 group hover:shadow-xl transition-all duration-300 border text-center">
                    <div class="p-8">
                        <div
                            class="w-16 h-16 bg-primary-500 rounded-2xl mx-auto mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                            <x-icons.target class="w-8 h-8 text-white" />
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Visit Us</h3>
                        <p class="text-lg font-medium text-slate-800 mb-2">Plot No. 3, Shiv Colony</p>
                        <p class="text-slate-600 text-sm">Nagaur, Rajasthan</p>
                    </div>
                </div>
                <div
                    class="rounded-lg bg-white text-gray-800 group hover:shadow-xl transition-all duration-300 border text-center">
                    <div class="p-8">
                        <div
                            class="w-16 h-16 bg-primary-500 rounded-2xl mx-auto mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                            <x-icons.time class="w-8 h-8 text-white" />
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Working Hours</h3>
                        <p class="text-lg font-medium text-slate-800 mb-2">Mon - Fri: 8AM - 6PM</p>
                        <p class="text-slate-600 text-sm">Weekend: By appointment</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Contact Form --}}
    <section class="py-24 bg-slate-50" id="contactForm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16">
                <div class="relative">
                    <div class="lg:sticky top-15 rounded-lg bg-white text-gray-800 border shadow-xl">
                        <div class="p-8">
                            <h3 class="text-2xl font-bold text-slate-900 mb-6">Get In Touch</h3>
                            @if (session('success'))
                                <div class="text-green-600 font-medium mb-4">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                                @csrf
                                <div class="grid sm:grid-cols-2 gap-4">
                                    <div>
                                        <x-form.label for="firstName" required>First Name</x-form.label>
                                        <x-form.input id="firstName" name="firstName" placeholder="Jasu" type="text"
                                            value="{{ old('firstName') }}" required />

                                        @error('firstName')
                                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <x-form.label for="lastName" required>Last Name</x-form.label>
                                        <x-form.input id="lastName" name="lastName" placeholder="Dev" type="text"
                                            value="{{ old('lastName') }}" required />
                                        @error('lastName')
                                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <x-form.label for="email" required>Email</x-form.label>
                                    <x-form.input id="email" name="email" placeholder="team@tejaldigital.com" type="email"
                                        value="{{ old('email') }}" required />

                                    @error('email')
                                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <x-form.label for="phone" required>Phone Number</x-form.label>
                                    <x-form.input id="phone" name="phone" placeholder="8949714118" type="tel"
                                        value="{{ old('phone') }}" required />

                                    @error('phone')
                                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <x-form.label for="service" required>Service Interested In</x-form.label>
                                    <x-form.select id="service" name="service" required>
                                        <option value="">Select a service</option>
                                        @foreach (config('staticdata.services') as $service)
                                            <option value="{{ $service }}">{{ $service }}</option>
                                        @endforeach
                                    </x-form.select>
                                    @error('service')
                                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <x-form.label for="message" required>Message</x-form.label>
                                    <x-form.textarea id="message" name="message" placeholder="Tell us about your project..." rows="5" required>{{ old('message') }}</x-form.textarea>

                                    @error('message')
                                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <x-form.primary-button type="submit" class="w-full rounded-lg justify-center py-3">
                                    <x-icons.launch class="w-5 h-5" />
                                    <span>Send Message</span>
                                </x-form.primary-button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="space-y-8">
                    <div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-6">Why Choose Tejal Digital?</h3>
                        <div class="space-y-4">
                            <div class="flex items-center gap-3">
                                <x-icons.check class="w-5 h-5 text-primary-500 flex-shrink-0" />
                                <span class="text-slate-700">{{ config('staticdata.experience_years') }}+ years of industry experience</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <x-icons.check class="w-5 h-5 text-primary-500 flex-shrink-0" />
                                <span class="text-slate-700">{{ config('staticdata.projects') }}+ successful projects completed</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <x-icons.check class="w-5 h-5 text-primary-500 flex-shrink-0" />
                                <span class="text-slate-700">{{ config('staticdata.satisfaction') }}% client satisfaction rate</span>
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
    {{-- CTA Section --}}
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
                Join 100+ satisfied clients who have transformed their businesses with our solutions
            </p>
            <div class="flex items-center justify-center gap-8 text-white/80 mb-10">
                <div class="flex items-center gap-2">
                    <x-icons.launch class="w-5 h-5" />
                    <span>Award Winning</span>
                </div>
                <div class="flex items-center gap-2">
                    <x-icons.users class="w-5 h-5" />
                    <span>Expert Team</span>
                </div>
                <div class="flex items-center gap-2">
                    <x-icons.check class="w-5 h-5" />
                    <span>Proven Results</span>
                </div>
            </div>
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
