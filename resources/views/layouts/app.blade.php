<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <!-- Robots -->
    <meta name="robots" content="index, follow">
    <!-- Language -->
    <meta http-equiv="content-language" content="en">
    <!-- Theme Color -->
    <meta name="theme-color" content="#D64523">
    @yield('head')
    @verbatim
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Organization",
                "name": "Tejal Digital",
                "url": "https://tejaldigital.in/",
                "logo": "https://tejaldigital.in/assets/images/logo.svg",
                "description": "Tejal Digital is a full-service web development agency offering Laravel, WordPress, CRM, e-commerce, and API development services.",
                "sameAs": [
                    "https://www.facebook.com/tejaldigitalworks/",
                    "https://www.instagram.com/tejal.digital/",
                    "http://linkedin.com/jaswant-lohmror"
                ]
            }
        </script>
    @endverbatim
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-KCTZ3ZDDYB"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-KCTZ3ZDDYB');
    </script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-surface text-on-surface">
    <nav class="sticky top-0 z-50 bg-neutral-950/80 backdrop-blur-xl border-b border-outline-variant/20 shadow-[0_8px_32px_rgba(0,0,0,0.5)]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('assets/images/logo-white.svg') }}" alt="Tejal Digital" class="h-7 w-auto" />
                </a>
                {{-- Desktop Navigation --}}
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="text-white hover:text-amber-600 transition-colors font-medium">
                        Home
                    </a>
                    <a href="{{ route('about') }}" class="text-white hover:text-amber-600 transition-colors font-medium">
                        About
                    </a>
                    <a href="{{ route('services') }}" class="text-white hover:text-amber-600 transition-colors font-medium">
                        Services
                    </a>
                    <a href="{{ route('portfolio') }}" class="text-white hover:text-amber-600 transition-colors font-medium">
                        Portfolio
                    </a>
                    <a href="{{ route('contact') }}">
                        <x-form.primary-button type="button" class="px-6 rounded-2xl">
                            <span>Start Now</span>
                            <x-icons.go class="w-4 h-4" />
                        </x-form.primary-button>
                    </a>
                </div>
                {{-- Mobile menu toggle button --}}
                <div class="md:hidden">
                    <button id="mobile-menu-toggle" class="text-white hover:text-amber-600">
                        <!-- Hamburger Icon -->
                        <x-icons.menu class="h-6 w-6 block" />
                        <!-- Close Icon -->
                        <x-icons.close class="h-6 w-6 hidden" />
                    </button>
                </div>
            </div>

            {{-- Mobile Navigation --}}
            <div id="mobile-menu" class="hidden md:hidden py-4 border-t border-gray-100">
                <div class="flex flex-col space-y-4">
                    <a href="{{ route('home') }}"
                        class="text-white hover:text-amber-600 transition-colors font-medium">
                        Home
                    </a>
                    <a href="{{ route('about') }}"
                        class="text-white hover:text-amber-600 transition-colors font-medium">
                        About
                    </a>
                    <a href="{{ route('services') }}"
                        class="text-white hover:text-amber-600 transition-colors font-medium">
                        Services
                    </a>
                    <a href="{{ route('portfolio') }}"
                        class="text-white hover:text-amber-600 transition-colors font-medium">
                        Portfolio
                    </a>
                    <a href="{{ route('contact') }}">
                        <x-form.primary-button type="button" class="px-6 rounded-2xl">
                            <span>Start Now</span>
                            <x-icons.go class="w-4 h-4" />
                        </x-form.primary-button>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer class="bg-neutral-950 w-full py-4 border-t border-neutral-900 text-neutral-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                {{-- Company Info --}}
                <div class="space-y-4">
                    <img src="{{ asset('assets/images/logo-white.svg') }}" alt="Tejal Digital"
                        class="h-8 w-auto brightness-0 invert" />
                    <p class="text-gray-300 text-sm">
                        Crafting digital experiences that drive growth and innovation for businesses worldwide.
                    </p>
                    <div class="flex space-x-4">
                        <a href="https://www.facebook.com/tejaldigitalworks/"
                            class="text-gray-400 hover:text-amber-500 transition-colors">
                            {{-- Facebook Icon --}}
                            <x-icons.facebook class="h-5 w-5" />
                        </a>
                        <a href="http://linkedin.com/jaswant-lohmror"
                            class="text-gray-400 hover:text-amber-500 transition-colors">
                            {{-- LinkedIn Icon --}}
                            <x-icons.linkedin class="h-5 w-5" />
                        </a>
                        <a href="https://www.instagram.com/tejal.digital/"
                            class="text-gray-400 hover:text-amber-500 transition-colors">
                            {{-- Instagram Icon --}}
                            <x-icons.instagram class="h-5 w-5" />
                        </a>
                    </div>
                </div>
                {{-- Quick Links --}}
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="{{ route('home') }}"
                                class="text-gray-300 hover:text-secondary-500 transition-colors text-sm">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}"
                                class="text-gray-300 hover:text-secondary-500 transition-colors text-sm">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('services') }}"
                                class="text-gray-300 hover:text-secondary-500 transition-colors text-sm">
                                Services
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('portfolio') }}"
                                class="text-gray-300 hover:text-secondary-500 transition-colors text-sm">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}"
                                class="text-gray-300 hover:text-secondary-500 transition-colors text-sm">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
                {{-- Services --}}
                <div>
                    <h3 class="text-lg font-semibold mb-4">Services</h3>
                    <ul class="space-y-2">
                        @foreach (['Laravel Web App Development', 'Web Portals & Custom Software', 'Custom CRM Development', 'WordPress Theme Development', 'E-commerce Development'] as $item)
                            <li>
                                <a href="{{ route('services') }}"
                                    class="text-gray-300 hover:text-secondary-500 transition-colors text-sm">
                                    {{ $item }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                {{-- Newsletter --}}
                <div>
                    <h3 class="text-lg font-semibold mb-4">Stay Updated</h3>
                    <p class="text-gray-300 text-sm mb-4">
                        Subscribe to our newsletter for the latest insights and updates.
                    </p>
                    <form action="{{ route('subscribe') }}" method="POST" class="flex space-x-2">
                        @csrf
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="Your email"
                            class="bg-brand-dark-800 border border-brand-dark-800 text-white placeholder-white/50 text-sm px-3 py-2 rounded w-full focus:outline-none" />
                        <button type="submit"
                            class="bg-primary-500 cursor-pointer text-white px-4 py-2 rounded text-sm hover:opacity-90">
                            Subscribe
                        </button>
                    </form>
                    @error('email')
                        <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                    @enderror
                    @if (session('success'))
                        <p class="text-sm text-green-600 mt-2">{{ session('success') }}</p>
                    @endif
                </div>
            </div>
            {{-- Footer Bottom --}}
            <div class="border-t border-outline-variant/20 mt-10 pt-6 flex flex-col md:flex-row justify-between items-center">
                <p class="text-brand-dark-100 text-sm">© {{ date('Y') }} Tejal Digital. All rights reserved.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-brand-dark-100 hover:text-secondary-500 text-sm">Privacy Policy</a>
                    <a href="#" class="text-brand-dark-100 hover:text-secondary-500 text-sm">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const toggle = document.getElementById('mobile-menu-toggle');
            const menu = document.getElementById('mobile-menu');
            const iconMenu = document.getElementById('icon-menu');
            const iconClose = document.getElementById('icon-close');

            toggle.addEventListener('click', () => {
                menu.classList.toggle('hidden');
                iconMenu.classList.toggle('hidden');
                iconClose.classList.toggle('hidden');
            });
        });
    </script>
</body>
</html>