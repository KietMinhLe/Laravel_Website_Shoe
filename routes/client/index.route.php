<?php

use Illuminate\Support\Facades\Route;

Route::get('/product', function () {
    return view('client.layouts.product.default');
});
// Route::get('/product', function () {
//     return view('client.layouts.product.default');
// });
// Route::get('/', function () {
//     return view('client.layouts.product.default');
// });
