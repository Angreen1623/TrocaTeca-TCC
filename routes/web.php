<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/loginb', function () {
    return view('loginb');
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

Route::get('/validar', function () {
    return view('modalvalidar');
});

Route::get('/registertt', function () {
    return view('registertt');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/welcome', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('welcome');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';