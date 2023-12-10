<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\CategoriesDashboardController;
use App\Http\Controllers\Admin\ProductDashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/home', [HomeController::class, "index"])->name('home');

Route::get('/detail/{id}', [DetailController::class, 'index'])->name('detail');
Route::get('/products', [ProductController::class, 'index'])->name('products');

Route::get('/', [AdminDashboardController::class, 'index'])->middleware(['auth', 'Admin'])->name('dashboard');
Route::resource('category', CategoriesDashboardController::class);
Route::resource('product', ProductDashboardController::class);

Auth::routes();
