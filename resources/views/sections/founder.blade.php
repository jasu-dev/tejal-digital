@php
    $founder = config('staticdata.founder');
    $hasPhoto = file_exists(public_path($founder['photo']));
    $initials = collect(explode(' ', $founder['name']))->map(fn($part) => mb_substr($part, 0, 1))->take(2)->implode('');
    $firstName = explode(' ', $founder['name'])[0];
    $socials = array_filter($founder['socials']);
    $socialLabels = ['linkedin' => 'LinkedIn', 'github' => 'GitHub', 'instagram' => 'Instagram', 'facebook' => 'Facebook'];
@endphp

<section class="py-14 sm:py-20 px-3 sm:px-6 lg:px-8 overflow-hidden border-b border-outline-variant/30">
    <div class="max-w-6xl mx-auto grid lg:grid-cols-12 gap-10 lg:gap-16 items-center">

        {{-- Photo --}}
        <div class="lg:col-span-5 relative max-w-md mx-auto w-full" data-aos="fade-right" data-aos-duration="1000">
            <div class="absolute -inset-4 rounded-[2rem] gradient-primary opacity-20 blur-2xl"></div>
            <div class="relative rounded-[2rem] p-1.5 gradient-primary shadow-2xl shadow-primary-500/20">
                <div class="relative aspect-[4/5] rounded-[1.65rem] overflow-hidden bg-primary-50">
                    @if ($hasPhoto)
                        <img src="{{ asset($founder['photo']) }}" alt="{{ $founder['name'] }}, {{ $founder['role'] }}"
                            loading="lazy" class="w-full h-full object-cover object-top">
                    @else
                        <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-primary-100 to-amber-100">
                            <span class="text-7xl font-bold text-primary-600/70">{{ $initials }}</span>
                        </div>
                    @endif
                    <div class="absolute inset-x-0 bottom-0 h-1/3 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute left-5 right-5 bottom-5 text-white">
                        <p class="text-xl font-bold tracking-tight">{{ $founder['name'] }}</p>
                        <p class="text-sm text-white/80">{{ $founder['role'] }}, Tejal Digital</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Details --}}
        <div class="lg:col-span-7" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000">
            <div
                class="inline-flex items-center gap-2 px-4 py-2 mb-5 rounded-full bg-primary/10 border border-primary/30 text-primary-500 backdrop-blur-xl">
                <span class="text-xs sm:text-sm font-semibold">The Mind Behind Tejal Digital</span>
            </div>
            <h2 class="text-3xl lg:text-5xl font-bold tracking-tight mb-2">
                Hi, I'm <span class="text-gradient">{{ $firstName }}</span>
            </h2>
            <p class="text-lg font-medium text-muted-foreground mb-6">{{ $founder['role'] }}</p>

            <p class="text-md sm:text-lg leading-relaxed text-foreground/85 mb-6">
                {{ $founder['bio'] }}
            </p>

            <blockquote class="border-l-2 border-primary pl-5 mb-8 text-foreground/80 italic leading-relaxed">
                “{{ $founder['quote'] }}”
            </blockquote>

            <div class="flex flex-col sm:flex-row sm:items-center gap-5">
                <a href="{{ config('staticdata.whatsapp_url') }}" target="_blank" rel="noopener">
                    <x-form.primary-button type="button" class="px-6 py-3 rounded-2xl shadow-lg shadow-primary-500/25">
                        <x-icons.whatsapp class="w-4 h-4" />
                        <span>Talk to {{ $firstName }} Directly</span>
                    </x-form.primary-button>
                </a>
                @if ($socials)
                    <div class="flex items-center gap-2">
                        @foreach ($socials as $network => $url)
                            <a href="{{ $url }}" target="_blank" rel="noopener"
                                aria-label="{{ $founder['name'] }} on {{ $socialLabels[$network] ?? ucfirst($network) }}"
                                class="w-11 h-11 rounded-full border border-border bg-card flex items-center justify-center text-foreground/70 hover:text-white hover:bg-primary hover:border-primary transition-colors">
                                <x-dynamic-component :component="'icons.' . $network" class="w-5 h-5" />
                            </a>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
