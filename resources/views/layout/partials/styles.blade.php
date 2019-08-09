@push('styles')
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
@endpush

@section('styles')
    @stack('styles')
@endsection