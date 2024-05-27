<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="corporate">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>NAPPII</title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=raleway:200,400,600,800" rel="stylesheet"
        nonce="{{ csp_nonce() }}" />

    {{-- CSS --}}
    @vite(['resources/css/app.css'])
</head>

<body class="antialiased min-h-screen w-full flex flex-col justify-between">
    @if (session()->has('flas-message'))
        <input type="hidden" name="flash_type" value="{{ session('flas-message')['error'] }}">
        <input type="hidden" name="flash_message" value="{{ session('flas-message')['message'] }}">
    @endif

    <div id="toast-wrapper" class="toast toast-bottom items-end toast-end z-50">
    </div>

    <div class="">
        @include('components.layouts.dashboard.navbar')

        <main class="mt-6 mb-12 w-full max-w-6xl mx-auto">
            @yield('content')
        </main>
    </div>

    @include('components.layouts.dashboard.footer')

    @vite(['resources/js/app.js'])
</body>

</html>
