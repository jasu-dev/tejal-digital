<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login - Tejal Digital</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full bg-zinc-950 flex items-center justify-center px-4" style="font-family:'Inter',system-ui,sans-serif">

<div class="w-full max-w-sm">
    {{-- Logo --}}
    <div class="text-center mb-8">
        <div class="inline-flex w-14 h-14 rounded-2xl bg-[#D64523] items-center justify-center text-white font-bold text-2xl mb-4">TD</div>
        <h1 class="text-2xl font-bold text-white">Admin Panel</h1>
        <p class="text-zinc-400 text-sm mt-1">Sign in to Tejal Digital</p>
    </div>

    {{-- Errors --}}
    @if($errors->any())
        <div class="bg-red-500/10 border border-red-500/30 text-red-400 px-4 py-3 rounded-xl text-sm mb-4">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    {{-- Form --}}
    <form action="{{ route('admin.login.post') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="block text-xs font-medium text-zinc-400 mb-1.5" for="email">Email address</label>
            <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus
                   class="w-full bg-zinc-800 border border-zinc-700 text-white placeholder-zinc-500 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-[#D64523] focus:ring-1 focus:ring-[#D64523] transition-colors"
                   placeholder="admin@tejaldigital.in">
        </div>
        <div>
            <label class="block text-xs font-medium text-zinc-400 mb-1.5" for="password">Password</label>
            <input id="password" name="password" type="password" required
                   class="w-full bg-zinc-800 border border-zinc-700 text-white placeholder-zinc-500 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-[#D64523] focus:ring-1 focus:ring-[#D64523] transition-colors"
                   placeholder="••••••••">
        </div>
        <div class="flex items-center justify-between">
            <label class="flex items-center gap-2 text-sm text-zinc-400 cursor-pointer">
                <input type="checkbox" name="remember" class="rounded accent-[#D64523]">
                Remember me
            </label>
        </div>
        <button type="submit"
                class="w-full bg-[#D64523] hover:bg-[#bf3d1f] text-white font-semibold py-3 rounded-xl transition-colors text-sm">
            Sign in
        </button>
    </form>

    <p class="text-center text-xs text-zinc-600 mt-8">Tejal Digital © {{ date('Y') }}</p>
</div>

</body>
</html>