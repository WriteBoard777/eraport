<a 
    {{ $attributes->merge(
        ['class' => '
            block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white'
        ]) }}>
        {{ $slot }}
    </a>
