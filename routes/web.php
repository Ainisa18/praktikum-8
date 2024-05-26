<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/dashboard', [DashboardController::class, 'show']);

Route::get('/dashboard/laporan', [DashboardController::class, 'laporan']);