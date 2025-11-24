<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

// for logged out users
Route::middleware('guest')->group(function () { 
    Route::get('/register', [AuthController::class, 'showRegister'])->name('showRegister');
    Route::post('/register', [AuthController::class,'register'])->name('register');

    Route::get('/login', [AuthController::class, 'showLogin'])->name('showLogin');
    Route::post('/login', [AuthController::class, 'login'])->name('login');

    Route::get('/resetPassword', [AuthController::class, 'showResetPassword'])->name('showResetPassword');
    Route::post('/resetPassword',[AuthController::class, 'resetPassword'])->name('resetPassword');

    Route::get('/', function (){ return view('welcome'); })->name('welcome');
});



// for logged in users
Route::middleware('auth')->controller(AuthController::class)->group(function () { 
  Route::get('/home', [PostController::class, 'select'])->name('home');
  Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
  Route::get('/myProfile', [UserController::class, 'myProfile'])->name('myProfile');
  Route::post('/myProfile/update', [UserController::class, 'distance'])->name('distance');
  Route::get('/myProfile/edit', [UserController::class, 'showEdit'])->name('showEdit');
  Route::post('/myProfile/edit', [UserController::class, 'edit'])->name('edit');
  Route::post('/blogListing/filteredPosts', [PostController::class, 'filter'])->name('post.filter');

  Route::get('/blogListing/profile/{user}', [UserController::class, 'profile'])->name('profile');

  Route::get('/blogEditor', [PostController::class, 'create'])->name('posts.create');
  Route::post('/blogEditor', [PostController::class, 'store'])->name('posts.store');
  Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
  Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');


});

