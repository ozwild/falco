@php
    $getClassFor = config("theme.getClassForm");
@endphp

@php

    $commonClass = $getClassFor("button");
    $buttonType = isset($button_type) ? "button.".$button_type : "button.default";
    $typeClass = $getClassFor($buttonType);
    $additionalClasses = isset($class) ? $class : "";
    $href = isset($href) ? $href : null;
    $type = isset($type) ? $type : null;

@endphp

@if($href)
    <a href="{{ $href }}" class="{{ "$commonClass $typeClass $additionalClasses" }}"
       @if($type) type="{{ $type }}" @endif>
        {{ $slot }}
    </a>
@else
    <button class="{{ "$commonClass $typeClass $additionalClasses" }}" @if($type) type="{{ $type }}" @endif>
        {{ $slot }}
    </button>
@endif