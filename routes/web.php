<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('quemsomos');
});

Route::get('/warning', function () {
    return view('warningm');
});

Route::get('/re', function () {
    return view('reportanum');
});

Route::get('/give', function () {
    return view('giveuptrade');
});

Route::get('/rechat', function () {
    return view('reportchatm');
});

Route::get('/newpr', function () {
    return view('newproposem');
});