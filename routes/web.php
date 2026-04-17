<?php

use App\Http\Controllers\SocialController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// 1. Mejora la ruta raíz para que redirija según el estado del usuario
Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('home');
    }
    return view('login');
})->name('login');
Route::get('/profile', function () {
    return view('profile');
})->middleware('auth')->name('home');
Route::get('/auth/google/redirect', [SocialController::class, 'authGoogle'])->name('google.redirect');
Route::get('/auth/google/callback', [SocialController::class, 'CallBackGoogle']);
Route::post('/register', [UserController::class, 'Register'])->name('register.post');
Route::post('/login', [UserController::class, 'LoginUser'])->name('login.post');
Route::post('/logout', [UserController::class, 'LogOutUser'])->name('logout');
