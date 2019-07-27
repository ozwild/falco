@extends('layout.master')
@section('content')
    <form action="{{ url('users') }}" method="post">
        @csrf
        @method('patch')

        <div class="form-group">
            <label for="name">Name</label>
            <input id="name" type="text" name="name" value="{{ $user->name }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ $user->email }}">
        </div>
        <input type="submit">
    </form>
@endsection