@extends('layouts.app')

@section('content')

    <section class="content-header">
        <h1>Home</h1>
    </section>
    <div id="app">
        <div class="content">

            This is the home page
            <example></example>

        </div>
    </div>
@endsection
@push('scripts')
<script src="{{ asset('js/app.js') }}"></script>
@endpush