@extends('layout.themes.admin.master')

@include('layout.themes.admin.assets.mapbox')

@push('breadcrumbs')
    <a href="{{ route('accounts.index') }}" class="breadcrumb">{{ trans_choice('labels.account', TC_PLURAL) }}</a>
    <a href="{{ route('accounts.show', $account->id) }}" class="breadcrumb">{{ $account->name }}</a>
@endpush

@section('page-header')
    @component('components.page-header')
        <div class="row">
            <div class="col s12 m5">
                <img src="{{ asset('img/people/'.mt_rand(1,11)).'.jfif' }}" alt="" style="width: 100%">
            </div>
            <div class="col s12 m7">
                <h4>{{ $account->name }}</h4>
                <h5>{{ $account->title }}</h5>
                <p>{{ $account->description }}</p>
            </div>
        </div>

        <div class="row">

            <div class="col s12 m6 text-center">
                @component('models.ratings.components.stars', ["rating"=>$account->rating->rating]) @endcomponent
                <p>
                    <b>@lang('phrases.reviews',['reviews'=> $account->reviews->count(), "score"=>$account->average_score ])
                        . @lang('phrases.views',['views'=> $account->views, "since"=>$account->created_at->locale(config('app.locale'))->format('M Y') ])</b>
                </p>
            </div>

            <div class="col s12 m6">

            </div>
        </div>

        @slot('buttons')
            <a class="{{ html_class("button.create") }}" href="{{ route('accounts.create') }}"
               title="{{ __('captions.create', ['resource'=> trans_choice('models.account',TC_SINGULAR)])  }}">
                @lang('labels.new')
                <i class="material-icons right">add</i>
            </a>

            <a class="{{ html_class("button.edit") }}" href="{{ route('accounts.edit',$account->id) }}"
               title="{{ __('captions.edit', ['resource'=> trans_choice('models.account',TC_SINGULAR)])  }}">
                @lang('labels.manage')
                <i class="material-icons right">edit</i>
            </a>

            {{ html()->form('delete',route('accounts.destroy',$account->id))->style(["display"=>"inline-block"])->open() }}
            <button class="{{ html_class("button.delete") }}"
                    title="{{ __('captions.delete', ['resource'=> trans_choice('models.account',TC_SINGULAR)])  }}">
                @lang('labels.delete')
                <i class="material-icons right">delete</i>
            </button>
            {{ html()->form()->close() }}
        @endslot

    @endcomponent
@endsection

@section('content')

    <div class="container container-switchable">

        <div class="section">
            <div class="card">
                <div class="card-content">

                    <div class="container">


                        @component('components.section-header')
                            {{ trans_choice("labels.about",TC_PLURAL) }}
                        @endcomponent

                        <div>
                            {!! $account->about->about !!}
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="section" id="location">
            <div class="card">
                <div class="card-content">

                    @component('components.section-header')
                        {{ trans_choice("labels.location",TC_SINGULAR) }}
                    @endcomponent

                    <h5>...</h5>

                    @component('components.location-map',["location" => $account->location ])
                    @endcomponent

                </div>
            </div>
        </div>

        <div class="section">

            <div class="card">
                <div class="card-content truncate">

                    @component('components.section-header')
                        {{ trans_choice("labels.manager",TC_PLURAL) }}
                    @endcomponent

                    <table class="highlight">
                        <thead>
                        <tr>
                            <th>@lang('labels.name')</th>
                            <th>@lang('labels.email')</th>
                            <th class="text-center">@lang('labels.actions')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($account->managers as $user)
                            <tr>
                                <td>
                                    <a href="{{ route('users.show',$user->id) }}">
                                        {{ $user->name }}
                                    </a>
                                </td>
                                <td>{{ $user->email }}</td>
                                <td class="text-center">

                                    <a href="{{ route('users.edit',$user->id) }}"
                                       class="{{ html_class("button.flat") }}"
                                       title="{{ __('captions.edit', ['resource'=> trans_choice('models.user',TC_SINGULAR)])  }}">
                                        <i class="material-icons">edit</i>
                                    </a>

                                    {{ html()->form('delete',route('users.destroy',$user->id))->open() }}
                                    <button class="{{ html_class("button.flat") }}"
                                            title="{{ __('captions.delete', ['resource'=> trans_choice('models.user',TC_SINGULAR)])  }}">
                                        <i class="material-icons">delete</i>
                                    </button>
                                    {{ html()->form()->close() }}

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <div class="section" id="reviews">

            <div class="card">
                <div class="card-content">

                    @component('components.section-header')
                        {{ trans_choice("labels.review",TC_PLURAL) }}
                    @endcomponent

                    @foreach($account->reviews as $review)

                        <h5>{{ $review->reviewer->name }} said:</h5>
                        <q>{{ $review->review }}</q>

                    @endforeach

                </div>
            </div>
        </div>

        <div class="section" id="prices">
            <div class="card">
                <div class="card-content">

                    @component('components.section-header')
                        {{ trans_choice("labels.price",TC_PLURAL) }}
                    @endcomponent

                    <h5>...</h5>
                </div>
            </div>
        </div>

    </div>

@endsection