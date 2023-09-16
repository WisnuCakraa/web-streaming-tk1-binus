@extends('layout.main')

@section('content')
<div class="card">
    <div class="card-body d-flex justify-content-center">
        <h1>Wellcome to Binus Movie</h1>
    </div>
    <a class="btn btn-primary w-50 align-self-center" href="{{url('movies')}}">Go To Movie</a>
  </div>
@endsection