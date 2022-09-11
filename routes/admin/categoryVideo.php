<?php

use App\Helpers\PermissionConstant;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\VideoCategoryController as AdminCategoryVideoController;

Route::get('video/category', [AdminCategoryVideoController::class, 'index'])
    ->name('video.category.index');

Route::get('video/category/create', [AdminCategoryVideoController::class, 'create'])
    ->name('video.category.create');

Route::post('video/category', [AdminCategoryVideoController::class, 'store'])
    ->name('video.category.store');

Route::get('video/category/{id}/edit', [AdminCategoryVideoController::class, 'edit'])
    ->name('video.category.edit');

Route::put('video/category/{id}', [AdminCategoryVideoController::class, 'update'])
    ->name('video.category.update');

Route::delete('video/category/{id}',  [AdminCategoryVideoController::class, 'destroy'])
    ->name('video.category.destroy');
