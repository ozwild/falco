@push('scripts')
    <script src="{{ url('js/app.js') }}"></script>
@endpush

@section('scripts')
    @stack('script-dependencies')
    @stack('scripts')
@endsection