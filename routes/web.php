<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/cart', [HomeController::class, 'cart']);

Route::get('/products', function () {
    return 'Ini ada route products';
});

Route::get('/checkout', function () {
    return 'Ini ada route checkout';
});

Route::resource('products-resource', ProductController::class);