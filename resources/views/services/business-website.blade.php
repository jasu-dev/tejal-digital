@extends('layouts.app')

@section('head')
    <title>Corporate & Business Website Development Services | Enterprise Solutions</title>
    <meta name="description"
        content="Professional corporate & business website development services. We engineer secure, fast, and high-performance websites optimized for enterprise lead generation, compliance, and global scalability.">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="keywords"
        content="Corporate Website Development Services, Business Web Design Company, Enterprise Website Development, B2B Corporate Websites, Custom Corporate Web Portals, Secure Business Sites">

    <!-- Open Graph -->
    <meta property="og:title" content="Corporate & Business Website Development Services | Tejal Digital">
    <meta property="og:description"
        content="Establish undisputed digital authority. We build fast, highly secure, and conversion-optimized corporate websites tailored for global enterprises.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/images/og-image-corporate.png') }}">
@endsection

@section('content')
    {{-- Service Hero --}}
    <section class="relative py-24 overflow-hidden border-b border-outline-variant/20">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-primary/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-primary/5 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
            <nav class="flex mb-8" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-sm text-on-surface/60">
                    <li><a href="{{ route('home') }}" class="hover:text-primary transition-colors">Home</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li><a href="{{ route('services') }}" class="hover:text-primary transition-colors">Services</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4" /></li>
                    <li class="text-on-surface font-medium">Corporate Website Development</li>
                </ol>
            </nav>

            <div class="grid lg:grid-cols-3 gap-16 items-center">
                <div class="lg:col-span-2" data-aos="fade-right" data-aos-duration="1000">
                    <span
                        class="inline-block px-4 py-1.5 mb-6 text-[10px] font-bold uppercase tracking-widest text-primary bg-primary/10 rounded-full border border-primary/20">
                        Enterprise-Grade Web Engineering
                    </span>
                    <h1 class="text-4xl lg:text-6xl font-black text-foreground leading-tight mb-6">
                        Corporate & Business <br>
                        <span class="text-gradient">Website Development</span> Services
                    </h1>
                    <p class="text-lg leading-relaxed mb-8">
                        A corporate website is your ultimate digital headquarters. We engineer high-authority, incredibly secure, and perfectly responsive web platforms that strengthen brand credibility, optimize complex lead pipelines, and scale effortlessly alongside your corporate operations.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('contact') }}" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                            <x-form.primary-button type="button" class="px-7 py-3 rounded-2xl">
                                <span>Discuss Your Project</span>
                                <x-icons.go class="w-4 h-4" />
                            </x-form.primary-button>
                        </a>
                        <a href="{{ config('staticdata.whatsapp_url') }}" data-aos="fade-up" data-aos-delay="100"
                            data-aos-duration="800">
                            <x-form.secondary-button type="button" class="px-7 py-3 rounded-2xl">
                                <x-icons.whatsapp class="w-5 h-5" />
                                <span>Connect Instantly</span>
                            </x-form.secondary-button>
                        </a>
                    </div>
                </div>
                <div class="relative" data-aos="zoom-in" data-aos-duration="1000">
                    <div
                        class="max-w-md h-80 mx-auto border border-border bg-card rounded-2xl p-12 flex items-center justify-center relative overflow-hidden group">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-primary/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        </div>
                        <x-icons.launch class="w-32 h-32 text-primary relative z-10" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How a Corporate Website Drives Business Growth -->
    <section class="py-24 border-b border-outline-variant/20 bg-card/10">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-primary font-bold text-xs uppercase tracking-widest block mb-2">Strategic Impact</span>
                <h2 class="text-3xl lg:text-4xl font-bold text-foreground mb-6">How a Corporate Website Helps Your Business Grow Online</h2>
                <p class="text-md text-on-surface/60">
                    Your digital presence should be an active engine for corporate growth, stakeholder alignment, and continuous lead velocity.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="p-8 rounded-2xl bg-card border border-border relative group">
                    <div class="text-primary font-mono text-xl font-bold mb-4">01.</div>
                    <h4 class="text-xl font-bold text-foreground mb-3">Establishes Institutional Authority</h4>
                    <p class="text-sm text-on-surface/70 leading-relaxed">A pristine, bespoke corporate layout projects institutional stability, building immediate trust with global clients, enterprise buyers, and prospective partners.</p>
                </div>
                <div class="p-8 rounded-2xl bg-card border border-border relative group">
                    <div class="text-primary font-mono text-xl font-bold mb-4">02.</div>
                    <h4 class="text-xl font-bold text-foreground mb-3">Automates Enterprise B2B Inquiries</h4>
                    <p class="text-sm text-on-surface/70 leading-relaxed">Integrated custom request-for-quote (RFQ) systems and structured multi-department contact tunnels send lead data smoothly straight to your sales division.</p>
                </div>
                <div class="p-8 rounded-2xl bg-card border border-border relative group">
                    <div class="text-primary font-mono text-xl font-bold mb-4">03.</div>
                    <h4 class="text-xl font-bold text-foreground mb-3">Improves Stakeholder Transparency</h4>
                    <p class="text-sm text-on-surface/70 leading-relaxed">Dedicated IR portals, career boards, and newsrooms keep investors, current employees, and media outlets perfectly aligned with your corporate roadmap.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Services Provided -->
    <section id="services" class="py-24 border-b border-outline-variant/20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-20">
                <span class="text-primary font-bold text-xs uppercase tracking-widest block mb-2">Core Competencies
</span>
                <h2 class="text-4xl font-bold text-foreground mb-6">Our Business Development Ecosystems</h2>
                <p class="text-lg text-on-surface/60">
                    We engineer specialized web architectures tailored to optimize organizational workflows, secure corporate data, and dominate search layouts.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1: Custom Enterprise Web Portals -->
                <div class="p-8 rounded-2xl bg-card border border-border hover:border-primary/40 transition duration-300 flex flex-col justify-between">
                    <div>
                        <div class="text-xs font-bold uppercase tracking-widest text-primary mb-4">1.</div>
                        <h3 class="text-xl font-bold text-foreground mb-3">Custom Corporate Portals</h3>
                        <p class="text-on-surface/70 text-sm leading-relaxed">
                            We build robust, secure corporate web portals featuring granular, role-based user access controls. Ideal for managing sensitive company assets, handling internal employee directories, and centralizing client reporting workflows securely.
                        </p>
                    </div>
                </div>

                <!-- Service 2: B2B Lead Generation Engines -->
                <div class="p-8 rounded-2xl bg-card border border-border hover:border-primary/40 transition duration-300 flex flex-col justify-between">
                    <div>
                        <div class="text-xs font-bold uppercase tracking-widest text-primary mb-4">2.</div>
                        <h3 class="text-xl font-bold text-foreground mb-3">B2B Lead Engines</h3>
                        <p class="text-on-surface/70 text-sm leading-relaxed">
                            Transform your website into an automated sales pipeline. We construct smart Request For Quote (RFQ) builders, tiered booking architectures, and multi-department communication funnels that route incoming inquiries straight to your sales team.
                        </p>
                    </div>
                </div>

                <!-- Service 3: Multi-Branch & Franchise Architecture -->
                <div class="p-8 rounded-2xl bg-card border border-border hover:border-primary/40 transition duration-300 flex flex-col justify-between">
                    <div>
                        <div class="text-xs font-bold uppercase tracking-widest text-primary mb-4">3.</div>
                        <h3 class="text-xl font-bold text-foreground mb-3">Multi-Branch Frameworks</h3>
                        <p class="text-on-surface/70 text-sm leading-relaxed">
                            Designed for companies operating across multiple regions. We deploy architecture patterns that allow you to manage global branding standards centrally while maintaining independent local SEO structures, localized service listings, and custom branch directories.
                        </p>
                    </div>
                </div>

                <!-- Service 4: Headless CMS & High-End Custom Themes -->
                <div class="p-8 rounded-2xl bg-card border border-border hover:border-primary/40 transition duration-300 flex flex-col justify-between">
                    <div>
                        <div class="text-xs font-bold uppercase tracking-widest text-primary mb-4">4.</div>
                        <h3 class="text-xl font-bold text-foreground mb-3">Bespoke CMS Architecture</h3>
                        <p class="text-on-surface/70 text-sm leading-relaxed">
                            We design decoupled, headless solutions and highly optimized custom theme frameworks. This ensures complete content publishing autonomy for your marketing department while keeping the codebase perfectly clean, unbloated, and secure.
                        </p>
                    </div>
                </div>

                <!-- Service 5: Legacy Modernization & Re-Platforming -->
                <div class="p-8 rounded-2xl bg-card border border-border hover:border-primary/40 transition duration-300 flex flex-col justify-between">
                    <div>
                        <div class="text-xs font-bold uppercase tracking-widest text-primary mb-4">5.</div>
                        <h3 class="text-xl font-bold text-foreground mb-3">Platform Modernization</h3>
                        <p class="text-on-surface/70 text-sm leading-relaxed">
                            Safely migrate your legacy business website to a modern cloud infrastructure stack. We handle structural database migrations and rewrite backend components with zero disruption to your existing search visibility, customer paths, or daily operations.
                        </p>
                    </div>
                </div>

                <!-- Service 6: Secure Automation Integrations -->
                <div class="p-8 rounded-2xl bg-card border border-border hover:border-primary/40 transition duration-300 flex flex-col justify-between">
                    <div>
                        <div class="text-xs font-bold uppercase tracking-widest text-primary mb-4">6.</div>
                        <h3 class="text-xl font-bold text-foreground mb-3">Workflow Automation Sync</h3>
                        <p class="text-on-surface/70 text-sm leading-relaxed">
                            We write secure API connectors to sync front-end interactions with back-office tools. Cleanly bridge your web layouts with popular platforms like Salesforce, HubSpot CRM pipelines, instant WhatsApp Business alerts, or custom operational dashboards.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us for Corporate Website Development -->
    <section class="py-24 border-b border-outline-variant/20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-primary font-bold text-xs uppercase tracking-widest block mb-2">Our Standard of Execution</span>
                <h2 class="text-4xl font-bold text-foreground mb-6">Engineered for Operational Performance</h2>
                <p class="text-lg text-on-surface/50">
                    We eliminate templates and visual bloat. We build highly stable corporate platforms designed to protect data integrity and maximize search visibility.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Point 1: Security -->
                <div class="relative overflow-hidden p-6 rounded-2xl border border-border bg-card flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 bg-primary/10 text-primary rounded-full border border-outline-variant/20 mb-5 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <x-icons.security class="w-5 h-5" />
                        </div>
                        <h3 class="text-lg font-bold text-foreground mb-2">Enterprise-Grade Security</h3>
                        <p class="text-on-surface/70 text-xs sm:text-sm leading-relaxed">
                            Ironclad code architecture that protects your data. We prevent SQL injection vulnerabilities, set up secure directory access rules, and establish automatic backups to shield your corporate data.
                        </p>
                    </div>
                </div>

                <!-- Point 2: Performance -->
                <div class="relative overflow-hidden p-6 rounded-2xl border border-border bg-card flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 bg-primary/10 text-primary rounded-full border border-outline-variant/20 mb-5 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <x-icons.launch class="w-5 h-5" />
                        </div>
                        <h3 class="text-lg font-bold text-foreground mb-2">Sub-Second Load Times</h3>
                        <p class="text-on-surface/70 text-xs sm:text-sm leading-relaxed">
                            We write clean, optimized code to achieve top scores on Google's Core Web Vitals. Fast performance ensures smooth page loading, reducing bounce rates and keeping prospective clients engaged.
                        </p>
                    </div>
                </div>

                <!-- Point 3: Local SEO Architecture -->
                <div class="relative overflow-hidden p-6 rounded-2xl border border-border bg-card flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 bg-primary/10 text-primary rounded-full border border-outline-variant/20 mb-5 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <x-icons.deep-search class="w-5 h-5" />
                        </div>
                        <h3 class="text-lg font-bold text-foreground mb-2">Advanced Schema Markup</h3>
                        <p class="text-on-surface/70 text-xs sm:text-sm leading-relaxed">
                            We integrate validated Organization and LocalBusiness JSON-LD structure right into your code. This helps search engines understand your branch offices and services, maximizing your visibility in regional searches.
                        </p>
                    </div>
                </div>

                <!-- Point 4: Custom API Integration -->
                <div class="relative overflow-hidden p-6 rounded-2xl border border-border bg-card flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 bg-primary/10 text-primary rounded-full border border-outline-variant/20 mb-5 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <x-icons.plugin class="w-5 h-5" />
                        </div>
                        <h3 class="text-lg font-bold text-foreground mb-2">Seamless System Syncs</h3>
                        <p class="text-on-surface/70 text-xs sm:text-sm leading-relaxed">
                            Connect your website directly to your business tools. We map secure API connections to link front-end contact forms smoothly with internal CRMs, WhatsApp notification APIs, or custom management dashboards.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Featured Corporate Work Showcase --}}
    <section class="py-24 bg-surface-container/30">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-foreground mb-4">Our Featured Work</h2>
                    <p class="text-on-surface/60">High-performance corporate sites engineered for modern industry leaders.</p>
                </div>
                <a href="{{ route('portfolio') }}" class="text-primary font-bold hover:underline">View All Projects</a>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                <a href="#" class="group rounded-2xl border border-border bg-card overflow-hidden transition-all hover:border-primary/30">
                    <div class="aspect-video overflow-hidden relative">
                        <div class="absolute inset-0 bg-slate-950/40 z-10"></div>
                        <img src="{{ asset('assets/images/technukti.png') }}" alt="Corporate Business Platform"
                            class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <span class="text-xs uppercase tracking-widest text-primary font-mono block mb-2">// Enterprise Web Infrastructure</span>
                        <h3 class="text-xl font-bold text-foreground mb-2 group-hover:text-primary transition-colors">Global Consultancy Hub</h3>
                        <p class="text-on-surface/60 text-sm">Bespoke multi-branch business environment designed with custom lead routing APIs and sub-second load times.</p>
                    </div>
                </a>
                <a href="#" class="group rounded-2xl border border-border bg-card overflow-hidden transition-all hover:border-primary/30">
                    <div class="aspect-video overflow-hidden relative">
                        <div class="absolute inset-0 bg-slate-950/40 z-10"></div>
                        <img src="{{ asset('assets/images/techupkar.png') }}" alt="Custom Business Application"
                            class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                    </div>
                    <div class="p-8">
                        <span class="text-xs uppercase tracking-widest text-primary font-mono block mb-2">// Custom Laravel Application</span>
                        <h3 class="text-xl font-bold text-foreground mb-2 group-hover:text-primary transition-colors">B2B Operations Portal</h3>
                        <p class="text-on-surface/60 text-sm">A highly secure corporate platform integrating internal scheduling tools, employee lookup tables, and client management pipelines.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Corporate FAQs Section -->
    <section class="py-24 border-t border-outline-variant/20 bg-card/10">
        <div class="max-w-4xl mx-auto px-6">
            <div class="text-center mb-16">
                <span class="text-primary font-bold text-xs uppercase tracking-widest block mb-2">Frequently Asked Questions</span>
                <h2 class="text-3xl font-bold text-foreground">Corporate Web Development Insights</h2>
            </div>

            <div class="space-y-6">
                <!-- FAQ 1: Laravel vs WordPress -->
                <div class="bg-card p-6 sm:p-8 rounded-2xl border border-border">
                    <h3 class="text-lg font-bold text-foreground mb-3 flex items-start gap-2">
                        <span class="text-primary">Q.</span> Which platform is better for a corporate business website: Laravel or WordPress?
                    </h3>
                    <p class="text-on-surface/70 pl-6 text-sm sm:text-base leading-relaxed">
                        The ideal choice depends entirely on your operational goals. If your team prioritizes content updates, blogging, and direct marketing autonomy, a <span class="text-foreground font-medium">custom-engineered WordPress solution</span> built without bloated page-builders provides unmatched publishing speed. However, if your business requires unique logic, complex database management, role-based employee access, or deep system integrations, a <span class="text-foreground font-medium">custom Laravel framework</span> offers ironclad security and unlimited engineering scalability.
                    </p>
                </div>

                <!-- FAQ 2: Project Timelines -->
                <div class="bg-card p-6 sm:p-8 rounded-2xl border border-border">
                    <h3 class="text-lg font-bold text-foreground mb-3 flex items-start gap-2">
                        <span class="text-primary">Q.</span> How long does it take to design and develop a custom corporate website?
                    </h3>
                    <p class="text-on-surface/70 pl-6 text-sm sm:text-base leading-relaxed">
                        A custom corporate website optimized for lead generation typically scales between <span class="text-foreground font-medium">6 to 10 weeks</span>. This roadmap spans strategy planning, bespoke responsive interface design, database architecture mapping, secure API integrations, and meticulous pre-launch quality assurance testing. More complex projects, such as centralized multi-branch franchise systems, can take <span class="text-foreground font-medium">12 weeks or more</span> depending on the specific scope.
                    </p>
                </div>

                <!-- FAQ 3: CRM/ERP Integration capabilities -->
                <div class="bg-card p-6 sm:p-8 rounded-2xl border border-border">
                    <h3 class="text-lg font-bold text-foreground mb-3 flex items-start gap-2">
                        <span class="text-primary">Q.</span> Can you integrate our corporate web portal with our existing ERP or CRM software?
                    </h3>
                    <p class="text-on-surface/70 pl-6 text-sm sm:text-base leading-relaxed">
                        Yes, absolutely. We specialize in building secure, custom API connections. We bridge front-end data inputs smoothly with institutional business systems—including Salesforce, HubSpot, custom SQL databases, automated HR payroll software, and instant messaging notifications like the WhatsApp Business API.
                    </p>
                </div>

                <!-- FAQ 4: Structural Security Protocols -->
                <div class="bg-card p-6 sm:p-8 rounded-2xl border border-border">
                    <h3 class="text-lg font-bold text-foreground mb-3 flex items-start gap-2">
                        <span class="text-primary">Q.</span> How do you ensure enterprise-grade security on your business platforms?
                    </h3>
                    <p class="text-on-surface/70 pl-6 text-sm sm:text-base leading-relaxed">
                        We prioritize data protection at every stage of development. Our builds feature robust defenses, including secure server directory routing, parameterized queries to completely block SQL injections, cross-site scripting (XSS) protections, SSL/TLS configuration parameters, and strict validation checks on all forms. We write clean, optimized code designed to keep your operational data isolated and safe.
                    </p>
                </div>

                <!-- FAQ 5: Core Web Vitals & Search Optimization -->
                <div class="bg-card p-6 sm:p-8 rounded-2xl border border-border">
                    <h3 class="text-lg font-bold text-foreground mb-3 flex items-start gap-2">
                        <span class="text-primary">Q.</span> Will the website rank well in Google's organic search results?
                    </h3>
                    <p class="text-on-surface/70 pl-6 text-sm sm:text-base leading-relaxed">
                        Yes, our code is written from the ground up to maximize organic visibility. We optimize every template for Google's Core Web Vitals to achieve lightning-fast loading speeds, build fully mobile-responsive layouts, and inject validated <span class="text-foreground font-medium">Organization and LocalBusiness JSON-LD schema markup</span>. This structured data strategy makes it easy for search engine crawlers to understand your business layout, helping your branch locations rank higher in local and regional searches.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer Contact Include --}}
    @include('sections.contact')
@endsection