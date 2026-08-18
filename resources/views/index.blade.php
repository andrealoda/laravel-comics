@extends('layouts.master')



@section('content')


<img src="{{ asset('img/jumbotron.jpg') }}" alt="Jumbotron" class="img-fluid" />


<div class="row g-3">
    @foreach ($comics as $comic)
    <div class="col-6 col-md-4 col-lg-2">
        @include('partials.card', ['comic' => $comic])
    </div>
    @endforeach
</div>


@endsection