<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full text-white bg-gray-600 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800']) }}>
    {{ $slot }}
</button>
`