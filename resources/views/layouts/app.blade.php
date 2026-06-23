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
    <link rel="preload" as="image" href="{{ asset('assets/images/hero-gradient-bg.png') }}" />
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

<body class="min-h-screen bg-background text-foreground">
    <nav
        class="sticky top-0 z-50 bg-white/50 backdrop-blur-xl px-6 md:px-12 lg:px-24 xl:px-40 py-4 flex items-center justify-between relative">
        <a href="{{ url('/') }}">
            <img src="{{ asset('assets/images/logo.svg') }}" alt="Tejal Digital" class="h-7 w-auto" />
        </a>

        <!-- Desktop Nav Items -->
        <div class="hidden md:flex items-center bg-zinc-50 border border-zinc-200 rounded-full px-1 py-1 gap-2">
            <a href="{{ route('home') }}"
                class="px-4 py-1.5 rounded-full text-sm transition-colors text-zinc-500 hover:text-zinc-400 @activeDesktopLink('home')">Home</a>
            <a href="{{ route('about') }}"
                class="px-4 py-1.5 rounded-full text-sm transition-colors text-zinc-500 hover:text-zinc-400 @activeDesktopLink('about')">About</a>
            <a href="{{ route('services.index') }}"
                class="px-4 py-1.5 rounded-full text-sm transition-colors text-zinc-500 hover:text-zinc-400 @activeDesktopLink('services.*')">Services</a>
            <a href="{{ route('portfolio') }}"
                class="px-4 py-1.5 rounded-full text-sm transition-colors text-zinc-500 hover:text-zinc-400 @activeDesktopLink('portfolio')">Portfolio</a>
            <a href="{{ route('contact') }}"
                class="px-4 py-1.5 rounded-full text-sm transition-colors text-zinc-500 hover:text-zinc-400 @activeDesktopLink('contact')">Contact</a>
        </div>

        <!-- Desktop CTA Button -->
        <a href="{{ route('contact') }}" class="hidden md:flex">
            <x-form.primary-button type="button" class="rounded-full">
                Get started
                <span class="w-7 h-7 rounded-full bg-white flex items-center justify-center">
                    <x-icons.go class="w-4 h-4 text-foreground" />
                </span>
            </x-form.primary-button>
        </a>

        <!-- Mobile Hamburger -->
        <button id="hamburger" onclick="toggleMenu()"
            class="md:hidden flex flex-col gap-1.5 cursor-pointer bg-transparent border-0 p-1">
            <span id="bar1" class="block w-6 h-0.5 bg-zinc-800 transition-transform"></span>
            <span id="bar2" class="block w-6 h-0.5 bg-zinc-800 transition-opacity"></span>
            <span id="bar3" class="block w-6 h-0.5 bg-zinc-800 transition-transform"></span>
        </button>

        <!-- Mobile Menu -->
        <div id="mobileMenu"
            class="hidden absolute top-full left-0 w-full bg-white border-t border-zinc-200 flex-col p-5 gap-1 md:hidden z-50">
            <a href="{{ route('home') }}" class="block px-4 py-2.5 rounded-lg text-sm @activeMobileLink('home')">Home</a>
            <a href="{{ route('about') }}" class="block px-4 py-2.5 rounded-lg text-sm @activeMobileLink('about')">About</a>
            <a href="{{ route('services.index') }}"
                class="block px-4 py-2.5 rounded-lg text-sm @activeMobileLink('services')">Services</a>
            <a href="{{ route('portfolio') }}"
                class="block px-4 py-2.5 rounded-lg text-sm @activeMobileLink('portfolio')">Portfolio</a>
            <a href="{{ route('contact') }}"
                class="block px-4 py-2.5 rounded-lg text-sm @activeMobileLink('contact')">Contact</a>
            <a href="{{ route('contact') }}" class="block">
                <x-form.primary-button type="button" class="rounded-full">
                    Get started
                    <span class="w-7 h-7 rounded-full bg-white flex items-center justify-center">
                        <x-icons.go class="w-4 h-4 text-foreground" />
                    </span>
                </x-form.primary-button>
            </a>
        </div>
    </nav>

    <script>
        let menuOpen = false;

        function toggleMenu() {
            menuOpen = !menuOpen;
            const menu = document.getElementById('mobileMenu');
            const bar1 = document.getElementById('bar1');
            const bar2 = document.getElementById('bar2');
            const bar3 = document.getElementById('bar3');
            if (menuOpen) {
                menu.classList.remove('hidden');
                menu.classList.add('flex');
                bar1.classList.add('rotate-45', 'translate-y-2');
                bar2.classList.add('opacity-0');
                bar3.classList.add('-rotate-45', '-translate-y-2');
            } else {
                menu.classList.add('hidden');
                menu.classList.remove('flex');
                bar1.classList.remove('rotate-45', 'translate-y-2');
                bar2.classList.remove('opacity-0');
                bar3.classList.remove('-rotate-45', '-translate-y-2');
            }
        }
    </script>

    <main>
        @yield('content')
    </main>

    <footer class="relative overflow-hidden px-6 md:px-16 lg:px-24 xl:px-32 w-full text-sm text-white bg-black pt-10">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-14 py-10">
            <div class="flex flex-col space-y-4">
                <a href="/">
                    <img src="{{ asset('assets/images/logo-white.svg') }}" alt="Tejal Digital"
                        class="h-10 w-auto brightness-0 invert" />
                </a>
                <p class="text-sm/7 mt-6">
                    Crafting digital experiences that drive growth and innovation for businesses worldwide.
                </p>
                <div class="flex space-x-4">
                    <a href="https://www.facebook.com/tejaldigitalworks/"
                        class="text-gray-400 hover:text-amber-500 transition-colors">
                        <x-icons.facebook class="h-5 w-5" />
                    </a>
                    <a href="http://linkedin.com/jaswant-lohmror"
                        class="text-gray-400 hover:text-amber-500 transition-colors">
                        <x-icons.linkedin class="h-5 w-5" />
                    </a>
                    <a href="https://www.instagram.com/tejal.digital/"
                        class="text-gray-400 hover:text-amber-500 transition-colors">
                        <x-icons.instagram class="h-5 w-5" />
                    </a>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="flex flex-col text-sm space-y-2.5">
                    <h2 class="text-lg font-bold mb-5 text-white">Company</h2>
                    <a class="text-gray-300 hover:text-primary-500 transition-colors text-sm" href="#">Home</a>
                    <a class="text-gray-300 hover:text-primary-500 transition-colors text-sm" href="#">About
                        us</a>
                    <a class="text-gray-300 hover:text-primary-500 transition-colors text-sm" href="#">Contact
                        us</a>
                    <a class="text-gray-300 hover:text-primary-500 transition-colors text-sm"
                        href="#">Portfolio</a>
                    <a class="text-gray-300 hover:text-primary-500 transition-colors text-sm"
                        href="#">Services</a>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="flex flex-col text-sm space-y-2.5">
                    <h2 class="text-lg font-bold mb-5 text-white">Services</h2>
                    <a href="https://td-v2.test/services/laravel-development"
                        class="text-gray-300 hover:text-primary-500 transition-colors text-sm">
                        Laravel Web App Development
                    </a>
                    <a href="https://td-v2.test/services/saas-development"
                        class="text-gray-300 hover:text-primary-500 transition-colors text-sm">
                        SaaS Application Development
                    </a>
                    <a href="https://td-v2.test/services/wordpress-development"
                        class="text-gray-300 hover:text-primary-500 transition-colors text-sm">
                        WordPress Theme Development
                    </a>
                    <a href="https://td-v2.test/services/ecommerce-development"
                        class="text-gray-300 hover:text-primary-500 transition-colors text-sm">
                        E-commerce Development
                    </a>
                    <a href="https://td-v2.test/services/rest-api-development"
                        class="text-gray-300 hover:text-primary-500 transition-colors text-sm">
                        API Development
                    </a>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="flex flex-col text-sm space-y-2.5">
                    <h2 class="text-lg font-bold mb-5 text-white">Get in touch</h2>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3">
                            <x-icons.map-pin class="h-4 w-4 shrink-0" />
                            <span>Shiv Colony, Nagaur, RJ, 341001</span>
                        </li>
                        <li>
                            <a href="tel:+918949714118" class="flex items-center gap-3 transition hover:text-primary">
                                <x-icons.call class="h-4 w-4 shrink-0" />
                                +91 8949714118
                            </a>
                        </li>
                        <li>
                            <a href="mailto:team@tejaldigital.in"
                                class="flex items-center gap-3 transition hover:text-primary">
                                <x-icons.email class="h-4 w-4 shrink-0" />
                                team@tejaldigital.in
                            </a>
                        </li>
                        <li class="pt-1 text-white/80">Mon – Sat: 10:00 AM – 7:00 PM</li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="flex flex-wrap items-center justify-center sm:justify-between gap-5 py-6 sm:py-4 border-t mt-6 border-white/10">
            <div>
                <img src="{{ asset('assets/images/msme-logo.png') }}" class="h-10 w-auto bg-background rounded-md"/>
            </div>
            <p>
                Copyright 2025 © Tejal Digital. All Right Reserved.
            </p>
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
