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
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\CustomerPaymentController;

// Route::get('/', function () {
//      return view('welcome');
// });

//user

Route::get('/dashboard', [DashboardController::class, 'dashboard']);
Route::get('/yoga', [ClassController::class, 'yoga'])->name('yoga');
Route::get('/pilates', [ClassController::class, 'pilates'])->name('pilates');
Route::get('/poundfit', [ClassController::class, 'poundfit'])->name('poundfit');
Route::get('/zumba', [ClassController::class, 'zumba'])->name('zumba');
Route::get('/tabata', [ClassController::class, 'tabata'])->name('tabata');
Route::get('/trampoline', [ClassController::class, 'trampoline'])->name('trampoline');
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

Route::get('/coach1', [CoachController::class, 'coach1']);

// Customer Payment
Route::get('/payment', [CustomerPaymentController::class, 'payment'])->name('payment');
Route::get('/paymentmethod1', [CustomerPaymentController::class, 'paymentmethod1'])->name('paymentmethod1');
Route::get('/paymentconfirm', [CustomerPaymentController::class, 'paymentconfirm'])->name('paymentconfirm');

