<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('quemsomos');
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

Route::get('/ann', function () {
    return view('annoaccount');
});

Route::get('/viewannounce', function () {
    return view('viewannounce');
});

Route::get('/mep', function () {
    return view('mensagensepropostas');
});

Route::get('/meusacordos', function () {
    return view('meusacordos');
});

Route::get('/chat', function () {
    return view('chat');
});