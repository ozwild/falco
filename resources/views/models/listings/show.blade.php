@extends('layout.themes.admin.master')

@push('breadcrumbs')
    <a href="{{ route('listings.index') }}" class="breadcrumb">{{ trans_choice('labels.listing', TC_PLURAL) }}</a>
    <a href="{{ route('listings.show', $listing->id) }}" class="breadcrumb">{{ $listing->name }}</a>
@endpush



@section('page-header')
    @component('components.page-header')
        <div class="row">
            <div class="col s12 m5">
                <img src="{{ asset('img/people/'.mt_rand(1,11)).'.jfif' }}" alt="" style="width: 100%">
            </div>
            <div class="col s12 m7">
                <h4>{{ $listing->name }}</h4>
                <p>{{ $listing->description }}</p>
            </div>
        </div>

        @slot('buttons')
            <a class="{{ html_class("button.create") }}" href="{{ route('listings.create') }}"
               title="{{ __('captions.create', ['resource'=> trans_choice('models.listing',TC_SINGULAR)])  }}">
                @lang('labels.new')
                <i class="material-icons right">add</i>
            </a>

            <a class="{{ html_class("button.edit") }}" href="{{ route('listings.edit',$listing->id) }}"
               title="{{ __('captions.edit', ['resource'=> trans_choice('models.listing',TC_SINGULAR)])  }}">
                @lang('labels.manage')
                <i class="material-icons right">edit</i>
            </a>

            {{ html()->form('delete',route('listings.destroy',$listing->id))->style(["display"=>"inline-block"])->open() }}
            <button class="{{ html_class("button.delete") }}"
                    title="{{ __('captions.delete', ['resource'=> trans_choice('models.listing',TC_SINGULAR)])  }}">
                @lang('labels.delete')
                <i class="material-icons right">delete</i>
            </button>
            {{ html()->form()->close() }}
        @endslot

    @endcomponent
@endsection

@section('content')

    <div class="container">
        <div class="section">
            <div class="card">
                <div class="card-content">

                    <div class="container">

                        <div class="row">
                            <div class="col s12">
                                @component('components.section-header')
                                    {{ trans_choice("labels.about",TC_PLURAL) }}
                                @endcomponent

                                <div>
                                    {!! $listing->about->about !!}
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container container-switchable">

        <div class="section">
            <div class="row">
                @foreach($listing->accounts as $account)

                    <div class="col s12 m6 l4">
                        <div class="card sticky-action grey lighten-3 has-hovered-pulse">

                            <div class="card-image theme-hued">
                                <img class="grayed" src="{{ asset('img/people/'.mt_rand(1,11)).'.jfif' }}" alt="">
                                <div class="card-title">
                                    <span>{{ $account->name }}</span>
                                </div>
                                <div
                                        class="btn-floating halfway-fab waves-effect waves-light activator hover-pulse"
                                        title="{{ __('captions.more')  }}"><i
                                            class="material-icons">details</i></div>
                            </div>

                            <div class="card-content">
                                <div class="flex">
                                    <strong>{{ $account->type->type }}</strong>
                                    <small class="font-1">
                                        @if( $account->rating )
                                            @component('models.ratings.components.stars', ["rating"=>$account->rating->rating]) @endcomponent
                                        @else

                                        @endif
                                    </small>
                                </div>

                            </div>

                            <div class="card-action flex text-center">
                                <div class="col s12 m6 waves-effect waves-teal btn-flat grey-text text-darken-1 activator">
                                    More...
                                </div>
                                <a href="{{ route('accounts.show',$account->id) }}"
                                   class="col s12 m6 waves-effect waves-teal btn-flat grey-text text-darken-1"
                                   title="{{ __('captions.visit', ['resource'=> trans_choice('models.account',TC_SINGULAR)])  }}">
                                    @lang('labels.visit')
                                </a>
                            </div>

                            <div class="card-reveal">
                                <i class="material-icons absolute top-right p-1 pointer">close</i>

                                <div class="row">
                                    <div class="col s12">
                                        <span class="card-title grey-text text-darken-4">{{ $account->name }}</span>
                                    </div>
                                    <div class="col s12">
                                        <h6>{{ $account->type->type }}</h6>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col s12">
                                        <small style="min-height: 4.5em; display: block;">
                                            @if( $account->rating )
                                                @component('models.ratings.components.stars', ["rating"=>$account->rating->rating]) @endcomponent
                                            @else

                                            @endif
                                        </small>

                                    </div>
                                    <div>
                                        @if($account->scores->count() > 0)
                                            <div class="col s12">
                                                <i class="material-icons left tiny">star</i>
                                                <span>@lang('labels.score') {{ $account->average_score }}</span>
                                            </div>
                                        @endif
                                        @if($account->reviews->count() > 0)
                                            <div class="col s12">
                                                <i class="material-icons left tiny">rate_review</i>
                                                <span>Reviewed {{ $account->reviews->count() }} times</span>
                                            </div>
                                        @endif
                                        <div class="col s12">
                                            <i class="material-icons left tiny">location_on</i>
                                            <span>{{ $account->location->description }}</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col s12">
                                        {{ $account->description }}
                                    </div>
                                </div>

                                <div class="row">
                                    <a href="{{ route('accounts.edit',$account->id) }}"
                                       class="col s12 m6 waves-effect waves-teal btn-flat grey-text text-darken-3"
                                       title="{{ __('captions.edit', ['resource'=> trans_choice('models.account',TC_SINGULAR)])  }}">
                                        @lang('labels.edit')
                                    </a>
                                    <a href="{{ route('accounts.show',$account->id) }}"
                                       class="col s12 m6 waves-effect waves-teal btn-flat grey-text text-darken-3"
                                       title="{{ __('captions.visit', ['resource'=> trans_choice('models.account',TC_SINGULAR)])  }}">
                                        @lang('labels.visit')
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                @endforeach
            </div>
        </div>

    </div>

@endsection