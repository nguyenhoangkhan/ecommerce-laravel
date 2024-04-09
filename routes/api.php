<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIS\ProductController;
use App\Http\Controllers\APIS\CategoryController;

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

Route::prefix('product')->group(function () {
    Route::get('/all', [ProductController::class, 'getAll'])->name('getAllProducts');
    Route::get('/get-by-category/{category_id}', [ProductController::class, 'getByCategory'])->name('getProductsByCategory');

});

Route::prefix('category')->group(function () {
    Route::get('/all', [CategoryController::class, 'getAll'])->name('getAllCategories');
});
