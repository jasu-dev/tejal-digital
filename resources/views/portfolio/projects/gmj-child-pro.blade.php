@extends('layouts.app')

@section('head')
    <title>GMJ Child Pro | JS-Free Custom Genesis Child Theme</title>
    <meta name="description"
        content="See how we built a blazing-fast, JS-free Genesis child theme for GMJ, optimized for Hindi content and maximum performance.">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="keywords"
        content="GMJ Child Pro, Genesis Framework Theme, Fast WordPress Child Theme, Hindi Blog Design, JS-Free Web Development, Custom WP Hooks">

    <!-- Open Graph -->
    <meta property="og:title" content="GMJ Child Pro Case Study | Tejal Digital">
    <meta property="og:description"
        content="A deep dive into building a high-performance Genesis child theme with zero JavaScript dependency.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/images/gmjchildpro.png') }}">
@endsection

@section('content')
    {{-- Project Hero --}}
    <section class="relative py-24 overflow-hidden border-b border-outline-variant/20">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-amber-500/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-orange-500/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
            <nav class="flex mb-8" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-sm text-on-surface/60">
                    <li><a href="{{ route('home') }}" class="hover:text-primary transition-colors">Home</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li><a href="{{ route('portfolio') }}" class="hover:text-primary transition-colors">Portfolio</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li class="text-on-surface font-medium">GMJ Child Pro</li>
                </ol>
            </nav>

            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right" data-aos-duration="1000">
                    <span class="inline-block px-4 py-1.5 mb-6 text-[10px] font-bold uppercase tracking-widest text-amber-400 bg-amber-500/10 rounded-full border border-amber-500/20">
                        WP Child Theme Development
                    </span>
                    <h1 class="text-4xl lg:text-6xl font-black text-white leading-tight mb-6">
                        GMJ Child <br>
                        <span class="text-gradient from-amber-400 to-orange-500">Pro Theme</span>
                    </h1>
                    <p class="text-xl text-on-surface/60 leading-relaxed mb-8">
                        A performance-engineered Genesis child theme built exclusively with HTML and CSS to deliver unparalleled speed for a regional Hindi blog.
                    </p>
                    <div class="flex flex-wrap gap-3 mb-10">
                        @foreach (['Genesis Framework', 'HTML5', 'CSS3', 'WordPress', 'Zero-JS', 'Hindi Content Optimized'] as $tech)
                            <span class="px-4 py-2 bg-surface-container rounded-xl border border-outline-variant/20 text-sm font-medium text-on-surface/80">
                                {{ $tech }}
                            </span>
                        @endforeach
                    </div>
                </div>
                <div class="relative" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="aspect-video rounded-3xl overflow-hidden border border-outline-variant/30 shadow-2xl">
                        <img src="{{ asset('assets/images/gmjchildpro.png') }}" alt="GMJ Child Pro Theme Preview" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-6 -right-6 bg-surface-container p-6 rounded-2xl border border-outline-variant/20 shadow-xl hidden md:block">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-amber-500/20 flex items-center justify-center">
                                <x-icons.code class="w-6 h-6 text-amber-400" />
                            </div>
                            <div>
                                <p class="text-xs text-on-surface/60 font-bold uppercase tracking-wider">Goal</p>
                                <p class="text-lg font-black text-white">JS-Free Architecture</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Project Details Section --}}
    <section class="py-24 bg-surface">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-3 gap-12">
                {{-- Left Side: Main Content --}}
                <div class="lg:col-span-2 space-y-16">
                    {{-- The Challenge --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-6 flex items-center gap-4">
                            <span class="w-8 h-1 bg-amber-500 rounded-full"></span>
                            The Challenge
                        </h2>
                        <div class="prose prose-invert max-w-none text-on-surface/70 leading-relaxed space-y-4">
                            <p>
                                The Genesis Framework is known for its speed, but poorly designed child themes often introduce significant lag. The client wanted a Hindi blog theme that was not just fast, but completely free of JavaScript on the front end to ensure it would load instantly even on low-bandwidth mobile networks in rural areas.
                            </p>
                            <p>
                                Key objectives:
                            </p>
                            <ul class="list-disc pl-5 space-y-2">
                                <li>Build a highly responsive layout using only CSS.</li>
                                <li>Ensure perfect rendering of Hindi fonts without layout shifts.</li>
                                <li>Integrate custom Genesis hooks to replace standard widget behaviors.</li>
                                <li>Maintain a minimal, professional aesthetic that appeals to a broad audience.</li>
                            </ul>
                        </div>
                    </div>

                    {{-- The Solution --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-6 flex items-center gap-4">
                            <span class="w-8 h-1 bg-orange-500 rounded-full"></span>
                            The Solution
                        </h2>
                        <div class="prose prose-invert max-w-none text-on-surface/70 leading-relaxed space-y-4">
                            <p>
                                We took a "Back to Basics" approach, leveraging the full power of the Genesis Framework's hook system. By using semantic HTML5 and modern CSS techniques like Grid and Flexbox, we eliminated the need for a single line of JavaScript for the site's layout and functionality.
                            </p>
                            <p>
                                **Font Management:** We optimized the delivery of regional Hindi fonts by using local hosting and the `font-display: swap` property, ensuring that text is readable the moment the page begins to load.
                            </p>
                            <p>
                                **Hook-Based Customization:** Instead of using standard WordPress widgets which can be bulky, we created custom Genesis actions to inject content exactly where needed, keeping the DOM structure lean and fast.
                            </p>
                        </div>
                    </div>

                    {{-- Key Features --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-8">Core Features</h2>
                        <div class="grid md:grid-cols-2 gap-6">
                            @php
                                $features = [
                                    ['title' => 'Pure CSS Framework', 'desc' => 'Responsive layout and interactions built entirely without JavaScript for maximum speed.'],
                                    ['title' => 'Genesis Hooks Integration', 'desc' => 'Tailored content injection using the powerful Genesis Framework architecture.'],
                                    ['title' => 'Hindi Font Optimization', 'desc' => 'Carefully balanced typography to ensure readability and fast loading of regional scripts.'],
                                    ['title' => 'Lightweight Assets', 'desc' => 'Minimized CSS files and optimized SVGs for a total page weight of under 100KB.'],
                                    ['title' => 'Ad-Sense Ready', 'desc' => 'Strategically placed ad containers that respect the layout and performance of the theme.'],
                                    ['title' => 'SEO Native', 'desc' => 'Leverages Genesis\' built-in SEO capabilities with additional custom schema enhancements.'],
                                ];
                            @endphp
                            @foreach ($features as $f)
                                <div class="p-6 bg-surface-container rounded-2xl border border-outline-variant/10 hover:border-amber-500/30 transition-all group">
                                    <h4 class="text-lg font-bold text-white mb-2 group-hover:text-amber-400 transition-colors">{{ $f['title'] }}</h4>
                                    <p class="text-on-surface/60 text-sm leading-relaxed">{{ $f['desc'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Right Side: Meta Info & CTA --}}
                <div class="space-y-8">
                    <div class="p-8 bg-surface-container rounded-3xl border border-outline-variant/20 sticky top-24">
                        <h3 class="text-xl font-bold text-white mb-6">Project Info</h3>
                        <div class="space-y-6">
                            <div>
                                <p class="text-[10px] font-bold text-amber-400 uppercase tracking-widest mb-1">Service Type</p>
                                <p class="text-on-surface/80 font-medium">Genesis Child Theme Development</p>
                            </div>
                            <div>
                                <p class="text-[10px] font-bold text-amber-400 uppercase tracking-widest mb-1">Core Goal</p>
                                <p class="text-on-surface/80 font-medium">JS-Free Performance</p>
                            </div>
                            <div>
                                <p class="text-[10px] font-bold text-amber-400 uppercase tracking-widest mb-1">Stack</p>
                                <p class="text-on-surface/80 font-medium">WordPress, Genesis Framework, PHP</p>
                            </div>
                            <div class="pt-6 border-t border-outline-variant/10">
                                <a href="{{ route('contact') }}">
                                    <x-form.primary-button type="button" class="w-full justify-center py-4 rounded-2xl bg-amber-600 hover:bg-amber-700 border-amber-600">
                                        <span>Build My Genesis Theme</span>
                                        <x-icons.go class="w-4 h-4" />
                                    </x-form.primary-button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- More Projects --}}
    <section class="py-24 border-t border-outline-variant/20">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">Other Case Studies</h2>
                    <p class="text-on-surface/60">Explore more of our recent work and digital transformations.</p>
                </div>
                <a href="{{ route('portfolio') }}" class="text-primary font-bold hover:underline">View All Projects</a>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                 <a href="{{ route('portfolio.tech-upkar') }}" class="group bg-surface-container rounded-3xl overflow-hidden border border-outline-variant/20 hover:border-primary/30 transition-all">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('assets/images/techupkar.png') }}" alt="Tech Upkar" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-primary transition-colors">TechUpkar Theme</h3>
                        <p class="text-on-surface/60 text-sm">Lightning-fast WordPress blog solution.</p>
                    </div>
                </a>
                <a href="{{ route('portfolio.tech-nukti') }}" class="group bg-surface-container rounded-3xl overflow-hidden border border-outline-variant/20 hover:border-primary/30 transition-all">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('assets/images/technukti.png') }}" alt="Tech Nukti" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-primary transition-colors">Tech Nukti – Custom WP Theme</h3>
                        <p class="text-on-surface/60 text-sm">Blazing-fast WordPress theme with perfect PageSpeed scores.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- Footer Contact --}}
    @include('sections.contact')
@endsection
