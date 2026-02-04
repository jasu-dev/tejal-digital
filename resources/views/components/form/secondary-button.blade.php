<button {{ 
    $attributes->merge([
        'class' => 'cursor-pointer inline-flex items-center gap-2 border border-brand-dark-200 text-brand-dark-600 hover:bg-brand-dark-900 hover:border-brand-dark-900 hover:text-white px-4 py-2 font-medium transition-all duration-300'
    ]) 
}}>
    {{ $slot }}
</button>