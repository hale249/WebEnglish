<?php

use App\Helpers\PermissionConstant;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\UserController as AdminUserController;

Route::get('users', [AdminUserController::class, 'index'])
    ->name('users.index')
    ->middleware('permission:' . PermissionConstant::PERMISSION_VIEW_LIST_MANAGER_USER);

Route::get('users/{id}/edit', [AdminUserController::class, 'edit'])
    ->name('users.edit')
    ->middleware('permission:' . PermissionConstant::PERMISSION_UPDATE_MANAGER_USER);

Route::get('users/create', [AdminUserController::class, 'create'])
    ->name('users.create')
    ->middleware('permission:' . PermissionConstant::PERMISSION_ADD_MANAGER_USER);

Route::post('users', [AdminUserController::class, 'store'])
    ->name('users.store')
    ->middleware('permission:' . PermissionConstant::PERMISSION_ADD_MANAGER_USER);

Route::put('users/{id}', [AdminUserController::class, 'update'])
    ->name('users.update')
    ->middleware('permission:' . PermissionConstant::PERMISSION_UPDATE_MANAGER_USER);

Route::delete('users/{id}', [AdminUserController::class, 'destroy'])
    ->name('users.destroy')
    ->middleware('permission:' . PermissionConstant::PERMISSION_DELETE_MANAGER_USER);

Route::get('users/{id}/change-password', [AdminUserController::class, 'showFormChangePassword'])
    ->name('users.show_form_change_password')
    ->middleware('permission:' . PermissionConstant::PERMISSION_UPDATE_MANAGER_USER);

Route::post('users/{id}/change-password', [AdminUserController::class, 'changePassword'])
    ->name('users.change_password')
    ->middleware('permission:' . PermissionConstant::PERMISSION_UPDATE_MANAGER_USER);
