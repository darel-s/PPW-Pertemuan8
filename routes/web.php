<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerBuku;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/buku', [ControllerBuku::class, 'index']);
Route::get('/buku/create', [ControllerBuku::class, 'create'])->name('buku.create');
Route::post('/buku', [ControllerBuku::class, 'store'])->name('buku.store');
Route::delete('/buku/{id}', [ControllerBuku::class, 'destroy'])->name('buku.destroy');
Route::get('/buku/edit/{id}', [ControllerBuku::class, 'edit'])->name('buku.edit');
Route::post('/buku/update/{id}', [ControllerBuku::class, 'update'])->name('buku.update');
Route::get('/buku/search', [ControllerBuku::class, 'search'])->name('buku.search');
