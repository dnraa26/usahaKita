<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\checkUserController;
use App\Http\Controllers\pickRoleController;
use App\Http\Controllers\PerusahaanController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
Route::get('/pilihRole', [pickRoleController::class, 'index'])->name('pilihRole');
Route::post('/pilihRole', [pickRoleController::class, 'store'])->name('pickRole');

Route::get('/checkUser', [checkUserController::class, 'index'])->name('checkUser');

Route::get('/', function () {
    return view('homePage');
});

Route::get('/lowonganBisnis', function () {
    return view('lowonganBisnis');
})->name('lowonganBisnis');

// Route::get('/perusahaan', function () {
//     return view('perusahaan');
// })->name('perusahaan');

Route::get('/aboutUs', function () {
    return view('aboutUs');
});

Route::get('/dashboardBusinesman', function () {
    return view('dashboardBusinesman');
});

Route::get('/manageProfilPerusahaanBusinesman', function () {
    return view('manageProfilPerusahaanBusinesman');
});

Route::get('/form', function () {
    return view('form.register-perusahaan');
});

Route::get('/pemilihanRole', function () {
    return view('form.pemilihanRole');
});

Route::get('/detailLowonganBisnis', function () {
    return view('detailLowonganBisnis');
});

Route::post('/perusahaan/store', [PerusahaanController::class, 'store'])->name('perusahaan.store');
Route::get('/perusahaan', [PerusahaanController::class, 'index'])->name('perusahaan');

require __DIR__.'/auth.php';


Route::get('/editProfilePerusahaan', function () {
    return view('form.editProfilePerusahaan');
});

Route::get('/profileLowonganBisnis', function () {
    return view('profileLowonganBisnis');
});

Route::get('/editLowonganBisnis', function () {
    return view('form.editLowonganBisnis');
});

Route::get('/profilePerusahaanPartner', function () {
    return view('profilePerusahaanPartner');
});

Route::get('/tambahLowonganBisnis', function () {
    return view('form.tambahLowonganBisnis');
});

Route::get('/profile', function () {
    return view('profile');
});
