@extends('layouts.master')

@section('title', 'Team')

@section('content')

<h1 class="text-white">OUR TEAM</h1>

<div class="row g-3 d-flex justify-content-center my-3 bg-black py-4">
    @foreach ($team as $member)
    <div class="col-6 col-md-4 col-lg-2 d-flex justify-content-center">
        <x-card :image="$member['photo']" :title="$member['name']" :subtitle="$member['role']" />
    </div>
    @endforeach
</div>

@endsection
