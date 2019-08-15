@extends('layout.themes.admin.bare')

@push('fonts')
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
@endpush

@push('styles')
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
            user-select: none;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
@endpush

@section('content')
    <div class="flex-center position-ref full-height grey darken-4 white-text">

        <div id="particles-js" class="background-layer layer" style="height: 95%"></div>

        @if (!Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">@lang('labels.home')</a>
                @else
                    <a href="{{ url('login') }}">@lang('labels.login')</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">@lang('labels.register')</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="content relative">
            <div class="title m-b-md">
                {{ config('app.name') }}
            </div>

            <div class="links">
                <a href="{{ url('users') }}">{{ trans_choice("labels.user", TC_PLURAL) }}</a>
                <a href="{{ url('accounts') }}">{{ trans_choice("labels.account", TC_PLURAL) }}</a>
            </div>
        </div>
    </div>
@endsection

