@extends('layouts.app')

@section('head')
    <title>{{ $item->effective_meta_title }}</title>
    <meta name="description" content="{{ $item->meta_description ?: Str::limit($item->hero_subtitle ?: $item->description, 160) }}">
    @if($item->meta_keywords)
        <meta name="keywords" content="{{ $item->meta_keywords }}">
    @endif
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph --}}
    <meta property="og:title" content="{{ $item->effective_og_title }}">
    <meta property="og:description" content="{{ $item->og_description ?: Str::limit($item->description, 200) }}">
    <meta property="og:url" content="{{ url()->current() }}">
    @if($item->og_image_path)
        <meta property="og:image" content="{{ Storage::disk('public')->url($item->og_image_path) }}">
    @elseif($item->image_path)
        <meta property="og:image" content="{{ Storage::disk('public')->url($item->image_path) }}">
    @endif

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $item->effective_twitter_title }}">
    <meta name="twitter:description" content="{{ $item->twitter_description ?: Str::limit($item->description, 200) }}">
    @if($item->og_image_path || $item->image_path)
        <meta name="twitter:image" content="{{ $item->og_image_path ? Storage::disk('public')->url($item->og_image_path) : Storage::disk('public')->url($item->image_path) }}">
    @endif
@endsection

@section('content')

{{-- ═══════════════════════════════════════════════════════════════════════
     HERO - 2-column layout matching the static detail pages
══════════════════════════════════════════════════════════════════════════ --}}
<section class="relative pb-24 -mt-20 pt-35 overflow-hidden border-b border-border bg-cover"
         style="background-image: url('{{ asset('assets/images/background/doted.svg') }}')">
    <div class="relative max-w-7xl mx-auto px-6 lg:px-8">

        {{-- Breadcrumb --}}
        <nav class="flex mb-8" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2 text-sm">
                <li><a href="{{ route('home') }}" class="hover:text-primary transition-colors">Home</a></li>
                <li><x-icons.chevron-right class="w-4 h-4" /></li>
                <li><a href="{{ route('portfolio') }}" class="hover:text-primary transition-colors">Portfolio</a></li>
                <li><x-icons.chevron-right class="w-4 h-4" /></li>
                <li class="font-medium">{{ $item->title }}</li>
            </ol>
        </nav>

        <div class="grid lg:grid-cols-2 gap-16 items-center">
            {{-- Left: Text --}}
            <div>
                @if($item->badge_text)
                    <div class="inline-flex items-center gap-2 px-4 py-2 mb-4 rounded-full bg-primary/10 border border-primary/30 text-primary-500 backdrop-blur-xl">
                        <span class="text-xs font-semibold">{{ $item->badge_text }}</span>
                    </div>
                @endif

                <h1 class="text-3xl lg:text-5xl font-bold text-foreground mb-5">
                    {{ $item->title }}
                </h1>

                <p class="text-xl leading-relaxed mb-8">
                    {{ $item->hero_subtitle ?: $item->description }}
                </p>

                {{-- Tags --}}
                @if($item->tags)
                    <div class="flex flex-wrap gap-2 mb-8">
                        @foreach($item->tags as $tag)
                            <span class="border rounded-lg bg-outline-variant/10 border-outline-variant/20 text-xs px-2.5 py-1">{{ $tag }}</span>
                        @endforeach
                    </div>
                @endif

                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('contact') }}">
                        <x-form.primary-button type="button" class="rounded-full">
                            {{ $item->cta_text ?: 'Build Similar App' }}
                            <span class="w-7 h-7 rounded-full bg-white flex items-center justify-center">
                                <x-icons.go class="w-4 h-4 text-foreground" />
                            </span>
                        </x-form.primary-button>
                    </a>
                    @if($item->live_url)
                        <a href="{{ $item->live_url }}" target="_blank" rel="noopener">
                            <x-form.secondary-button type="button" class="rounded-full">
                                <x-icons.launch class="w-4 h-4" />
                                View Live
                            </x-form.secondary-button>
                        </a>
                    @endif
                </div>
            </div>

            {{-- Right: Screenshot with floating badges --}}
            <div class="relative">
                <div class="max-w-md mx-auto border border-border/50 bg-background backdrop-blur-xl rounded-2xl p-4 flex items-center justify-center relative overflow-hidden group">
                    <div class="absolute inset-0 bg-gradient-to-br from-primary/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    @if($item->image_path)
                        <div class="aspect-video rounded-xl overflow-hidden border border-outline-variant/30 relative z-10">
                            <img src="{{ Storage::disk('public')->url($item->image_path) }}"
                                 alt="{{ $item->title }} Dashboard"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                    @else
                        <div class="aspect-video rounded-xl bg-gradient-to-br {{ $item->gradient ?: 'from-blue-100 to-sky-100' }} w-full flex items-center justify-center relative z-10">
                            <x-icons.window class="w-16 h-16 text-zinc-400" />
                        </div>
                    @endif
                </div>

                {{-- Floating Badges from hero_badges JSON --}}
                @if($item->hero_badges && count($item->hero_badges) >= 1)
                    <div class="absolute -top-7 right-10 flex items-center gap-2 rounded-xl border border-border bg-background/95 backdrop-blur-xl px-4 py-3">
                        <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-500/15 text-green-500">
                            @php $b1 = $item->hero_badges[0]; @endphp
                            <x-dynamic-component :component="'icons.' . ($b1['icon'] ?? 'star')" class="w-4 h-4" />
                        </span>
                        <div class="text-xs">
                            <div class="text-muted-foreground">{{ $b1['label'] ?? '' }}</div>
                            <div class="font-semibold text-foreground">{{ $b1['value'] ?? '' }}</div>
                        </div>
                    </div>
                @endif

                @if($item->hero_badges && count($item->hero_badges) >= 2)
                    <div class="absolute -bottom-7 left-10 flex items-center gap-2 rounded-xl px-4 py-3 border border-border bg-background/95 backdrop-blur-xl">
                        <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-500/15 text-green-500">
                            @php $b2 = $item->hero_badges[1]; @endphp
                            <x-dynamic-component :component="'icons.' . ($b2['icon'] ?? 'target')" class="w-4 h-4" />
                        </span>
                        <div class="text-xs">
                            <div class="text-muted-foreground">{{ $b2['label'] ?? '' }}</div>
                            <div class="font-semibold text-foreground">{{ $b2['value'] ?? '' }}</div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     INTRO QUOTE
══════════════════════════════════════════════ --}}
@if($item->intro_quote)
<section class="py-12 border-b border-outline-variant/30">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <p class="text-xl text-muted-foreground">"{{ $item->intro_quote }}"</p>
    </div>
</section>
@endif

{{-- ═══════════════════════════════════════════
     CHALLENGES & OBJECTIVES
══════════════════════════════════════════════ --}}
@if($item->features && count($item->features))
<section class="py-24 border-b border-outline-variant/30">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold text-foreground mb-6">
                Project <span class="text-gradient">Challenges &amp; Objectives</span>
            </h2>
            @if($item->challenge)
                <p class="text-xl max-w-5xl mx-auto">{{ $item->challenge }}</p>
            @endif
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($item->features as $feature)
            <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32"></div>
                <div class="w-14 h-14 bg-primary/10 text-primary rounded-full border-1 border-outline-variant/20 mb-6 flex items-center justify-center">
                    <x-dynamic-component :component="'icons.' . ($feature['icon'] ?? 'target')" class="w-6 h-6" />
                </div>
                <h3 class="text-xl font-bold mb-3">{{ $feature['title'] }}</h3>
                <p class="text-sm leading-relaxed">{{ $feature['description'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- ═══════════════════════════════════════════
     HOW WE BUILT IT / ARCHITECTURE
══════════════════════════════════════════════ --}}
@if($item->architecture && count($item->architecture))
<section class="py-24 border-b border-outline-variant/30">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold text-foreground mb-6">
                How We Built It: <span class="text-gradient">Technical Architecture</span>
            </h2>
            @if($item->solution)
                <p class="text-xl max-w-5xl mx-auto">{{ $item->solution }}</p>
            @endif
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-14">
            @foreach($item->architecture as $i => $step)
            <div class="relative p-8 rounded-2xl border border-border bg-card overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] -mr-32 -mt-32"></div>
                <span class="text-xs font-bold uppercase tracking-wider block mb-2">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</span>
                <h3 class="text-xl font-bold mb-3">{{ $step['title'] }}</h3>
                <p class="text-sm leading-relaxed">{{ $step['description'] }}</p>
            </div>
            @endforeach
        </div>

        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <a href="{{ route('contact') }}">
                <x-form.primary-button type="button" class="px-7 py-3 rounded-2xl">
                    <span>Get Free Consultation</span>
                    <x-icons.go class="w-4 h-4" />
                </x-form.primary-button>
            </a>
            <a href="{{ config('staticdata.whatsapp_url') }}">
                <x-form.secondary-button type="button" class="px-7 py-3 rounded-2xl">
                    <x-icons.whatsapp class="w-5 h-5" />
                    <span>Chat on WhatsApp</span>
                </x-form.secondary-button>
            </a>
        </div>
    </div>
</section>
@endif

{{-- ═══════════════════════════════════════════
     FAQs
══════════════════════════════════════════════ --}}
@if($item->faqs && count($item->faqs))
<section class="py-24 border-b border-outline-variant/30">
    <div class="max-w-5xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold text-foreground mb-6">Frequently Asked Questions</h2>
        </div>

        <div class="space-y-6">
            @foreach($item->faqs as $faq)
            <div class="p-6 rounded-2xl border border-border bg-card">
                <h3 class="text-lg font-bold mb-3 flex items-start gap-2">
                    <span class="text-laravel shrink-0">Q.</span>
                    {{ $faq['question'] }}
                </h3>
                <p class="text-sm leading-relaxed">{{ $faq['answer'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- ═══════════════════════════════════════════
     RELATED PROJECTS
══════════════════════════════════════════════ --}}
@if($related && $related->isNotEmpty())
<section class="py-24 border-b border-outline-variant/30">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex justify-between items-end mb-12">
            <div>
                <h2 class="text-3xl lg:text-4xl font-bold text-foreground mb-4">Other Projects</h2>
                <p>See how we've built custom portals to drive growth.</p>
            </div>
            <a href="{{ route('portfolio') }}" class="text-primary font-bold hover:underline">View All Projects</a>
        </div>
        <div class="grid md:grid-cols-2 gap-8">
            @foreach($related as $rel)
            <a href="{{ $rel['link'] }}"
               class="group rounded-2xl border border-border bg-card overflow-hidden transition-all hover:border-primary/30">
                <div class="aspect-video overflow-hidden">
                    <img src="{{ $rel['image'] }}" alt="{{ $rel['title'] }}"
                         class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700">
                </div>
                <div class="p-8">
                    <h3 class="text-xl font-bold text-foreground mb-2 group-hover:text-primary transition-colors">{{ $rel['title'] }}</h3>
                    <p class="text-sm">{{ Str::limit($rel['desc'], 100) }}</p>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- Footer Contact --}}
@include('sections.contact')

@endsection
