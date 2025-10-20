@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:bg-gray-600 dark:text-white dark:hover:text-white transition duration-150 ease-in-out'
            : 'block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
