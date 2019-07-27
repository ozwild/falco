<!-- NavBar -->

@include('layout.themes.default.partials.navbar')

<div class="row">
    <div class="col s12">
        <!-- Sidebar -->

    </div>
    {{--<div class="col s12 m8 l9">--}}
    <div class="col s12">
        <!-- Main content -->
        <main>
            <div class="container">

                @include('layout.themes.default.partials.breadcrumbs')

                {{ $slot }}
            </div>
        </main>
    </div>
</div>