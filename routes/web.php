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

Route::get('/{$page}', [UserController::class, 'show'])->where('page', '.*');

Route::get('/', [UserController::class, 'index']);

Route::get('/products', [UserController::class, 'products']);

Route::get('/products/{id}', [UserController::class, 'subProducts']);

Route::get('/products/{typeId}/{id}', [UserController::class, 'detailProduct']);

Route::get('/portfolio', [UserController::class, 'portfolio']);

Route::get('/portfolio/{id}', [UserController::class, 'subPortfolio']);

Route::get('/services', [UserController::class, 'services']);

Route::get('contact-us', [UserController::class, 'contactUs']);

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

            Route::get('/images/{id}', [PortfolioController::class, 'indexImage']);
        });

        Route::group(['prefix' => 'products', 'as' => 'products'], function() {
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

        Route::group(['prefix' => 'PortfolioImage', 'as' => 'portfolioImage'], function() {
            Route::get('{portfolio_id}/add', [PortfolioController::class, 'formImage']);
            Route::post('{portfolio_id}/add', [PortfolioController::class, 'storeImage']);
            Route::get('/edit/{portfolio_id}/{id}', [PortfolioController::class, 'editImageForm']);
            Route::post('/edit', [PortfolioController::class, 'editImage']);
            Route::get('/delete/{portfolio_id}/{id}', [PortfolioController::class, 'destroyImage']);
            Route::get('/active/{portfolio_id}/{id}', [PortfolioController::class, 'active']);
        });

    });
});
