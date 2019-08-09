<div id="page-background" class="background-layer layer">
    <div id="page-background-layer-1" class="layer"></div>
    <div id="page-background-layer-2" class="layer"></div>
    <div id="page-background-layer-3" class="layer"></div>
</div>

@push('styles')
    <style>
        #page-background.background-layer {
            z-index: 0;
            position: fixed;
        }

        #page-background #page-background-layer-1.layer {
            background: linear-gradient(70deg, rgba(0, 40, 30, 0.2), rgba(40, 70, 75, 0.2));
        }

        #page-background #page-background-layer-3.layer {
            background: repeating-linear-gradient(45deg, rgba(124, 125, 130, 0.03), transparent 2em);
        }

        #page-background #page-background-layer-3.layer {

        }
    </style>
@endpush