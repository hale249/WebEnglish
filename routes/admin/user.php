<?php

use App\Helpers\PermissionConstant;
use Illuminate\Support\Facades\Route;

/**
 * @see \App\Http\Controllers\Backend\UserController::index()
 */
Route::get('users', 'UserController@index')
    ->name('users.index')
    ->middleware('permission:' . PermissionConstant::PERMISSION_VIEW_LIST_MANAGER_USER);

/**
 * @see \App\Http\Controllers\Backend\UserController::edit()
 */
Route::get('users/{id}/edit', 'UserController@edit')
    ->name('users.edit')
    ->middleware('permission:' . PermissionConstant::PERMISSION_UPDATE_MANAGER_USER);

/**
 * @see \App\Http\Controllers\Backend\UserController::create
 */
Route::get('users/create', 'UserController@create')
    ->name('users.create')
    ->middleware('permission:' . PermissionConstant::PERMISSION_ADD_MANAGER_USER);

/**
 * @see \App\Http\Controllers\Backend\UserController::store()
 */
Route::post('users', 'UserController@store')
    ->name('users.store')
    ->middleware('permission:' . PermissionConstant::PERMISSION_ADD_MANAGER_USER);

/**
 * @see \App\Http\Controllers\Backend\UserController::update()
 */
Route::put('users/{id}', 'UserController@update')
    ->name('users.update')
    ->middleware('permission:' . PermissionConstant::PERMISSION_UPDATE_MANAGER_USER);

/**
 * @see \App\Http\Controllers\Backend\UserController::destroy()
 */
Route::delete('users/{id}', 'UserController@destroy')
    ->name('users.destroy')
    ->middleware('permission:' . PermissionConstant::PERMISSION_DELETE_MANAGER_USER);

/**
 * @see \App\Http\Controllers\Backend\UserController::showFormChangePassword()
 */
Route::get('users/{id}/change-password', 'UserController@showFormChangePassword')
    ->name('users.show_form_change_password')
    ->middleware('permission:' . PermissionConstant::PERMISSION_UPDATE_MANAGER_USER);

/**
 * @see \App\Http\Controllers\Backend\UserController::changePassword()
 */
Route::post('users/{id}/change-password', 'UserController@changePassword')
    ->name('users.change_password')
    ->middleware('permission:' . PermissionConstant::PERMISSION_UPDATE_MANAGER_USER);
