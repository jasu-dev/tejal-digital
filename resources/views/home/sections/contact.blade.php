<section class="py-24 bg-primary-600 relative overflow-hidden border-b border-brand-dark-200/50">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0"
            style="background-image: url(&quot;data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fillRule='evenodd'%3E%3Cg fill='%23ffffff' fillOpacity='0.4'%3E%3Ccircle cx='30' cy='30' r='2'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E&quot;); background-size: 60px 60px;">
        </div>
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6">
            Ready to Start Your Project?
        </h2>
        <p class="text-xl text-white mb-8 max-w-2xl mx-auto">
            Let's discuss your ideas and create something amazing together. Get a free consultation today.
        </p>
        <div class="flex flex-col sm:flex-row gap-6 justify-center">

            <a href="{{ route('contact') }}">
                <x-form.secondary-button type="button" class="px-7 py-2 bg-white border-white rounded-lg">
                    <span>Get Free Consultation</span>
                    <x-icons.go class="w-4 h-4" />
                </x-form.secondary-button>
            </a>

            <a href="{{ config('staticdata.whatsapp_url') }}">
                <x-form.secondary-button type="button" class="px-7 py-2 text-white border-white rounded-lg">
                    <x-icons.whatsapp class="w-5 h-5" />
                    <span>Chat Now</span>
                </x-form.secondary-button>
            </a>
        </div>
    </div>
</section>
