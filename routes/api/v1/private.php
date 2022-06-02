<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\V1\CategoryController;
use App\Http\Controllers\V1\CategoryEnterpriseController;
use App\Http\Controllers\V1\ClientController;
use App\Http\Controllers\V1\DeliveryController;
use App\Http\Controllers\V1\EnterpriseCategoryController;
use App\Http\Controllers\V1\EnterpriseController;
use App\Http\Controllers\V1\EnterpriseProductController;
use App\Http\Controllers\V1\FavoriteController;
use App\Http\Controllers\V1\OrderController;
use App\Http\Controllers\V1\OrderDetailController;
use App\Http\Controllers\V1\ProductController;


Route::apiResource('clients', ClientController::class);
Route::prefix('client')->group(function () {
    Route::patch('destroys', [ClientController::class, 'destroys']);
});


Route::apiResource('deliveries', DeliveryController::class);
Route::prefix('delivery')->group(function () {
    Route::patch('destroys', [DeliveryController::class, 'destroys']);
});


Route::apiResource('enterprises', EnterpriseController::class);
Route::prefix('enterprise')->group(function () {
    Route::patch('destroys', [EnterpriseController::class, 'destroys']);
});


Route::apiResource('products', ProductController::class);
Route::prefix('product')->group(function () {
    Route::patch('destroys', [ProductController::class, 'destroys']);
});


Route::apiResource('enterprises.products', EnterpriseProductController::class);
Route::prefix('enterpriseRequest')->group(function () {
    Route::patch('destroys', [EnterpriseController::class, 'destroys']);
});




Route::apiResource('categories', CategoryController::class);
Route::prefix('category')->group(function () {
    Route::patch('destroys', [CategoryController::class, 'destroys']);
});





Route::apiResource('clients.orders', OrderController::class);
Route::prefix('order')->group(function () {
    Route::patch('destroys', [OrderController::class, 'destroys']);
});





Route::apiResource('orders.products', OrderDetailController::class);




Route::apiResource('enterprises.categories', EnterpriseCategoryController::class);


Route::apiResource('categories.enterprises', CategoryEnterpriseController::class);



Route::apiResource('clients.products', FavoriteController::class);
