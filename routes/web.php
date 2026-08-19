<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', ['comics' => config('comics')]);
})->name('home');

Route::get('/team', function () {
    return view('team', ['team' => config('team')]);
})->name('team');
