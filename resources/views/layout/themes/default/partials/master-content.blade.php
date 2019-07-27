<!-- NavBar -->

@include('layout.partials.navbar')

<div class="row">
    <div class="col s12">
        <!-- Sidebar -->

    </div>
    {{--<div class="col s12 m8 l9">--}}
    <div class="col s12">
        <!-- Main content -->
        <main>
            <div class="container">
                {{ $slot }}
            </div>
        </main>
    </div>
</div>