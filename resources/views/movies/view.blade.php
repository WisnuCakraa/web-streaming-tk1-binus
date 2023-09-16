@extends('layout.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>{{ $movie->title }}</h1>
            <p>{{ $movie->description }}</p>
        </div>
        <div class="col-md-6">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="{{ asset('assets/'.$movie->file) }}" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
@endsection
