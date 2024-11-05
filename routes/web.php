<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

Route::get('/', function () {
    return view('homePage');
});

Route::get('/lowonganBisnis', function () {
    return view('lowonganBisnis');
})->name('lowonganBisnis');

Route::get('/perusahaan', function () {
    return view('perusahaan');
});

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
    return view('pemilihanRole');
});

Route::get('/detailLowonganBisnis', function () {
    return view('detailLowonganBisnis');
});


require __DIR__.'/auth.php';


Route::get('/editProfilePerusahaan', function () {
    return view('editProfilePerusahaan');
});

Route::get('/profileLowonganBisnis', function () {
    return view('profileLowonganBisnis');
});

Route::get('/editLowonganBisnis', function () {
    return view('editLowonganBisnis');
});

Route::get('/profilePerusahaanPartner', function () {
    return view('profilePerusahaanPartner');
});
