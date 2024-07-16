<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\ListCategoriesController;
use App\Http\Controllers\DetailProductsController;
use App\Http\Controllers\AdminPostController;

use App\Http\Controllers\SearchController;
use App\Http\Controllers\TestUIController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->can('update', 'post')->name('posts.edit');
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
    Route::get('/logout', [LoginUserController::class, 'logout'])->name('logout');

    Route::middleware('is-admin')->group(function () {
        Route::get('/admin', [AdminController::class, 'index'])->name('admin');
        Route::get('/admin/posts/{post}/edit', [AdminPostController::class, 'edit'])->name('admin.posts.edit');
        Route::put('/admin/posts/{post}', [AdminPostController::class, 'update'])->name('admin.posts.update');
        Route::delete('/admin/posts/{post}', [AdminPostController::class, 'destroy'])->name('admin.posts.destroy');
    });
});
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/categories/{category}', [ListCategoriesController::class, 'show'])->name('categories.show');
Route::get('/products/{product}', [DetailProductsController::class, 'show'])->name('product.show');
Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::get('/test/UI', [TestUIController::class, 'index'])->name('test.index');

// Route::get('/products/', [DetailCategoriesController::class, 'show_products'])->name('products');

Route::middleware('guest')->group(function () {
    Route::get('/customer/register', [RegisterUserController::class, 'register'])->name('register');
    Route::post('/customer/register', [RegisterUserController::class, 'store'])->name('register.store');
    Route::get('/customer/login', [LoginUserController::class, 'login'])->name('login');
    Route::post('/customer/login', [LoginUserController::class, 'store'])->name('login.store');
});
