<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\StudentController;
use Illuminate\Auth\Middleware\Authenticate;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

// rotte di Valerio:
Route::get('/chi-siamo', [StudentController::class, 'students'])->name('chiSiamo');
Route::get('/dove-andiamo', [PublicController::class, 'doveAndiamo'])->name('doveAndiamo');
// rotta parametrica
Route::get('/chi-siamo/dettaglio/{id}', [StudentController::class, 'detailStudent'])->name('dettaglioStudente');




// !DATABASE
//!tutti gli utenti del sito
Route::get('/user/index', [PublicController::class, 'index'])->name('user.index');
Route::get('/profile', [PublicController::class, 'profile'])->middleware('auth')->name('profile');
Route::get('/book/by-user/{user}', [BookController::class, 'byUser'])->name('book.byUser');
Route::delete('/user/destroy/{user}', [PublicController::class, 'destroy'])->name('user.destroy');

// books
Route::get('/crea-un-libro', [BookController::class, 'create'])->middleware('auth')->name('book.create');
Route::post('/book/submit', [BookController::class, 'store'])->name('book.store');
Route::get('/tutti-i-libri', [BookController::class, 'index'])->name('book.index');
Route::get('/book/edit/{book}', [BookController::class, 'edit'])->name('book.edit');
Route::put('/book/update/{book}', [BookController::class, 'update'])->name('book.update');
Route::delete('/book/destroy/{book}', [BookController::class, 'destroy'])->name('book.destroy');

// authors
// !create
Route::get('/inserisci-un-autore', [AuthorController::class, 'create'])->middleware('auth')->name('author.create');
Route::post('/author/submit', [AuthorController::class, 'store'])->name('author.store');
//! read
Route::get('/tutti-gli-autori', [AuthorController::class, 'index'])->name('author.index');
Route::get('/dettaglio/autore/{author}', [AuthorController::class, 'show'])->name('author.show');
// ! Update
Route::get('/modifica/autore/{author}', [AuthorController::class, 'edit'])->name('author.edit');
Route::put('/update/autore/{author}', [AuthorController::class, 'update'])->name('author.update');
//! DELETE
Route::delete('/cancella/autore/{author}', [AuthorController::class, 'destroy'])->name('author.delete');
