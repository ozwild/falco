@extends('layout.master')

@push('breadcrumbs')
    <a href="{{ route('accounts.index') }}" class="breadcrumb">{{ trans_choice('labels.account', TC_PLURAL) }}</a>
    <a href="{{ route('accounts.show', $account->id) }}" class="breadcrumb">{{ $account->name }}</a>
    <a href="{{ route('accounts.edit', $account->id) }}" class="breadcrumb">@lang('labels.edit')</a>
@endpush

@section('content')

    <h5>{{ __('titles.edit', ['resource'=> trans_choice('labels.account',TC_SINGULAR) ]) }}</h5>

    <div class="section">

        {{ html()->modelForm($account,'patch',route('accounts.update', $account->id))->open() }}

        @php
            $fields = [
                [
                    'component' => 'components.input-control',
                    'name' => 'name',
                    'label' => __("labels.name"),
                    'placeholder' => __("Artistic Name")
                ],
                [
                    'component' => 'components.textarea-control',
                    'name' => 'description',
                    'label' => __('labels.description'),
                    'placeholder' => __("Describe your act"),
                ],
                [
                    'component' => 'components.input-control',
                    'type'=>'email',
                    'name' => 'email',
                    'label' => __('labels.email'),
                    'placeholder' => __("Artistic Email"),
                    'notes'=>__('Used for notifications')
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

@endsection