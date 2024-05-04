<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Page.home');
});

Route::get('/products', function () {
    return view('Page.product');
});

Route::get('/services', function() {
    return view('Page.services');
});

Route::get('/portfolio', function() {
    return view('Page.portfolio');
});

Route::get('/portfolio/floor', function() {
    return view("Page.detail-portfolio");
});

Route::get('contact-us', function() {
    return view('Page.contact');
});

Route::get('/products/floor/floor1', function() {
    return view('Page.detail-product');
});

Route::get('/products/floor', function() {
    return view('Page.sub-product');
});