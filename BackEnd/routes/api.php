<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MemoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductGroupController;
use App\Http\Controllers\DiscountController;
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
    Route::get('/pg/{pg_id}',[ColorController::class,'getPg']);
    Route::get('/{name}',[ColorController::class,'search']);
    Route::post('/store',[ColorController::class,'store'])->name('api.color.store');
});
Route::prefix('memory')->group(function () {
    Route::get('/',[MemoryController::class,'all']);
    Route::get('/pg/{pg_id}',[MemoryController::class,'getPg']);
    Route::get('/{name}',[MemoryController::class,'search']);
    Route::post('/store',[MemoryController::class,'store'])->name('api.memory.store');
});
Route::prefix('product')->group(function () {
    Route::get('/',[ProductController::class,'all']);
    //get san pham voi id
    Route::get('/get/{id}',[ProductController::class,'get']);
    //get san pham voi group
    Route::get('/pg/{pg_id}',[ProductController::class,'detail']);
    //get san pham voi brand
    Route::get('/brand/{brand_id}',[ProductController::class,'brand']);

    Route::get('/search/name/{name}',[ProductController::class,'searchName']);

    Route::get('/search',[ProductController::class,'search']);
    Route::post('/store',[ProductController::class,'store'])->name('api.product.store');
});

Route::prefix('image')->group(function(){
    Route::get('/',[ImageController::class,'all']);
});
Route::prefix('discount')->group(function () {
    Route::get('/check/{code}',[DiscountController::class,'check']);
});
