@extends('layout.master')
@section('content')
    <form action="{{ url('users') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input id="name" type="text" name="name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" name="email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input id="password" type="password" name="password">
        </div>

        <input type="submit">
    </form>
@endsection