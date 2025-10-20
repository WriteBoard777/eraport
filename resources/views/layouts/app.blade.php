<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>WriteBoard</title>
        <link rel="icon" href="/assets/img/logoWriteBoard-2.svg" type="image/x-icon">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased bg-white dark:bg-gray-900">
        <div class="min-h-screen">
            <livewire:layout.navigation />

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    </body>
</html>
