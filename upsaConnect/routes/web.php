<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\AlumniController;
use Illuminate\Support\Facades\Route;

Route::get('/feed', function () {
    return view('feed');
})->name('feed')->middleware('auth');
Route::get('/jobs', function () {
    return view('jobs');
})->name('jobs')->middleware('auth');

Route::get('/', function () {
    return view('app');
});

Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');


Route::get('/register', [AuthManager::class, 'register'])->name('register');
Route::post('/register', [AuthManager::class, 'registerPost'])->name('register.post');


Route::get('/logout', [AuthManager::class,'logout'])->name('logout');


Route::get('/alumni', [AlumniController::class, 'alumniRegister'])->name('alumni');
Route::post('/alumni', [AlumniController::class, 'submitAlu'])->name('alumni.store');
