<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'login'])->middleware('guest');

Route::get('/', function () {
    return view('dashboard');
})->middleware('auth');
