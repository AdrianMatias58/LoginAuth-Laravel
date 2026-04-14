<?php

use App\Http\Controllers\SocialController;
use Illuminate\Support\Facades\Route;

Route::get('/',function (){
    return view('welcome');
});

Route::get('/auth/google/redirect', [SocialController::class, 'authGoogle']);

// Esta es la que configuraste en Google Console y en services.php
Route::get('/auth/google/callback', [SocialController::class, 'CallBackGoogle']);
