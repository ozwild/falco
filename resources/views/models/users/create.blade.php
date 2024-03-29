@extends('layout.themes.admin.master')

@push('breadcrumbs')
    <a href="{{ route('users.index') }}" class="breadcrumb">{{ trans_choice('labels.user', TC_PLURAL) }}</a>
@endpush

@section('content')

    <div class="container">
        <h5>{{ __('titles.create', ['resource'=> trans_choice('labels.user',TC_SINGULAR) ]) }}</h5>
    </div>

    <div class="container container-switchable">
        <div class="section">

            {{ html()->form('post',route('users.store'))->open() }}

            @php
                $fields = [
                    [
                        'component' => 'components.input-control',
                        'name' => 'first_name',
                        'label' => __('labels.first_name'),
                        'placeholder' => __('Enter your name')
                    ],
                    [
                        'component' => 'components.input-control',
                        'name' => 'last_name',
                        'label' => __('labels.last_name'),
                        'placeholder' => __('Enter your last name')
                    ],
                    [
                        'component' => 'components.input-control',
                        'type'=>'email',
                        'name' => 'email',
                        'label' => __('labels.email'),
                        'placeholder' => __('Enter your email address'),
                        'notes'=>__('Used for notifications')
                    ],
                    [
                        'component' => 'components.input-control',
                        'type'=>'password',
                        'name' => 'password',
                        'label' => __("labels.password"),
                        'placeholder' => __('A secure password'),
                        'notes'=> __("passwords.hint")
                    ],
                    [
                        'component' => 'components.input-control',
                        'type'=>'password',
                        'name' => 'password_confirmation',
                        'label' => __('labels.password_confirmation'),
                        'placeholder' => __('Confirm the password'),
                    ],
                ];
            @endphp

            @foreach($fields as $field)
                @php $component = array_shift($field); @endphp
                @component($component, $field) @endcomponent
            @endforeach

            @component('components.submit-button') @lang("labels.store") @endcomponent

            {{ html()->form()->close() }}
        </div>
    </div>

@endsection

