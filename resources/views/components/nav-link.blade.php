@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center pt-1 border-b-2 border-blue-500  text-lg leading-5 text-stone-100 hover:text-blue-500 focus:text-blue-500'
            : 'inline-flex items-center pt-1 border-b-2 border-transparent text-lg leading-5 text-stone-100 hover:text-blue-500 focus:text-blue-500';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
