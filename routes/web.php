<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/home', function () {
    return view('welcome');
})->name('home');

// routes only for logged out users
Route::middleware('guest')->group(function () { 
    Route::get('/register', [AuthController::class, 'showRegister'])->name('showRegister');
    Route::post('/register', [AuthController::class,'register'])->name('register');


    Route::get('/', [AuthController::class, 'showLogin'])->name('showLogin');
    Route::post('/', [AuthController::class, 'login'])->name('login');

    Route::get('/requestReset', [AuthController::class, 'showRequestReset'])->name('showRequestReset');
    Route::post('/requestReset', [AuthController::class, 'requestReset'])->name('requestReset');

    Route::get('/resetPassword/{token}', [AuthController::class, 'showResetPassword'])->name('showResetPassword');
    Route::post('/resetPassword',[AuthController::class, 'resetPassword'])->name('resetPassword');
});

// routes only for logged in users
Route::middleware('auth')->controller(AuthController::class)->group(function () { 
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});