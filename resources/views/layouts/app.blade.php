@props(['title'])
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-adsense-account" content="ca-pub-3624478285703982">

    <title> {{ isset($title) ? $title . ' - ' : '' }}{{ config('app.name', '') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap"
          rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Google tag (analytics) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0MG7KWNVC1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-0MG7KWNVC1');
    </script>

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3624478285703982"
            crossorigin="anonymous"></script>

    @yield('meta')

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">
<x-banner/>

@include('layouts.partials.header')

@yield('hero')

<main class="container flex flex-grow px-5 mx-auto">
    {{ $slot }}
</main>

@include('layouts.partials.footer')

@stack('modals')
@livewireScripts
</body>

</html>
