<ul id="slide-out" class="sidenav">

    @if(false)

    <li>
        <div class="user-view">
            <div class="background">
                <img src="images/office.jpg">
            </div>
            <a href="#user"><img class="circle" src="images/yuna.jpg"></a>
            <a href="#name"><span class="white-text name">John Doe</span></a>
            <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
        </div>
    </li>

    @endif

    <li><a href="#!"><h4>{{ config('app.name') }}</h4></a></li>
    <li>
        <div class="divider"></div>
    </li>
    {{--<li><a class="subheader">Subheader</a></li>--}}
    <li><a class="waves-effect waves-ripple waves-red"
           href="{{ route('accounts.index') }}">{{ trans_choice('labels.account',TC_PLURAL) }}</a></li>
    <li><a class="waves-effect waves-ripple waves-red"
           href="{{ route('users.index') }}">{{ trans_choice('labels.user',TC_PLURAL) }}</a></li>

    <li class="sidenav-filler">
        <ul class="buttons">

            <li>
                <a class='dropdown-trigger' href='#'
                   data-target='sidebar_language_selection_dropdown'> @include('layout.themes.admin.partials.locale_indicator') </a>
                <ul id='sidebar_language_selection_dropdown' class='dropdown-content'>
                    <li><a href="{{ route('localization','en') }}">English</a></li>
                    <li><a href="{{ route('localization','es') }}">Español</a></li>
                </ul>
            </li>

            <li>
                <a href="#" onclick="toggleContainers()" class="container-switchable-switch"
                   title="{{ __('captions.features.toggle_wide_view')  }}"><i
                            class="material-icons">panorama_wide_angle</i></a>
            </li>

        </ul>
    </li>

</ul>

@push('scripts')
    <script>
        $(document).ready(function () {
            $('.sidenav').sidenav();
        });
    </script>
@endpush