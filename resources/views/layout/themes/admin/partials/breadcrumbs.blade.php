<div id="breadcrumbs-container">
    <div class="breadcrumbs-nav z-depth-1 grey lighten-4">
        <div class="nav-wrapper">
            <div class="row">
                <div class="col s12">

                    <a href="{{ url('/') }}" class="breadcrumb">Home</a>

                    @stack('breadcrumbs')

                </div>
            </div>
        </div>
    </div>
</div>
