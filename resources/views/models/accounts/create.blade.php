@extends('layout.master')

@push('breadcrumbs')
    <a href="{{ route('accounts.index') }}" class="breadcrumb">Accounts</a>
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
                    'component' => 'components.textarea-control',
                    'name' => 'description',
                    'label' => 'Description',
                    'placeholder' => 'Name of your act2'
                ],
                [
                    'component' => 'components.input-control',
                    'type'=>'email',
                    'name' => 'email',
                    'label' => 'Email',
                    'placeholder' => 'Professional email address',
                    'notes'=>'Used for notifications'
                ],
            ];
        @endphp

        @foreach($fields as $field)
            @php $component = array_shift($field); @endphp
            @component($component, $field) @endcomponent
        @endforeach

        @component('components.submit-button') Submit @endcomponent

        {{ html()->form()->close() }}

    </div>

@endsection