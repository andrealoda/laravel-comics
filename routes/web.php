<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/', function () {
    $comics = require database_path('comics.php');
    return view('index', ['comics' => $comics]);
});
