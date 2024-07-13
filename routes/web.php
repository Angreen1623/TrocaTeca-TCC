<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aa', function () {
    return view('footer');
});

Route::get('/about', function () {
    return view('quemsomos');
});

Route::get('/warning', function () {
    return view('warningm');
});