@props(['active'])

@php
$classes = ($active ?? false)
            ? 'bg-gray-100 text-gray-900 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold'
            : 'text-gray-700 hover:text-gray-900 hover:bg-gray-50 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>