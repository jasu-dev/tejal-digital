<section class="py-20 px-4 sm:px-6 lg:px-8 bg-brand-dark-950 text-white">
    <div class="max-w-5xl mx-auto space-y-8">
        <div class="text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-6 text-balance">
                Let's Build Your <span class="text-gradient">Digital Success Story</span>
            </h2>
            <p class="text-lg text-secondary-foreground/80 max-w-2xl mx-auto">
                Our strategy experts are ready to understand your business and create a custom roadmap for your growth.
                <span class="font-bold">Let's Connect</span>
            </p>
        </div>
        <div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <a href="{{ route('contact') }}"
                    class="w-full bg-white text-brand-dark-950 p-4 border border-border rounded-lg hover:bg-muted transition-colors text-left flex items-center gap-3">
                    <x-icons.time class="w-5 h-5 text-primary-600 flex-shrink-0" />
                    <div>
                        <p class="font-semibold text-sm">Schedule a Call</p>
                        <p class="text-xs text-brand-dark-950/80">Pick a time that works for you</p>
                    </div>
                </a>
                <a href="tel:{{ config('staticdata.phone') }}"
                    class="w-full bg-white text-brand-dark-950 p-4 border border-border rounded-lg hover:bg-muted transition-colors text-left flex items-center gap-3">
                    <x-icons.call class="w-5 h-5 text-primary-600 flex-shrink-0" />
                    <div>
                        <p class="font-semibold text-sm">Call Us Now</p>
                        <p class="text-xs text-brand-dark-950/80">Speak with a specialist today</p>
                    </div>
                </a>
                <a href="mailto:{{ config('staticdata.email') }}"
                    class="w-full bg-white text-brand-dark-950 p-4 border border-border rounded-lg hover:bg-muted transition-colors text-left flex items-center gap-3">
                    <x-icons.email class="w-5 h-5 text-primary-600 flex-shrink-0" />
                    <div>
                        <p class="font-semibold text-sm">Email Us</p>
                        <p class="text-xs text-brand-dark-950/80">We'll respond within 2 hours</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="text-center">
            <p class="text-sm text-brand-dark-100/80">
                ✓ No charge for consultation • ✓ Tailored recommendations • ✓ Ready to take action
            </p>
        </div>
    </div>
</section>
