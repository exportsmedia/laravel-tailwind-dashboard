<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        {{-- <script src="{{ asset('js/init-alpine.js') }}"></script> --}}

    </head>

    <body :class="{ 'theme-dark': darkMode }" x-data="themeSetup()">
        <div class="flex h-screen bg-gray-50 dark:bg-gray-900" @keydown.escape="isOpen = false">
            
            @include('dashboard.sidebar', $nav)

            <div class="flex flex-col flex-1 w-full">
                <header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
                    @include('dashboard.header')
                </header>

                <main class="h-full overflow-y-auto">
                    <div class="container px-6 mx-auto grid">
                        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">{{ $title }}</h2>
                    </div>
                    {{ $slot }}
                </main>
            </div>
        </div>

        @stack('modals')

        @livewireScripts

    </body>
</html>
