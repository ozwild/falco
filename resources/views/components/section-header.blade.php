@php
    $buttons = isset($buttons) ? $buttons : null;
@endphp

<div class="row">
    @if($buttons)
        <div class="col s12 push-m6 m6 push-l9 l3 text-right">
            {{ $buttons }}
        </div>
        <div class="col s12 pull-m6 m6 pull-l3 l9">
            <h3 class="page-title">{{ $slot }}</h3>
        </div>
    @else
        <div class="col s12 m6 l9">
            <h3 class="section-title">{{ $slot }}</h3>
        </div>
    @endif

</div>