@php
    $iconSystem = config("theme.getIconSystem")();
    $getIconFromRepository = config("theme.getIconFromRepository");
    $getIconReference = $getIconFromRepository($iconSystem);
    $icon = isset($icon)? strtolower($icon) : null;
@endphp

@if($iconSystem == "materialize")
    <i class="material-icons right">{{ $getIconReference($icon) }}</i>
@elseif($iconSystem == "font-awesome")
    <i class="fa {{ $getIconReference($icon) }}"></i>
@endif