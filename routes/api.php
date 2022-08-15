<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/categoryFilter/{category}', [\App\Http\Controllers\ProductController::class, 'categoryFilter']);
Route::get('/publisherFilter/{publisher_name}', [\App\Http\Controllers\ProductController::class, 'publisherFilter']);
Route::get('/generalFilter/{category}/{publisher_name}/{novelty}', [\App\Http\Controllers\ProductController::class, 'generalFilter']);
Route::get('/novelFilter', [\App\Http\Controllers\ProductController::class, 'novelFilter']); // Фильтр по новинкам - показывает только новинки
Route::get('/allProducts', [\App\Http\Controllers\ProductController::class, 'getAllProducts']);
Route::post('/productSort', [\App\Http\Controllers\ProductController::class, 'productSort']);
Route::get('/getPriceForProduct', [\App\Http\Controllers\ProductController::class, 'getProductPrice']);
