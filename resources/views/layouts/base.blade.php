<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @hasSection('title')
            <title>@yield('title') - {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        @livewireStyles
        @stack('styles')

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body class="bg-gray-50">
        @yield('body')

        <script src="{{ mix('js/app.js') }}"></script>
        @livewireScripts
        @stack('scripts')
    </body>
</html>
