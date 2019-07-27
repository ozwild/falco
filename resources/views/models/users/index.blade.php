@extends('layout.master')
@section('content')
    <a href="{{ url('users/create') }}">Create New User</a>
    <table>
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
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>[Blank]</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection