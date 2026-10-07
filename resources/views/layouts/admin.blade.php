<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow, noarchive">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin') - Tejal Digital Admin</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .admin-sidebar { width: 260px; min-width: 260px; }
        @media(max-width:768px) { .admin-sidebar { width: 100%; min-width: unset; } }
        .nav-link-active { background: rgba(214,69,35,0.12); color: #D64523; font-weight: 600; }
        .nav-link-active svg { color: #D64523; }
    </style>
</head>
<body class="h-full bg-zinc-50 text-zinc-900 font-sans flex flex-col md:flex-row" style="font-family:'Inter',system-ui,sans-serif">

{{-- ─── Sidebar ─────────────────────────────────────────────────── --}}
<aside id="adminSidebar" class="admin-sidebar bg-zinc-900 text-white flex flex-col shrink-0 hidden md:flex h-screen sticky top-0 overflow-y-auto">
    {{-- Logo --}}
    <div class="px-6 py-5 border-b border-white/10 flex items-center gap-3">
        <div class="w-8 h-8 rounded-lg bg-[#D64523] flex items-center justify-center text-white font-bold text-sm">TD</div>
        <div>
            <p class="font-bold text-sm leading-tight">Tejal Digital</p>
            <p class="text-xs text-zinc-400">Admin Panel</p>
        </div>
    </div>

    {{-- Nav --}}
    <nav class="flex-1 px-3 py-4 space-y-1">
        @php
            $navItems = [
                ['route' => 'admin.dashboard',        'icon' => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6', 'label' => 'Dashboard'],
                ['route' => 'admin.leads.index',      'icon' => 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z', 'label' => 'Leads'],
                ['route' => 'admin.page-views.index', 'icon' => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z', 'label' => 'Page Views'],
            ];
        @endphp

        @foreach($navItems as $item)
            @php $active = request()->routeIs($item['route']); @endphp
            <a href="{{ route($item['route']) }}"
               class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm transition-all duration-150
                      {{ $active ? 'nav-link-active' : 'text-zinc-400 hover:text-white hover:bg-white/5' }}">
                <svg class="w-4.5 h-4.5 shrink-0 {{ $active ? 'text-[#D64523]' : 'text-zinc-500' }}"
                     fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $item['icon'] }}"/>
                </svg>
                {{ $item['label'] }}
            </a>
        @endforeach
    </nav>

    {{-- Footer --}}
    <div class="px-4 py-4 border-t border-white/10">
        <div class="flex items-center gap-3 mb-3">
            <div class="w-8 h-8 rounded-full bg-zinc-700 flex items-center justify-center text-xs font-bold text-white">
                {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
            </div>
            <div class="min-w-0">
                <p class="text-xs font-medium text-white truncate">{{ auth()->user()->name ?? 'Admin' }}</p>
                <p class="text-xs text-zinc-500 truncate">{{ auth()->user()->email ?? '' }}</p>
            </div>
        </div>
        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button type="submit"
                    class="w-full flex items-center gap-2 px-3 py-2 rounded-lg text-xs text-zinc-400 hover:text-white hover:bg-white/5 transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                </svg>
                Logout
            </button>
        </form>
    </div>
</aside>

{{-- ─── Main Content ────────────────────────────────────────────── --}}
<div class="flex-1 flex flex-col min-h-screen min-w-0">

    {{-- Mobile Topbar --}}
    <header class="md:hidden bg-zinc-900 text-white px-4 py-3 flex items-center justify-between sticky top-0 z-50">
        <div class="flex items-center gap-2">
            <div class="w-7 h-7 rounded-md bg-[#D64523] flex items-center justify-center font-bold text-xs">TD</div>
            <span class="font-bold text-sm">Admin</span>
        </div>
        <button onclick="document.getElementById('adminSidebar').classList.toggle('hidden'); document.getElementById('adminSidebar').classList.toggle('flex'); document.getElementById('adminSidebar').classList.toggle('flex-col');"
                class="p-1 rounded-lg hover:bg-white/10 transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </header>

    {{-- Desktop Topbar --}}
    <div class="hidden md:flex items-center justify-between px-8 py-4 bg-white border-b border-zinc-200 sticky top-0 z-40">
        <div>
            <h1 class="text-lg font-bold text-zinc-900">@yield('page-title', 'Dashboard')</h1>
            @hasSection('breadcrumbs')
                <nav class="text-xs text-zinc-400 mt-0.5">@yield('breadcrumbs')</nav>
            @endif
        </div>
        <div class="flex items-center gap-3">
            <a href="{{ url('/') }}" target="_blank"
               class="text-xs text-zinc-500 hover:text-[#D64523] transition-colors flex items-center gap-1">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                </svg>
                View Site
            </a>
        </div>
    </div>

    {{-- Flash Messages --}}
    <div class="px-6 md:px-8 pt-4">
        @if(session('success'))
            <div class="flex items-center gap-3 bg-emerald-50 border border-emerald-200 text-emerald-700 px-4 py-3 rounded-xl text-sm mb-4">
                <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                </svg>
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="flex items-center gap-3 bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl text-sm mb-4">
                <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                {{ session('error') }}
            </div>
        @endif
        @if($errors->any())
            <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl text-sm mb-4">
                <ul class="list-disc list-inside space-y-1">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    {{-- Page Content --}}
    <main class="flex-1 px-6 md:px-8 py-4 pb-10">
        @yield('content')
    </main>
</div>

</body>
</html>