<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

//login
Route::get("/app-admin", [AdminController::class, 'login']);
Route::get("/app-admin/create-admin", [AdminController::class, 'create_admin']);
Route::post("/app-admin/process-login", [AdminController::class, 'process_login']);

//dashboard
Route::get("/app-admin/dashboard", [AdminController::class, 'dashboard']);
Route::get("/app-admin/blood", [AdminController::class, 'blood']);
Route::get("/app-admin/agenda", [AdminController::class, 'agenda']);
Route::get("/app-admin/riwayat", [AdminController::class, 'riwayat']);