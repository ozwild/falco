<div id="page-header" class="z-depth-1">

    <div class="background-layer layer darken-2 ">
        <div id="header-background-pictures" class="layer background-layer">
            <div id="header-background-picture-1" class="header-background-picture layer background-layer"></div>
        </div>
        <div id="header-background-cover" class="layer background-layer"></div>
        <div id="particles-js" class="layer background-layer"></div>
    </div>

    <div class="row">
        <div class="col s6">
            <a href="#"><h1 class="big-brand white-text relative">{{ config('app.name') }}</h1></a>
        </div>
        <div class="col s6 text-right">
            <div>
                <img src="https://picsum.photos/id/10/2500/1667" width="100" alt="" class="relative">
            </div>
            <div>
                <a class="{{ html_class("button.basic") }} relative" href="{{ route('accounts.create') }}"
                   title="{{ __('captions.create', ['resource'=> trans_choice('models.account',TC_SINGULAR)])  }}">
                    See Listings
                </a>
            </div>
        </div>
    </div>
</div>

<div class="grey darken-3 z-depth-1" style="height: 2em">
    <div class="row">
        <div class="col s12 text-right">

            <a class="{{ html_class("button.header") }} " href="{{ route('accounts.create') }}"
               title="{{ __('captions.create', ['resource'=> trans_choice('models.account',TC_SINGULAR)])  }}">
                @lang("labels.add") {{ trans_choice('labels.account',TC_SINGULAR) }}
                <i class="material-icons right">add</i>
            </a>

            <a class="{{ html_class("button.header") }} " href="{{ route('users.create') }}"
               title="{{ __('captions.create', ['resource'=> trans_choice('models.user',TC_SINGULAR)])  }}">
                @lang("labels.add") {{ trans_choice('labels.user',TC_SINGULAR) }}
                <i class="material-icons right">add</i>
            </a>

        </div>
    </div>
</div>

<div style="margin-bottom: 6em;"></div>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.js"
            integrity="sha256-icjghcPaibMf1jv4gQIGi5MeWNHem2SispcorCiCfSg=" crossorigin="anonymous"></script>
    <script>

        /**
         * Header Scripts
         */
        particlesJS.load('particles-js', 'assets/particlesjs-config.json', function () {
            console.log('callback - particles.js config loaded');
        });

        (function () {

            var reference = new Image();
            var header = document.getElementById("header-background-picture-1");
            var backgroundCover = document.getElementById("header-background-cover");


            reference.src = 'https://picsum.photos/1280/740?blur';
            reference.onload = function () {
                header.style.backgroundImage = "url('https://picsum.photos/1280/740?blur')";
                backgroundCover.classList.add("vanish");
            };
        })();

    </script>
@endpush

@push('styles')
    <style>
        #page-header {
            padding: 4em 0;
            position: relative;
            transition: background-color 2s;
        }

        #page-header .header-background-picture {
            background-repeat: no-repeat;
            background-position: 50% 35%;
            background-size: cover;
        }

        #page-header #header-background-cover {
            display: block;
            background-color: rgba(220, 220, 220, 1);
        }

        #page-header #header-background-cover.vanish {
            animation: vanishCover 2s both;
        }

        #page-header .big-brand {
            font-size: 6em;
            font-weight: bold;
            margin-left: 1em;
            display: inline-block;
            -webkit-animation: text-shadow-drop-center 2.6s 3s both;
            animation: text-shadow-drop-center 2.6s 2s both;
        }

        @keyframes vanishCover {
            0% {
                background-color: rgba(220, 220, 220, 1);
                display: block;
            }
            100% {
                background-color: rgba(220, 220, 220, 0);
                display: none;
            }
        }


        /* ----------------------------------------------
         * Generated by Animista on 2019-8-6 12:58:5
         * w: http://animista.net, t: @cssanimista
         * ---------------------------------------------- */

        /**
         * ----------------------------------------
         * @animation text-shadow-drop-center
         * ----------------------------------------
         */
        @-webkit-keyframes text-shadow-drop-center {
            0% {
                text-shadow: 0 0 0 rgba(0, 0, 0, 0);
            }
            100% {
                text-shadow: 0 0 18px rgba(0, 0, 0, 0.35);
            }
        }

        @keyframes text-shadow-drop-center {
            0% {
                text-shadow: 0 0 0 rgba(0, 0, 0, 0);
            }
            100% {
                text-shadow: 0 0 18px rgba(0, 0, 0, 0.35);
            }
        }


    </style>
@endpush