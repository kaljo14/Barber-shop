@props(['active'])

@php
$classes = ($active ?? false)

            ? 'flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200 focus:bg-gray-600 focus:text-white focus:outline-none focus:shadow-outline'
            : 'flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200 focus:bg-gray-600 focus:text-white focus:outline-none focus:shadow-outline';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
