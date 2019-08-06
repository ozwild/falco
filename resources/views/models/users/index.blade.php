@extends('layout.master')

@push('breadcrumbs')
    <a href="{{ route('users.index') }}" class="breadcrumb">{{ trans_choice('labels.user', TC_PLURAL) }}</a>
@endpush

@section('content')

    <div class="container">
        <div class="row">
            <div class="col s6">
                <h1>{{ __('titles.index', ['resource'=> trans_choice('labels.user',TC_PLURAL) ]) }}</h1>
            </div>
            <div class="col s6 text-right">

                <a class="{{ html_class("button.basic") }} right" href="{{ route('users.create') }}"
                   title="{{ __('captions.create', ['resource'=> trans_choice('models.user',TC_SINGULAR)])  }}">
                    @lang("labels.add")
                    <i class="material-icons right">add</i>
                </a>

            </div>
        </div>
    </div>

    <div class="container container-switchable">
        <div class="card">
            <div class="card-content">

                <ul class="collapsible z-depth-0">
                    <li>
                        <div class="collapsible-header">
                            @lang('labels.filters') <i class="material-icons">check_box</i>
                        </div>
                        <div class="collapsible-body">
                            <a class="{{ html_class("button.filter") . html_class("button.small") }}" href="{{ route('users.index',["managers"=>true]) }}"
                               title="{{ __('captions.filters.managers')  }}">
                                {{ trans_choice("labels.manager",TC_PLURAL) }}
                            </a>
                        </div>
                    </li>
                </ul>

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
                    @foreach($users as $user)
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

                                <a href="{{ route('users.edit',$user->id) }}" class="{{ html_class("button.flat") }}"
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

                {{ $users->links() }}
            </div>
        </div>
    </div>

@endsection