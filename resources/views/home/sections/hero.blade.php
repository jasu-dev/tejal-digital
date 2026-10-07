<section class="relative -mt-20 pt-20 pb-12 px-4 flex flex-col items-center text-sm bg-cover bg-center bg-no-repeat border-b border-outline-variant/30"
    style="background-image: url('{{ asset('assets/images/hero-gradient-bg.png') }}')">

    <div
        class="flex flex-wrap items-center justify-center gap-2 p-1.5 pr-4 mt-10 md:mt-24 bg-white/60 backdrop-blur-xl border border-white/40 rounded-full shadow-sm">
        <div class="flex -space-x-2">
            @foreach (['AT', 'KK', 'PF'] as $initials)
                <span
                    class="w-7 h-7 rounded-full border-2 border-white bg-primary-100 text-primary-700 text-[10px] font-bold flex items-center justify-center">{{ $initials }}</span>
            @endforeach
        </div>
        <div class="flex text-amber-500">
            @for ($i = 0; $i < 5; $i++)
                <x-icons.star class="w-3.5 h-3.5 fill-current" />
            @endfor
        </div>
        <p class="text-foreground font-medium">Trusted by {{ config('staticdata.clients') }}+ businesses</p>
    </div>

    <h1 class="text-4xl md:text-6xl lg:text-7xl text-center font-bold tracking-tight leading-[1.05] max-w-4xl mt-6 mb-5">
        Websites &amp; Custom Software <span class="text-gradient">That Grow Your Business</span>
    </h1>
    <p class="text-foreground/80 text-base md:text-lg text-center max-w-2xl leading-relaxed">
        We design and build fast websites, Laravel web apps, SaaS products, CRMs and eCommerce stores -
        engineered to win customers and automate your operations.
    </p>

    <div class="flex flex-col justify-center sm:flex-row gap-3 mt-8 w-full sm:w-auto">
        <a href="{{ route('contact') }}" class="w-full sm:w-auto">
            <x-form.primary-button type="button"
                class="w-full justify-center px-7 py-3.5 rounded-2xl text-base shadow-lg shadow-primary-500/25">
                <span>Get a Free Project Quote</span>
                <x-icons.go class="w-4 h-4" />
            </x-form.primary-button>
        </a>
        <a href="{{ route('portfolio') }}" class="w-full sm:w-auto">
            <x-form.secondary-button type="button" class="w-full justify-center px-7 py-3.5 rounded-2xl text-base">
                <x-icons.play class="w-4 h-4" />
                <span>View Our Work</span>
            </x-form.secondary-button>
        </a>
    </div>

    <ul class="flex flex-wrap items-center justify-center gap-x-6 gap-y-2 mt-6 text-foreground/70">
        <li class="flex items-center gap-1.5"><x-icons.check class="w-4 h-4 text-primary" /> Free consultation</li>
        <li class="flex items-center gap-1.5"><x-icons.check class="w-4 h-4 text-primary" /> Reply within 2 hours</li>
        <li class="flex items-center gap-1.5"><x-icons.check class="w-4 h-4 text-primary" /> {{ config('staticdata.experience_years') }}+ years experience</li>
        <li class="flex items-center gap-1.5"><x-icons.check class="w-4 h-4 text-primary" /> MSME registered</li>
    </ul>
</section>
