<?php

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Route;
use Laravel\Pail\ValueObjects\Origin\Console;

Route::get('/', function () {
    return view('client.pages.home.index');
    // return view('client.layouts.default');
});
Route::get('/product', function () {
    return view('client.pages.product.index');
});
Route::get('/product/chitiet', function () {
    // return view('client.layouts.product.default', ['id' => $id]);
    return view('client.layouts.detail');
});
