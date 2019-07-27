<!DOCTYPE html>
<html>
<head>

    @include('layout.partials.metas')

    <title>{{ config('app.name') }}</title>

    @include('layout.partials.styles')

</head>
<body>

@include('layout.partials.content')

@include('layout.partials.scripts')

</body>
</html>