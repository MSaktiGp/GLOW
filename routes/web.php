<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\DashboardOwnerController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookedController;
use App\Http\Controllers\BookedControllerUser;
use App\Http\Controllers\CustomerPaymentController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\MaintenanceJadwalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\Auth\ResetPasswordController;

// Rute untuk Pengguna (User)
Route::get('/', function () {
    return redirect('/dashboard');
});
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

// Rute Kelas Olahraga
Route::get('/yoga', [ClassController::class, 'yoga'])->name('yoga');
Route::get('/pilates', [ClassController::class, 'pilates'])->name('pilates');
Route::get('/poundfit', [ClassController::class, 'poundfit'])->name('poundfit');
Route::get('/zumba', [ClassController::class, 'zumba'])->name('zumba');
Route::get('/tabata', [ClassController::class, 'tabata'])->name('tabata');
Route::get('/trampoline', [ClassController::class, 'trampoline'])->name('trampoline');

// Rute Autentikasi Pengguna
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Rute Registrasi
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

Route::get('/{jenis}/{coach}', [BookedController::class, 'show'])->name('coach.booked');
Route::get('/booked1', [BookedController::class, 'booked1'])->name('booked1');
Route::get('/booked2', [BookedController::class, 'booked2'])->name('booked2');
Route::get('/booked3', [BookedController::class, 'booked3'])->name('booked3');
Route::get('/booked4', [BookedController::class, 'booked4'])->name('booked4');
Route::get('/booked5', [BookedController::class, 'booked5'])->name('booked5');
Route::get('/booked6', [BookedController::class, 'booked6'])->name('booked6');

// Grup rute yang memerlukan autentikasi dan role 'owner'
Route::middleware(['auth', 'role:owner'])->group(function () {
    // Rute Dashboard Owner
    Route::get('/dashboard-owner', [App\Http\Controllers\DashboardOwnerController::class, 'index'])->name('dashboard.owner');
    Route::get('/owner-profile', [App\Http\Controllers\OwnerController::class, 'profile'])->name('owner.profile');
    Route::get('/maintenance-jadwal', [MaintenanceJadwalController::class, 'index'])->name('maintenance.jadwal');

    // Rute untuk CRUD Jadwal Kelas
    Route::post('/jadwal-kelas', [MaintenanceJadwalController::class, 'storeJadwalKelas'])->name('jadwal_kelas.store');
    Route::get('/jadwal-kelas/{id}/edit', [MaintenanceJadwalController::class, 'editJadwalKelas'])->name('jadwal_kelas.edit');


    Route::put('/jadwal-kelas/{id}', [MaintenanceJadwalController::class, 'updateJadwalKelas'])->name('jadwal_kelas.update');
    Route::delete('/jadwal-kelas/{id}', [MaintenanceJadwalController::class, 'destroyJadwalKelas'])->name('jadwal_kelas.destroy');

    // Rute untuk CRUD Jadwal Coach (Kelas Olahraga)
    Route::post('/kelas-olahraga', [MaintenanceJadwalController::class, 'storeKelasOlahraga'])->name('kelas_olahraga.store');
    Route::get('/kelas-olahraga/{id}/edit', [MaintenanceJadwalController::class, 'editKelasOlahraga'])->name('kelas_olahraga.edit');
    Route::post('/kelas-olahraga/{id}', [MaintenanceJadwalController::class, 'updateKelasOlahraga'])->name('kelas_olahraga.update');
    Route::delete('/kelas-olahraga/{id}', [MaintenanceJadwalController::class, 'destroyKelasOlahraga'])->name('kelas_olahraga.destroy');
});

Route::get('/edit-kelas', [ApiController::class, 'showModalBody']);
Route::get('/coach', [ApiController::class, 'getCoachData']);
Route::get('/jk', [ApiController::class, 'getJkData']);



// Rute autentikasi role 'user'
Route::middleware(['auth', 'role:user'])->group(function () {
    // Rute dashboard user
    // Route::get('/dashboard-user', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.user');
    Route::get('/profil', [PelangganController::class, 'profile'])->name('profil');

    // Rute Customer Payment
    Route::get('/payment', [CustomerPaymentController::class, 'payment'])->name('payment');
    Route::get('/payment-bri', [CustomerPaymentController::class, 'paymentmethod1'])->name('payment.bri');
    Route::get('/payment-bni', [CustomerPaymentController::class, 'paymentmethod2'])->name('payment.bni');
    Route::get('/payment-mandiri', [CustomerPaymentController::class, 'paymentmethod3'])->name('payment.mandiri');
    Route::get('/payment-bca', [CustomerPaymentController::class, 'paymentmethod4'])->name('payment.bca');
    Route::get('/payment-dana', [CustomerPaymentController::class, 'paymentmethod5'])->name('payment.dana');
    Route::get('/payment-ovo', [CustomerPaymentController::class, 'paymentmethod6'])->name('payment.ovo');
    Route::get('/paymentconfirm', [CustomerPaymentController::class, 'paymentconfirm'])->name('paymentconfirm');
    Route::get('/invoice', [CustomerPaymentController::class, 'invoice'])->name('invoice');
});
// Rute Logout (dapat diakses oleh siapa saja yang terautentikasi)
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate(); // Membatalkan sesi
    request()->session()->regenerateToken(); // Meregenerasi token CSRF
    return redirect('/');
})->name('logout');

//coba reset password
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('password.request');
Route::post('/forgot-password', [ResetPasswordController::class, 'passwordEmail'])->middleware('guest')->name('password.email');
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'passwordReset'])->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'passwordUpdate'])->name('password.update');


// Rute Booked (Sepertinya ini untuk status booking atau halaman booking tertentu)
// Route::get('/Claura-Sintiya', [BookedController::class, 'booked1'])->name('booked1');
// Route::get('/Kayla-Zahra', [BookedController::class, 'booked2'])->name('booked2');
// Route::get('/Rebeca-Laura', [BookedController::class, 'booked3'])->name('booked3');
// Route::get('/Dela-Putri', [BookedController::class, 'booked4'])->name('booked4');
// Route::get('/Rachel-Salsabila', [BookedController::class, 'booked5'])->name('booked5');
// Route::get('/Stevi-Putri', [BookedController::class, 'booked6'])->name('booked6');