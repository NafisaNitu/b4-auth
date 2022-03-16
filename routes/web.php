<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/my-calculator', [ProductController::class, 'calculator'])->name('my-calculator');
//product crud
Route::get('/add-product', [ProductController::class, 'index'])->name('add-product');
Route::post('/new-product', [ProductController::class, 'newProduct'])->name('new-product');
Route::post('/update-product', [ProductController::class, 'updateProduct'])->name('update-product');
Route::get('/manage-product', [ProductController::class, 'manageProduct'])->name('manage-product');
Route::get('/delete-product/{productId}', [ProductController::class, 'deleteProduct'])->name('delete-product');
Route::get('/status-change/{productId}', [ProductController::class, 'productStatus'])->name('product-status');
Route::get('/edit-product/{productId}', [ProductController::class, 'edit'])->name('product-edit');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.home.home');
})->name('dashboard');
