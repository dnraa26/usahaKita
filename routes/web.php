<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homePage');
});

Route::get('/lowonganBisnis', function () {
    return view('lowonganBisnis');
});

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