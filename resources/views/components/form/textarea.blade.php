<textarea
    {{ $attributes->merge([
        'class' => 'flex min-h-[80px] w-full rounded-md border bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-hidden disabled:cursor-not-allowed disabled:opacity-50 mt-1 border-slate-300 focus:border-secondary-500 focus:ring-secondary-500'
    ]) }}>{{ $slot }}</textarea>
