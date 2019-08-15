<nav class="cyan darken-3">
    <div class="nav-wrapper">
        <div>

            {{--<a href="#" class="brand-logo">{{ config('app.name') }}</a>--}}

            <ul>
                <li>
                    <a class="hide-on-med-and-down" href="#">Insert a catchy slogan here. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                </li>
            </ul>


            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="{{ route('accounts.index') }}">{{ trans_choice('labels.account',TC_PLURAL) }}</a></li>
                <li><a href="{{ route('users.index') }}">{{ trans_choice('labels.user',TC_PLURAL) }}</a></li>
                <li>
                    <a class='dropdown-trigger' href='#'
                       data-target='navbar_language_selection_dropdown'>{{ App::getLocale() }}</a>
                    <ul id='navbar_language_selection_dropdown' class='dropdown-content'>
                        <li><a href="{{ route('localization','en') }}">English</a></li>
                        <li><a href="{{ route('localization','es') }}">Español</a></li>
                    </ul>
                </li>
                <li><a href="#" onclick="toggleContainers()" class="container-switchable-switch"
                       title="{{ __('captions.features.toggle_wide_view')  }}"><i
                                class="material-icons">panorama_wide_angle</i></a></li>
            </ul>
            <a href="#" data-target="slide-out" class="sidenav-trigger white-text"><i class="material-icons">menu</i></a>
        </div>
    </div>
</nav>
