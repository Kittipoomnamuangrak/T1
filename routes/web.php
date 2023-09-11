<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


##Route::get('/', [ContentController::class, 'index']);

Route::get('/', function(){
    return view('Welcome');
});

Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'checkLogin']);

Route::middleware(['auth.admin'])->group(function () {

Route::get('/products', [ProductController::class, 'index']);

Route::resource('products', ProductController::class);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});


