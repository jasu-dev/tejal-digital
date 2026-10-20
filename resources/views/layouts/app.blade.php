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
    @fonts
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
                Get a Free Quote
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
                    Get a Free Quote
                    <span class="w-7 h-7 rounded-full bg-white flex items-center justify-center">
                        <x-icons.go class="w-4 h-4 text-foreground" />
                    </span>
                </x-form.primary-button>
            </a>
        </div>
    </nav>

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
                    Website and custom software development for businesses that want to grow - from Laravel web apps and SaaS to WordPress and eCommerce.
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
                    <a class="text-gray-300 hover:text-primary-500 transition-colors text-sm" href="{{ route('home') }}">Home</a>
                    <a class="text-gray-300 hover:text-primary-500 transition-colors text-sm" href="{{ route('about') }}">About
                        us</a>
                    <a class="text-gray-300 hover:text-primary-500 transition-colors text-sm" href="{{ route('contact') }}">Contact
                        us</a>
                    <a class="text-gray-300 hover:text-primary-500 transition-colors text-sm"
                        href="{{ route('portfolio') }}">Portfolio</a>
                    <a class="text-gray-300 hover:text-primary-500 transition-colors text-sm"
                        href="{{ route('services.index') }}">Services</a>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="flex flex-col text-sm space-y-2.5">
                    <h2 class="text-lg font-bold mb-5 text-white">Services</h2>
                    <a href="{{ route('services.laravel-development') }}"
                        class="text-gray-300 hover:text-primary-500 transition-colors text-sm">
                        Laravel Web App Development
                    </a>
                    <a href="{{ route('services.saas-development') }}"
                        class="text-gray-300 hover:text-primary-500 transition-colors text-sm">
                        SaaS Application Development
                    </a>
                    <a href="{{ route('services.wordpress-development') }}"
                        class="text-gray-300 hover:text-primary-500 transition-colors text-sm">
                        WordPress Theme Development
                    </a>
                    <a href="{{ route('services.ecommerce-development') }}"
                        class="text-gray-300 hover:text-primary-500 transition-colors text-sm">
                        E-commerce Development
                    </a>
                    <a href="{{ route('services.api-development') }}"
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
                <img src="{{ asset('assets/images/msme-logo.png') }}" alt="MSME Registered" class="h-10 w-auto bg-background rounded-md"/>
            </div>
            <p>
                Copyright {{ date('Y') }} © Tejal Digital. All Rights Reserved.
            </p>
        </div>
    </footer>

    <a href="{{ config('staticdata.whatsapp_url') }}" target="_blank" rel="noopener" aria-label="Chat on WhatsApp"
        class="fixed bottom-5 right-5 z-50 flex items-center gap-2 rounded-full bg-[#25D366] text-white pl-3.5 pr-4 py-3 shadow-xl shadow-black/15 hover:scale-105 transition-transform">
        <x-icons.whatsapp class="w-6 h-6" />
        <span class="hidden sm:inline text-sm font-semibold">Chat with us</span>
    </a>

    {{-- Lead Capture Popup --}}
    <div id="leadPopupOverlay"
        style="display:none; position:fixed; inset:0; z-index:9999; background:rgba(0,0,0,0.55); backdrop-filter:blur(4px); align-items:center; justify-content:center; padding:1rem;"
        role="dialog" aria-modal="true" aria-labelledby="leadPopupTitle">
        <div id="leadPopupCard"
            style="background:#fff; border-radius:1.25rem; width:100%; max-width:480px; box-shadow:0 32px 80px rgba(0,0,0,0.22); overflow:hidden; transform:translateY(30px) scale(0.96); opacity:0; transition:transform 0.4s cubic-bezier(0.34,1.56,0.64,1), opacity 0.35s ease;">
            {{-- Gradient header bar --}}
            <div style="background:linear-gradient(135deg,#D64523 0%,#f07340 100%); padding:1.75rem 1.75rem 1.5rem; position:relative;">
                <button id="leadPopupClose" onclick="closeLeadPopup()" aria-label="Close popup"
                    style="position:absolute; top:1rem; right:1rem; background:rgba(255,255,255,0.2); border:none; border-radius:50%; width:2rem; height:2rem; cursor:pointer; display:flex; align-items:center; justify-content:center; color:#fff; font-size:1.1rem; line-height:1; transition:background 0.2s;"
                    onmouseover="this.style.background='rgba(255,255,255,0.35)'" onmouseout="this.style.background='rgba(255,255,255,0.2)'">
                    ✕
                </button>
                <div style="display:inline-flex; align-items:center; gap:0.5rem; background:rgba(255,255,255,0.18); border-radius:999px; padding:0.25rem 0.75rem; margin-bottom:0.75rem;">
                    <span style="font-size:0.7rem; font-weight:700; letter-spacing:0.08em; color:#fff; text-transform:uppercase;">Free Consultation</span>
                </div>
                <h2 id="leadPopupTitle" style="color:#fff; font-size:1.4rem; font-weight:800; margin:0 0 0.35rem; line-height:1.3;">
                    Let's Build Something Great 🚀
                </h2>
                <p style="color:rgba(255,255,255,0.85); font-size:0.85rem; margin:0; line-height:1.6;">
                    Drop your details and we'll get back to you within 24 hours with a free project estimate.
                </p>
            </div>
            {{-- Form body --}}
            <div style="padding:1.5rem 1.75rem 1.75rem;">
                <div id="leadPopupSuccess" style="display:none; text-align:center; padding:1.5rem 0;">
                    <div style="font-size:2.5rem; margin-bottom:0.5rem;">🎉</div>
                    <p style="font-weight:700; font-size:1.1rem; color:#16a34a; margin:0 0 0.4rem;">Message Sent!</p>
                    <p style="font-size:0.85rem; color:#6b7280; margin:0;">We'll reach out shortly. Talk soon!</p>
                </div>
                <form id="leadPopupForm" action="{{ route('contact.store') }}" method="POST" style="display:flex; flex-direction:column; gap:0.9rem;">
                    @csrf
                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:0.75rem;">
                        <div>
                            <label for="lp_firstName" style="font-size:0.78rem; font-weight:600; color:#374151; display:block; margin-bottom:0.3rem;">First Name <span style="color:#D64523;">*</span></label>
                            <input id="lp_firstName" name="firstName" type="text" placeholder="John" required
                                style="width:100%; height:2.4rem; border:1.5px solid #e5e7eb; border-radius:0.5rem; padding:0 0.75rem; font-size:0.85rem; color:#111827; outline:none; transition:border-color 0.2s; box-sizing:border-box;"
                                onfocus="this.style.borderColor='#D64523'" onblur="this.style.borderColor='#e5e7eb'">
                        </div>
                        <div>
                            <label for="lp_lastName" style="font-size:0.78rem; font-weight:600; color:#374151; display:block; margin-bottom:0.3rem;">Last Name <span style="color:#D64523;">*</span></label>
                            <input id="lp_lastName" name="lastName" type="text" placeholder="Doe" required
                                style="width:100%; height:2.4rem; border:1.5px solid #e5e7eb; border-radius:0.5rem; padding:0 0.75rem; font-size:0.85rem; color:#111827; outline:none; transition:border-color 0.2s; box-sizing:border-box;"
                                onfocus="this.style.borderColor='#D64523'" onblur="this.style.borderColor='#e5e7eb'">
                        </div>
                    </div>
                    <div>
                        <label for="lp_email" style="font-size:0.78rem; font-weight:600; color:#374151; display:block; margin-bottom:0.3rem;">Email <span style="color:#D64523;">*</span></label>
                        <input id="lp_email" name="email" type="email" placeholder="you@company.com" required
                            style="width:100%; height:2.4rem; border:1.5px solid #e5e7eb; border-radius:0.5rem; padding:0 0.75rem; font-size:0.85rem; color:#111827; outline:none; transition:border-color 0.2s; box-sizing:border-box;"
                            onfocus="this.style.borderColor='#D64523'" onblur="this.style.borderColor='#e5e7eb'">
                    </div>
                    <div>
                        <label for="lp_phone" style="font-size:0.78rem; font-weight:600; color:#374151; display:block; margin-bottom:0.3rem;">Phone <span style="color:#D64523;">*</span></label>
                        <input id="lp_phone" name="phone" type="tel" placeholder="+91 98765 43210" required
                            style="width:100%; height:2.4rem; border:1.5px solid #e5e7eb; border-radius:0.5rem; padding:0 0.75rem; font-size:0.85rem; color:#111827; outline:none; transition:border-color 0.2s; box-sizing:border-box;"
                            onfocus="this.style.borderColor='#D64523'" onblur="this.style.borderColor='#e5e7eb'">
                    </div>
                    <div>
                        <label for="lp_message" style="font-size:0.78rem; font-weight:600; color:#374151; display:block; margin-bottom:0.3rem;">What do you need? <span style="color:#D64523;">*</span></label>
                        <textarea id="lp_message" name="message" placeholder="Tell us briefly about your project..." required rows="3"
                            style="width:100%; border:1.5px solid #e5e7eb; border-radius:0.5rem; padding:0.5rem 0.75rem; font-size:0.85rem; color:#111827; outline:none; transition:border-color 0.2s; resize:none; font-family:inherit; box-sizing:border-box;"
                            onfocus="this.style.borderColor='#D64523'" onblur="this.style.borderColor='#e5e7eb'"></textarea>
                    </div>
                    <input type="hidden" name="service" value="General Inquiry">
                    <button type="submit" id="leadPopupSubmitBtn"
                        style="width:100%; padding:0.75rem; background:linear-gradient(135deg,#D64523,#f07340); color:#fff; font-weight:700; font-size:0.9rem; border:none; border-radius:0.6rem; cursor:pointer; display:flex; align-items:center; justify-content:center; gap:0.5rem; transition:opacity 0.2s, transform 0.15s; letter-spacing:0.01em;"
                        onmouseover="this.style.opacity='0.9'" onmouseout="this.style.opacity='1'">
                        <span>Get My Free Quote</span>
                        <span style="font-size:1rem;">→</span>
                    </button>
                    <p style="text-align:center; font-size:0.72rem; color:#9ca3af; margin:0;">
                        🔒 Your info is safe. No spam, ever.
                    </p>
                </form>
            </div>
        </div>
    </div>

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

        // ── Lead Capture Popup ──────────────────────────────────────────
        (function () {
            var STORAGE_KEY = 'td_lead_popup_shown';
            var DELAY_MS    = 10000; // 10 seconds

            function openLeadPopup() {
                var overlay = document.getElementById('leadPopupOverlay');
                var card    = document.getElementById('leadPopupCard');
                overlay.style.display = 'flex';
                // Trigger animation after paint
                requestAnimationFrame(function () {
                    requestAnimationFrame(function () {
                        card.style.transform = 'translateY(0) scale(1)';
                        card.style.opacity   = '1';
                    });
                });
                document.addEventListener('keydown', onEscKey);
            }

            window.closeLeadPopup = function () {
                var overlay = document.getElementById('leadPopupOverlay');
                var card    = document.getElementById('leadPopupCard');
                card.style.transform = 'translateY(30px) scale(0.96)';
                card.style.opacity   = '0';
                setTimeout(function () { overlay.style.display = 'none'; }, 380);
                document.removeEventListener('keydown', onEscKey);
                // Remember that the popup was dismissed this session
                try { sessionStorage.setItem(STORAGE_KEY, '1'); } catch(e) {}
            };

            function onEscKey(e) {
                if (e.key === 'Escape') { closeLeadPopup(); }
            }

            // Close popup when clicking outside the card
            document.getElementById('leadPopupOverlay').addEventListener('click', function (e) {
                if (e.target === this) { closeLeadPopup(); }
            });

            // Handle form submission via fetch so the user stays on the page
            document.getElementById('leadPopupForm').addEventListener('submit', function (e) {
                e.preventDefault();
                var form = this;
                var btn  = document.getElementById('leadPopupSubmitBtn');
                btn.disabled = true;
                btn.querySelector('span').textContent = 'Sending…';

                fetch(form.action, {
                    method: 'POST',
                    headers: { 'X-Requested-With': 'XMLHttpRequest' },
                    body: new FormData(form)
                })
                .then(function (res) {
                    // Laravel redirects on success; any 2xx / 3xx is treated as OK
                    form.style.display = 'none';
                    document.getElementById('leadPopupSuccess').style.display = 'block';
                    try { sessionStorage.setItem(STORAGE_KEY, '1'); } catch(e) {}
                    setTimeout(closeLeadPopup, 3500);
                })
                .catch(function () {
                    btn.disabled = false;
                    btn.querySelector('span').textContent = 'Get My Free Quote';
                    alert('Something went wrong. Please try again.');
                });
            });

            // Fire after delay — only once per session
            try {
                if (!sessionStorage.getItem(STORAGE_KEY)) {
                    setTimeout(openLeadPopup, DELAY_MS);
                }
            } catch(e) {
                setTimeout(openLeadPopup, DELAY_MS);
            }
        })();
    </script>
</body>

</html>
