<?php

use App\Helpers\PermissionConstant;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\UserController as AdminUserController;

Route::get('users', [AdminUserController::class, 'index'])
    ->name('users.index');

Route::get('users/{id}/edit', [AdminUserController::class, 'edit'])
    ->name('users.edit');

Route::get('users/create', [AdminUserController::class, 'create'])
    ->name('users.create');

Route::post('users', [AdminUserController::class, 'store'])
    ->name('users.store');

Route::put('users/{id}', [AdminUserController::class, 'update'])
    ->name('users.update');

Route::delete('users/{id}', [AdminUserController::class, 'destroy'])
    ->name('users.destroy');

Route::get('users/{id}/change-password', [AdminUserController::class, 'showFormChangePassword'])
    ->name('users.show_form_change_password');

Route::post('users/{id}/change-password', [AdminUserController::class, 'changePassword'])
    ->name('users.change_password');
