<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $comics = config('comics');
    return view('index', compact('comics'));
})->name('home');

Route::get('/team', function () {
    $team = config('team');
    return view('team', compact('team'));
})->name('team');
