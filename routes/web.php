<?php

use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\ListCategoriesController;


use App\Http\Controllers\AccountController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductControllerTest;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TestUIController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/account', [AccountController::class, 'show'])->name('account.show');
    Route::post('/update-account', [AccountController::class, 'updateAccount'])->name('account.update');
    Route::post('/update-password', [AccountController::class, 'updatePassword'])->name('password.update');
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show');
    // Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    // Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    // Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->can('update', 'post')->name('posts.edit');
    // Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
    // Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
    Route::get('/logout', [LoginUserController::class, 'logout'])->name('logout');

    Route::middleware('is-admin')->group(function () {
        // // Route::get('/admin', [AdminController::class, 'index'])->name('admin');
        // Route::get('/products/{id}', [AdminProductViewController::class, 'show'])->name('products.show');
        // Route::get('/products/{id}/edit', [AdminProductViewController::class, 'edit'])->name('products.edit');
        // // Route::get('/admin/products', [AdminProductController::class, 'adminIndex'])->name('products.adminIndex');
        // Route::get('/admin/page/blank', [AdminController::class, 'index'])->name('admin');
        // Route::get('/admin/posts/{post}/edit', [AdminPostController::class, 'edit'])->name('admin.posts.edit');
        // Route::put('/admin/posts/{post}', [AdminPostController::class, 'update'])->name('admin.posts.update');
        // Route::delete('/admin/posts/{post}', [AdminPostController::class, 'destroy'])->name('admin.posts.destroy');
    });
});
// Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
// Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

// Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/categories/ao-polo', [ListCategoriesController::class, 'show'])->name('categories.show');
Route::get('/products/ao-polo-nam-roway-det-len', [ProductControllerTest::class, 'show'])->name('product.show');

Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::get('/test/UI', [TestUIController::class, 'index'])->name('test.index');


Route::middleware('guest')->group(function () {
    Route::get('/customer/register', [RegisterUserController::class, 'register'])->name('register');
    Route::post('/customer/register', [RegisterUserController::class, 'store'])->name('register.store');
    Route::get('/customer/login', [LoginUserController::class, 'login'])->name('login');
    Route::post('/customer/login', [LoginUserController::class, 'store'])->name('login.store');
});
