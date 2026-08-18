@extends('layouts.master')



@section('content')

<div class="hero-image-container">
    <img src="{{ asset('img/jumbotron.jpg') }}" alt="Jumbotron" class="img-fluid" />
</div>


<div class="row g-3 d-flex justify-content-center my-3 bg-black py-4">
    @foreach ($comics as $comic)
    <div class="col-6 col-md-4 col-lg-2 d-flex justify-content-center">
        @include('partials.card', ['comic' => $comic])
    </div>
    @endforeach
</div>

<div class="d-flex justify-content-center">
    <button type="button" class="btn btn-primary">LOAD MORE</button>
</div>


@endsection