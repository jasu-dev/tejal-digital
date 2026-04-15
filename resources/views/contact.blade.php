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
                    <x-icons.whatsapp class="w-4 h-4" />
                    <span class="text-sm font-medium">Get in Touch</span>
                </div>
                <h1 class="text-5xl lg:text-7xl font-bold leading-tight mb-6">
                    <span class="text-white">Let's Build Something</span><br>
                    <span class="text-gradient">Amazing Together</span>
                </h1>
                <p class="text-xl text-on-surface/60 leading-relaxed mb-8 max-w-3xl mx-auto">
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
    <section class="py-24 bg-surface-container">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            {{-- Header --}}
            <div class="text-center mb-20">
                <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 gradient-primary rounded-full text-white">
                    <span class="text-sm font-medium">Contact Information</span>
                </div>
                <h2 class="text-4xl lg:text-6xl font-black text-white mb-6 tracking-tight">
                    Get In Touch
                </h2>
                <p class="text-lg text-on-surface/60 max-w-2xl mx-auto leading-relaxed">
                    Choose the channel that works best for you. We're ready to help.
                </p>
            </div>

            {{-- Contact Cards Grid --}}
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">

                @php
                    $contactItems = [
                        [
                            'icon' => 'email',
                            'label' => 'Email Us',
                            'val' => config('staticdata.email'),
                            'sub' => 'Send us an email anytime',
                        ],
                        [
                            'icon' => 'call',
                            'label' => 'Call Us',
                            'val' => config('staticdata.phone'),
                            'sub' => 'Mon-Fri from 8am to 6pm',
                        ],
                        [
                            'icon' => 'target',
                            'label' => 'Visit Us',
                            'val' => 'Plot No. 3, Shiv Colony',
                            'sub' => 'Nagaur, Rajasthan',
                        ],
                        [
                            'icon' => 'time',
                            'label' => 'Working Hours',
                            'val' => '8AM - 6PM',
                            'sub' => 'Weekend: By appointment',
                        ],
                    ];
                @endphp

                @foreach ($contactItems as $item)
                    <div
                        class="group relative bg-surface-container-high rounded-2xl border border-outline-variant/20 p-8 text-center transition-all duration-500 hover:border-primary/40 hover:-translate-y-2"
                        data-aos="fade-up" data-aos-delay="{{ 100 * $loop->iteration }}" data-aos-duration="800">

                        {{-- Icon: The "Glow" Container --}}
                        <div class="relative w-16 h-16 mx-auto mb-8">
                            {{-- Animated background glow --}}
                            <div
                                class="absolute inset-0 bg-primary/20 rounded-2xl blur-xl group-hover:blur-2xl transition-all opacity-0 group-hover:opacity-100">
                            </div>

                            <div
                                class="relative w-full h-full bg-surface-container rounded-2xl border border-outline-variant/50 flex items-center justify-center group-hover:border-primary group-hover:bg-primary transition-all duration-500">
                                @php $iconName = 'icons.' . $item['icon']; @endphp
                                <x-dynamic-component :component="$iconName"
                                    class="w-7 h-7 text-primary group-hover:text-surface transition-colors duration-500" />
                            </div>
                        </div>

                        {{-- Text Content --}}
                        <h3 class="text-sm font-bold text-on-surface/40 uppercase tracking-widest mb-3">
                            {{ $item['label'] }}
                        </h3>

                        <p
                            class="text-lg font-bold text-on-surface mb-2 tracking-tight group-hover:text-primary transition-colors">
                            {{ $item['val'] }}
                        </p>

                        <p class="text-xs text-on-surface/50 font-medium">
                            {{ $item['sub'] }}
                        </p>

                        {{-- Subtle hover accent bar --}}
                        <div
                            class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-1 bg-primary rounded-t-full group-hover:w-12 transition-all duration-500">
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    {{-- Contact Form --}}
    <section class="py-24" id="contactForm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16">
                <div class="relative" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                    <div class="lg:sticky top-15 rounded-lg bg-surface-container-low border-1 border-outline-variant/20  transition-all duration-300 hover:bg-surface-container-high relative">
                        <div class="p-8">
                            <h3 class="text-2xl font-bold text-on-surface mb-6">Get In Touch</h3>
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
                                    <x-form.input id="email" name="email" placeholder="team@tejaldigital.com"
                                        type="email" value="{{ old('email') }}" required />

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
                                    <x-form.textarea id="message" name="message"
                                        placeholder="Tell us about your project..." rows="5"
                                        required>{{ old('message') }}</x-form.textarea>

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
                <div class="space-y-6" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000">
                    <div>
                        <h3 class="text-2xl font-bold text-white mb-6">Why Choose Tejal Digital?</h3>
                        <div class="grid sm:grid-cols-2 gap-4">
                            @php
                                $stats = [
                                    [
                                        'label' => 'Experience',
                                        'val' => config('staticdata.experience_years') . '+ Years',
                                    ],
                                    ['label' => 'Projects', 'val' => config('staticdata.projects') . '+ Done'],
                                    [
                                        'label' => 'Client Satisfaction',
                                        'val' => config('staticdata.satisfaction') . '%',
                                    ],
                                    ['label' => 'Support', 'val' => '24/7 Expert'],
                                ];
                            @endphp
                            @foreach ($stats as $stat)
                                <div class="p-4 rounded-2xl border border-outline-variant/10 bg-surface-container-high">
                                    <div class="text-primary font-black text-xl">{{ $stat['val'] }}</div>
                                    <div class="text-on-surface/40 text-[10px] font-bold uppercase tracking-widest">
                                        {{ $stat['label'] }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-white mb-6">Frequently Asked Questions</h3>
                        <div class="space-y-4">
                            <div
                                class="rounded-lg bg-surface-container border-1 border-outline-variant/20  transition-all duration-300 hover:bg-surface-container-high relative">
                                <div class="p-6">
                                    <h4 class="font-bold text-on-surface mb-2">How long does a typical project take?
                                    </h4>
                                    <p class="text-on-surface/60 text-sm">Project timelines vary based on complexity, but
                                        most websites take 4-8 weeks from start to finish.
                                    </p>
                                </div>
                            </div>
                            <div
                                class="rounded-lg bg-surface-container border-1 border-outline-variant/20  transition-all duration-300 hover:bg-surface-container-high relative">
                                <div class="p-6">
                                    <h4 class="font-bold text-on-surface mb-2">Do you provide ongoing support?</h4>
                                    <p class="text-on-surface/60 text-sm">Yes, we offer comprehensive maintenance and
                                        support packages to keep your website running smoothly.
                                    </p>
                                </div>
                            </div>
                            <div
                                class="rounded-lg bg-surface-container border-1 border-outline-variant/20  transition-all duration-300 hover:bg-surface-container-high relative">
                                <div class="p-6">
                                    <h4 class="font-bold text-on-surface mb-2">What's your development process?</h4>
                                    <p class="text-on-surface/60 text-sm">We follow a structured 6-step process: Discovery,
                                        Planning, Design, Development, Testing, and Launch.
                                    </p>
                                </div>
                            </div>
                            <div
                                class="rounded-lg bg-surface-container border-1 border-outline-variant/20  transition-all duration-300 hover:bg-surface-container-high relative">
                                <div class="p-6">
                                    <h4 class="font-bold text-on-surface mb-2">Can you work with our existing brand?
                                    </h4>
                                    <p class="text-on-surface/60 text-sm">We can work with your existing brand guidelines
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
    <section class="py-26 relative overflow-hidden">
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
                    Ready to Get Started?
                </h2>

                <p class="text-xl text-on-surface/60 mb-12 max-w-2xl mx-auto leading-relaxed">
                    Join 100+ satisfied clients who have transformed their businesses with our solutions
                </p>
            </div>

            <div class="flex items-center justify-center gap-8 text-on-surface/80 mb-10" data-aos="fade-up" data-aos-delay="150" data-aos-duration="800">
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

            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">

                <a href="{{ route('contact') }}" data-aos="fade-up" data-aos-delay="150" data-aos-duration="800">
                    <x-form.primary-button type="button" class="px-7 py-3 rounded-2xl">
                        <span>Get Free Consultation</span>
                        <x-icons.go class="w-4 h-4" />
                    </x-form.primary-button>
                </a>

                <a href="{{ config('staticdata.whatsapp_url') }}" data-aos="fade-up" data-aos-delay="150" data-aos-duration="800">
                    <x-form.secondary-button type="button" class="px-7 py-3 rounded-2xl">
                        <x-icons.whatsapp class="w-5 h-5" />
                        <span>Chat on WhatsApp</span>
                    </x-form.secondary-button>
                </a>
            </div>
        </div>
    </section>
@endsection
