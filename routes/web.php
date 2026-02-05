<?php

use Illuminate\Support\Facades\Route;

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