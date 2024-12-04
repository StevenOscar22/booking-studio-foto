<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    @vite('resources/assets/fontawesome-6.6.0-web/css/all.min.css')
    @yield('css')
</head>

<body>
    @yield('body')
</body>

<script src="{{ asset('js/jquery/jquery-3.7.1.min.js') }}"></script>
@yield('script')

</html>
