<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\DashboardOwnerController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/owner/login', [OwnerController::class, 'showLoginForm'])->name('login');
// Route::post('/owner/login', [OwnerController::class, 'login']);

Route::get('/dashboard-owner', [DashboardOwnerController::class, 'index'])->name('dashboard.owner');

