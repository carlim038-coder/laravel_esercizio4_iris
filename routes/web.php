<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

// Rotta per la Homepage
Route::get('/', [PublicController::class, 'home']);

// Rotta per la lista degli articoli
Route::get('/articles', [PublicController::class, 'index'])->name('articles.index');

// Rotta per il dettaglio del singolo articolo
Route::get('/articles/{id}', [PublicController::class, 'show'])->name('articles.show');