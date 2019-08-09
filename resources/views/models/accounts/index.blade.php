@extends('layout.themes.admin.master')

@push('breadcrumbs')
    <a href="{{ route('accounts.index') }}" class="breadcrumb">{{ trans_choice('labels.account', TC_PLURAL) }}</a>
@endpush

@section('content')

    <div class="container container-switchable">

        <div class="card">
            <div class="card-content">

                @component('components.section-header')

                    {{ __('titles.index', ['resource'=> trans_choice('labels.account',TC_PLURAL) ]) }}

                    @slot('buttons')
                        <a class="{{ html_class("button.basic") }} right" href="{{ route('accounts.create') }}"
                           title="{{ __('captions.create', ['resource'=> trans_choice('models.account',TC_SINGULAR)])  }}">
                            @lang("labels.add")
                            <i class="material-icons right">add</i>
                        </a>
                    @endslot
                @endcomponent

                <table class="highlight responsive-table">
                    <thead>
                    <tr>
                        <th>@lang('labels.name')</th>
                        <th>@lang('labels.description')</th>
                        <th>@lang('labels.email')</th>
                        <th>{{ trans_choice('labels.rating', TC_SINGULAR) }}</th>
                        <th>@lang('labels.actions')</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($accounts as $account)
                        <tr>
                            <td>
                                <a href="{{ route('accounts.show',$account->id) }}">
                                    {{ $account->name }}
                                </a>
                            </td>
                            <td class="ridiculous">{{ $account->description }}</td>
                            <td>{{ $account->email }}</td>
                            <td> @component('models.ratings.components.stars',['rating'=>$account->rating->rating]) @endcomponent</td>
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

                {{ $accounts->links() }}

            </div>
        </div>

    </div>

@endsection