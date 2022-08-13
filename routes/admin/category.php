<?php

use App\Helpers\PermissionConstant;
use Illuminate\Support\Facades\Route;

/**
 * @see \App\Http\Controllers\Backend\CategoryController::index()
 */
Route::get('categories', 'CategoryController@index')
    ->name('category.index')
    ->middleware('permission:' . PermissionConstant::PERMISSION_VIEW_LIST_CATEGORY . '|' . PermissionConstant::PERMISSION_VIEW_LIST_ALL_CATEGORY);

/**
 * @see \App\Http\Controllers\Backend\CategoryController::create()
 */
Route::get('categories/create', 'CategoryController@create')
    ->name('category.create')
    ->middleware('permission:' . PermissionConstant::PERMISSION_ADD_CATEGORY);

/**
 * @see \App\Http\Controllers\Backend\CategoryController::store()
 */
Route::post('categories', 'CategoryController@store')
    ->name('category.store')
    ->middleware('permission:' . PermissionConstant::PERMISSION_ADD_CATEGORY);

/**
 * @see \App\Http\Controllers\Backend\CategoryController::edit()
 */
Route::get('categories/{id}/edit', 'CategoryController@edit')
    ->name('category.edit')
    ->middleware('permission:' . PermissionConstant::PERMISSION_UPDATE_CATEGORY . '|' . PermissionConstant::PERMISSION_UPDATE_ALL_CATEGORY);

/**
 * @see \App\Http\Controllers\Backend\CategoryController::update()
 */
Route::put('categories/{id}', 'CategoryController@update')
    ->name('category.update')
    ->middleware('permission:' . PermissionConstant::PERMISSION_UPDATE_CATEGORY . '|' . PermissionConstant::PERMISSION_UPDATE_ALL_CATEGORY);

/**
 * @see \App\Http\Controllers\Backend\CategoryController::show()
 */
Route::get('categories/{id}', 'CategoryController@show')
    ->name('category.show')
    ->middleware('permission:' . PermissionConstant::PERMISSION_VIEW_LIST_CATEGORY . '|' . PermissionConstant::PERMISSION_VIEW_LIST_ALL_CATEGORY);

/**
 * @see \App\Http\Controllers\Backend\CategoryController::destroy()
 */
Route::delete('categories/{id}', 'CategoryController@destroy')
    ->name('category.destroy')
    ->middleware('permission:' . PermissionConstant::PERMISSION_DELETE_CATEGORY . '|' . PermissionConstant::PERMISSION_DELETE_ALL_CATEGORY);
