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
<body>
    <nav class="sticky top-0 z-50 bg-white/95 backdrop-blur-sm border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('assets/images/logo.svg') }}" alt="Tejal Digital" class="h-7 w-auto" />
                </a>
                {{-- Desktop Navigation --}}
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-amber-600 transition-colors font-medium">
                        Home
                    </a>
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-amber-600 transition-colors font-medium">
                        About
                    </a>
                    <a href="{{ route('services') }}" class="text-gray-700 hover:text-amber-600 transition-colors font-medium">
                        Services
                    </a>
                    <a href="{{ route('portfolio') }}" class="text-gray-700 hover:text-amber-600 transition-colors font-medium">
                        Portfolio
                    </a>
                    <a href="{{ route('contact') }}">
                        <x-form.primary-button type="button" class="rounded-2xl">
                            <span>Start Now</span>
                            <x-icons.go class="w-4 h-4" />
                        </x-form.primary-button>
                    </a>
                </div>
                {{-- Mobile menu toggle button --}}
                <div class="md:hidden">
                    <button id="mobile-menu-toggle" class="text-gray-700 hover:text-amber-600">
                        <!-- Hamburger Icon -->
                        <svg id="icon-menu" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 block" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <!-- Close Icon -->
                        <svg id="icon-close" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hidden" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            {{-- Mobile Navigation --}}
            <div id="mobile-menu" class="hidden md:hidden py-4 border-t border-gray-100">
                <div class="flex flex-col space-y-4">
                    <a href="{{ route('home') }}"
                        class="text-gray-700 hover:text-amber-600 transition-colors font-medium">
                        Home
                    </a>
                    <a href="{{ route('about') }}"
                        class="text-gray-700 hover:text-amber-600 transition-colors font-medium">
                        About
                    </a>
                    <a href="{{ route('services') }}"
                        class="text-gray-700 hover:text-amber-600 transition-colors font-medium">
                        Services
                    </a>
                    <a href="{{ route('portfolio') }}"
                        class="text-gray-700 hover:text-amber-600 transition-colors font-medium">
                        Portfolio
                    </a>
                    <a href="{{ route('contact') }}"
                        class="bg-primary text-white px-4 py-2 rounded w-fit font-medium transition">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer class="bg-brand-dark-950 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
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
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path d="M18 2h-3a6 6 0 00-6 6v3H6v4h3v8h4v-8h3l1-4h-4V8a2 2 0 012-2h3z" />
                            </svg>
                        </a>
                        <a href="http://linkedin.com/jaswant-lohmror"
                            class="text-gray-400 hover:text-amber-500 transition-colors">
                            {{-- LinkedIn Icon --}}
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path d="M16 8a6 6 0 016 6v6h-4v-6a2 2 0 00-4 0v6h-4v-6a6 6 0 016-6zM2 9h4v12H2z" />
                                <circle cx="4" cy="4" r="2" />
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/tejal.digital/"
                            class="text-gray-400 hover:text-amber-500 transition-colors">
                            {{-- Instagram Icon --}}
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z" />
                                <line x1="17.5" y1="6.5" x2="17.5" y2="6.5" />
                            </svg>
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
            <div class="border-t border-brand-dark-800 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center">
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