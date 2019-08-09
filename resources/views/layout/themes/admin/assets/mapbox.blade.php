@push('styles')
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.40.1/mapbox-gl.css' rel='stylesheet'/>
    {{--<link href='https://api.mapbox.com/mapbox-gl-js/v1.2.0/mapbox-gl.css' rel='stylesheet'/>--}}
@endpush

@push('scripts')
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.40.1/mapbox-gl.js'></script>
    {{--<script src='https://api.mapbox.com/mapbox-gl-js/v1.2.0/mapbox-gl.js'></script>--}}
    <script>
        (function () {

            mapboxgl.accessToken = 'pk.eyJ1Ijoib3p3aWxkIiwiYSI6ImNqejI4NTdvazAza28zY2xxbDBvenY4d28ifQ.xlPM0HaJFPMtcUupKx_9jA';

            var defaults = {
                zoom: 8,
                center: [-90.5069, 14.6349],
                style: 'mapbox://styles/mapbox/light-v9',
                radius: {
                    steps: 64,
                    color: '#00838f',
                    opacity: 0.2
                }
            };

            function merge() {

                var dst = {}, src, p, args = [].splice.call(arguments, 0)

                while (args.length > 0) {
                    src = args.splice(0, 1)[0];
                    if (toString.call(src) == '[object Object]') {
                        for (p in src) {
                            if (src.hasOwnProperty(p)) {
                                if (toString.call(src[p]) == '[object Object]') {
                                    dst[p] = merge(dst[p] || {}, src[p]);
                                } else {
                                    dst[p] = src[p];
                                }
                            }
                        }
                    }
                }

                return dst;
            }

            function MapBox(container, options) {

                if (!container) {
                    throw "A container is required to render a map";
                }

                this.settings = merge({}, defaults, options);

                this.center = this.settings.center;
                this.container = container;
                this.map = new mapboxgl.Map({
                    center: this.center,
                    zoom: this.settings.zoom,
                    container: container,
                    style: this.settings.style
                });
            }

            MapBox.prototype.getRadiusPoints = function (radiusInKm) {

                var instance = this;

                var steps = instance.settings.radius.steps;

                var coords = {
                    latitude: instance.center[1],
                    longitude: instance.center[0]
                };

                if (!radiusInKm) {
                    radiusInKm = instance.settings.radius.distance;
                    if (!radiusInKm) {
                        throw "A radius (in Kilometers) is required to calculate the points of a radius circle";
                    }
                }

                var km = radiusInKm;

                var result = [];
                var distanceX = km / (111.320 * Math.cos(coords.latitude * Math.PI / 180));

                var distanceY = km / 110.574;

                var theta, x, y;
                for (var i = 0; i < steps; i++) {
                    theta = (i / steps) * (2 * Math.PI);
                    x = distanceX * Math.cos(theta);
                    y = distanceY * Math.sin(theta);

                    result.push([coords.longitude + x, coords.latitude + y]);
                }
                result.push(result[0]);
                return result;
            };

            MapBox.prototype.drawRadius = function (radiusInKm) {

                var instance = this;

                if (!instance.map) {
                    console.error("You need to render the map before drawing a radius");
                }

                if (!radiusInKm) {
                    radiusInKm = instance.settings.radius.distance;
                    if (!radiusInKm) {
                        throw "A radius (in Kilometers) is required to draw a radius in the map";
                    }
                }

                var coordinatePoints = instance.getRadiusPoints(radiusInKm);
                console.log(instance.settings);
                instance.map.on('load', function () {
                    instance.map.addLayer({
                        'id': 'travel_radius',
                        'type': 'fill',
                        'source': {
                            'type': 'geojson',
                            'data': {
                                'type': 'Feature',
                                'geometry': {
                                    'type': 'Polygon',
                                    'coordinates': [coordinatePoints]
                                }
                            }
                        },
                        'layout': {},
                        'paint': {
                            'fill-color': instance.settings.radius.color,
                            'fill-opacity': instance.settings.radius.opacity
                        }
                    });
                });

                return instance;

            };

            window.MapBox = MapBox;

        })();
    </script>

    <script>
        $(document).ready(function () {

            /**
             * Location Map auto-initialization
             */
            console.log($('.location-map'));

            $.map($('.location-map'), function (element) {
                console.log(element);
                let coordinates = JSON.parse(element.dataset.coordinates);
                let work_radius = parseInt(element.dataset.workRadius);

                var map = new MapBox(element, {center: coordinates});
                map.drawRadius(work_radius);

            });

        });
    </script>
@endpush