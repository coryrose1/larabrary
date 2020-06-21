<!DOCTYPE html>
@props(['title' => 'Larabrary'])
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <link href="https://fonts.googleapis.com/css2?family=MuseoModerno:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        @livewireStyles
        @stack('styles')

    <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body class="bg-yellow-50">
        <div class="flex flex-col min-h-screen">
            @include('partials.nav')
            <main class="flex-1">
                {{ $slot }}
            </main>
            @include('partials.footer')
        </div>
        <x-notification/>

        <script src="{{ mix('js/app.js') }}"></script>
        @livewireScripts
        @stack('scripts')
    </body>
</html>
