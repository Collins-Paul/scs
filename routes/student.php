<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\Student\StudentController;

Route::middleware(['auth', 'role:student'])->group(function () {
    Route::prefix('/student')->group(function () {
        
        Route::controller(StudentController::class)->group(function () {
            Route::get('dashboard', 'dashboard')->name('dashboard');
            Route::get('feedback', 'feedback')->name('feedback');
            Route::get('help', 'help')->name('help');
            Route::get('complaints', 'compaints')->name('complaints');
            Route::get('log', 'log')->name('log');
        });

        Route::controller(ComplaintController::class)->group(function () {
            Route::post('complaints/store', 'store')->name('complaints.store');
            Route::get('complaints/create', 'create')->name('complaints.create');
            Route::get('complaints/{id}/edit', 'edit')->name('complaints.edit');
            Route::put('complaints/{id}', 'update')->name('complaints.update');
            Route::get('complaints/{id}/show', 'show')->name('complaints.show');
            Route::delete('complaints/{id}', 'destroy')->name('complaints.destroy');
        });

        Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');
        Route::get('profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::post('profile', [ProfileController::class, 'update'])->name('profile.update');


        Route::get('password/change', [PasswordController::class, 'edit'])->name('password.change');
        Route::post('password/update', [PasswordController::class, 'update'])->name('password.update');
    });
});
