@extends('layout.master')

@push('breadcrumbs')
    <a href="{{ route('users.index') }}" class="breadcrumb">{{ trans_choice('labels.user', TC_PLURAL) }}</a>
    <a href="{{ route('users.show', $user->id) }}" class="breadcrumb">{{ $user->name }}</a>
@endpush

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <h5>{{ $user->name }}</h5>
                <p>{{ $user->description }}</p>
                <div>{{ $user->email }}</div>
            </div>
            <div class="col s12 text-right">

                <a class="{{ html_class("button.create") }}" href="{{ route('users.create') }}"
                   title="{{ __('captions.create', ['resource'=> trans_choice('models.user',TC_SINGULAR)])  }}">
                    @lang('labels.new')
                    <i class="material-icons right">add</i>
                </a>

                <a class="{{ html_class("button.edit") }}" href="{{ route('users.edit',$user->id) }}">
                    @lang('labels.manage')
                    <i class="material-icons right">edit</i>
                </a>

                {{ html()->form('delete',route('accounts.destroy',$user->id))->style(["display"=>"inline-block"])->open() }}
                <button class="{{ html_class("button.delete") }}">
                    @lang('labels.delete')
                    <i class="material-icons right">delete</i>
                </button>
                {{ html()->form()->close() }}

            </div>
        </div>
    </div>

    @if($user->manages_accounts)

        <div class="container container-switchable">
            <div class="section">
                <h4>{{ trans_choice("labels.account",TC_PLURAL) }}</h4>
                <div class="card">
                    <div class="card-content">

                        <table class="highlight responsive-table">
                            <thead>
                            <tr>
                                <th>@lang('labels.name')</th>
                                <th>@lang('labels.description')</th>
                                <th>@lang('labels.email')</th>
                                <th>@lang('labels.actions')</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($user->accounts as $account)
                                <tr>
                                    <td>
                                        <a href="{{ route('accounts.show',$account->id) }}">
                                            {{ $account->name }}
                                        </a>
                                    </td>
                                    <td>{{ $account->description }}</td>
                                    <td>{{ $account->email }}</td>
                                    <td class="text-center">

                                        <a href="{{ route('accounts.edit',$account->id) }}"
                                           class="{{ html_class("button.flat") }}"
                                           title="{{ __('captions.edit', ['resource'=> trans_choice('models.account',TC_SINGULAR)])  }}">
                                            <i class="material-icons">edit</i>
                                        </a>

                                        {{ html()->form('delete',route('accounts.destroy',$account->id))->open() }}
                                        <button class="{{ html_class("button.flat") }}"
                                                title="{{ __('captions.delete', ['resource'=> trans_choice('models.account',TC_SINGULAR)])  }}">
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
        </div>

    @endif

@endsection