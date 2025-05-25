<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

use App\Http\Controllers\NotificationController;
use App\Http\Controllers\Auth\GoogleAuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::get('register', 'register')->name('register');
    Route::get('password-reset', 'password_reset')->name('password-reset');
    Route::get('new-password', 'new_password')->name('new-password');
    Route::post('login/auth', 'auth')->name('login.auth');
    Route::get('logout', 'logout')->name('logout');
    Route::post('register/store', 'store')->name('register.store');
});

Route::get('notifications', [NotificationController::class, 'index'])->name('notifications.index');
Route::post('notifications/{id}/mark-as-read', [NotificationController::class, 'markAsRead'])->name('notifications.markAsRead');
Route::post('notifications/mark-all-as-read', [NotificationController::class, 'markAllAsRead'])->name('notifications.markAllAsRead');

require __DIR__.'/admin.php';
require __DIR__.'/supervisor.php';
require __DIR__.'/student.php';

Route::middleware(['web'])->group(function () {
    Route::get('/auth/google', [GoogleAuthController::class, 'redirectToGoogle'])->name('auth.google');
    Route::get('/auth/google/callback', [GoogleAuthController::class, 'handleGoogleCallback'])->name('auth.google.callback');
});



