@php
    $rating = isset($rating)? $rating: 0;
@endphp
<div class="rating-component">
    <span class=" @if($rating >= 1) active @endif ">☆</span><span
            class=" @if($rating >= 2) active @endif ">☆</span><span
            class=" @if($rating >= 3) active @endif ">☆</span><span
            class=" @if($rating >= 4) active @endif ">☆</span><span
            class=" @if($rating >= 5) active @endif ">☆</span>
</div>






