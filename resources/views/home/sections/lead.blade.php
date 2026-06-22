<section class="py-10 sm:py-14 px-3 sm:px-6 lg:px-8 border-b border-outline-variant/30">
    <div class="max-w-5xl mx-auto space-y-10">
        <div class="text-center" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
            <h2 class="text-3xl lg:text-5xl font-bold mb-5">
                Let's Build Your <span class="text-gradient">Digital Success Story</span>
            </h2>
            <p class="text-md sm:text-lg max-w-3xl mx-auto">
                Our strategy experts are ready to understand your business and create a custom roadmap for your growth.
            </p>
        </div>
        <div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <a href="{{ route('contact') }}"
                    class="w-full p-4 rounded-lg border border-border bg-card hover:border-primary/40 transition-colors text-left flex items-center gap-3 relative overflow-hidden"
                    data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
                    <x-icons.time class="w-5 h-5 text-primary flex-shrink-0" />
                    <div>
                        <p class="font-semibold text-sm">Schedule a Call</p>
                        <p class="text-xs text-brand-dark-950/80">Pick a time that works for you</p>
                    </div>
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                </a>
                <a href="tel:{{ config('staticdata.phone') }}"
                    class="w-full p-4 rounded-lg border border-border bg-card hover:border-primary/40 transition-colors text-left flex items-center gap-3 relative overflow-hidden"
                    data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
                    <x-icons.call class="w-5 h-5 text-primary flex-shrink-0" />
                    <div>
                        <p class="font-semibold text-sm">Call Us Now</p>
                        <p class="text-xs text-brand-dark-950/80">Speak with a specialist today</p>
                    </div>
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                </a>
                <a href="mailto:{{ config('staticdata.email') }}"
                    class="w-full p-4 rounded-lg border border-border bg-card hover:border-primary/40 transition-colors text-left flex items-center gap-3 relative overflow-hidden"
                    data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
                    <x-icons.email class="w-5 h-5 text-primary flex-shrink-0" />
                    <div>
                        <p class="font-semibold text-sm">Email Us</p>
                        <p class="text-xs text-brand-dark-950/80">We'll respond within 2 hours</p>
                    </div>
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
