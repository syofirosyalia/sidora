<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

//home
Route::get("/", [HomeController::class, 'home']);
