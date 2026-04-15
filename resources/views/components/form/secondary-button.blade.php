<button {{ 
    $attributes->merge([
        'class' => 'cursor-pointer inline-flex items-center gap-2 border border-white text-white hover:bg-white hover:border-white hover:text-primary-600 px-4 py-2 font-medium transition-all duration-300'
    ]) 
}}>
    {{ $slot }}
</button>