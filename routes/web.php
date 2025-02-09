<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Auth
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Dashboard Admin
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

// Dashboard User
Route::get('/user/dashboard', function () {
    return view('user.dashboard');
})->name('user.dashboard');

// Dashboard Super Admin
Route::get('/super-admin/dashboard', function () {
    return view('super-admin.dashboard');
})->name('super-admin.dashboard');

Route::get('/', function () {
    return view('index');
});

Route::get('/learn', function () {
    return view('learn');
});

Route::get('/detail-learn', function () {
    return view('detail-learn');
});

Route::get('/course', function () {
    return view('course');
});

Route::get('/challenge', function () {
    return view('challenges');
});

Route::get('/detail-challenge', function () {
    return view('detail-challenges');
});

Route::get('/challenge-form', function () {
    return view('challenges-form');
});

Route::get('/jobs', function () {
    return view('jobs');
});

Route::get('/detail-jobs', function () {
    return view('detail-jobs');
});
