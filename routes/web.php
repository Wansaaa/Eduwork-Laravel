<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return 'Ini route utama';
});

Route::get('/products', function () {
    return 'Ini ada route products';
});

Route::get('/cart', function () {
    return 'Ini ada route cart';
});

Route::get('/checkout', function () {
    return 'Ini ada route checkout';
});

Route::resource('products-resource', ProductController::class);