<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

Route::get("/login", [AdminController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('proccess-login');

//login
Route::middleware('auth')->group(function(){
    Route::get("/app-admin/create-admin", [AdminController::class, 'create_admin']);
    Route::post("/app-admin/process-login", [AdminController::class, 'process_login']);
    Route::get("/app-admin/dashboard", [AdminController::class, 'dashboard']);
    Route::get("/app-admin/blood", [AdminController::class, 'blood']);
    Route::get("/app-admin/agenda", [AdminController::class, 'agenda']);
    Route::get("/app-admin/riwayat", [AdminController::class, 'riwayat']);
});

//logout
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//dashboard