<section class="py-20 sm:py-25 px-3 sm:px-6 lg:px-8 relative overflow-hidden bg-gradient-to-b from-background via-[#fffbee] to-primary-500/20">
    <div class="max-w-7xl mx-auto text-center" data-aos="fade-up" data-aos-delay="100"
        data-aos-duration="800">
        <div
            class="inline-flex items-center gap-2 px-4 py-2 mb-6 rounded-full bg-primary/10 border border-primary/30 text-primary-500 backdrop-blur-xl">
            <span class="text-xs sm:text-sm font-semibold">Get in Touch</span>
        </div>
        <h2 class="text-3xl lg:text-6xl font-bold mb-5 tracking-tight">
            Ready to Start Your Project?
        </h2>
        <p class="text-md sm:text-lg text-foreground/80 max-w-2xl mx-auto leading-relaxed mb-10">
            Tell us what you're building. We'll reply within 2 hours with honest advice, a clear plan and a
            free, no-obligation estimate.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <a href="{{ route('contact') }}" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                <x-form.primary-button type="button" class="px-7 py-3.5 rounded-2xl text-base shadow-lg shadow-primary-500/25">
                    <span>Get Free Consultation</span>
                    <x-icons.go class="w-4 h-4" />
                </x-form.primary-button>
            </a>
            <a href="{{ config('staticdata.whatsapp_url') }}" target="_blank" rel="noopener" data-aos="fade-up"
                data-aos-delay="100" data-aos-duration="800">
                <x-form.secondary-button type="button" class="px-7 py-3.5 rounded-2xl text-base">
                    <x-icons.whatsapp class="w-5 h-5" />
                    <span>Chat on WhatsApp</span>
                </x-form.secondary-button>
            </a>
        </div>
        <ul class="flex flex-wrap items-center justify-center gap-x-6 gap-y-2 mt-8 text-sm text-foreground/70">
            <li class="flex items-center gap-1.5"><x-icons.check class="w-4 h-4 text-primary" /> No-obligation quote</li>
            <li class="flex items-center gap-1.5"><x-icons.check class="w-4 h-4 text-primary" /> {{ config('staticdata.projects') }}+ projects delivered</li>
            <li class="flex items-center gap-1.5"><x-icons.check class="w-4 h-4 text-primary" /> Ongoing support after launch</li>
        </ul>
    </div>
</section>
