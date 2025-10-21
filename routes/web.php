<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Producto_ABGController;

Route::get('/', [Producto_ABGController::class, 'index'])->name('productos.index');
Route::get('/productos/{id}', [Producto_ABGController::class, 'show'])->name('productos.show');
