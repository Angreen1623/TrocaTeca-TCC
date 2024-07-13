<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('navbar');
});

Route::get('/aa', function () {
    return view('footer');
});

Route::get('/warning', function () {
    return view('warningm');
});