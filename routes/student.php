<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\Student\StudentController;

Route::middleware(['auth', 'role:student'])->group(function () {
    Route::prefix('/student')->group(function () {
        Route::controller(StudentController::class)->group(function () {
            Route::get('dashboard', 'dashboard')->name('dashboard');
            Route::get('feedback', 'feedback')->name('feedback');
            Route::get('help', 'help')->name('help');
            Route::get('complaints', 'compaints')->name('complaints');
            Route::get('notifications', 'notifications')->name('notifications');
            Route::get('profile', 'profile')->name('profile');
            Route::get('log', 'log')->name('log');
        });

        Route::controller(ComplaintController::class)->group(function () {
            Route::post('complaints/store', 'store')->name('complaints.store');
            Route::post('complaints/create', 'create')->name('complaints.create');
            Route::get('complaints/{id}/edit', 'edit')->name('complaints.edit');
            Route::put('complaints/{id}', 'update')->name('complaints.update');
            Route::delete('complaints/{id}', 'destroy')->name('complaints.destroy');
        });
    });
});
