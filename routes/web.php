<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\User\LoginController;
use App\Http\Controllers\Admin\MainController;

Route::get('/admin/user/login',[LoginController::class,'index'])->name('login');
Route::post('/admin/user/store',[LoginController::class,'store'])->name('store');

Route::middleware(['auth'])->group(function () {
    Route::get('admin/main',[MainController::class,'index'])->name('admin');
});
