<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

//guest middleware grouping
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'auth'])->name('auth');
});

//this for role admin, in database named level
Route::middleware(['level:admin'])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    });

    Route::post('/logout', ['logout', AuthController::class])->name('logout');
});
