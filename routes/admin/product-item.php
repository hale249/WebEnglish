<?php

use App\Helpers\PermissionConstant;
use Illuminate\Support\Facades\Route;

/**
 * @see \App\Http\Controllers\Backend\ProductItemController::index()
 */
Route::get('product/{id}/items', 'ProductItemController@index')
    ->name('product_item.index')
    ->middleware('permission:' . PermissionConstant::PERMISSION_VIEW_LIST_PRODUCT . '|' . PermissionConstant::PERMISSION_VIEW_LIST_ALL_PRODUCT);

/**
 * @see \App\Http\Controllers\Backend\ProductItemController::create()
 */
Route::get('product/{id}/items/create', 'ProductItemController@create')
    ->name('product_item.create')
    ->middleware('permission:' . PermissionConstant::PERMISSION_UPDATE_PRODUCT . '|' . PermissionConstant::PERMISSION_UPDATE_ALL_PRODUCT);

/**
 * @see \App\Http\Controllers\Backend\ProductItemController::store()
 */
Route::post('product/{id}/items', 'ProductItemController@store')
    ->name('product_item.store')
    ->middleware('permission:' . PermissionConstant::PERMISSION_UPDATE_PRODUCT . '|' . PermissionConstant::PERMISSION_UPDATE_ALL_PRODUCT);

/**
 * @see \App\Http\Controllers\Backend\ProductItemController::changeStatus()
 */
Route::put('product/items/{id}/change-status', 'ProductItemController@changeStatus')
    ->name('product_item.change_status')
    ->middleware('permission:' . PermissionConstant::PERMISSION_UPDATE_PRODUCT . '|' . PermissionConstant::PERMISSION_UPDATE_ALL_PRODUCT);

/**
 * @see \App\Http\Controllers\Backend\ProductItemController::destroy()
 */
Route::delete('product/items/{id}', 'ProductItemController@destroy')
    ->name('product_item.destroy')
    ->middleware('permission:' . PermissionConstant::PERMISSION_DELETE_ALL_ITEM . '|' . PermissionConstant::PERMISSION_DELETE_ITEM);

/**
 * @see \App\Http\Controllers\Backend\ProductItemController::showFormEditToken()
 */
Route::get('product/items/{id}/edit-token', 'ProductItemController@showFormEditToken')
    ->name('product_item.edit_token')
    ->middleware('permission:' . PermissionConstant::PERMISSION_UPDATE_TOKEN_ITEM . '|' . PermissionConstant::PERMISSION_UPDATE_ALL_TOKEN_ITEM);

/**
 * @see \App\Http\Controllers\Backend\ProductItemController::updateToken()
 */
Route::put('product/items/{id}/update-token', 'ProductItemController@updateToken')
    ->name('product_item.update_token')
    ->middleware('permission:' . PermissionConstant::PERMISSION_UPDATE_TOKEN_ITEM . '|' . PermissionConstant::PERMISSION_UPDATE_ALL_TOKEN_ITEM);

