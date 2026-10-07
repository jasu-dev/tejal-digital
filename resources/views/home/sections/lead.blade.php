@php
    $reasons = [
        [
            'icon' => 'code',
            'title' => 'Custom-built, not templated',
            'description' => 'Clean, hand-written code shaped around your workflows - no bloated themes or lock-in.',
        ],
        [
            'icon' => 'security',
            'title' => 'Secure & built to scale',
            'description' => 'Hardened Laravel and WordPress builds with optimized databases that grow with you.',
        ],
        [
            'icon' => 'users',
            'title' => 'Direct access to developers',
            'description' => 'Talk to the people writing your code. Clear updates, no account-manager runaround.',
        ],
        [
            'icon' => 'tools',
            'title' => 'Support after launch',
            'description' => 'Maintenance, backups and improvements - many clients have stayed with us for years.',
        ],
    ];
@endphp

<section class="py-14 sm:py-20 px-3 sm:px-6 lg:px-8 border-b border-outline-variant/30">
    <div class="max-w-7xl mx-auto space-y-12">
        <div class="grid lg:grid-cols-5 gap-10 lg:gap-14 items-start">
            <div class="lg:col-span-2" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 mb-5 rounded-full bg-primary/10 border border-primary/30 text-primary-500 backdrop-blur-xl">
                    <span class="text-xs sm:text-sm font-semibold">Why Tejal Digital</span>
                </div>
                <h2 class="text-3xl lg:text-5xl font-bold tracking-tight mb-5">
                    A Development Partner <span class="text-gradient">You Can Rely On</span>
                </h2>
                <p class="text-md sm:text-lg text-muted-foreground leading-relaxed mb-8">
                    For {{ config('staticdata.experience_years') }}+ years we've helped startups, agencies and growing
                    businesses turn ideas into dependable websites and software.
                </p>
                <a href="{{ route('contact') }}">
                    <x-form.primary-button type="button" class="px-7 py-3 rounded-2xl">
                        <span>Book a Free Consultation</span>
                        <x-icons.go class="w-4 h-4" />
                    </x-form.primary-button>
                </a>
            </div>
            <div class="lg:col-span-3 grid sm:grid-cols-2 gap-5">
                @foreach ($reasons as $reason)
                    <div class="rounded-2xl border border-border bg-card p-6" data-aos="fade-up"
                        data-aos-delay="{{ $loop->iteration * 100 }}" data-aos-duration="800">
                        <div class="w-11 h-11 rounded-xl bg-primary/10 text-primary flex items-center justify-center mb-4">
                            <x-dynamic-component :component="'icons.' . $reason['icon']" class="w-5 h-5" />
                        </div>
                        <h3 class="font-bold text-lg tracking-tight mb-2">{{ $reason['title'] }}</h3>
                        <p class="text-sm text-muted-foreground leading-relaxed">{{ $reason['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <a href="{{ route('contact') }}"
                class="group w-full p-5 rounded-2xl border border-border bg-card hover:border-primary/40 transition-colors text-left flex items-center gap-4 relative overflow-hidden"
                data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
                <span class="w-11 h-11 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
                    <x-icons.time class="w-5 h-5 text-primary" />
                </span>
                <div class="flex-1">
                    <p class="font-semibold">Schedule a Call</p>
                    <p class="text-sm text-muted-foreground">Pick a time that works for you</p>
                </div>
                <x-icons.go class="w-4 h-4 text-primary group-hover:translate-x-1 transition-transform" />
            </a>
            <a href="tel:{{ config('staticdata.phone') }}"
                class="group w-full p-5 rounded-2xl border border-border bg-card hover:border-primary/40 transition-colors text-left flex items-center gap-4 relative overflow-hidden"
                data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
                <span class="w-11 h-11 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
                    <x-icons.call class="w-5 h-5 text-primary" />
                </span>
                <div class="flex-1">
                    <p class="font-semibold">Call Us Now</p>
                    <p class="text-sm text-muted-foreground">{{ config('staticdata.phone') }}</p>
                </div>
                <x-icons.go class="w-4 h-4 text-primary group-hover:translate-x-1 transition-transform" />
            </a>
            <a href="mailto:{{ config('staticdata.email') }}"
                class="group w-full p-5 rounded-2xl border border-border bg-card hover:border-primary/40 transition-colors text-left flex items-center gap-4 relative overflow-hidden"
                data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
                <span class="w-11 h-11 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
                    <x-icons.email class="w-5 h-5 text-primary" />
                </span>
                <div class="flex-1">
                    <p class="font-semibold">Email Us</p>
                    <p class="text-sm text-muted-foreground">We'll respond within 2 hours</p>
                </div>
                <x-icons.go class="w-4 h-4 text-primary group-hover:translate-x-1 transition-transform" />
            </a>
        </div>
    </div>
</section>
