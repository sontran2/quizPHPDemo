<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
@include('layouts.nav')
<div class="container-fluid">
   @yield('content')
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
@stack('scripts')
</body>

</html>
