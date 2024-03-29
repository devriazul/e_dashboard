<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[DashboardController::class, 'index']);
Route::get('/products',[ProductController::class, 'index'])->name('products.index');
Route::get('/products/create',[ProductController::class, 'create'])->name('products.create');
Route::post('/products/create',[ProductController::class, 'store']);
Route::get('/products/edit/{id}',[ProductController::class, 'edit']);
Route::post('/products/edit/{id}',[ProductController::class, 'update'])->name('products.update');

