<!DOCTYPE html>
@props(['title' => 'Larabrary', 'hero' => false])
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Pen+Script&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles
@stack('styles')

<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="font-antialiased">
<div class="flex flex-col min-h-screen">
    @if ($hero)
        <div class="relative bg-white overflow-hidden">
            <div class="max-w-screen-xl mx-auto ">
                <div class="relative z-10 pb-8 sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                    <svg
                        class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2"
                        fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <polygon points="0,0 100,0 50,100 0,100"/>
                    </svg>
                    @include('partials.hero-nav')
                    <div
                        class="mt-10 mx-auto max-w-screen-xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                        <x-svg.mcdade-arrows class="hidden md:block absolute" style="top: 130px; left: -160px;transform: scaleX(-1);" />
                        <div class="sm:text-center lg:text-left">
                            <h2 class="text-4xl tracking-tight leading-10 font-extrabold text-teal-800 sm:text-5xl sm:leading-none md:text-6xl">
                                Brush up on your
                                <br class="xl:hidden"/>
                                <span class="text-blue-500 font-hand text-8xl">Laravel chops</span>
                            </h2>
                            <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-lg sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                                Browse our frequently updated collection of courses by prominent authors in the Laravel
                                ecosystem, and learn from the best-of-the-best.
                            </p>
                            <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                                <div class="rounded-funky">
                                    <x-button-link href="#" color="blue-600" activeColor="blue-500"
                                                   class="shadow w-full px-8 py-3 md:py-4 md:text-lg md:px-10">Browse
                                        courses
                                    </x-button-link>
                                </div>
                                <div class="mt-3 sm:mt-0 sm:ml-3">
                                    <x-button-link href="#" color="pink-100" activeColor="pink-50" text="pink-700"
                                                   class="w-full px-8 py-3 md:py-4 md:text-lg md:px-10">Sign up
                                    </x-button-link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                <div class="h-full flex justify-center items-center bg-transparent object-cover"
                     style="background-image: url('img/1727.jpg');background-size: cover;">
{{--                                        <x-bordered-card />--}}
                </div>
            </div>
        </div>
    @else
        @include('partials.nav')
    @endif
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
