<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\AlumniController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('app');
})->name('home');

Route::get('/yearbook', function () {
    return view('yearbook');
})->name('yearbook');

Route::get('/jobs', function () {
    return view('jobs');
})->name('jobs');

Route::get('/donate', function () {
    return view('donate');
})->name('donate');

Route::get('/postjob', function () {
    return view('postjob');
})->name('postjob');

Route::get('/joblisting', function () {
    return view('joblisting');
})->name('joblisting');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/createadmin', function () {
    return view('createadmin');
})->name('createadmin');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');


Route::get('/register', [AuthManager::class, 'register'])->name('register');
Route::post('/register', [AuthManager::class, 'registerPost'])->name('register.post');


Route::get('/logout', [AuthManager::class,'logout'])->name('logout');


Route::get('/alumni', [AlumniController::class, 'alumniRegister'])->name('alumni');
Route::post('/alumni', [AlumniController::class, 'submitAlu'])->name('alumni.store');
