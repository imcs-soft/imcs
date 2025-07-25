<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/css/navbar.css', 'resources/js/app.js'])
        @livewireStyles
        @livewireScripts

        @guest()
            @vite(['resources/css/footer.css', 'resources/js/footer.js'])
        @endguest

        <!-- Extras -->
        @stack('styles')
        @stack('scripts')
    </head>
    <body class="font-sans bg-light-gray antialiased">

    <x-app.navigation />

    <main>
        {{ $slot }}
    </main>

    @guest()
        <x-app.footer />
    @endguest
    </body>
</html>
