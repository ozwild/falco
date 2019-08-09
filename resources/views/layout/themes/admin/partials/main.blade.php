<main>

    @include('layout.themes.admin.partials.header')

    @hasSection('page-header')
            @yield('page-header')
    @endif

    <div style="margin-bottom: 6em;"></div>

    <div class="content">
        @yield('content')
    </div>

</main>