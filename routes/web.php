<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::resource('product', ProductController::class);
Route::get('pdf', [ProductController::class, 'pdf'])->name('pdf');
