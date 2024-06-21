<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/',function (){
    return view('welcome');
})->name('home');
Route::get('/registration', [AuthController::class, 'showRegistrationForm'])
    ->name('show-registration-form');
Route::post('/registration', [AuthController::class, 'registrationProcess'])
    ->name('registration-form-processor');
Route::post('/logout',[AuthController::class, 'logoutProcess'])
    ->name('logout-processor');
Route::get('/login', [AuthController::class, 'showLoginForm'])
    ->name('show-login-form');
Route::post('/login', [AuthController::class, 'loginProcess'])
    ->name('login-form-processor');
Route::get('/account', [UserController::class, 'showAccountPage'])
    ->name('account');
Route::post('/account', [UserController::class, 'editAccountFormProcess'])
    ->name('edit-account-form-processor');
Route::get('/partner', [PartnersController::class, 'index'])
    ->name('partners');
Route::post('/partner-delete/{partner}', [UserController::class, 'partnerDelete'])
    ->name('partner-delete');
Route::get('/partners', [PartnersController::class, 'showAllPartners'])
    ->name('partners');
Route::get('add-partner/{partner}', [PartnersController::class, 'addPartner'])
    ->name('add-partner');
