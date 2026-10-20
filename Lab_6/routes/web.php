
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return redirect()->route('login');
});

// Registration
Route::get('/register', [AuthController::class, 'showRegister'])
    ->name('register');

Route::post('/register', [AuthController::class, 'register'])
    ->name('register.store');

// Login
Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login.store');

// Dashboard
Route::get('/dashboard', [AuthController::class, 'dashboard'])
    ->middleware('auth')
    ->name('dashboard');

// Profile
Route::get('/profile', [ProfileController::class, 'index'])
    ->middleware('auth')
    ->name('profile');

Route::get('/profile/edit', [ProfileController::class, 'edit'])
    ->middleware('auth')
    ->name('profile.edit');

Route::post('/profile/update', [ProfileController::class, 'update'])
    ->middleware('auth')
    ->name('profile.update');

// Change Password
Route::get('/change-password', [ProfileController::class, 'changePassword'])
    ->middleware('auth')
    ->name('password.change');

Route::post('/change-password', [ProfileController::class, 'updatePassword'])
    ->middleware('auth')
    ->name('password.update');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');
