<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\MemoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductGroupController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
   return view('layouts/admin');
});
Route::prefix('brand')->group(function () {
    Route::get('/', [BrandController::class, 'index'])->name('brand');
    Route::get('/create', [BrandController::class, 'create'])->name('brand.create');
    Route::get('/edit/{id}', [BrandController::class, 'edit'])->name('brand.edit');
    Route::put('/edit/{id}', [BrandController::class, 'update'])->name('brand.update');
    Route::delete('destroy/{id}', [BrandController::class, 'destroy'])->name('brand.destroy');
});
Route::prefix('pg')->group(function () {
    Route::get('/',[ProductGroupController::class, 'index'])->name('pg');
    Route::get('create',[ProductGroupController::class, 'create'])->name('pg.create');
    Route::get('edit/{id}', [ProductGroupController::class, 'edit'])->name('pg.edit');
    Route::post('edit/{id}', [ProductGroupController::class, 'update'])->name('pg.update');
    Route::delete('destroy/{id}', [ProductGroupController::class, 'destroy'])->name('pg.destroy');
});
Route::prefix('color')->group(function () {
    Route::get('/',[ColorController::class, 'index'])->name('color');
    Route::get('create',[ColorController::class, 'create'])->name('color.create');
    Route::get('edit/{id}', [ColorController::class, 'edit'])->name('color.edit');
    Route::post('edit/{id}', [ColorController::class, 'update'])->name('color.update');
    Route::delete('destroy/{id}', [ColorController::class, 'destroy'])->name('color.destroy');

});
Route::prefix('memory')->group(function () {
    Route::get('/',[MemoryController::class, 'index'])->name('memory');
    Route::get('create',[MemoryController::class, 'create'])->name('memory.create');
    Route::get('edit/{id}', [MemoryController::class, 'edit'])->name('memory.edit');
    Route::post('edit/{id}', [MemoryController::class, 'update'])->name('memory.update');
    Route::delete('destroy/{id}', [MemoryController::class, 'destroy'])->name('memory.destroy');
});
Route::prefix('product')->group(function () {
    Route::get('/',[ProductController::class, 'index'])->name('product');
    Route::get('create',[ProductController::class, 'create'])->name('product.create');
    Route::get('edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('edit/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('destroy/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
});
