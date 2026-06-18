<section class="py-26 relative overflow-hidden bg-gradient-to-b from-background via-[#fffbee] to-primary-500/20">

    <div class="relative max-w-7xl mx-auto px-6 lg:px-8 text-center" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
        <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 rounded-full bg-primary/10 border border-primary/30 text-primary-500 backdrop-blur-xl">
            <span class="text-sm font-semibold">Get in Touch</span>
        </div>
        <h2 class="text-4xl lg:text-6xl font-black text-foreground mb-8">
            Ready to Start Your Project?
        </h2>

        <p class="text-xl text-on-surface/60 mb-12 max-w-2xl mx-auto leading-relaxed">
            Let's discuss your ideas and create something amazing together. Get a free consultation today.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            
            <a href="{{ route('contact') }}" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                <x-form.primary-button type="button" class="px-7 py-3 rounded-2xl">
                    <span>Get Free Consultation</span>
                    <x-icons.go class="w-4 h-4" />
                </x-form.primary-button>
            </a>
            <a href="{{ config('staticdata.whatsapp_url') }}" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                <x-form.secondary-button type="button" class="px-7 py-3 rounded-2xl">
                    <x-icons.whatsapp class="w-5 h-5" />
                <span>Chat on WhatsApp</span>
                </x-form.secondary-button>
            </a>
        </div>
    </div>
</section>
