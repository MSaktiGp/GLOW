<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OwnerController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::post('/owner/login', [OwnerController::class, 'showLoginForm'])->name('login');
// Route::post('/owner/login', [OwnerController::class, 'login']);

