<section class="relative pt-20 pb-32 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-slate-50 via-white to-primary-50/30"></div>
    <div
        class="absolute top-20 right-10 w-72 h-72 bg-gradient-to-br from-secondary-400/20 to-primary-500/20 rounded-full blur-3xl">
    </div>
    <div
        class="absolute bottom-20 left-10 w-96 h-96 bg-gradient-to-br from-primary-400/10 to-secondary-500/10 rounded-full blur-3xl">
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="space-y-8">
                <div class="space-y-6">
                    <div class="inline-flex items-center gap-2 px-4 py-2 gradient-primary rounded-full text-white">
                        <x-icons.hot class="w-4 h-4" />
                        <span class="text-sm font-medium">#1 Web Development Agency</span>
                    </div>
                    <h1 class="text-5xl lg:text-7xl font-bold leading-tight">
                        <span class="text-slate-900">Build Your</span><br>
                        <span class="text-gradient">Digital Future</span>
                    </h1>
                    <p class="text-xl text-slate-600 leading-relaxed max-w-lg">We create stunning websites, powerful
                        web applications, and digital experiences that drive real business results.
                    </p>
                </div>
                <div class="flex items-center gap-2">
                    <div class="flex -space-x-2">
                        <div
                            class="w-8 h-8 bg-gradient-to-br from-primary-400 to-secondary-500 rounded-full border-2 border-white flex items-center justify-center">
                            <span class="text-xs font-bold text-white">1</span>
                        </div>
                        <div
                            class="w-8 h-8 bg-gradient-to-br from-primary-400 to-secondary-500 rounded-full border-2 border-white flex items-center justify-center">
                            <span class="text-xs font-bold text-white">2</span>
                        </div>
                        <div
                            class="w-8 h-8 bg-gradient-to-br from-secondary-400 to-primary-500 rounded-full border-2 border-white flex items-center justify-center">
                            <span class="text-xs font-bold text-white">3</span>
                        </div>
                        <div
                            class="w-8 h-8 bg-gradient-to-br from-secondary-400 to-primary-500 rounded-full border-2 border-white flex items-center justify-center">
                            <span class="text-xs font-bold text-white">4</span>
                        </div>
                    </div>
                    <span class="text-sm text-slate-600">{{ config('staticdata.clients') }}+ Happy Clients</span>
                </div>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('portfolio') }}">
                        <x-form.secondary-button type="button" class="px-7 py-3 rounded-2xl">
                            <x-icons.play class="w-4 h-4" />
                            <span>View Our Work</span>
                        </x-form.secondary-button>
                    </a>
                    <a href="{{ route('contact') }}">
                        <x-form.primary-button type="button" class="px-7 py-3 rounded-2xl">
                            <span>Start Your Project</span>
                            <x-icons.go class="w-4 h-4" />
                        </x-form.primary-button>
                    </a>
                </div>
            </div>
            <div class="relative">
                <div class="relative bg-white rounded-3xl shadow-2xl p-8 border border-slate-200">
                    <div class="flex items-center gap-2 mb-6 pb-4 border-b border-slate-200">
                        <div class="flex gap-2">
                            <div class="w-3 h-3 bg-red-400 rounded-full"></div>
                            <div class="w-3 h-3 bg-yellow-400 rounded-full"></div>
                            <div class="w-3 h-3 bg-green-400 rounded-full"></div>
                        </div>
                        <div class="flex-1 bg-slate-100 rounded-lg px-4 py-2 text-sm text-slate-500">
                            tejaldigital.com
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="bg-slate-900 rounded-lg p-4 font-mono text-sm">
                            <div class="text-blue-400">&lt;div className=<span class="text-green-400">"hero"</span>&gt;
                            </div>
                            <div class="text-white ml-4">&lt;h1&gt;Welcome to</div>
                            <div class="text-secondary-400 ml-8">Tejal Digital</div>
                            <div class="text-white ml-4">&lt;/h1&gt;</div>
                            <div class="text-blue-400">&lt;/div&gt;</div>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div
                                class="bg-gradient-to-br from-secondary-50 to-primary-50 rounded-lg p-4 border border-secondary-200">
                                <div class="text-2xl font-bold text-secondary-600">{{ config('staticdata.projects') }}+</div>
                                <div class="text-sm text-secondary-700">Projects</div>
                            </div>
                            <div
                                class="bg-gradient-to-br from-primary-50 to-red-50 rounded-lg p-4 border border-primary-200">
                                <div class="text-2xl font-bold text-primary-600">{{ config('staticdata.satisfaction') }}%</div>
                                <div class="text-sm text-primary-700">Success Rate</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="absolute -top-4 -right-4 w-20 h-20 bg-gradient-to-br from-secondary-400 to-primary-500 rounded-2xl opacity-80 blur-sm">
                </div>
                <div
                    class="absolute -bottom-4 -left-4 w-16 h-16 bg-gradient-to-br from-primary-400 to-red-500 rounded-2xl opacity-60 blur-sm">
                </div>
            </div>
        </div>
    </div>
</section>
