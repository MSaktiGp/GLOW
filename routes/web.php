<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\DashboardOwnerController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;



// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/owner/login', [OwnerController::class, 'showLoginForm'])->name('login');
// Route::post('/owner/login', [OwnerController::class, 'login']);

Route::get('/dashboard-owner', [DashboardOwnerController::class, 'index'])->name('dashboard.owner');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get('/owner/profile', [OwnerController::class, 'profile'])->name('owner.profile');


