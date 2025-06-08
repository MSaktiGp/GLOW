<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\DashboardOwnerController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LupaPwController;
use App\Http\Controllers\JadwalOwnerController;
use App\Http\Controllers\RegisterController;


// Route::get('/', function () {
//      return view('welcome');
// });

//user
Route::get('/yoga', [ClassController::class, 'yoga']);
Route::get('/pilates', [ClassController::class, 'pilates']);
Route::get('/poundfit', [ClassController::class, 'poundfit']);
Route::get('/zumba', [ClassController::class, 'zumba']);
Route::get('/tabata', [ClassController::class, 'tabata']);
Route::get('/trampoline', [ClassController::class, 'trampoline']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
// Lupa password
Route::get('/lupaPassword', [LupaPwController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/lupaPassword', [LupaPwController::class, 'sendResetLinkEmail'])->name('password.email');

// Reset password
Route::get('/reset-password/{token}', [LupaPwController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [LupaPwController::class, 'resetPassword'])->name('password.update');

//tes reset tanpa data dummy
Route::get('/test-reset', function () {
    return view('resetPw', [
        'token' => 'testtoken',
        'email' => 'dummy@example.com'
    ]);
});


//Owner
Route::get('/owner/login', [OwnerController::class, 'showLoginForm'])->name('owner.login');
Route::post('/owner/login', [OwnerController::class, 'login'])->name('owner.login.submit');
Route::get('/dashboard-owner', [DashboardOwnerController::class, 'index'])->name('dashboard.owner');
Route::get('/owner/profile', [OwnerController::class, 'profile'])->name('owner.profile');
Route::get('/maintenance-jadwal', function () {return view('maintenanceJadwal');});
Route::post('/logout', function () {Auth::logout();return redirect('/');})->name('logout');

// Register
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');


//dashboard guest
Route::get('/dashboard', function () { return view('dashboard');});
