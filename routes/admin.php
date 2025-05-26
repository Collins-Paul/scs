<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::prefix('/admin')->group(function () {
        Route::controller(AdminController::class)->group(function () {
            Route::get('/', 'index')->name('admin.dashboard');
            Route::get('/users', 'users')->name('admin.users');
            Route::delete('/user/delete/{id}', 'delete')->name('admin.user.delete');
            Route::delete('/user/make-admin/{id}', 'makeAdmin')->name('admin.make-admin');
            Route::delete('/user/make-supervisor/{id}', 'makeSupervisor')->name('admin.make-supervisor');
        });
    });
});
