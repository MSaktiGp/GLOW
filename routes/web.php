<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; // Penting untuk Auth::logout()
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\DashboardOwnerController;
// use App\Http\Controllers\Auth\AuthenticatedSessionController; // Jika ini hanya untuk logout, bisa pakai facade Auth
use App\Http\Controllers\ClassController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LupaPwController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookedController;
use App\Http\Controllers\CustomerPaymentController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\MaintenanceJadwalController;


// Rute untuk Pengguna (User)
Route::get('/', function(){return redirect('/dashboard');}); // Redirect root ke dashboard
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard'); // Beri nama rute ini
Route::get('/profil', [PelangganController::class, 'profile'])->name('profil');

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

// Lupa password
Route::get('/lupaPassword', [LupaPwController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/lupaPassword', [LupaPwController::class, 'sendResetLinkEmail'])->name('password.email');

// Reset password
Route::get('/reset-password/{token}', [LupaPwController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [LupaPwController::class, 'resetPassword'])->name('password.update');

// Tes reset tanpa data dummy
Route::get('/test-reset', function () {
    return view('resetPw', [
        'token' => 'testtoken',
        'email' => 'dummy@example.com'
    ]);
});

// Rute Registrasi
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

// Rute Booked (Sepertinya ini untuk status booking atau halaman booking tertentu)
Route::get('/booked1', [BookedController::class, 'booked1'])->name('booked1');
Route::get('/booked2', [BookedController::class, 'booked2'])->name('booked2');
Route::get('/booked3', [BookedController::class, 'booked3'])->name('booked3');
Route::get('/booked4', [BookedController::class, 'booked4'])->name('booked4');
Route::get('/booked5', [BookedController::class, 'booked5'])->name('booked5');
Route::get('/booked6', [BookedController::class, 'booked6'])->name('booked6');


// Rute Customer Payment
Route::get('/payment', [CustomerPaymentController::class, 'payment'])->name('payment');
Route::get('/paymentmethod1', [CustomerPaymentController::class, 'paymentmethod1'])->name('paymentmethod1');
Route::get('/paymentmethod2', [CustomerPaymentController::class, 'paymentmethod2'])->name('paymentmethod2');
Route::get('/paymentmethod3', [CustomerPaymentController::class, 'paymentmethod3'])->name('paymentmethod3');
Route::get('/paymentmethod4', [CustomerPaymentController::class, 'paymentmethod4'])->name('paymentmethod4');
Route::get('/paymentmethod5', [CustomerPaymentController::class, 'paymentmethod5'])->name('paymentmethod5');
Route::get('/paymentmethod6', [CustomerPaymentController::class, 'paymentmethod6'])->name('paymentmethod6');
Route::get('/paymentconfirm', [CustomerPaymentController::class, 'paymentconfirm'])->name('paymentconfirm');


// Rute Autentikasi Owner
Route::get('/owner/login', [OwnerController::class, 'showLoginForm'])->name('owner.login');
Route::post('/owner/login', [OwnerController::class, 'login'])->name('owner.login.submit');


// Grup rute yang memerlukan autentikasi dan role 'owner'
Route::middleware(['auth', 'role:owner'])->group(function () {
    // Rute Dashboard Owner
    Route::get('/dashboard-owner', [App\Http\Controllers\DashboardOwnerController::class, 'index'])->name('dashboard.owner');
    Route::get('/owner/profile', [App\Http\Controllers\OwnerController::class, 'profile'])->name('owner.profile');

    // Rute Maintenance Jadwal (Sekarang menggunakan MaintenanceJadwalController)
    Route::get('/maintenance-jadwal', [MaintenanceJadwalController::class, 'index'])->name('maintenance.jadwal');

    // Rute untuk CRUD Jadwal Kelas
    Route::post('/jadwal-kelas', [MaintenanceJadwalController::class, 'storeJadwalKelas'])->name('jadwal_kelas.store');
    Route::get('/jadwal-kelas/{jadwalKela}/edit', [MaintenanceJadwalController::class, 'editJadwalKelas'])->name('jadwal_kelas.edit');
    Route::put('/jadwal-kelas/{jadwalKela}', [MaintenanceJadwalController::class, 'updateJadwalKelas'])->name('jadwal_kelas.update');
    Route::delete('/jadwal-kelas/{jadwalKela}', [MaintenanceJadwalController::class, 'destroyJadwalKelas'])->name('jadwal_kelas.destroy');

    // Rute untuk CRUD Jadwal Coach (Kelas Olahraga)
    Route::post('/kelas-olahraga', [MaintenanceJadwalController::class, 'storeKelasOlahraga'])->name('kelas_olahraga.store');
    Route::get('/kelas-olahraga/{kelasOlahraga}/edit', [MaintenanceJadwalController::class, 'editKelasOlahraga'])->name('kelas_olahraga.edit');
    Route::put('/kelas-olahraga/{kelasOlahraga}', [MaintenanceJadwalController::class, 'updateKelasOlahraga'])->name('kelas_olahraga.update');
    Route::delete('/kelas-olahraga/{kelasOlahraga}', [MaintenanceJadwalController::class, 'destroyKelasOlahraga'])->name('kelas_olahraga.destroy');
});

// Rute Logout (dapat diakses oleh siapa saja yang terautentikasi)
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate(); // Membatalkan sesi
    request()->session()->regenerateToken(); // Meregenerasi token CSRF
    return redirect('/');
})->name('logout');

