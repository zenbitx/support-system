<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/login', [AuthController::class, 'showLogin'])->name('login');

Route::post('admin/login', [AuthController::class, 'login']);
Route::post('admin/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('admin/forgot-password', [AuthController::class,'showForgotPassword'])->name('password.request');

Route::view('admin/dashboard', 'backend.layouts.dashboard')->name('admin.dashboard');