<?php

use App\Http\Controllers\BrandController;
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
Route::get('/brand',[BrandController::class,'index'])->name('brand');
Route::get('/brand/create',[BrandController::class,'create'])->name('brand.create');
Route::get('/brand/edit/{id}',[BrandController::class,'edit'])->name('brand.edit');
Route::put('/brand/edit/{id}',[BrandController::class,'update'])->name('brand.update');
//Route::delete('/brand/destroy/{id}',[BrandController::class])
