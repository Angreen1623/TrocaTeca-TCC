<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('navbar');
});

Route::get('/aa', function () {
    return view('footer');
});