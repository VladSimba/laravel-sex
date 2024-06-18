<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/registration', [authController::class, 'showRegistrationForm'])->name('show-registration-form');
Route::post('/registration', [authController::class, 'registrationProcess'])->name('registration-form-processor');
Route::post('/logout',[authController::class, 'logoutProcess'])->name('logout-processor');
Route::get('/login', [authController::class, 'showLoginForm'])->name('show-login-form');
Route::post('/login', [authController::class, 'loginProcess'])->name('login-form-process');
Route::get('/account', [\App\Http\Controllers\UserController::class, 'showAccountPage'])->name('account');
Route::post('/account', [\App\Http\Controllers\UserController::class, 'editAccountFormProcess'])->name('edit-account-form-processor');
