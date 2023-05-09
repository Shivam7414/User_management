<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'adminLogin']);

Route::post('/dashboard', [DashboardController::class, 'dashboard']);


