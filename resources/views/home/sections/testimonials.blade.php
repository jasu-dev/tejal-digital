@php
    $testimonials = [
        [
            'initials' => 'AT',
            'name' => 'Animesh Tripathi',
            'role' => 'Founder, Truly Digitally',
            'quote' =>
                'Tejal Digital has been an outstanding development partner, delivering top-notch Laravel applications with reliability and precision. Highly recommended!',
        ],
        [
            'initials' => 'KK',
            'name' => 'Krishna Kant Soni',
            'role' => 'Founder, Krishna Academy',
            'quote' =>
                'Built a powerful and seamless LMS platform for us using Laravel. Their expertise, responsiveness, and attention to detail truly exceeded our expectations!',
        ],
        [
            'initials' => 'PF',
            'name' => 'Promofusion360',
            'role' => 'Earning Platform',
            'quote' =>
                'Delivered an excellent Laravel platform that lets users earn by watching videos. The system is smooth, secure, and perfectly tailored to our model!',
        ],
    ];
@endphp
<section class="py-10 sm:py-14 px-3 overflow-hidden border-b border-outline-variant/30">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-10" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
            <div
                class="inline-flex items-center gap-2 px-4 py-2 mb-6 rounded-full bg-primary/10 border border-primary/30 text-primary-500 backdrop-blur-xl">
            <span class="text-xs sm:text-sm font-semibold">Testimonials</span>
            </div>
            <h2 class="text-3xl lg:text-5xl font-bold mb-5 tracking-tight">
                What Our Clients Say
            </h2>
            <p class="text-md sm:text-lg text-muted-foreground max-w-3xl mx-auto">
                Founders and agencies trust us to deliver reliable software - on time and built to last.
            </p>
            <div class="inline-flex items-center gap-3 mt-6 rounded-full border border-border bg-card px-4 py-2 text-sm">
                <span class="flex text-amber-500">
                    @for ($i = 0; $i < 5; $i++)
                        <x-icons.star class="w-4 h-4 fill-current" />
                    @endfor
                </span>
                <span><strong>{{ config('staticdata.satisfaction') }}%</strong> client satisfaction across
                    {{ config('staticdata.projects') }}+ projects</span>
            </div>
        </div>

        {{-- Highlighted Grid --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($testimonials as $item)
                <div class="group rounded-2xl border border-border bg-card p-7 flex flex-col transition-all duration-300 hover:border-primary/40 relative overflow-hidden"
                    data-aos="fade-up" data-aos-delay="{{ 100 * $loop->iteration }}" data-aos-duration="800">

                    <div
                        class="absolute top-0 right-0 w-64 h-64 bg-primary/5 group-hover:bg-primary/10 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>

                    {{-- Stars: Primary Glow --}}
                    <div class="flex gap-1 mb-6 text-amber-500">
                        @for ($i = 0; $i < 5; $i++)
                            <x-icons.star class="w-4 h-4 fill-current" />
                        @endfor
                    </div>

                    {{-- Quote --}}
                    <blockquote class="text-foreground/90 leading-relaxed mb-8 relative">
                        <span class="absolute -top-4 -left-2 text-4xl text-primary/20 font-serif">“</span>
                        {{ $item['quote'] }}
                    </blockquote>

                    {{-- Author Info --}}
                    <div class="mt-auto flex items-center gap-4 pt-5 border-t border-border">
                        <div
                            class="w-12 h-12 shrink-0 rounded-full bg-primary text-white flex items-center justify-center shadow-lg shadow-primary-500/20">
                            <span class="font-bold text-sm tracking-tighter">{{ $item['initials'] }}</span>
                        </div>
                        <div>
                            <div class="font-bold group-hover:text-primary transition-colors">
                                {{ $item['name'] }}
                            </div>
                            <div class="text-xs text-muted-foreground uppercase tracking-widest mt-0.5">
                                {{ $item['role'] }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
