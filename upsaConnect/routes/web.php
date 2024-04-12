<?php

use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Route;

Route::get('/feed', function () {
    return view('feed');
})->name('feed')->middleware('auth');
Route::get('/jobs', function () {
    return view('jobs');
})->name('jobs')->middleware('auth');

Route::get('/app', function () {
    return view('app');
});

Route::get('/login', [AuthManager::class, 'login'])->name('login');

Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');

Route::get('/register', [AuthManager::class, 'register'])->name('register');

Route::post('/register', [AuthManager::class, 'registerPost'])->name('register.post');

Route::get('/logout', [AuthManager::class,'logout'])->name('logout');
