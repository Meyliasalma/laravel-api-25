<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/products', [ProductController::class, 'index']);
Route::post('/product-store', [ProductController::class, 'store']);

Route::get ('/halo',function (){
    return 'Halo, Laravel!';
});


