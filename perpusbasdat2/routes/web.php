<?php

use App\Http\Controllers\booksController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


route::get('/buku',[booksController::class,'index'])->name('buku.index');
route::get('/buku/tambah',[booksController::class,'create'])->name('buku.create');
route::post('/buku',[booksController::class,'store'])->name('buku.store');
route::get('/buku/edit/{id}',[booksController::class,'edit']);