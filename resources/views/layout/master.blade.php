<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    @include('layout.partials.metas')

    <title>{{ config('app.name') }}</title>

    @include('layout.partials.styles')

</head>
<body>

<div id="page-background" class="background-layer layer">
    <div id="page-background-layer-1" class="layer"></div>
    <div id="page-background-layer-2" class="layer"></div>
    <div id="page-background-layer-3" class="layer"></div>
</div>

@include('layout.partials.content')

@stack('styles')

@include('layout.partials.scripts')

</body>
</html>