<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

Route::get('/', [ProductController::class, 'show']);

Route::get('/products/{id}', [ProductController::class, 'productById']);

Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');



