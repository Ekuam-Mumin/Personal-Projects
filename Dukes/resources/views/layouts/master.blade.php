<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Dukes Liquors') }}</title>

        {{-- Tab Logo --}}
        <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">

        {{-- Font Awesome Kit --}}
        <script src="https://kit.fontawesome.com/2445de8395.js" crossorigin="anonymous"></script>

        {{-- Bootstrap CDN --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    
    <body class="antialiased">
        <div class="min-h-screen">
            {{-- Page Header/Navigation Bar --}}
            @include('layouts.header')

            <!-- Page Content -->
            {{ $mainContent }}

            {{-- Page Footer --}}
            @include('layouts.footer')
        </div>

        {{-- Bootstrap JS-Bundle --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>
