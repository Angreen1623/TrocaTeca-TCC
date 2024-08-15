<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArtigoController;
use App\Http\Controllers\DenunciartigoController;
use App\Models\Artigo;
use Illuminate\Support\Facades\Route;

// Adicionando middleware 'auth' para as rotas que requerem login
Route::middleware('auth')->group(function () {
    Route::get('/myaccount', function () {
        return view('myaccount');
    });

    Route::get('/meusartigos', [ArtigoController::class, 'select']);

    Route::get('/announce', function () {
        return view('announcepro');
    });

    Route::post('artigo/create', [ArtigoController::class, 'create'])->name('artigo.add');
    Route::get('/editannounce/{id}', [ArtigoController::class, 'edit'])->name('artigo.edit');
    Route::patch('/atualizar/{id}', [ArtigoController::class, 'update'])->name('artigo.update');
    Route::delete('/excluir/{id}', [ArtigoController::class, 'delete'])->name('artigo.delete');

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

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::patch('/profile/inativate', [ProfileController::class, 'inativate'])->middleware('auth')->name('profile.inativate');
});

// Rotas públicas
Route::get('/', [ArtigoController::class, 'list'])->name('welcome');


Route::get('/ann', function () {
    return view('annoaccount');
});

Route::get('/perfilanunciante/{id}', [ProfileController::class, 'viewProfileanun'])->name('viewProfileanun');

Route::get('/viewannounce/{id_artigo}', [ArtigoController::class, 'viewAnnounce'])->name('artigo.view');

Route::get('/about', function () {
    return view('quemsomos');
});

require __DIR__.'/auth.php';