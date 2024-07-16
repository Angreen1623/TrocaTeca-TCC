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

Route::get('/finalp', function () {
    return view('finalpropose');
});

Route::get('/announce', function () {
    return view('announcepro');
});

Route::get('/edannounce', function () {
    return view('editannounce');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/myaccount', function () {
    return view('myaccount');
});

Route::get('/meusartigos', function () {
    return view('meusartigos');
});