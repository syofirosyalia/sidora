<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FormulirController;

// Route::get("/formulir", [FormulirController::class]);
// Route::get("/app-admin/formulir", [FormulirController::class,'show']);
Route::get("/app-admin/formulir", [FormulirController::class, 'index']);
Route::post("/app-admin/formulir/store", [FormulirController::class, 'store']);