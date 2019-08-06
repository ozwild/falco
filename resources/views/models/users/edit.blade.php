@extends('layout.master')

@push('breadcrumbs')
    <a href="{{ route('users.index') }}" class="breadcrumb">{{ trans_choice('labels.user', TC_PLURAL) }}</a>
    <a href="{{ route('users.show', $user->id) }}" class="breadcrumb">{{ $user->name }}</a>
    <a href="{{ route('users.edit', $user->id) }}" class="breadcrumb">@lang('labels.edit')</a>
@endpush

@section('content')

    <div class="container">
        <h5>{{ __('titles.edit', ['resource'=> trans_choice('labels.user',TC_SINGULAR) ]) }}</h5>
    </div>

    <div class="container container-switchable">

        <div class="section">

            {{ html()->modelForm($user,'patch',route('users.update', $user->id))->open() }}

            @php
                $fields = [
                    [
                        'component' => 'components.input-control',
                        'name' => 'first_name',
                        'label' => __("labels.first_name"),
                        'placeholder' => __("Enter your name")
                    ],
                    [
                        'component' => 'components.input-control',
                        'name' => 'last_name',
                        'label' => __("labels.last_name") ,
                        'placeholder' => __("Enter your last name")
                    ],
                    [
                        'component' => 'components.textarea-control',
                        'name' => 'description',
                        'label' => __("labels.description"),
                        'placeholder' => __("Describe your act")
                    ],
                    [
                        'component' => 'components.input-control',
                        'type'=>'email',
                        'name' => 'email',
                        'label' => __("labels.email"),
                        'placeholder' => __("Enter your email address"),
                        'notes'=> __('Used for notifications')
                    ],
                ];
            @endphp

            @foreach($fields as $field)
                @php $component = array_shift($field); @endphp
                @component($component, $field) @endcomponent
            @endforeach

            @component('components.submit-button') @lang('labels.update') @endcomponent

            {{ html()->form()->close() }}

        </div>

    </div>
@endsection
