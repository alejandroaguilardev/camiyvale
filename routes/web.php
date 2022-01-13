<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
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

Route::get('/', [HomeController::class,'index'])->name('home.index');

Route::get('nosotros', [AboutController::class,'index'])->name('about.index');

Route::get('productos', [ProductController::class,'index'])->name('product.index');
Route::get('productos/{category}', [ProductController::class,'show'])->name('product.show');
Route::get('productos/{category}/{product}', [ProductController::class,'product'])->name('product.product');

Route::get('servicios', [ServiceController::class,'index'])->name('service.index');
Route::get('servicios/{service}', [ServiceController::class,'show'])->name('service.show');


Route::get('contactanos', [ContactController::class,'index'])->name('contact.index');
Route::post('contactanos', [ContactController::class,'store'])->name('contact.store');

 