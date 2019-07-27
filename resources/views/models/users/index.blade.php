@extends('layout.master')

@section('content')

    <h5>Users</h5>

    <a class="right btn-floating waves-effect btn" href="{{ route('users.create') }}">
        <i class="material-icons">add</i>
    </a>

    <table class="responsive-table highlight">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>
                    <a href="{{ route('users.edit',$user->id) }}">
                        {{ $user->name }}
                    </a>
                </td>
                <td>{{ $user->email }}</td>
                <td>

                    <a href="{{ route('users.edit',$user->id) }}" class="btn btn-flat">
                        <i class="material-icons">edit</i>
                    </a>

                    {{ html()->form('delete',route('users.destroy',$user->id))->open() }}
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