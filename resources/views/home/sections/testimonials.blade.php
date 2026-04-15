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
<section class="py-24 bg-surface-container-low">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="text-center mb-16" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
            <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 gradient-primary rounded-full text-white">
                <span class="text-sm font-medium">Testimonials</span>
            </div>
            <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6">
                Client Success Stories
            </h2>
            <p class="text-xl text-on-surface/50 max-w-3xl mx-auto">
                Trusted by founders and digital agencies to deliver robust Laravel solutions.
            </p>
        </div>

        {{-- Highlighted Grid --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($testimonials as $item)
                <div class="group bg-surface-container-high rounded-2xl border border-outline-variant/20 p-8 transition-all duration-300 hover:border-primary/40 relative overflow-hidden"
                    data-aos="fade-up" data-aos-delay="{{ 100 * $loop->iteration }}" data-aos-duration="800">

                    <div
                        class="absolute top-0 right-0 w-64 h-64 bg-primary/5 group-hover:bg-primary/10 rounded-full blur-[80px] -mr-32 -mt-32">
                    </div>

                    {{-- Stars: Primary Glow --}}
                    <div class="flex gap-1 mb-8 text-primary">
                        @for ($i = 0; $i < 5; $i++)
                            <x-icons.star class="w-4 h-4 fill-current" />
                        @endfor
                    </div>

                    {{-- Quote --}}
                    <blockquote class="text-on-surface/80 leading-relaxed italic mb-8 relative">
                        <span class="absolute -top-4 -left-2 text-4xl text-primary/20 font-serif">“</span>
                        {{ $item['quote'] }}
                    </blockquote>

                    {{-- Author Info --}}
                    <div class="flex items-center gap-4 pt-4 border-t border-outline-variant/20">
                        <div
                            class="w-12 h-12 shrink-0 rounded-full bg-primary flex items-center justify-center shadow-lg">
                            <span class="text-surface font-bold text-sm tracking-tighter">{{ $item['initials'] }}</span>
                        </div>
                        <div>
                            <div class="font-bold text-on-surface group-hover:text-primary transition-colors">
                                {{ $item['name'] }}
                            </div>
                            <div class="text-xs text-on-surface/40 uppercase tracking-widest mt-0.5">
                                {{ $item['role'] }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
