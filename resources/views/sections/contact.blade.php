<section class="py-20 sm:py-25 px-3 sm:px-6 lg:px-8 relative overflow-hidden bg-gradient-to-b from-background via-[#fffbee] to-primary-500/20">

    <div class="max-w-7xl mx-auto text-center" data-aos="fade-up" data-aos-delay="100"
        data-aos-duration="800">
        <div
            class="inline-flex items-center gap-2 px-4 py-2 mb-6 rounded-full bg-primary/10 border border-primary/30 text-primary-500 backdrop-blur-xl">
            <span class="text-xs sm:text-sm font-semibold">Get in Touch</span>
        </div>
        <h2 class="text-3xl lg:text-5xl font-bold mb-5 tracking-tight">
            Ready to Start Your Project?
        </h2>
       <p class="text-md sm:text-lg max-w-2xl mx-auto leading-relaxed mb-10">
            Let's discuss your ideas and create something amazing together. Get a free consultation today.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">

            <a href="{{ route('contact') }}" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                <x-form.primary-button type="button" class="px-7 py-3 rounded-2xl">
                    <span>Get Free Consultation</span>
                    <x-icons.go class="w-4 h-4" />
                </x-form.primary-button>
            </a>
            <a href="{{ config('staticdata.whatsapp_url') }}" data-aos="fade-up" data-aos-delay="100"
                data-aos-duration="800">
                <x-form.secondary-button type="button" class="px-7 py-3 rounded-2xl">
                    <x-icons.whatsapp class="w-5 h-5" />
                    <span>Chat on WhatsApp</span>
                </x-form.secondary-button>
            </a>
        </div>
    </div>
</section>
