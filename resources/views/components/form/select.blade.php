<select
    {{ $attributes->merge([
        'class' => 'mt-1 w-full px-3 py-2 border border-slate-300 rounded-md focus:border-secondary-500'
    ]) }}>
    {{ $slot }}
</select>
