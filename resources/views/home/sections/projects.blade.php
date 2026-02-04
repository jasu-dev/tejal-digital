<section class="py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-secondary-100 rounded-full mb-6">
                <span class="text-sm font-medium text-secondary-800">Portfolio</span>
            </div>
            <h2 class="text-4xl lg:text-5xl font-bold text-slate-900 mb-6">
                Our <span class="text-gradient">Projects</span>
            </h2>
            <p class="text-xl text-slate-600 max-w-3xl mx-auto">
                See how we've helped businesses transform their digital presence
            </p>
        </div>
        <div class="grid lg:grid-cols-3 gap-8">
            <div
                class="rounded-lg bg-white group hover:shadow-xl transition-all duration-300 border-0 shadow-lg overflow-hidden">
                <div class="aspect-video bg-gradient-to-br from-secondary-100 to-primary-100 relative overflow-hidden">
                    <img alt="PromoFusion360 Earning Platform" loading="lazy" width="400" height="300"
                        decoding="async"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                        src="{{ asset('/assets/images/attendance.png') }}">
                    <div class="absolute top-4 left-4">
                        <div
                            class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-hidden focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 bg-white/90 text-slate-700 border-0">
                            Attendance System
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Attendance Manager System</h3>
                    <p class="text-slate-600 mb-4">
                        A Laravel-powered attendance system for agencies, featuring geo-restriction, selfie
                        verification, and leave applications. Built with a clean interface for both admin and
                        employees.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <x-ui.tag>Laravel</x-ui.tag>
                        <x-ui.tag>MySQL</x-ui.tag>
                        <x-ui.tag>Bootstrap</x-ui.tag>
                        <x-ui.tag>Tailwind CSS</x-ui.tag>
                        <x-ui.tag>Geo Location</x-ui.tag>
                        <x-ui.tag>Selfie Attendance</x-ui.tag>
                    </div>
                </div>
            </div>
            <div
                class="rounded-lg bg-white group hover:shadow-xl transition-all duration-300 border-0 shadow-lg overflow-hidden">
                <div class="aspect-video bg-gradient-to-br from-secondary-100 to-primary-100 relative overflow-hidden">
                    <img alt="KrishnaAcademy LMS" loading="lazy" width="400" height="300" decoding="async"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                        src="{{ asset('assets/images/krishna-academy.png') }}">
                    <div class="absolute top-4 left-4">
                        <div
                            class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-hidden focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 bg-white/90 text-slate-700 border-0">
                            Learning Platform</div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-slate-900 mb-2">KrishnaAcademy – LMS Platform</h3>
                    <p class="text-slate-600 mb-4">A Laravel-powered Learning Management System for delivering
                        video
                        courses, quizzes with auto-evaluation and solutions, and downloadable PDFs.</p>
                    <div class="flex flex-wrap gap-2">
                        <x-ui.tag>Laravel</x-ui.tag>
                        <x-ui.tag>PHP</x-ui.tag>
                        <x-ui.tag>Bootstrap</x-ui.tag>
                        <x-ui.tag>MySQL</x-ui.tag>
                        <x-ui.tag>Razorpay</x-ui.tag>
                        <x-ui.tag>LMS</x-ui.tag>
                    </div>
                </div>
            </div>
            <div
                class="rounded-lg bg-white group hover:shadow-xl transition-all duration-300 border-0 shadow-lg overflow-hidden">
                <div class="aspect-video bg-gradient-to-br from-secondary-100 to-primary-100 relative overflow-hidden">
                    <img alt="Kifayat Card" loading="lazy" width="400" height="300" decoding="async"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                        src="{{ asset('assets/images/kifayatcard.png') }}">
                    <div class="absolute top-4 left-4">
                        <div
                            class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-hidden focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 bg-white/90 text-slate-700 border-0">
                            Loyalty Program</div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Kifayat Card (formerly Bachatcard)</h3>
                    <p class="text-slate-600 mb-4">A Laravel-based loyalty point system for shop owners. Full admin
                        and user panel with real-time tracking and redemption options.</p>
                    <div class="flex flex-wrap gap-2">
                        <x-ui.tag>Laravel</x-ui.tag>
                        <x-ui.tag>PHP</x-ui.tag>
                        <x-ui.tag>Bootstrap</x-ui.tag>
                        <x-ui.tag>MySQL</x-ui.tag>
                        <x-ui.tag>Reward System</x-ui.tag>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-12">
            <a href="{{ route('portfolio') }}">
                <x-form.secondary-button type="button" class="text-sm px-7 py-3 rounded-2xl">
                    <span>View All Projects</span>
                    <x-icons.go class="w-4 h-4" />
                </x-form.secondary-button>
            </a>
        </div>
    </div>
</section>
