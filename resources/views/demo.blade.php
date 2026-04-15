<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Tejal Digital | Kinetic Curation for the Modern Web</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "primary-fixed": "#ffdad2",
                        "surface-container-low": "#1c1b1b",
                        "surface-container-highest": "#353534",
                        "tertiary-fixed": "#e2e2e2",
                        "tertiary-fixed-dim": "#c6c6c7",
                        "on-primary-fixed-variant": "#8b1b00",
                        "on-tertiary-fixed-variant": "#454747",
                        "error-container": "#93000a",
                        "on-error": "#690005",
                        "primary-fixed-dim": "#ffb4a3",
                        "secondary-fixed": "#d5e3fd",
                        "surface-bright": "#393939",
                        "secondary-container": "#3c4a5e",
                        "error": "#ffb4ab",
                        "primary": "#ffb4a3",
                        "on-surface-variant": "#e2bfb6",
                        "inverse-surface": "#e5e2e1",
                        "primary-container": "#f85d39",
                        "surface-container-lowest": "#0e0e0e",
                        "surface-container-high": "#2a2a2a",
                        "inverse-on-surface": "#313030",
                        "on-primary": "#621000",
                        "outline": "#a98982",
                        "on-background": "#e5e2e1",
                        "on-tertiary-container": "#282a2a",
                        "on-primary-container": "#560d00",
                        "on-primary-fixed": "#3d0700",
                        "secondary": "#b9c7e0",
                        "surface-dim": "#131313",
                        "surface-tint": "#ffb4a3",
                        "on-tertiary": "#2f3131",
                        "on-secondary-fixed-variant": "#3a485c",
                        "tertiary": "#c6c6c7",
                        "on-surface": "#e5e2e1",
                        "outline-variant": "#5a413b",
                        "secondary-fixed-dim": "#b9c7e0",
                        "on-secondary-fixed": "#0d1c2f",
                        "on-secondary-container": "#abb9d2",
                        "tertiary-container": "#909191",
                        "inverse-primary": "#b22c0a",
                        "background": "#131313",
                        "surface-container": "#201f1f",
                        "on-secondary": "#233144",
                        "surface-variant": "#353534",
                        "on-error-container": "#ffdad6",
                        "on-tertiary-fixed": "#1a1c1c",
                        "surface": "#131313"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "1.5rem",
                        "full": "9999px"
                    },
                    "fontFamily": {
                        "headline": ["Plus Jakarta Sans"],
                        "body": ["Inter"],
                        "label": ["Inter"]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .glass-card {
            background: rgba(53, 53, 52, 0.4);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }
    </style>
</head>

<body class="bg-surface text-on-surface font-body selection:bg-primary-container selection:text-on-primary-container">
    <!-- TopNavBar (Shared Component Reference: TopNavBar) -->
    <nav
        class="fixed top-0 w-full z-50 bg-neutral-950/80 backdrop-blur-xl border-b border-neutral-50/10 shadow-[0_8px_32px_rgba(0,0,0,0.5)]">
        <div class="flex justify-between items-center w-full px-6 py-4 max-w-7xl mx-auto font-['Plus_Jakarta_Sans']">
            <div class="text-2xl font-black tracking-tighter text-neutral-50">
                Tejal Digital
            </div>
            <div
                class="hidden md:flex items-center gap-8 font-['Plus_Jakarta_Sans'] uppercase tracking-widest text-[10px] font-bold">
                <a class="text-orange-500 border-b-2 border-orange-500 pb-1" href="#">Work</a>
                <a class="text-neutral-400 hover:text-neutral-100 transition-colors" href="#">Services</a>
                <a class="text-neutral-400 hover:text-neutral-100 transition-colors" href="#">About</a>
                <a class="text-neutral-400 hover:text-neutral-100 transition-colors" href="#">Contact</a>
            </div>
            <button
                class="bg-gradient-to-r from-primary to-primary-container text-on-primary font-bold px-6 py-2.5 rounded-xl hover:scale-105 active:scale-95 transition-all duration-300">
                Start a Project
            </button>
        </div>
    </nav>
    <main class="pt-24">
        <!-- Hero Section -->
        <section class="relative min-h-[921px] flex items-center px-8 max-w-screen-2xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-7 z-10">
                    <span
                        class="inline-block px-4 py-1.5 mb-6 text-sm font-label tracking-widest text-primary bg-primary/10 rounded-full">EST.
                        2024 DIGITAL AGENCY</span>
                    <h1
                        class="font-headline text-6xl md:text-8xl font-extrabold tracking-tighter leading-[0.9] text-white mb-8">
                        Build Your <br /><span class="text-primary-container">Digital Future</span>
                    </h1>
                    <p class="text-on-surface-variant text-xl max-w-xl leading-relaxed mb-10">
                        We curate high-end digital experiences through strategic engineering and cinematic design. Your
                        vision, executed with surgical precision.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <button
                            class="px-8 py-4 bg-gradient-to-r from-primary to-primary-container text-on-primary font-bold rounded-xl text-lg hover:translate-y-[-2px] transition-transform">
                            Start Your Project
                        </button>
                        <button
                            class="px-8 py-4 bg-surface-container-high text-white font-semibold rounded-xl text-lg border border-outline-variant/15 flex items-center gap-2 hover:bg-surface-bright transition-colors">
                            View Showcase <span class="material-symbols-outlined">arrow_forward</span>
                        </button>
                    </div>
                </div>
                <div class="lg:col-span-5 relative">
                    <div
                        class="aspect-square rounded-[3rem] overflow-hidden rotate-3 hover:rotate-0 transition-transform duration-700">
                        <img class="w-full h-full object-cover"
                            data-alt="Abstract 3D digital art featuring flowing organic ribbons of dark chrome and glowing orange light in a minimalist dark environment"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDjx7VuoNqRbK5_EYEDp9RYjSujwEBZO7F3Ut1BpzaqSnWIlsTG6zsexICtP-9FWfzdVZxA6oIgJfQo1FI5JG6x8uQxdTVyfcIAJNwiGwC1DNT2edSfM0Ex_d6Nbj_CvPjXbFSQFN8C9yXvMdSTi9bbtvdzQgGzDcj_NT25Vh2_knEJvriUy7c7dWF5Gh-p5TT_Gb-hivFnOOnq9LTvch8Ylxc1ubSECs4VL76M7UdxEp4ctmSWmOZYxqRBxvHK678PWajEWVJsmbd1" />
                    </div>
                    <div
                        class="absolute -bottom-10 -left-10 p-8 glass-card rounded-xl border border-outline-variant/15 hidden md:block">
                        <div class="flex gap-4 items-center">
                            <div class="w-12 h-12 bg-primary/20 rounded-full flex items-center justify-center">
                                <span class="material-symbols-outlined text-primary"
                                    data-weight="fill">rocket_launch</span>
                            </div>
                            <div>
                                <div class="text-sm font-label text-on-surface-variant">Active Deployments</div>
                                <div class="text-2xl font-headline font-bold text-white">42+ High-Scale</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Stats Section -->
        <section class="py-24 bg-surface-container-low">
            <div class="max-w-screen-2xl mx-auto px-8">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-12 text-center">
                    <div>
                        <div class="text-5xl md:text-6xl font-headline font-extrabold text-primary mb-2">98%</div>
                        <div class="text-on-surface-variant font-label uppercase tracking-widest text-xs">Retention Rate
                        </div>
                    </div>
                    <div>
                        <div class="text-5xl md:text-6xl font-headline font-extrabold text-white mb-2">120+</div>
                        <div class="text-on-surface-variant font-label uppercase tracking-widest text-xs">Projects Live
                        </div>
                    </div>
                    <div>
                        <div class="text-5xl md:text-6xl font-headline font-extrabold text-white mb-2">15ms</div>
                        <div class="text-on-surface-variant font-label uppercase tracking-widest text-xs">Avg. Response
                        </div>
                    </div>
                    <div>
                        <div class="text-5xl md:text-6xl font-headline font-extrabold text-primary mb-2">24/7</div>
                        <div class="text-on-surface-variant font-label uppercase tracking-widest text-xs">Active Support
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Bento Grid -->
        <section class="py-32 px-8 max-w-screen-2xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8">
                <div class="max-w-2xl">
                    <span class="text-primary font-label tracking-widest text-sm uppercase">Capabilities</span>
                    <h2 class="text-5xl font-headline font-bold text-white mt-4">Curated Solutions for Complex Digital
                        Ecosystems</h2>
                </div>
                <p class="text-on-surface-variant max-w-xs leading-relaxed">
                    We combine engineering rigor with aesthetic excellence to deliver products that perform as well as
                    they look.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-12 grid-rows-2 gap-6 h-auto md:h-[800px]">
                <!-- Card 1: Web Dev (Large) -->
                <div
                    class="md:col-span-8 bg-surface-container rounded-xl p-10 flex flex-col justify-between group hover:bg-surface-container-high transition-all duration-300 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                    <div>
                        <span class="material-symbols-outlined text-4xl text-primary mb-6">code</span>
                        <h3 class="text-3xl font-headline font-bold text-white mb-4">Web Development</h3>
                        <p class="text-on-surface-variant max-w-md text-lg">Next-gen web applications built with React,
                            Next.js, and high-performance serverless architectures.</p>
                    </div>
                    <div class="flex flex-wrap gap-3 mt-8">
                        <span class="px-4 py-1.5 bg-surface-container-highest rounded-full text-sm">Next.js</span>
                        <span class="px-4 py-1.5 bg-surface-container-highest rounded-full text-sm">TypeScript</span>
                        <span class="px-4 py-1.5 bg-surface-container-highest rounded-full text-sm">AWS</span>
                    </div>
                </div>
                <!-- Card 2: SEO (Small Square) -->
                <div
                    class="md:col-span-4 bg-surface-container rounded-xl p-10 hover:bg-surface-container-high transition-all duration-300 flex flex-col justify-between group">
                    <span
                        class="material-symbols-outlined text-4xl text-white group-hover:text-primary transition-colors">query_stats</span>
                    <div>
                        <h3 class="text-2xl font-headline font-bold text-white mb-2">Search Strategy</h3>
                        <p class="text-on-surface-variant text-sm">Data-driven SEO to dominate competitive search
                            landscapes.</p>
                    </div>
                </div>
                <!-- Card 3: CRM (Small Square) -->
                <div class="md:col-span-4 bg-primary-container rounded-xl p-10 flex flex-col justify-between group">
                    <span class="material-symbols-outlined text-4xl text-on-primary-container">hub</span>
                    <div>
                        <h3 class="text-2xl font-headline font-bold text-on-primary-container mb-2">CRM Integration</h3>
                        <p class="text-on-primary-fixed-variant text-sm">Seamlessly connecting your business
                            intelligence and customer flows.</p>
                    </div>
                </div>
                <!-- Card 4: Design (Medium) -->
                <div
                    class="md:col-span-5 bg-surface-container rounded-xl p-10 flex flex-col justify-between hover:bg-surface-container-high transition-all duration-300 overflow-hidden relative group">
                    <div
                        class="absolute bottom-0 right-0 opacity-10 group-hover:scale-110 transition-transform duration-500">
                        <span class="material-symbols-outlined text-[120px]">brush</span>
                    </div>
                    <div>
                        <h3 class="text-2xl font-headline font-bold text-white mb-4">UI/UX Design</h3>
                        <p class="text-on-surface-variant">Kinetic interfaces that prioritize user clarity and brand
                            storytelling.</p>
                    </div>
                </div>
                <!-- Card 5: Strategy (Vertical/Small) -->
                <div
                    class="md:col-span-3 bg-surface-container rounded-xl p-10 flex flex-col justify-between hover:bg-surface-container-high transition-all duration-300">
                    <span class="material-symbols-outlined text-4xl text-primary">psychology</span>
                    <h3 class="text-2xl font-headline font-bold text-white">Digital Strategy</h3>
                </div>
            </div>
        </section>
        <!-- New Section 1: Our Strategic Process -->
        <section class="py-32 bg-surface-container-low border-y border-outline-variant/10">
            <div class="max-w-screen-2xl mx-auto px-8">
                <div class="mb-20 text-center">
                    <span class="text-primary font-label tracking-widest text-sm uppercase">The Blueprint</span>
                    <h2 class="text-5xl font-headline font-bold text-white mt-4">Our Strategic Process</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8 relative">
                    <!-- Connector Lines (Desktop Only) -->
                    <div class="hidden md:block absolute top-12 left-0 w-full h-0.5 bg-outline-variant/20 z-0"></div>
                    <!-- Step 1 -->
                    <div class="relative z-10 group">
                        <div
                            class="w-24 h-24 bg-surface-container-high rounded-full flex items-center justify-center mb-8 border-2 border-outline-variant/20 group-hover:border-primary transition-all duration-500 mx-auto">
                            <span class="material-symbols-outlined text-3xl text-primary">manage_search</span>
                        </div>
                        <div class="text-center">
                            <div class="text-primary font-label text-xs uppercase tracking-[0.2em] mb-3">01. Discovery
                            </div>
                            <h4 class="text-xl font-headline font-bold text-white mb-4">Phase Analysis</h4>
                            <p class="text-on-surface-variant text-sm leading-relaxed max-w-[240px] mx-auto">Deep dive
                                into your business goals, target audience, and market competition.</p>
                        </div>
                    </div>
                    <!-- Step 2 -->
                    <div class="relative z-10 group">
                        <div
                            class="w-24 h-24 bg-surface-container-high rounded-full flex items-center justify-center mb-8 border-2 border-outline-variant/20 group-hover:border-primary transition-all duration-500 mx-auto">
                            <span class="material-symbols-outlined text-3xl text-primary">draw</span>
                        </div>
                        <div class="text-center">
                            <div class="text-primary font-label text-xs uppercase tracking-[0.2em] mb-3">02. Design
                            </div>
                            <h4 class="text-xl font-headline font-bold text-white mb-4">Visual Language</h4>
                            <p class="text-on-surface-variant text-sm leading-relaxed max-w-[240px] mx-auto">Crafting
                                cinematic interfaces that resonate with your brand's core values.</p>
                        </div>
                    </div>
                    <!-- Step 3 -->
                    <div class="relative z-10 group">
                        <div
                            class="w-24 h-24 bg-surface-container-high rounded-full flex items-center justify-center mb-8 border-2 border-outline-variant/20 group-hover:border-primary transition-all duration-500 mx-auto">
                            <span class="material-symbols-outlined text-3xl text-primary">terminal</span>
                        </div>
                        <div class="text-center">
                            <div class="text-primary font-label text-xs uppercase tracking-[0.2em] mb-3">03.
                                Development</div>
                            <h4 class="text-xl font-headline font-bold text-white mb-4">Surgical Code</h4>
                            <p class="text-on-surface-variant text-sm leading-relaxed max-w-[240px] mx-auto">
                                High-performance engineering using modern serverless stacks and frameworks.</p>
                        </div>
                    </div>
                    <!-- Step 4 -->
                    <div class="relative z-10 group">
                        <div
                            class="w-24 h-24 bg-surface-container-high rounded-full flex items-center justify-center mb-8 border-2 border-outline-variant/20 group-hover:border-primary transition-all duration-500 mx-auto">
                            <span class="material-symbols-outlined text-3xl text-primary">auto_mode</span>
                        </div>
                        <div class="text-center">
                            <div class="text-primary font-label text-xs uppercase tracking-[0.2em] mb-3">04. Deployment
                            </div>
                            <h4 class="text-xl font-headline font-bold text-white mb-4">Scalable Launch</h4>
                            <p class="text-on-surface-variant text-sm leading-relaxed max-w-[240px] mx-auto">Strategic
                                roll-out with performance monitoring and continuous optimization.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Tech Stack -->
        <section class="py-24">
            <div class="max-w-screen-2xl mx-auto px-8">
                <div
                    class="grid grid-cols-2 md:grid-cols-6 gap-8 items-center opacity-40 hover:opacity-100 transition-opacity duration-500">
                    <div class="flex justify-center grayscale hover:grayscale-0 transition-all cursor-pointer">
                        <div class="font-headline font-extrabold text-2xl tracking-tighter">REACT</div>
                    </div>
                    <div class="flex justify-center grayscale hover:grayscale-0 transition-all cursor-pointer">
                        <div class="font-headline font-extrabold text-2xl tracking-tighter">NODE.JS</div>
                    </div>
                    <div class="flex justify-center grayscale hover:grayscale-0 transition-all cursor-pointer">
                        <div class="font-headline font-extrabold text-2xl tracking-tighter">FIGMA</div>
                    </div>
                    <div class="flex justify-center grayscale hover:grayscale-0 transition-all cursor-pointer">
                        <div class="font-headline font-extrabold text-2xl tracking-tighter">VITE</div>
                    </div>
                    <div class="flex justify-center grayscale hover:grayscale-0 transition-all cursor-pointer">
                        <div class="font-headline font-extrabold text-2xl tracking-tighter">DOCKER</div>
                    </div>
                    <div class="flex justify-center grayscale hover:grayscale-0 transition-all cursor-pointer">
                        <div class="font-headline font-extrabold text-2xl tracking-tighter">PYTHON</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- New Section 2: The Minds Behind the Magic -->
        <section class="py-32 bg-surface">
            <div class="max-w-screen-2xl mx-auto px-8">
                <div class="flex flex-col md:flex-row justify-between items-end mb-20 gap-8">
                    <div class="max-w-2xl">
                        <span class="text-primary font-label tracking-widest text-sm uppercase">The Collective</span>
                        <h2 class="text-5xl font-headline font-bold text-white mt-4">The Minds Behind the Magic</h2>
                    </div>
                    <p class="text-on-surface-variant max-w-sm leading-relaxed">
                        A curated team of specialized engineers and designers dedicated to pushing the boundaries of the
                        modern web.
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Team Member 1 -->
                    <div class="group">
                        <div
                            class="aspect-[4/5] bg-surface-container rounded-2xl overflow-hidden mb-6 relative border border-outline-variant/10">
                            <img alt="Arjun Tejal - Founder &amp; Creative Director"
                                class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuB8yWTqrI-Xu4KQSbJh2MIIJnopvvn3usnfFJkY0sSepZAz1Z5U2y6YL11TpjGMOaqV4UZqbLmVw6vPuJQfSnE9eQjm5XlrHMdoUKr857b2x3oc0ui96OvgH9t-33dViD4vjWv_QrH-Gz2ov7KFFDLr2gNPuL-FQlqoeWqUfIQvnFQF4RAI4CFLjH7A78UsCNtS8s1Li9PYUQmTmf1mjR6v0B-PXxL8syQN0WLYHb5vS3MNKwaGxrAnVza_e8nWTZw4FhTnQDzO6_9d" />
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>
                        </div>
                        <h4 class="text-xl font-headline font-bold text-white mb-1">Arjun Tejal</h4>
                        <p class="text-primary font-label text-xs uppercase tracking-widest">Founder &amp; Creative
                            Director</p>
                    </div>
                    <!-- Team Member 2 -->
                    <div class="group">
                        <div
                            class="aspect-[4/5] bg-surface-container rounded-2xl overflow-hidden mb-6 relative border border-outline-variant/10">
                            <img alt="Elena Vance - Head of Engineering"
                                class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDY58-5RD0mx90XW3_be13O-YdOWcUOJo1bv9FJHoAebQOIW-CPEY5Z1GI6tMYkAlwNYZstPkfqu8qq7u-ZVslWHL7VT1WFK4gbRK4eCKgofNb96IA7wLTnme6FrYAKCL8ZB5va0X4Ss2oRUhRWMNnTOmT-1QKO-mNijDZMZ5WAtI2GiEc8I__ITnuHDG8xAVDb2ZqcfZAmbaMrN-JOg28Xdk8CcyFHDje9sHI7MKE6hVHPC9r3Q03q_7aSBjYZHk8sh2eAaDj_Fopy" />
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>
                        </div>
                        <h4 class="text-xl font-headline font-bold text-white mb-1">Elena Vance</h4>
                        <p class="text-primary font-label text-xs uppercase tracking-widest">Head of Engineering</p>
                    </div>
                    <!-- Team Member 3 -->
                    <div class="group">
                        <div
                            class="aspect-[4/5] bg-surface-container rounded-2xl overflow-hidden mb-6 relative border border-outline-variant/10">
                            <img alt="Julian Reed - Lead Product Designer"
                                class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuC9hheXVKHUFTyxPsIJm3EaoyCGvF2XuqAUEqywXItfCia1ReVQgORwWNf5v7Kil3NNupReKXSLwfFxk8RYdZe_ec6a0Ztu6CLjEe7MrHb5wFageg5Xjsvvdl6QLB7VlprxJVCYZtqKVrKYH84NErU9eyIHikvQjiK1ZlZZhb-mm8HmqH7d_zw3fvnq9Q0oFw74vSDkV97KX5a_dcFcHvnaaG_i8yjkkuuL5Jutt8aKcl08iSBoW66Ab4i_MAm7rCA005CPukStYQaa" />
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>
                        </div>
                        <h4 class="text-xl font-headline font-bold text-white mb-1">Julian Reed</h4>
                        <p class="text-primary font-label text-xs uppercase tracking-widest">Lead Product Designer</p>
                    </div>
                    <!-- Team Member 4 -->
                    <div class="group">
                        <div
                            class="aspect-[4/5] bg-surface-container rounded-2xl overflow-hidden mb-6 relative border border-outline-variant/10">
                            <img alt="Maya Chen - Search Strategist"
                                class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAxrHxXAm_4JLaN9kl_0zlAixXoMQsIm_xI1UET6BvHLxBfS6BAVWokAJo3xndJOuaYX6S80ZhtP4WyajWj2A8cYfAl58dVtKz9wOml6EoRihqY63G-wS_iaESWh4XDWwrO5fGmoOg8FUQibwzg5Fi5e3eC7cVd8d0qqlc6WlBJRnXMog0rAzZA5CsL8l0YrStsDM9Mo-JKfrHniek6njP9tJ9VM0blCtQRXeAx2v0JB7tDEv91xJtOZklSTGZa0wxT35eI56lLwhBS" />
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>
                        </div>
                        <h4 class="text-xl font-headline font-bold text-white mb-1">Maya Chen</h4>
                        <p class="text-primary font-label text-xs uppercase tracking-widest">Search Strategist</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Projects Section -->
        <section class="py-32 bg-surface-container-low">
            <div class="max-w-screen-2xl mx-auto px-8">
                <div class="mb-20">
                    <h2 class="text-5xl font-headline font-bold text-white mb-6">Featured Case Studies</h2>
                    <div class="h-1 w-24 bg-primary"></div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                    <!-- Project 1 -->
                    <div class="group cursor-pointer">
                        <div class="aspect-[16/10] bg-surface-container rounded-xl overflow-hidden mb-8 relative">
                            <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                data-alt="Professional dashboard UI design on a laptop screen with dark mode aesthetic and vibrant orange accent data visualizations"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAWreqs0-ytW9Nn-eVPwZFoV7NSBOEnU4_7Zmc1QTX3UlvoKtz_tjxGCBGcfxHAdQi0vEDRlFhPjkj3eaTa7W4odF7AmJ8WGv-7JGOmeO5dcGQKAmFtnNcNuvrYZg-oI1Zc-MXxJZDjwbQBFQjVV7tyFph2Js-cgk_9PuU0JZtjmQyWC-PIJsy7VdEN9qPc-q8jOnFTdD-lzmx2QHEQiid5NRKe9BkEDuVUhJHuaInAaUGdwD-KdKUTAJowE0wJzg7vMbvYJdwZwKx9" />
                            <div
                                class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>
                        </div>
                        <div class="flex justify-between items-start">
                            <div>
                                <div class="text-primary font-label text-sm uppercase tracking-widest mb-2">Fintech •
                                    2024</div>
                                <h3
                                    class="text-3xl font-headline font-bold text-white group-hover:text-primary transition-colors">
                                    Nova Dashboard</h3>
                            </div>
                            <span class="material-symbols-outlined text-4xl text-white">north_east</span>
                        </div>
                    </div>
                    <!-- Project 2 -->
                    <div class="group cursor-pointer">
                        <div class="aspect-[16/10] bg-surface-container rounded-xl overflow-hidden mb-8 relative">
                            <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                data-alt="Sleek e-commerce mobile app interface showcasing luxury product photography with elegant typography and clean dark layout"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuC2PZLxRhql6ZrqgRn4tr7HxIcypYnMt94cpZ8P-l124ysfOK1l5JSeF4acolKkOkyTVsDxuXT-GDl8deaGXbCfWQdYrum2YbaRrFAEkx_M_EPnrnziAA28m9-YDat_V1VtU2mlI_ru02eWr0NUpuPm75r_gjkIlC7Vpc0BP4WTEElVWDKG9VlklPcqhSIbsCOjAvk-vZLlFO0Lv8-l6XxnGsZdChOnrhZfIokoEY_sGgEisu7kajKRjgREY5vUtrbrSqPdl_69TIBJ" />
                            <div
                                class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>
                        </div>
                        <div class="flex justify-between items-start">
                            <div>
                                <div class="text-primary font-label text-sm uppercase tracking-widest mb-2">Luxury
                                    Retail • 2024</div>
                                <h3
                                    class="text-3xl font-headline font-bold text-white group-hover:text-primary transition-colors">
                                    Aether Marketplace</h3>
                            </div>
                            <span class="material-symbols-outlined text-4xl text-white">north_east</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials -->
        <section class="py-32 px-8 max-w-screen-2xl mx-auto overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <div class="lg:col-span-1">
                    <h2 class="text-4xl font-headline font-bold text-white mb-6">Client Perspectives</h2>
                    <p class="text-on-surface-variant leading-relaxed">Hear from the industry leaders we've helped to
                        transform and scale.</p>
                </div>
                <div class="lg:col-span-2 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="p-8 bg-surface-container rounded-xl border border-outline-variant/10">
                        <div class="flex gap-1 text-primary mb-6">
                            <span class="material-symbols-outlined" data-weight="fill">star</span>
                            <span class="material-symbols-outlined" data-weight="fill">star</span>
                            <span class="material-symbols-outlined" data-weight="fill">star</span>
                            <span class="material-symbols-outlined" data-weight="fill">star</span>
                            <span class="material-symbols-outlined" data-weight="fill">star</span>
                        </div>
                        <p class="text-white text-lg font-medium leading-relaxed mb-8 italic">"Tejal Digital didn't
                            just build a website; they constructed a digital ecosystem that increased our conversion
                            rate by 40% in two months."</p>
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-surface-container-highest overflow-hidden">
                                <img class="w-full h-full object-cover"
                                    data-alt="Portrait of a professional man in a dark blazer smiling confidently against a soft neutral background"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuC4zEN7l5eworNeKHMjWkjFWT8ac2py9eG54FBVOw9mfv5RsLompeJhYclepqYPVotGMib1yajFH2gt6JtvJMZLw6jM7iDlXthH4s92Y8ji8x6E1pm1qAk3WDrAA9crKZfU-ry9n8EYnFJHqksRb-KANCLeL6ZGA92bAGekH3Bb8WhhC0rUrTlZqYwpvfiBdSu-fotng5Ng_sdt0vPmr5WNj11Qwj7zURddCWcBlz7wuY3QYqrghziA-nPOfC1S5ULPrIVK-xxdaNWW" />
                            </div>
                            <div>
                                <div class="text-white font-bold">Marcus Thorne</div>
                                <div class="text-on-surface-variant text-sm">CTO, Nexus Corp</div>
                            </div>
                        </div>
                    </div>
                    <div class="p-8 bg-surface-container rounded-xl border border-outline-variant/10">
                        <div class="flex gap-1 text-primary mb-6">
                            <span class="material-symbols-outlined" data-weight="fill">star</span>
                            <span class="material-symbols-outlined" data-weight="fill">star</span>
                            <span class="material-symbols-outlined" data-weight="fill">star</span>
                            <span class="material-symbols-outlined" data-weight="fill">star</span>
                            <span class="material-symbols-outlined" data-weight="fill">star</span>
                        </div>
                        <p class="text-white text-lg font-medium leading-relaxed mb-8 italic">"The team's attention to
                            detail and ability to handle complex API integrations is unparalleled. They are truly elite
                            engineers."</p>
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-surface-container-highest overflow-hidden">
                                <img class="w-full h-full object-cover"
                                    data-alt="Portrait of a creative professional woman with a bright modern look and friendly expression"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBOMAok3EwFpEKUAddBpTgiDjUSajk6D5Pjd6pTuCc7v3kqQ8E79rO5r2hB4Z5_jarzKXVBjfnaW6XWwA0UKvEKpsPVKR-sOLRYI7LcRrTwQKOpYeSwQC6eBUdO3jHV4fBDJqP_oCzTw1qL69WsSR3rlvbvl6Dqw9KenxzLisb4zehVZvkeu3XrssFs4OI2y8kQaQxsYQGQPicE_wt_2MzvX86hG2kBPVOKtIwfXldQFC5SBXf06foBl1Eckoq__TFP3K3CupFNLyNd" />
                            </div>
                            <div>
                                <div class="text-white font-bold">Sarah Jenkins</div>
                                <div class="text-on-surface-variant text-sm">Founder, Articulate AI</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Final CTA -->
        <section class="py-32 px-8 max-w-screen-2xl mx-auto mb-20">
            <div
                class="relative bg-gradient-to-br from-surface-container-high to-surface-container rounded-[3rem] p-16 md:p-24 overflow-hidden text-center border border-outline-variant/10">
                <div
                    class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(circle_at_center,_var(--tw-gradient-from)_0%,_transparent_70%)] from-primary/10 to-transparent">
                </div>
                <div class="relative z-10">
                    <h2 class="text-5xl md:text-7xl font-headline font-extrabold text-white mb-8 tracking-tighter">
                        Ready to Start?</h2>
                    <p class="text-xl text-on-surface-variant max-w-2xl mx-auto mb-12">
                        Let's discuss how we can elevate your digital presence and build something that defines your
                        industry.
                    </p>
                    <button
                        class="px-12 py-5 bg-gradient-to-r from-primary to-primary-container text-on-primary font-black rounded-xl text-xl hover:scale-105 active:scale-95 transition-all shadow-2xl shadow-primary/20">
                        Secure Your Consultation
                    </button>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer (Shared Component Reference: Footer) -->
    <footer
        class="bg-neutral-950 w-full py-12 border-t border-neutral-900 font-['Inter'] text-sm leading-relaxed text-neutral-500">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 w-full px-6 max-w-7xl mx-auto">
            <div class="flex flex-col gap-6">
                <div class="text-lg font-bold text-neutral-100">Tejal Digital</div>
                <p class="max-w-md">© 2024 Tejal Digital. Kinetic Curation for the Modern Web.</p>
                <div class="flex gap-6">
                    <a class="hover:text-orange-500 transition-colors duration-300" href="#">Instagram</a>
                    <a class="hover:text-orange-500 transition-colors duration-300" href="#">LinkedIn</a>
                    <a class="hover:text-orange-500 transition-colors duration-300" href="#">Privacy Policy</a>
                    <a class="hover:text-orange-500 transition-colors duration-300" href="#">Terms of
                        Service</a>
                </div>
            </div>
            <div class="flex flex-col md:items-end justify-between">
                <div class="w-full md:max-w-xs">
                    <h4 class="text-white font-bold mb-4">Newsletter</h4>
                    <div
                        class="flex focus-within:ring-1 focus-within:ring-orange-500/50 rounded-lg overflow-hidden transition-all bg-neutral-900">
                        <input class="bg-transparent border-none text-white px-4 py-3 w-full focus:ring-0"
                            placeholder="Email address" type="email" />
                        <button class="bg-primary text-on-primary px-6 py-3 font-bold">Join</button>
                    </div>
                </div>
                <div class="mt-8 text-neutral-500 text-xs">
                    San Francisco • London • remote
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
