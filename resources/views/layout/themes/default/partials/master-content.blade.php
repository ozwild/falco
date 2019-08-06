<!-- NavBar -->

@include('layout.themes.default.partials.navbar')

@include('layout.themes.default.partials.sidebar')

@include('layout.themes.default.partials.breadcrumbs')

<main>

    @include('layout.themes.default.partials.header')

    <br>
    <br>

    {{ $slot }}

</main>
