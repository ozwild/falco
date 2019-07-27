<nav class="breadcrumbs-nav z-depth-1 grey lighten-4">
    <div class="nav-wrapper">
        <div class="col s12">
            <a href="{{ url('/') }}" class="breadcrumb">Home</a>

            @stack('breadcrumbs')

        </div>
    </div>
</nav>

<style>
    .breadcrumbs-nav {
        box-shadow: none;
        border: 1px solid rgba(46,46,46,0.1);
        border-bottom-left-radius: 1.5em;
        border-bottom-right-radius: 1.5em;
        margin: 0 0 3em 0;
    }

    .breadcrumb {
        color: rgba(46, 46, 46, 0.7);
    }

    .breadcrumb:last-child {
        color: rgba(46, 46, 46, 1);
    }

    .breadcrumb::before {
        color: yellowgreen;
    }
</style>