<?php

use App\Http\Controllers\ChallengeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\LearnController;
use App\Http\Controllers\LearnCourseController;
use App\Http\Controllers\UserChallengeController;
use App\Http\Controllers\UserJobController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;

// Auth
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Dashboard Admin
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

Route::middleware(['auth'])->name('admin.')->group(function () {
    Route::get('/admin/worker', [JobController::class, 'index'])->name('jobs.index');
    Route::get('/admin/jobs/create', [JobController::class, 'create'])->name('jobs.create');
    Route::post('/admin/jobs', [JobController::class, 'store'])->name('jobs.store');
    Route::get('/admin/jobs/{job}/edit', [JobController::class, 'edit'])->name('jobs.edit');
    Route::put('/admin/jobs/{job}', [JobController::class, 'update'])->name('jobs.update');
    Route::delete('/admin/jobs/{job}', [JobController::class, 'destroy'])->name('jobs.destroy');
    Route::get('/get-resume/{id}', [JobController::class, 'getResume']);
    Route::get('/resume/download/{id}', [JobController::class, 'downloadResume'])->name('resume.download');
});

Route::middleware(['auth'])->name('admin.')->group(function () {
    Route::get('/admin/challenge', [ChallengeController::class, 'index'])->name('challenge.index');
    Route::get('/admin/challenge/create', [ChallengeController::class, 'create'])->name('challenge.create');
    Route::post('/admin/challenge/store', [ChallengeController::class, 'store'])->name('challenge.store');
    Route::get('/admin/challenge/{id}/edit', [ChallengeController::class, 'edit'])->name('challenge.edit'); // Route Edit
    Route::put('/admin/challenge/{id}', [ChallengeController::class, 'update'])->name('challenge.update'); // Route Update
    Route::delete('/admin/challenge/{id}', [ChallengeController::class, 'destroy'])->name('challenge.destroy');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/profile', [ProfileController::class, 'index'])->name('admin.profile');
    Route::post('/admin/profile', [ProfileController::class, 'update'])->name('admin.profile.update');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('learn', LearnCourseController::class);
});

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

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [UserProfileController::class, 'edit'])->name('profile');
    Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
});

Route::get('/learn', [LearnController::class, 'index'])->name('learn');

Route::get('/detail-learn', function () {
    return view('detail-learn');
});

Route::get('/course', function () {
    return view('course');
});

Route::get('/challenge', [UserChallengeController::class, 'index'])->name('challenges.index');
Route::middleware(['auth'])->group(function () {
    Route::get('/challenge/{id}', [UserChallengeController::class, 'show'])->name('challenges.show');
    Route::post('/challenge-register', [UserChallengeController::class, 'store'])->name('challenge.register');
});

Route::get('/challenge-form', function () {
    return view('challenges-form');
});

Route::get('/jobs', [UserJobController::class, 'index'])->name('jobs.index');

Route::middleware(['auth'])->group(function () {
Route::get('/jobs/{id}', [UserJobController::class, 'show'])->name('jobs.show');
Route::post('/job-apply', [UserJobController::class, 'store'])->name('job.apply');
});

Route::get('/detail-jobs', function () {
    return view('detail-jobs');
});
