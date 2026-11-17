{{-- Shared layout for Privacy Policy, Terms and Refund pages. Child views set $title, $description, $updated. --}}
@extends('layouts.app')

@section('head')
    <title>{{ $title }} | Tejal Digital</title>
    <meta name="description" content="{{ $description }}">
    <link rel="canonical" href="@siteUrl">
    <meta property="og:title" content="{{ $title }} | Tejal Digital">
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:url" content="@siteUrl">
@endsection

@section('content')
    <section class="border-b border-border bg-gradient-to-b from-primary-50/60 to-background">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 pt-10 pb-10 md:pt-14">
            <nav aria-label="Breadcrumb" class="mb-5">
                <ol class="flex items-center gap-1.5 text-sm text-muted-foreground">
                    <li><a href="{{ route('home') }}" class="hover:text-primary transition-colors">Home</a></li>
                    <li><x-icons.chevron-right class="w-3.5 h-3.5" /></li>
                    <li class="text-foreground font-medium" aria-current="page">{{ $title }}</li>
                </ol>
            </nav>
            <h1 class="text-3xl md:text-4xl font-bold tracking-tight mb-3">{{ $title }}</h1>
            <p class="text-sm text-muted-foreground">Last updated: {{ $updated }}</p>
        </div>
    </section>

    <div class="max-w-3xl mx-auto px-4 sm:px-6 py-10 md:py-14">
        <div class="space-y-8 text-foreground/85 leading-relaxed
                    [&_h2]:text-xl [&_h2]:font-bold [&_h2]:text-foreground [&_h2]:mb-3
                    [&_p]:mb-3 [&_ul]:list-disc [&_ul]:pl-6 [&_ul]:space-y-1.5 [&_ul]:mb-3
                    [&_a]:text-primary [&_a]:underline [&_strong]:text-foreground">
            @yield('legal')

            <section class="rounded-2xl border border-border bg-card p-6">
                <h2>Contact us</h2>
                <p>
                    <strong>Tejal Digital</strong><br>
                    Shiv Colony, Nagaur, Rajasthan 341001, India<br>
                    Email: <a href="mailto:{{ config('staticdata.email') }}">{{ config('staticdata.email') }}</a><br>
                    Phone: <a href="tel:{{ config('staticdata.phone') }}">{{ config('staticdata.phone') }}</a>
                    @if (config('staticdata.udyam_number'))
                        <br>Udyam Registration No.: {{ config('staticdata.udyam_number') }}
                    @endif
                    @if (config('staticdata.gstin'))
                        <br>GSTIN: {{ config('staticdata.gstin') }}
                    @endif
                </p>
            </section>
        </div>
    </div>
@endsection
