<!DOCTYPE html>

@include('layout.load')

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    @yield('metas')

    <title>{{ config('app.name') }}</title>

    @yield('fonts')
    @yield('styles')

</head>
<body>

@yield('body')

@yield('scripts')

</body>
</html>
