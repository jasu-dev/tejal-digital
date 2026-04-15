<textarea
    {{ $attributes->merge([
        'class' => 'flex min-h-[80px] w-full rounded-md border border-outline-variant/40 bg-surface-container px-3 py-2 text-sm file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-hidden disabled:cursor-not-allowed disabled:opacity-50 mt-1 focus:border-secondary-500 focus:ring-secondary-500'
    ]) }}>{{ $slot }}</textarea>
