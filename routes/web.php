<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\AuthController;
use App\Http\Controllers\Site\UserController;
use App\Http\Controllers\Site\ProductController;
use App\Http\Controllers\Site\CategoryController;

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

Route::view('/', 'site.login')->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('loginPost');
Route::get('/register', [UserController::class, 'create'])->name('register');
Route::post('/register', [UserController::class, 'store'])->name('registerPost');


Route::middleware('auth')->group(function(){
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    
    Route::get('/add-product', [ProductController::class, 'create'])->name('addProduct');
    Route::post('/add-product', [ProductController::class, 'store'])->name('addProductPost');
    Route::get('/list-product', [ProductController::class, 'list'])->name('listProduct');
    Route::get('/del-product/{id}', [ProductController::class, 'destroy'])->name('deleteProduct');
    Route::get('/edit-product', [ProductController::class , 'edit'])->name('editProduct');
    Route::post('/edit-product', [ProductController::class, 'update'])->name('editProductPost');
    
    Route::get('/list-category', [CategoryController::class, 'list'])->name('listCategory');
    Route::get('/del-category/{id}', [CategoryController::class, 'destroy'])->name('deleteCategory');
    Route::get('/add-category', [CategoryController::class, 'create'])->name('addCategory');
    Route::post('/add-category', [CategoryController::class, 'store'])->name('addCategoryPost');


    Route::get('/edit-category', [CategoryController::class, 'edit'])->name('editCategory');
    Route::post('/edit-category', [CategoryController::class, 'update'])->name('editCategoryPost');
});