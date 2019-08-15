@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.js"
            integrity="sha256-icjghcPaibMf1jv4gQIGi5MeWNHem2SispcorCiCfSg=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            var deviceIsMobile = '{{ agent()->isMobile()? "true":"false" }}';
            console.log(deviceIsMobile);
            if (deviceIsMobile !== 'true') {
                particlesJS.load('particles-js', '/assets/particlesjs-config.json', function () {
                    console.log('callback - particles.js config loaded');
                });
            }

        });
    </script>
@endpush