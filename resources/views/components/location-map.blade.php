@php
    $location = isset($location)? $location: null;
@endphp

@if( !$location )

    <div id='map' class="location-map map-placeholder"></div>

@else

    <div id='map' class="location-map" data-work-radius="{{ $location->work_radius }}"
         data-coordinates="{!! $location->coordinates !!}"></div>

@endif
