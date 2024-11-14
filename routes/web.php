<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\StudentController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/chi-siamo', [StudentController::class, 'students'])->name('chiSiamo');

Route::get('/dove-andiamo', [PublicController::class, 'doveAndiamo'])->name('doveAndiamo');

// rotta parametrica
Route::get('/chi-siamo/dettaglio/{id}', [StudentController::class, 'detailStudent'])->name('dettaglioStudente');

// books
Route::get('/crea-un-libro', [BookController::class, 'create'])->name('book.create');
Route::post('/book/submit', [BookController::class, 'store'])->name('book.store');
Route::get('/tutti-i-libri', [BookController::class, 'index'])->name('book.index');
