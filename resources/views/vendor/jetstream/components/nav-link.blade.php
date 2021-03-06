@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex bg-gray-400 items-center px-5 pt-1 border-b-2 border-indigo-400 text-base font-medium leading-5 text-white focus:outline-none focus:border-indigo-700 transition'
            : 'inline-flex hover:bg-gray-100 items-center px-5 pt-1 border-b-2 border-transparent text-base font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
