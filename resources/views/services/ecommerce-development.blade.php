@extends('layouts.app')

@section('head')
    <title>E-commerce Development | Build High-Converting Online Stores</title>
    <meta name="description"
        content="Launch a professional online store with our expert e-commerce development services. We specialize in WooCommerce and custom Laravel storefronts that are secure, fast, and scalable.">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="keywords"
        content="E-commerce Web Development, WooCommerce Specialist, Custom Online Store, Payment Gateway Integration, Shopping Cart Software, Retail Web Solutions">

    <!-- Open Graph -->
    <meta property="og:title" content="E-commerce Development | Tejal Digital">
    <meta property="og:description"
        content="Convert visitors into customers with a seamless, high-performance e-commerce experience.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/images/og-image.png') }}">
@endsection

@section('content')
    {{-- Service Hero --}}
    <section class="relative py-24 overflow-hidden border-b border-outline-variant/20">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-rose-500/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-pink-500/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
            <nav class="flex mb-8" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-sm text-on-surface/60">
                    <li><a href="{{ route('home') }}" class="hover:text-primary transition-colors">Home</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li><a href="{{ route('services') }}" class="hover:text-primary transition-colors">Services</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li class="text-on-surface font-medium">E-commerce Development</li>
                </ol>
            </nav>

            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right" data-aos-duration="1000">
                    <span class="inline-block px-4 py-1.5 mb-6 text-[10px] font-bold uppercase tracking-widest text-rose-400 bg-rose-500/10 rounded-full border border-rose-500/20">
                        Sell Online
                    </span>
                    <h1 class="text-4xl lg:text-6xl font-black text-white leading-tight mb-6">
                        E-commerce <br>
                        <span class="text-gradient from-rose-400 to-pink-500">Development</span>
                    </h1>
                    <p class="text-xl text-on-surface/60 leading-relaxed mb-8">
                        From boutique stores to large-scale retail platforms, we build high-converting e-commerce experiences that make selling effortless for you and buying a delight for your customers.
                    </p>
                    <div class="flex flex-wrap gap-4">
                         <a href="{{ route('contact') }}">
                            <x-form.primary-button type="button" class="px-8 py-4 rounded-2xl bg-rose-600 hover:bg-rose-700 border-rose-600">
                                <span>Launch My Store</span>
                                <x-icons.go class="w-4 h-4" />
                            </x-form.primary-button>
                        </a>
                    </div>
                </div>
                <div class="relative" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="aspect-square max-w-md mx-auto bg-surface-container rounded-[40px] border border-outline-variant/20 p-12 flex items-center justify-center relative overflow-hidden group">
                        <div class="absolute inset-0 bg-gradient-to-br from-rose-500/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <x-icons.cart class="w-32 h-32 text-rose-400 relative z-10" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Service Details Section --}}
    <section class="py-24 bg-surface">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-3 gap-12">
                {{-- Left Side: Main Content --}}
                <div class="lg:col-span-2 space-y-16">
                    {{-- Conversion Focus --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-6 flex items-center gap-4">
                            <span class="w-8 h-1 bg-rose-500 rounded-full"></span>
                            Designed to Convert
                        </h2>
                        <div class="prose prose-invert max-w-none text-on-surface/70 leading-relaxed space-y-4">
                            <p>
                                An e-commerce site is more than just a catalog; it's a sales engine. We focus on creating smooth user journeys, from the initial landing page to the final thank-you message. Every click should bring the customer closer to a purchase.
                            </p>
                            <p>
                                Whether you prefer the flexibility of WooCommerce or the raw power of a custom Laravel-based storefront, we ensure your site is fast, secure, and optimized for maximum conversion rates across all devices.
                            </p>
                        </div>
                    </div>

                    {{-- E-comm Features --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-8">E-commerce Essentials</h2>
                        <div class="grid md:grid-cols-2 gap-6">
                            @php
                                $features = [
                                    ['title' => 'Secure Payment Integration', 'desc' => 'Seamless integration with Stripe, PayPal, Razorpay, or custom UPI solutions.'],
                                    ['title' => 'Inventory Management', 'desc' => 'Real-time tracking of stock levels with automated low-stock notifications.'],
                                    ['title' => 'Customer Accounts', 'desc' => 'Secure login areas for order tracking, wishlists, and personalized profiles.'],
                                    ['title' => 'Product Filtering & Search', 'desc' => 'Fast, intuitive ways for users to find exactly what they are looking for.'],
                                    ['title' => 'Promotions & Coupons', 'desc' => 'Flexible discount engines to drive sales through seasonal offers and referrals.'],
                                    ['title' => 'Automated Shipping Calc', 'desc' => 'Integration with logistics providers for real-time shipping rates and labels.'],
                                ];
                            @endphp
                            @foreach ($features as $f)
                                <div class="p-6 bg-surface-container rounded-2xl border border-outline-variant/10 hover:border-rose-500/30 transition-all group">
                                    <h4 class="text-lg font-bold text-white mb-2 group-hover:text-rose-400 transition-colors">{{ $f['title'] }}</h4>
                                    <p class="text-on-surface/60 text-sm leading-relaxed">{{ $f['desc'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Our Platforms --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-6">Platforms We Master</h2>
                        <div class="prose prose-invert max-w-none text-on-surface/70 leading-relaxed">
                            <p>
                                We choose the best tool for your specific business needs:
                            </p>
                            <ul class="list-disc pl-5 space-y-2">
                                <li><strong>WooCommerce:</strong> Perfect for small to medium businesses looking for a robust, feature-rich store on WordPress.</li>
                                <li><strong>Custom Laravel:</strong> The choice for complex, high-traffic stores that require bespoke logic and maximum performance.</li>
                                <li><strong>Headless E-commerce:</strong> For brands looking to deliver ultra-fast storefronts across multiple platforms (web, mobile, IoT).</li>
                                <li><strong>Third-party Integrations:</strong> Connecting your store to ERPs, CRMs, and marketing automation tools.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Right Side: Meta Info & CTA --}}
                <div class="space-y-8">
                    <div class="p-8 bg-surface-container rounded-3xl border border-outline-variant/20 sticky top-24">
                        <h3 class="text-xl font-bold text-white mb-6">Store Benefits</h3>
                        <ul class="space-y-4 mb-8">
                            <li class="flex gap-3 text-on-surface/70 text-sm">
                                <x-icons.check class="w-5 h-5 text-rose-400 shrink-0" />
                                PCI Compliant Security
                            </li>
                            <li class="flex gap-3 text-on-surface/70 text-sm">
                                <x-icons.check class="w-5 h-5 text-rose-400 shrink-0" />
                                Mobile-Optimized Checkout
                            </li>
                            <li class="flex gap-3 text-on-surface/70 text-sm">
                                <x-icons.check class="w-5 h-5 text-rose-400 shrink-0" />
                                Blazing Fast Performance
                            </li>
                            <li class="flex gap-3 text-on-surface/70 text-sm">
                                <x-icons.check class="w-5 h-5 text-rose-400 shrink-0" />
                                Scalable Growth Path
                            </li>
                        </ul>
                        <div class="pt-6 border-t border-outline-variant/10">
                             <a href="{{ route('contact') }}">
                                <x-form.primary-button type="button" class="w-full justify-center py-4 rounded-2xl bg-rose-600 hover:bg-rose-700 border-rose-600">
                                    <span>Build My Store</span>
                                    <x-icons.go class="w-4 h-4" />
                                </x-form.primary-button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Related Projects --}}
    <section class="py-24 border-t border-outline-variant/20 bg-surface-container/30">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">E-commerce Showcase</h2>
                    <p class="text-on-surface/60">Stores we've built that are driving revenue for our clients.</p>
                </div>
                <a href="{{ route('portfolio') }}" class="text-primary font-bold hover:underline">View All Projects</a>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                 <a href="{{ route('portfolio.promofusion360') }}" class="group bg-surface-container rounded-3xl overflow-hidden border border-outline-variant/20 hover:border-primary/30 transition-all">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('assets/images/promofusion360.png') }}" alt="PromoFusion360" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-primary transition-colors">PromoFusion360 Platform</h3>
                        <p class="text-on-surface/60 text-sm">Subscription-based earning platform with secure payment integration.</p>
                    </div>
                </a>
                <a href="{{ route('portfolio.krishna-academy') }}" class="group bg-surface-container rounded-3xl overflow-hidden border border-outline-variant/20 hover:border-primary/30 transition-all">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('assets/images/krishna-academy.png') }}" alt="Krishna Academy" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-primary transition-colors">KrishnaAcademy LMS</h3>
                        <p class="text-on-surface/60 text-sm">Course-selling platform with automated Razorpay checkout.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- Footer Contact --}}
    @include('sections.contact')
@endsection
