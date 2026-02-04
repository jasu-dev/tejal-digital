<section class="py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center group">
                <div
                    class="w-16 h-16 bg-primary-500 rounded-2xl mx-auto mb-4 flex items-center justify-center group-hover:scale-110 transition-transform">
                    <x-icons.target class="w-6 h-6 text-white" />
                </div>
                <div class="text-3xl font-bold text-slate-900 mb-1">{{ config('staticdata.projects') }}+</div>
                <div class="text-slate-600">Projects Delivered</div>
            </div>
            <div class="text-center group">
                <div
                    class="w-16 h-16 bg-primary-500 rounded-2xl mx-auto mb-4 flex items-center justify-center group-hover:scale-110 transition-transform">
                    <x-icons.love class="w-6 h-6 text-white" />
                </div>
                <div class="text-3xl font-bold text-slate-900 mb-1">{{ config('staticdata.satisfaction') }}%</div>
                <div class="text-slate-600">Client Satisfaction</div>
            </div>
            <div class="text-center group">
                <div
                    class="w-16 h-16 bg-primary-500 rounded-2xl mx-auto mb-4 flex items-center justify-center group-hover:scale-110 transition-transform">
                    <x-icons.users class="w-6 h-6 text-white" />
                </div>
                <div class="text-3xl font-bold text-slate-900 mb-1">{{ config('staticdata.clients') }}+</div>
                <div class="text-slate-600">Happy Clients</div>
            </div>
            <div class="text-center group">
                <div
                    class="w-16 h-16 bg-primary-500 rounded-2xl mx-auto mb-4 flex items-center justify-center group-hover:scale-110 transition-transform">
                    <x-icons.launch class="w-6 h-6 text-white" />
                </div>
                <div class="text-3xl font-bold text-slate-900 mb-1">{{ config('staticdata.experience_years') }}+</div>
                <div class="text-slate-600">Years Experience</div>
            </div>
        </div>
    </div>
</section>
