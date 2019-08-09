@extends('layout.master')

@include('layout.themes.admin.load')

@section('body')

    @include('layout.themes.admin.partials.navbar')

    @include('layout.themes.admin.partials.sidebar')

    @include('layout.themes.admin.partials.breadcrumbs')

    @include('layout.themes.admin.partials.page-background')

    @include('layout.themes.admin.partials.main')

    @include('layout.themes.admin.partials.footer')

@endsection