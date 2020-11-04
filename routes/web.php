<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;



Route::get('/', [ProductController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'show']);

Route::get('/users', [UserController::class, 'index']);
Route::get('/user/register', [UserController::class, 'create']);
Route::post('/user/register', [UserController::class, 'store']);
Route::post('/user/{id}', [UserController::class, 'edit'])->name('user.info');;

// Route::get('/post/create', [PostController::class, 'create']);

// Route::post('/post/create', [PostController::class, 'store']);
// Route::get('/post/{id}', [PostController::class, 'show'])->name('post.single');

// Route::get('/post/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
// Route::put('/post/{post}/edit', [PostController::class, 'update']);

// Route::get('/post/{post}/delete', [PostController::class, 'delete'])->name('post.delete');
// Route::get('/users', [UsersController::class, 'index']);
