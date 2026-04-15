<section class="py-20 px-4 sm:px-6 lg:px-8 bg-surface-container-low">
    <div class="max-w-5xl mx-auto space-y-10">
        <div class="text-center" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
            <h2 class="text-4xl md:text-5xl font-bold mb-6 text-balance">
                Let's Build Your <span class="text-gradient">Digital Success Story</span>
            </h2>
            <p class="text-lg text-on-surface max-w-2xl mx-auto">
                Our strategy experts are ready to understand your business and create a custom roadmap for your growth.
                <span class="font-bold">Let's Connect</span>
            </p>
        </div>
        <div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <a href="{{ route('contact') }}"
                    class="w-full bg-surface text-on-surface border-[0.5px] border-primary/40 p-4 rounded-lg hover:bg-muted transition-colors text-left flex items-center gap-3 relative overflow-hidden"
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
                    class="w-full bg-surface text-on-surface border-[0.5px] border-primary/40 p-4 rounded-lg hover:bg-muted transition-colors text-left flex items-center gap-3 relative overflow-hidden"
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
                    class="w-full bg-surface text-on-surface border-[0.5px] border-primary/40 p-4 rounded-lg hover:bg-muted transition-colors text-left flex items-center gap-3 relative overflow-hidden"
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
        <div class="text-center" data-aos="fade-up" data-aos-delay="500" data-aos-duration="800">
            <p class="text-sm text-on-surface/50">
                ✓ No charge for consultation • ✓ Tailored recommendations • ✓ Ready to take action
            </p>
        </div>
    </div>
</section>
