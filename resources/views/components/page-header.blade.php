@php
    $buttons = isset($buttons)? $buttons: null;
@endphp

@push('styles')
    <style>
        .page-header {
            padding: 6em 0 4em 0;
            background: #00B4DB; /* fallback for old browsers */
            background: -webkit-linear-gradient(to left, #0083B0, #00B4DB); /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to left, #0083B0, #00B4DB); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

        .page-header .page-header-content {
            margin: 0 0 3em 0;
        }

        .page-header .page-header-buttons {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-end;
        }

        .page-header .page-header-buttons .btn {
            margin: 0.25em;
        }
    </style>
@endpush

<div class="page-header grey-text text-lighten-3">
    <div class="container">
        <div class="row">

            @if($buttons)
                <div class="page-header-content col s12 ">

                    {{ $slot }}

                </div>
                <div class="page-header-buttons col s12 text-right">

                    {{ $buttons }}

                </div>
            @else
                <div class="page-header-content col s12 ">

                    {{ $slot }}

                </div>
            @endif

        </div>
    </div>
</div>