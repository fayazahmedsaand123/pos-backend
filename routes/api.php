<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::options('{any}', function() {
    return response()->json([], 200);
})->where('any', '.*');

Route::get('/dashboard', [OrderController::class, 'dashboard']);
Route::apiResource('categories', CategoryController::class);
Route::apiResource('products', ProductController::class);
Route::get('/orders', [OrderController::class, 'index']);
Route::post('/orders', [OrderController::class, 'store']);
Route::delete('/orders/{id}', [OrderController::class, 'destroy']);