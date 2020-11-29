<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('scss/coffee_creator.scss') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">


</head>

<body>
<nav class=''>
    <div class='headers'>
        <div>
        <h2 class="logo-g"> GUSTO COFFEE</h2>
        </div>
        <div class="headers-links">
    <a class="text-16-800">Home</a>
    <a class="text-16-800">About</a>
    <a class="text-16-800"> Coffee</a>
    <a class="text-16-800"> Food</a>
    <a class="text-16-800">Special</a>
    <a class="text-16-800">Team</a>
    <a class="text-16-800">Constructor</a>
        </div>
    </div>
</nav>

