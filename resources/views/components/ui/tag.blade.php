<div
    {{ $attributes->merge([
        'class' => 'inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold text-xs border-outline-variant/40 text-outline-variant',
    ]) }}>
    {{ $slot }}
</div>
