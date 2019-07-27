@extends('layout.master')
@section('content')

    <h5>Accounts</h5>

    <a class="right btn-floating waves-effect btn" href="{{ route('accounts.create') }}">
        <i class="material-icons">add</i>
    </a>

    <table class="highlight responsive-table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($accounts as $account)
            <tr>
                <td>
                    <a href="{{ route('accounts.edit',$account->id) }}">
                        {{ $account->name }}
                    </a>
                </td>
                <td>{{ $account->description }}</td>
                <td>{{ $account->email }}</td>
                <td>

                    <a href="{{ route('accounts.edit',$account->id) }}" class="btn btn-flat">
                        <i class="material-icons">edit</i>
                    </a>

                    {{ html()->form('delete',route('accounts.destroy',$account->id))->open() }}
                    <button class="btn btn-flat">
                        <i class="material-icons">delete</i>
                    </button>
                    {{ html()->form()->close() }}

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection