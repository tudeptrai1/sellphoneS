<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\MemoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductGroupController;
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

Route::prefix('brand')->group(function () {
    Route::get('/',[BrandController::class,'all']);
    Route::get('/{name}',[BrandController::class,'search']);
    Route::post('/store',[BrandController::class,'store'])->name('api.brand.store');
});
Route::prefix('pg')->group(function () {
    Route::get('/',[ProductGroupController::class,'all']);
    Route::get('/{name}',[ProductGroupController::class,'search']);
    Route::post('/store',[ProductGroupController::class,'store'])->name('api.pg.store');
});
Route::prefix('color')->group(function () {
    Route::get('/',[ColorController::class,'all']);
    Route::get('/{name}',[ColorController::class,'search']);
    Route::post('/store',[ColorController::class,'store'])->name('api.color.store');
});
Route::prefix('memory')->group(function () {
    Route::get('/',[MemoryController::class,'all']);
    Route::get('/{name}',[MemoryController::class,'search']);
    Route::post('/store',[MemoryController::class,'store'])->name('api.memory.store');
});
Route::prefix('product')->group(function () {
    Route::get('/',[ProductController::class,'all']);
    Route::get('/{name}',[ProductController::class,'search']);
    Route::post('/store',[ProductController::class,'store'])->name('api.product.store');
});