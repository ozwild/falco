@extends('layout.master')

@push('breadcrumbs')
    <a href="{{ route('accounts.index') }}" class="breadcrumb">{{ trans_choice('labels.account', TC_PLURAL) }}</a>
    <a href="{{ route('accounts.show', $account->id) }}" class="breadcrumb">{{ $account->name }}</a>
@endpush

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">

                <h5>{{ $account->name }}</h5>
                <p>{{ $account->description }}</p>
                <div>{{ $account->email }}</div>

            </div>
            <div class="col s12 text-right">

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

            </div>
        </div>
    </div>

    <div class="container container-switchable">

        <div class="section">
            <h4>{{ trans_choice("labels.manager",TC_PLURAL) }}</h4>
            <div class="card">
                <div class="card-content truncate">

                    <table class="highlight">
                        <thead>
                        <tr>
                            <th>@lang('labels.name')</th>
                            <th>@lang('labels.email')</th>
                            <th class="text-center">@lang('labels.manages_accounts')</th>
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
                                    @if($user->manages_accounts)
                                        <i class="material-icons">check</i>
                                    @else
                                        <i class="material-icons">times</i>
                                    @endif
                                </td>
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

        <div class="section">

            <div class="row">

                <div class="col s12 m8 offset-m4 l6 offset-l6">
                    <div class="card">
                        <div class="card-content text-center blue">
                            <h4>{{ trans_choice("labels.rating",TC_SINGULAR) }}</h4>
                            @include('models.ratings.partials.stars', ["rating"=>$account->rating->rating])
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <h4>{{ trans_choice("labels.review",TC_PLURAL) }}</h4>

                @foreach($account->reviews as $review)
                    <div class="card">
                        <div class="card-content">
                            <h5>{{ $review->reviewer->name }} said:</h5>
                            <q>{{ $review->review }}</q>
                        </div>
                    </div>
                @endforeach

                <div class="card">
                    <div class="card-content truncate">

                        {{ $account->reviews }}

                    </div>
                </div>
            </div>

        </div>

        <div class="section">
            <h4>{{ trans_choice("labels.score",TC_SINGULAR) }}</h4>
            <div class="card">
                <div class="card-content truncate">
                    <h5>{{ $account->average_score }}</h5>

                    {{ $account->scores }}

                </div>
            </div>
        </div>

        <div class="section">
            <h4>{{ trans_choice("labels.location",TC_SINGULAR) }}</h4>
            <div class="card">
                <div class="card-content">
                    <h5>...</h5>
                </div>
            </div>
        </div>

        <div class="section">
            <h4>{{ trans_choice("labels.price",TC_PLURAL) }}</h4>
            <div class="card">
                <div class="card-content">
                    <h5>...</h5>
                </div>
            </div>
        </div>

        <div class="section">
            <h4>{{ trans_choice("labels.about",TC_PLURAL) }}</h4>
            <div class="card">
                <div class="card-content">
                    <h5>...</h5>
                </div>
            </div>
        </div>

        <div class="section">
            <h4>{{ trans_choice("labels.views",TC_PLURAL) }}</h4>
            <div class="card">
                <div class="card-content">
                    <h5>...</h5>
                </div>
            </div>
        </div>

    </div>

@endsection