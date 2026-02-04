<button {{ $attributes->merge([
    'class' => 'cursor-pointer inline-flex items-center gap-2 bg-primary-500 text-white hover:opacity-90 px-4 py-2 font-medium transition-all duration-300'
    ]) }}>
    {{ $slot }}
</button>