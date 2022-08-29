<?php

use App\Helpers\PermissionConstant;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\CategoryController as AdminCategoryController;

Route::get('categories', [AdminCategoryController::class, 'index'])
    ->name('category.index')
    ->middleware('permission:' . PermissionConstant::PERMISSION_VIEW_LIST_CATEGORY . '|' . PermissionConstant::PERMISSION_VIEW_LIST_ALL_CATEGORY);

Route::get('categories/create', [AdminCategoryController::class, 'create'])
    ->name('category.create')
    ->middleware('permission:' . PermissionConstant::PERMISSION_ADD_CATEGORY);

Route::post('categories', [AdminCategoryController::class, 'store'])
    ->name('category.store')
    ->middleware('permission:' . PermissionConstant::PERMISSION_ADD_CATEGORY);

Route::get('categories/{id}/edit', [AdminCategoryController::class, 'edit'])
    ->name('category.edit')
    ->middleware('permission:' . PermissionConstant::PERMISSION_UPDATE_CATEGORY . '|' . PermissionConstant::PERMISSION_UPDATE_ALL_CATEGORY);

Route::put('categories/{id}', [AdminCategoryController::class, 'update'])
    ->name('category.update')
    ->middleware('permission:' . PermissionConstant::PERMISSION_UPDATE_CATEGORY . '|' . PermissionConstant::PERMISSION_UPDATE_ALL_CATEGORY);

Route::get('categories/{id}', [AdminCategoryController::class, 'show'])
    ->name('category.show')
    ->middleware('permission:' . PermissionConstant::PERMISSION_VIEW_LIST_CATEGORY . '|' . PermissionConstant::PERMISSION_VIEW_LIST_ALL_CATEGORY);

Route::delete('categories/{id}',  [AdminCategoryController::class, 'destroy'])
    ->name('category.destroy')
    ->middleware('permission:' . PermissionConstant::PERMISSION_DELETE_CATEGORY . '|' . PermissionConstant::PERMISSION_DELETE_ALL_CATEGORY);
