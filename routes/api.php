<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\VendorController;
use Illuminate\Support\Facades\Route;
Route::resource('product', ProductController::class);

Route::get('/products', [ProductController::class, 'index']);
Route::post('/product-store', [ProductController::class, 'store']);
Route::resource('vendors',VendorController::class);

Route::get ('/halo',function (){
    return 'Halo, Laravel!';
});


