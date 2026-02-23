<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');

Route::get('/produk/create', [ProdukController::class, 'create']);

Route::post('/produk/store', [ProdukController::class, 'store']);