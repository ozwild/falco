<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script>
    $(document).ready(function () {
        $('.dropdown-trigger').dropdown();
        $('.collapsible').collapsible();
    });
</script>

@push('scripts')
    <script>
        (function () {
            var storageKey = 'wide_view_state';
            var $targets = $('.container-switchable');
            var $triggers = $('.container-switchable-switch');

            $triggers.on('mouseup,click', function(event){
                event.target.focus = false;
                event.target.active = false;
                event.target.hover = false;
            });

            function setState(value) {
                localStorage.setItem(storageKey, value);
            }

            function getState() {
                var storedValue = localStorage.getItem(storageKey);
                return storedValue ?
                    storedValue : false;
            }

            function toggleContainers(doNotSetState) {

                var newState, currentState = getState();

                if (currentState !== "active") {
                    $targets.removeClass('container');
                    $triggers.addClass("active");
                    newState = "active";
                } else {
                    $targets.addClass('container');
                    $triggers.removeClass("active");
                    newState = "not-active";
                }

                if (!doNotSetState) {
                    setState(newState);
                }

            }

            if (getState() === "active") {
                $targets.removeClass('container');
                $triggers.addClass("active");
            }

            window.toggleContainers = toggleContainers;

        })();
    </script>
@endpush