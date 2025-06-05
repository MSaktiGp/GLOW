<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\DashboardOwnerController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\YogaController;
use App\Http\Controllers\LoginController;
<<<<<<< HEAD
use App\Http\Controllers\JadwalOwnerController;
=======
use App\Http\Controllers\RegisterController;
>>>>>>> c3085e5b50ac53c09659d8382468c82f3ad6274d

// Route::get('/', function () {
//      return view('welcome');
// });

//user
Route::get('/yoga', [YogaController::class, 'index']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

<<<<<<< HEAD

//Owner
Route::get('/owner/login', [OwnerController::class, 'showLoginForm'])->name('login');
// Route::post('/owner/login', [OwnerController::class, 'login']);
Route::get('/dashboard-owner', [DashboardOwnerController::class, 'index'])->name('dashboard.owner');
Route::get('/owner/profile', [OwnerController::class, 'profile'])->name('owner.profile');
Route::get('/maintenance-jadwal', function () {return view('maintenanceJadwal');});
Route::post('/logout', function () {Auth::logout();return redirect('/');})->name('logout');
Route::get('/jadwal/owner', [JadwalOwnerController::class, 'index'])->name('jadwal.index');
Route::get('/jadwal/owner/create', [JadwalOwnerController::class, 'create'])->name('jadwal.create');
Route::post('/jadwal/owner', [JadwalOwnerController::class, 'store'])->name('jadwal.store');
Route::get('/jadwal/owner/{id}/edit', [JadwalOwnerController::class, 'edit'])->name('jadwal.edit');
Route::put('/jadwal/owner/{id}', [JadwalOwnerController::class, 'update'])->name('jadwal.update');
Route::delete('/jadwal/owner/{id}', [JadwalOwnerController::class, 'destroy'])->name('jadwal.destroy');
=======
// Register
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

>>>>>>> c3085e5b50ac53c09659d8382468c82f3ad6274d
