@extends('layouts.master')



@section('content')

<div class="hero-image-container">
    <img src="{{ asset('img/jumbotron.jpg') }}" alt="Jumbotron" class="img-fluid" />
</div>


<div class="row g-3 d-flex justify-content-center my-3 bg-black py-4">
    <a href="#">
        <button class="btn btn-primary rounded-0 px-4 negative-translation ms-4">CURRENT SERIES</button>
    </a>
    @foreach ($comics as $comic)
    <div class="col-6 col-md-4 col-lg-2 d-flex justify-content-center">
        <x-card :image="$comic['thumb']" :title="$comic['title']" />
    </div>
    @endforeach
</div>

<div class="d-flex justify-content-center">
    <button type="button" class="btn btn-primary">LOAD MORE</button>
</div>


@endsection