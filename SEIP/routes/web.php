<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcomController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;








//Route::get('/', function () {return view('welcome');});

Route::get('/',[EcomController::class,'index'])->name('home');
Route::get('/product-details/{id}',[EcomController::class,'productDetails'])->name('product-details');



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

//    Route::get('/home', function () { return view('home'); })->name('home');

    Route::get('/home',[AdminController::class,'index'])->name('home');

    Route::resource('products',ProductController::class);

    Route::resource('users',UserController::class);
});
