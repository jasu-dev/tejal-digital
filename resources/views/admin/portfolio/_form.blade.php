{{--
    Shared form partial for portfolio create / edit.
    Requires: $portfolio (null|PortfolioItem), $statuses, $iconNames
--}}

@php
    $v   = fn(string $k, $def = '')  => old($k, $portfolio?->$k ?? $def);
    $arr = fn(string $k)              => old($k, $portfolio?->$k ? implode(', ', (array)$portfolio->$k) : '');
    $json = fn(string $k)             => old($k . '_json', $portfolio?->$k ? json_encode($portfolio->$k, JSON_UNESCAPED_UNICODE) : '[]');
@endphp

{{-- ═══════════════════════════════════════════
     1. BASIC INFO
══════════════════════════════════════════════ --}}
<div class="bg-white rounded-2xl border border-zinc-200 overflow-hidden">
    <div class="px-5 py-3 bg-zinc-50 border-b border-zinc-200 flex items-center gap-2">
        <div class="w-2 h-2 rounded-full bg-[#D64523]"></div>
        <h2 class="text-sm font-bold text-zinc-800">Basic Information</h2>
    </div>
    <div class="p-5 grid grid-cols-1 md:grid-cols-2 gap-4">
        {{-- Title --}}
        <div class="md:col-span-2">
            <label class="block text-xs font-semibold text-zinc-700 mb-1.5" for="title">Title <span class="text-red-500">*</span></label>
            <input id="title" name="title" type="text" required value="{{ $v('title') }}"
                   class="w-full border border-zinc-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#D64523]/30 focus:border-[#D64523]"
                   placeholder="e.g. KrishnaAcademy – LMS Platform">
        </div>

        {{-- Slug --}}
        <div>
            <label class="block text-xs font-semibold text-zinc-700 mb-1.5" for="slug">
                Slug <span class="text-zinc-400 font-normal">(auto-generated if blank)</span>
            </label>
            <input id="slug" name="slug" type="text" value="{{ $v('slug') }}"
                   class="w-full border border-zinc-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#D64523]/30 focus:border-[#D64523]"
                   placeholder="e.g. krishna-academy">
        </div>

        {{-- Category --}}
        <div>
            <label class="block text-xs font-semibold text-zinc-700 mb-1.5" for="category">Category <span class="text-red-500">*</span></label>
            <input id="category" name="category" type="text" required value="{{ $v('category') }}"
                   class="w-full border border-zinc-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#D64523]/30 focus:border-[#D64523]"
                   placeholder="e.g. Learning Platform">
        </div>

        {{-- Status --}}
        <div>
            <label class="block text-xs font-semibold text-zinc-700 mb-1.5" for="status">Status <span class="text-red-500">*</span></label>
            <select id="status" name="status" required
                    class="w-full border border-zinc-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#D64523]/30 focus:border-[#D64523]">
                @foreach($statuses as $s)
                    <option value="{{ $s->value }}" {{ $v('status', 'active') === $s->value ? 'selected' : '' }}>
                        {{ $s->label() }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Sort Order --}}
        <div>
            <label class="block text-xs font-semibold text-zinc-700 mb-1.5" for="sort_order">Sort Order <span class="text-zinc-400 font-normal">(0 = top)</span></label>
            <input id="sort_order" name="sort_order" type="number" min="0" value="{{ $v('sort_order', 0) }}"
                   class="w-full border border-zinc-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#D64523]/30 focus:border-[#D64523]">
        </div>

        {{-- Tags --}}
        <div class="md:col-span-2">
            <label class="block text-xs font-semibold text-zinc-700 mb-1.5" for="tags">
                Technology Tags <span class="text-zinc-400 font-normal">(comma separated)</span>
            </label>
            <input id="tags" name="tags" type="text" value="{{ $arr('tags') }}"
                   class="w-full border border-zinc-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#D64523]/30 focus:border-[#D64523]"
                   placeholder="Laravel, MySQL, Bootstrap, Tailwind CSS">
        </div>

        {{-- Client Name --}}
        <div>
            <label class="block text-xs font-semibold text-zinc-700 mb-1.5" for="client_name">Client Name</label>
            <input id="client_name" name="client_name" type="text" value="{{ $v('client_name') }}"
                   class="w-full border border-zinc-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#D64523]/30 focus:border-[#D64523]"
                   placeholder="e.g. KrishnaAcademy Pvt Ltd">
        </div>

        {{-- Live URL --}}
        <div>
            <label class="block text-xs font-semibold text-zinc-700 mb-1.5" for="live_url">Live URL</label>
            <input id="live_url" name="live_url" type="url" value="{{ $v('live_url') }}"
                   class="w-full border border-zinc-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#D64523]/30 focus:border-[#D64523]"
                   placeholder="https://example.com">
        </div>

        {{-- Legacy Detail Route --}}
        <div class="md:col-span-2">
            <label class="block text-xs font-semibold text-zinc-700 mb-1.5" for="detail_route">
                Legacy Static Route <span class="text-zinc-400 font-normal">(leave blank to use /portfolio/{slug})</span>
            </label>
            <input id="detail_route" name="detail_route" type="text" value="{{ $v('detail_route') }}"
                   class="w-full border border-zinc-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#D64523]/30 focus:border-[#D64523]"
                   placeholder="e.g. portfolio.attendance-manager">
        </div>
    </div>
</div>

{{-- ═══════════════════════════════════════════
     2. HERO SECTION
══════════════════════════════════════════════ --}}
<div class="bg-white rounded-2xl border border-zinc-200 overflow-hidden">
    <div class="px-5 py-3 bg-zinc-50 border-b border-zinc-200 flex items-center gap-2">
        <div class="w-2 h-2 rounded-full bg-violet-500"></div>
        <h2 class="text-sm font-bold text-zinc-800">Hero Section</h2>
        <span class="text-xs text-zinc-400 ml-1">- 2-column with floating image</span>
    </div>
    <div class="p-5 grid grid-cols-1 md:grid-cols-2 gap-4">

        {{-- Badge pill --}}
        <div>
            <label class="block text-xs font-semibold text-zinc-700 mb-1.5" for="badge_text">
                Badge Pill Text <span class="text-zinc-400 font-normal">(e.g. "Custom Software Development")</span>
            </label>
            <input id="badge_text" name="badge_text" type="text" value="{{ $v('badge_text') }}"
                   class="w-full border border-zinc-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#D64523]/30 focus:border-[#D64523]"
                   placeholder="Custom SaaS Platform">
        </div>

        {{-- CTA button text --}}
        <div>
            <label class="block text-xs font-semibold text-zinc-700 mb-1.5" for="cta_text">CTA Button Text</label>
            <input id="cta_text" name="cta_text" type="text" value="{{ $v('cta_text', 'Build Similar App') }}"
                   class="w-full border border-zinc-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#D64523]/30 focus:border-[#D64523]"
                   placeholder="Build Similar App">
        </div>

        {{-- Card description (short) --}}
        <div class="md:col-span-2">
            <label class="block text-xs font-semibold text-zinc-700 mb-1.5" for="description">
                Short Description <span class="text-red-500">*</span>
                <span class="text-zinc-400 font-normal">(shown on portfolio card)</span>
            </label>
            <textarea id="description" name="description" rows="2" required
                      class="w-full border border-zinc-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#D64523]/30 focus:border-[#D64523] resize-none"
                      placeholder="A robust, Laravel-powered web application designed to…">{{ $v('description') }}</textarea>
        </div>

        {{-- Hero subtitle (longer) --}}
        <div class="md:col-span-2">
            <label class="block text-xs font-semibold text-zinc-700 mb-1.5" for="hero_subtitle">
                Hero Body Text <span class="text-zinc-400 font-normal">(large text below h1)</span>
            </label>
            <textarea id="hero_subtitle" name="hero_subtitle" rows="2"
                      class="w-full border border-zinc-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#D64523]/30 focus:border-[#D64523] resize-none"
                      placeholder="An intelligent reputation engine using dynamic QR routing blocks to…">{{ $v('hero_subtitle') }}</textarea>
        </div>

        {{-- Project image --}}
        <div class="md:col-span-2">
            <label class="block text-xs font-semibold text-zinc-700 mb-1.5" for="image">
                Project Screenshot / Hero Image <span class="text-zinc-400 font-normal">(JPG/PNG/WebP, max 3MB)</span>
            </label>
            @if($portfolio?->image_path)
                <div class="mb-2 flex items-center gap-3">
                    <img src="{{ Storage::disk('public')->url($portfolio->image_path) }}" alt="" class="h-20 rounded-xl border border-zinc-200 object-cover">
                    <p class="text-xs text-zinc-400">Upload a new image to replace.</p>
                </div>
            @endif
            <input id="image" name="image" type="file" accept="image/*"
                   class="w-full border border-zinc-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none file:mr-3 file:py-1 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-zinc-100 file:text-zinc-700 hover:file:bg-zinc-200">
        </div>

        {{-- Gradient --}}
        <div>
            <label class="block text-xs font-semibold text-zinc-700 mb-1.5" for="gradient">Card Gradient <span class="text-zinc-400 font-normal">(Tailwind)</span></label>
            <input id="gradient" name="gradient" type="text" value="{{ $v('gradient', 'from-blue-100 to-sky-100') }}"
                   class="w-full border border-zinc-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#D64523]/30 focus:border-[#D64523]"
                   placeholder="from-blue-100 to-sky-100">
        </div>
    </div>

    {{-- Hero Floating Badges Repeater --}}
    <div class="px-5 pb-5" x-data='repeater("hero_badges_json", {{ $json("hero_badges") }})'>
        <div class="flex items-center justify-between mb-3">
            <div>
                <p class="text-xs font-semibold text-zinc-700">Floating Image Badges</p>
                <p class="text-xs text-zinc-400">Small chips shown floating on the hero image (max 2)</p>
            </div>
            <button type="button" @click="add({icon:'target',label:'',value:''})"
                    class="text-xs bg-zinc-100 hover:bg-zinc-200 px-3 py-1.5 rounded-lg font-medium transition-colors">+ Add Badge</button>
        </div>
        <input type="hidden" :name="fieldName" :value="JSON.stringify(items)">
        <div class="space-y-3">
            <template x-for="(badge, idx) in items" :key="idx">
                <div class="grid grid-cols-3 gap-2 bg-zinc-50 border border-zinc-200 rounded-xl p-3">
                    <div>
                        <label class="block text-xs text-zinc-500 mb-1">Icon</label>
                        <select class="w-full border border-zinc-200 rounded-lg px-2 py-1.5 text-xs" x-model="badge.icon">
                            @foreach($iconNames as $icon)
                                <option value="{{ $icon }}">{{ $icon }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs text-zinc-500 mb-1">Label</label>
                        <input type="text" x-model="badge.label" class="w-full border border-zinc-200 rounded-lg px-2 py-1.5 text-xs" placeholder="Security">
                    </div>
                    <div class="relative">
                        <label class="block text-xs text-zinc-500 mb-1">Value</label>
                        <div class="flex gap-1">
                            <input type="text" x-model="badge.value" class="flex-1 border border-zinc-200 rounded-lg px-2 py-1.5 text-xs" placeholder="Selfie Verification">
                            <button type="button" @click="remove(idx)" class="text-red-400 hover:text-red-600 px-1.5">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                            </button>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>
</div>

{{-- ═══════════════════════════════════════════
     3. CONTENT SECTIONS
══════════════════════════════════════════════ --}}
<div class="bg-white rounded-2xl border border-zinc-200 overflow-hidden">
    <div class="px-5 py-3 bg-zinc-50 border-b border-zinc-200 flex items-center gap-2">
        <div class="w-2 h-2 rounded-full bg-blue-500"></div>
        <h2 class="text-sm font-bold text-zinc-800">Content Sections</h2>
    </div>
    <div class="p-5 space-y-4">

        {{-- Intro Quote --}}
        <div>
            <label class="block text-xs font-semibold text-zinc-700 mb-1.5" for="intro_quote">
                Intro Quote <span class="text-zinc-400 font-normal">(italic block shown after hero, in quotes)</span>
            </label>
            <textarea id="intro_quote" name="intro_quote" rows="2"
                      class="w-full border border-zinc-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#D64523]/30 focus:border-[#D64523] resize-none"
                      placeholder="&quot;Verifying employee locations, tracking real-time operations…&quot;">{{ $v('intro_quote') }}</textarea>
        </div>

        {{-- Challenge --}}
        <div>
            <label class="block text-xs font-semibold text-zinc-700 mb-1.5" for="challenge">Challenge / Problem</label>
            <textarea id="challenge" name="challenge" rows="3"
                      class="w-full border border-zinc-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#D64523]/30 focus:border-[#D64523] resize-none"
                      placeholder="What problem was this project solving?">{{ $v('challenge') }}</textarea>
        </div>

        {{-- Solution --}}
        <div>
            <label class="block text-xs font-semibold text-zinc-700 mb-1.5" for="solution">Solution Summary</label>
            <textarea id="solution" name="solution" rows="3"
                      class="w-full border border-zinc-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#D64523]/30 focus:border-[#D64523] resize-none"
                      placeholder="How was the problem solved?">{{ $v('solution') }}</textarea>
        </div>
    </div>
</div>

{{-- ═══════════════════════════════════════════
     4. CHALLENGES & OBJECTIVES (Features)
══════════════════════════════════════════════ --}}
<div class="bg-white rounded-2xl border border-zinc-200 overflow-hidden"
     x-data='repeater("features_json", {{ $json("features") }})'>
    <div class="px-5 py-3 bg-zinc-50 border-b border-zinc-200 flex items-center justify-between">
        <div class="flex items-center gap-2">
            <div class="w-2 h-2 rounded-full bg-emerald-500"></div>
            <h2 class="text-sm font-bold text-zinc-800">Challenges &amp; Objectives Cards</h2>
            <span class="text-xs text-zinc-400 ml-1">- 4-column grid with icons</span>
        </div>
        <button type="button" @click="add({icon:'target',title:'',description:''})"
                class="text-xs bg-zinc-100 hover:bg-zinc-200 px-3 py-1.5 rounded-lg font-medium transition-colors">+ Add Card</button>
    </div>
    <input type="hidden" :name="fieldName" :value="JSON.stringify(items)">
    <div class="p-5 space-y-3">
        <template x-for="(card, idx) in items" :key="idx">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-3 bg-zinc-50 border border-zinc-200 rounded-xl p-4">
                <div>
                    <label class="block text-xs text-zinc-500 mb-1">Icon</label>
                    <select class="w-full border border-zinc-200 rounded-lg px-2 py-1.5 text-xs" x-model="card.icon">
                        @foreach($iconNames as $icon)
                            <option value="{{ $icon }}">{{ $icon }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block text-xs text-zinc-500 mb-1">Title</label>
                    <input type="text" x-model="card.title" class="w-full border border-zinc-200 rounded-lg px-2 py-1.5 text-xs" placeholder="Geo-Fenced Bounds">
                </div>
                <div class="relative">
                    <label class="block text-xs text-zinc-500 mb-1">Description</label>
                    <div class="flex gap-1">
                        <textarea x-model="card.description" rows="2" class="flex-1 border border-zinc-200 rounded-lg px-2 py-1.5 text-xs resize-none" placeholder="Brief description of this objective…"></textarea>
                        <button type="button" @click="remove(idx)" class="text-red-400 hover:text-red-600 px-1 self-start mt-0.5">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                        </button>
                    </div>
                </div>
            </div>
        </template>
        <p class="text-xs text-zinc-400 text-center py-3" x-show="items.length === 0">No cards yet. Click "+ Add Card".</p>
    </div>
</div>

{{-- ═══════════════════════════════════════════
     5. ARCHITECTURE / HOW WE BUILT IT
══════════════════════════════════════════════ --}}
<div class="bg-white rounded-2xl border border-zinc-200 overflow-hidden"
     x-data='repeater("architecture_json", {{ $json("architecture") }})'>
    <div class="px-5 py-3 bg-zinc-50 border-b border-zinc-200 flex items-center justify-between">
        <div class="flex items-center gap-2">
            <div class="w-2 h-2 rounded-full bg-amber-500"></div>
            <h2 class="text-sm font-bold text-zinc-800">Architecture / How We Built It</h2>
            <span class="text-xs text-zinc-400 ml-1">- numbered 01, 02, 03… cards</span>
        </div>
        <button type="button" @click="add({title:'',description:''})"
                class="text-xs bg-zinc-100 hover:bg-zinc-200 px-3 py-1.5 rounded-lg font-medium transition-colors">+ Add Step</button>
    </div>
    <input type="hidden" :name="fieldName" :value="JSON.stringify(items)">
    <div class="p-5 space-y-3">
        <template x-for="(step, idx) in items" :key="idx">
            <div class="flex gap-3 bg-zinc-50 border border-zinc-200 rounded-xl p-4">
                <span class="text-xs font-bold text-zinc-400 shrink-0 w-6 pt-1.5" x-text="String(idx+1).padStart(2,'0')"></span>
                <div class="flex-1 grid grid-cols-1 md:grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs text-zinc-500 mb-1">Step Title</label>
                        <input type="text" x-model="step.title" class="w-full border border-zinc-200 rounded-lg px-2 py-1.5 text-xs" placeholder="Browser Geolocation API">
                    </div>
                    <div>
                        <label class="block text-xs text-zinc-500 mb-1">Description</label>
                        <textarea x-model="step.description" rows="2" class="w-full border border-zinc-200 rounded-lg px-2 py-1.5 text-xs resize-none" placeholder="Obtaining precise real-time coordinates…"></textarea>
                    </div>
                </div>
                <button type="button" @click="remove(idx)" class="text-red-400 hover:text-red-600 px-1 self-start mt-0.5">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
        </template>
        <p class="text-xs text-zinc-400 text-center py-3" x-show="items.length === 0">No steps yet. Click "+ Add Step".</p>
    </div>
</div>

{{-- ═══════════════════════════════════════════
     6. FAQs
══════════════════════════════════════════════ --}}
<div class="bg-white rounded-2xl border border-zinc-200 overflow-hidden"
     x-data='repeater("faqs_json", {{ $json("faqs") }})'>
    <div class="px-5 py-3 bg-zinc-50 border-b border-zinc-200 flex items-center justify-between">
        <div class="flex items-center gap-2">
            <div class="w-2 h-2 rounded-full bg-pink-500"></div>
            <h2 class="text-sm font-bold text-zinc-800">FAQs</h2>
        </div>
        <button type="button" @click="add({question:'',answer:''})"
                class="text-xs bg-zinc-100 hover:bg-zinc-200 px-3 py-1.5 rounded-lg font-medium transition-colors">+ Add FAQ</button>
    </div>
    <input type="hidden" :name="fieldName" :value="JSON.stringify(items)">
    <div class="p-5 space-y-3">
        <template x-for="(faq, idx) in items" :key="idx">
            <div class="bg-zinc-50 border border-zinc-200 rounded-xl p-4 space-y-2">
                <div class="flex gap-2 items-start">
                    <div class="flex-1">
                        <label class="block text-xs text-zinc-500 mb-1">Question</label>
                        <input type="text" x-model="faq.question" class="w-full border border-zinc-200 rounded-lg px-2 py-1.5 text-xs" placeholder="How accurate is the geo-fencing check?">
                    </div>
                    <button type="button" @click="remove(idx)" class="text-red-400 hover:text-red-600 mt-5 px-1">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>
                </div>
                <div>
                    <label class="block text-xs text-zinc-500 mb-1">Answer</label>
                    <textarea x-model="faq.answer" rows="2" class="w-full border border-zinc-200 rounded-lg px-2 py-1.5 text-xs resize-none" placeholder="It uses the browser's high-accuracy HTML5 geolocation API…"></textarea>
                </div>
            </div>
        </template>
        <p class="text-xs text-zinc-400 text-center py-3" x-show="items.length === 0">No FAQs yet. Click "+ Add FAQ".</p>
    </div>
</div>

{{-- ═══════════════════════════════════════════
     7. RELATED PROJECTS
══════════════════════════════════════════════ --}}
<div class="bg-white rounded-2xl border border-zinc-200 overflow-hidden"
     x-data='repeater("related_slugs_json", {{ $json("related_slugs") }})'>
    <div class="px-5 py-3 bg-zinc-50 border-b border-zinc-200 flex items-center justify-between">
        <div class="flex items-center gap-2">
            <div class="w-2 h-2 rounded-full bg-sky-500"></div>
            <h2 class="text-sm font-bold text-zinc-800">Related Projects</h2>
            <span class="text-xs text-zinc-400 ml-1">- slugs of up to 2 other projects</span>
        </div>
        <button type="button" @click="items.length < 2 && add('')"
                class="text-xs bg-zinc-100 hover:bg-zinc-200 px-3 py-1.5 rounded-lg font-medium transition-colors">+ Add</button>
    </div>
    <input type="hidden" :name="fieldName" :value="JSON.stringify(items)">
    <div class="p-5 space-y-2">
        <template x-for="(slug, idx) in items" :key="idx">
            <div class="flex gap-2">
                <input type="text" x-model="items[idx]"
                       class="flex-1 border border-zinc-200 rounded-xl px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#D64523]/30 focus:border-[#D64523]"
                       placeholder="e.g. krishna-academy or portfolio.krishna-academy">
                <button type="button" @click="remove(idx)" class="text-red-400 hover:text-red-600">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
        </template>
        <p class="text-xs text-zinc-400" x-show="items.length === 0">Enter slugs of up to 2 related portfolio items.</p>
    </div>
</div>

{{-- ═══════════════════════════════════════════
     8. SEO
══════════════════════════════════════════════ --}}
<div class="bg-white rounded-2xl border border-zinc-200 overflow-hidden">
    <div class="px-5 py-3 bg-zinc-50 border-b border-zinc-200 flex items-center gap-2">
        <div class="w-2 h-2 rounded-full bg-teal-500"></div>
        <h2 class="text-sm font-bold text-zinc-800">SEO &amp; Open Graph</h2>
    </div>
    <div class="p-5 space-y-5">

        {{-- Meta --}}
        <div>
            <p class="text-xs font-bold text-zinc-500 uppercase tracking-wider mb-3">Meta Tags</p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="md:col-span-2">
                    <label class="block text-xs font-semibold text-zinc-700 mb-1.5" for="meta_title">
                        Meta Title <span class="text-zinc-400 font-normal">(max 70 chars)</span>
                    </label>
                    <input id="meta_title" name="meta_title" type="text" maxlength="70" value="{{ $v('meta_title') }}"
                           class="w-full border border-zinc-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-teal-400/30 focus:border-teal-500"
                           placeholder="Attendance Manager System | Geo-Fenced Employee Tracking Solution">
                </div>
                <div class="md:col-span-2">
                    <label class="block text-xs font-semibold text-zinc-700 mb-1.5" for="meta_description">
                        Meta Description <span class="text-zinc-400 font-normal">(max 160 chars)</span>
                    </label>
                    <textarea id="meta_description" name="meta_description" rows="2" maxlength="160"
                              class="w-full border border-zinc-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-teal-400/30 focus:border-teal-500 resize-none"
                              placeholder="Discover how Tejal Digital built a secure Laravel-powered attendance system…">{{ $v('meta_description') }}</textarea>
                </div>
                <div class="md:col-span-2">
                    <label class="block text-xs font-semibold text-zinc-700 mb-1.5" for="meta_keywords">
                        Meta Keywords <span class="text-zinc-400 font-normal">(comma separated)</span>
                    </label>
                    <input id="meta_keywords" name="meta_keywords" type="text" value="{{ $v('meta_keywords') }}"
                           class="w-full border border-zinc-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-teal-400/30 focus:border-teal-500"
                           placeholder="Attendance Manager, Geo-Fenced Attendance, Laravel Web App">
                </div>
            </div>
        </div>

        {{-- Open Graph --}}
        <div class="pt-4 border-t border-zinc-100">
            <p class="text-xs font-bold text-zinc-500 uppercase tracking-wider mb-3">Open Graph (Facebook / LinkedIn)</p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="md:col-span-2">
                    <label class="block text-xs font-semibold text-zinc-700 mb-1.5" for="og_title">OG Title <span class="text-zinc-400 font-normal">(max 95 chars)</span></label>
                    <input id="og_title" name="og_title" type="text" maxlength="95" value="{{ $v('og_title') }}"
                           class="w-full border border-zinc-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-teal-400/30 focus:border-teal-500"
                           placeholder="Attendance Manager System | Case Study by Tejal Digital">
                </div>
                <div class="md:col-span-2">
                    <label class="block text-xs font-semibold text-zinc-700 mb-1.5" for="og_description">OG Description <span class="text-zinc-400 font-normal">(max 200 chars)</span></label>
                    <textarea id="og_description" name="og_description" rows="2" maxlength="200"
                              class="w-full border border-zinc-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-teal-400/30 focus:border-teal-500 resize-none"
                              placeholder="A deep dive into building a secure, geo-fenced attendance system…">{{ $v('og_description') }}</textarea>
                </div>
                <div class="md:col-span-2">
                    <label class="block text-xs font-semibold text-zinc-700 mb-1.5" for="og_image">
                        OG Image <span class="text-zinc-400 font-normal">(1200×630 recommended, max 2MB)</span>
                    </label>
                    @if($portfolio?->og_image_path)
                        <div class="mb-2 flex items-center gap-3">
                            <img src="{{ Storage::disk('public')->url($portfolio->og_image_path) }}" alt="" class="h-16 rounded-xl border border-zinc-200 object-cover">
                            <p class="text-xs text-zinc-400">Current OG image. Upload to replace.</p>
                        </div>
                    @endif
                    <input id="og_image" name="og_image" type="file" accept="image/*"
                           class="w-full border border-zinc-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none file:mr-3 file:py-1 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-zinc-100 file:text-zinc-700 hover:file:bg-zinc-200">
                </div>
            </div>
        </div>

        {{-- Twitter Card --}}
        <div class="pt-4 border-t border-zinc-100">
            <p class="text-xs font-bold text-zinc-500 uppercase tracking-wider mb-3">Twitter / X Card</p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-semibold text-zinc-700 mb-1.5" for="twitter_title">Twitter Title <span class="text-zinc-400 font-normal">(max 70 chars)</span></label>
                    <input id="twitter_title" name="twitter_title" type="text" maxlength="70" value="{{ $v('twitter_title') }}"
                           class="w-full border border-zinc-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-teal-400/30 focus:border-teal-500"
                           placeholder="Attendance Manager System | Project Showcase">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-zinc-700 mb-1.5" for="twitter_description">Twitter Description <span class="text-zinc-400 font-normal">(max 200 chars)</span></label>
                    <textarea id="twitter_description" name="twitter_description" rows="2" maxlength="200"
                              class="w-full border border-zinc-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-teal-400/30 focus:border-teal-500 resize-none"
                              placeholder="Scaling agency operations with a custom geo-fenced attendance tracking system.">{{ $v('twitter_description') }}</textarea>
                </div>
            </div>
            <p class="text-xs text-zinc-400 mt-2">ℹ️ Twitter image is the same as the OG image above.</p>
        </div>
    </div>
</div>

{{-- Alpine.js Repeater JS --}}
<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('repeater', (fieldName, initial) => ({
        fieldName: fieldName,
        items: (() => {
            try {
                const parsed = typeof initial === 'string' ? JSON.parse(initial) : initial;
                return Array.isArray(parsed) ? parsed : [];
            } catch { return []; }
        })(),
        add(template) { this.items.push(JSON.parse(JSON.stringify(template))); },
        remove(idx)   { this.items.splice(idx, 1); },
    }));
});
</script>
