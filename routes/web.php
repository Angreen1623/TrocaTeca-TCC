<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/warning', function () {
    return view('warningm');
});

Route::get('/re', function () {
    return view('reportanum');
});