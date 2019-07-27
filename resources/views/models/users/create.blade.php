@extends('layout.master')

@push('breadcrumbs')
    <a href="{{ route('users.index') }}" class="breadcrumb">Users</a>
@endpush

@section('content')

    <h5>New Account</h5>

    <div class="divider"></div>

    <div class="section">

        {{ html()->form('post',route('accounts.store'))->open() }}

        @php
            $fields = [
                [
                    'component' => 'components.input-control',
                    'name' => 'name',
                    'label' => 'Name',
                    'placeholder' => 'Name of your act'
                ],
                [
                    'component' => 'components.input-control',
                    'type'=>'email',
                    'name' => 'email',
                    'label' => 'Email',
                    'placeholder' => 'Professional email address',
                    'notes'=>'Used for notifications'
                ],
                [
                    'component' => 'components.input-control',
                    'type'=>'password',
                    'name' => 'password',
                    'label' => 'Password',
                    'placeholder' => 'A secure password',
                    'notes'=>'A secure password includes numbers letters and symbols'
                ],
                [
                    'component' => 'components.input-control',
                    'type'=>'password',
                    'name' => 'password_confirmation',
                    'label' => 'Password Confirmation',
                    'placeholder' => 'Confirm the password',
                ],
            ];
        @endphp

        @foreach($fields as $field)
            @php $component = array_shift($field); @endphp
            @component($component, $field) @endcomponent
        @endforeach

        @component('components.submit-button') Submit @endcomponent

    {{ html()->form()->close() }}

@endsection

