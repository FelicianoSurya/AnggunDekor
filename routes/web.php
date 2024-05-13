<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\UserController;

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

Route::get('/', [UserController::class, 'index']);

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

Route::group(['prefix' => 'admin', 'as' => 'admin'], function() {
    Route::group(['middleware' => ['auth:sanctum', 'verified']], function(){
        Route::view('/home', 'Admin.home');
        Route::get('/productType', [ProductController::class, 'productType']);
        Route::group(['prefix' => 'portfolioType', 'as' => 'portfolioType'], function() {
            Route::get('/', [PortfolioController::class, 'portfolioType']);
            Route::get('/add', [PortfolioController::class, 'formType']);
            Route::post('/add', [PortfolioController::class, 'storeType']);
            Route::get('/edit/{id}', [PortfolioController::class, 'editType']);
            Route::post('/edit', [PortfolioController::class, 'edit']);
            Route::get('/delete/{id}', [PortfolioController::class, 'destroy']);
        });

        Route::group(['prefix' => 'portfolio', 'as' => 'portfolio'], function() {
            Route::get('/', [PortfolioController::class, 'index']);
            Route::get('/add', [PortfolioController::class, 'portfolioForm']);
            Route::post('/add', [PortfolioController::class, 'storePortfolio']);
            Route::get('/edit/{id}', [PortfolioController::class, 'editPortfolioForm']);
            Route::post('/edit', [PortfolioController::class, 'editPortfolio']);
            Route::get('/delete/{id}', [PortfolioController::class, 'destroyPortfolio']);
        });

        Route::group(['prefix' => 'products', 'as' => 'portfolio'], function() {
            Route::get('/', [ProductController::class, 'index']);
            Route::get('/add', [ProductController::class, 'productForm']);
            Route::post('/add', [ProductController::class, 'storeProduct']);
            Route::get('/edit/{id}', [ProductController::class, 'editProductForm']);
            Route::post('/edit', [ProductController::class, 'editProduct']);
            Route::get('/delete/{id}', [ProductController::class, 'destroyProduct']);

            Route::get('/{id}', [ProductController::class,'indexImage']);
        });

        Route::group(['prefix' => 'productType', 'as' => 'productType'], function() {
            Route::get('/', [ProductController::class, 'productType']);
            Route::get('/add', [ProductController::class, 'formType']);
            Route::post('/add', [ProductController::class, 'storeType']);
            Route::get('/edit/{id}', [ProductController::class, 'editType']);
            Route::post('/edit', [ProductController::class, 'edit']);
            Route::get('/delete/{id}', [ProductController::class, 'destroy']);
        });

        Route::group(['prefix' => 'productImage', 'as' => 'productImage'], function() {
            Route::get('{product_id}/add', [ProductController::class, 'formImage']);
            Route::post('{product_id}/add', [ProductController::class, 'storeImage']);
            Route::get('/edit/{product_id}/{id}', [ProductController::class, 'editImageForm']);
            Route::post('/edit', [ProductController::class, 'editImage']);
            Route::get('/delete/{product_id}/{id}', [ProductController::class, 'destroyImage']);
            Route::get('/active/{product_id}/{id}', [ProductController::class, 'active']);
        });

    });
});