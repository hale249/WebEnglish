<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\CategoryController as AdminCategoryController;

Route::get('categories', [AdminCategoryController::class, 'index'])
    ->name('category.index');

Route::get('categories/create', [AdminCategoryController::class, 'create'])
    ->name('category.create');

Route::post('categories', [AdminCategoryController::class, 'store'])
    ->name('category.store');

Route::get('categories/{id}/edit', [AdminCategoryController::class, 'edit'])
    ->name('category.edit');

Route::put('categories/{id}', [AdminCategoryController::class, 'update'])
    ->name('category.update');

Route::get('categories/{id}', [AdminCategoryController::class, 'show'])
    ->name('category.show');

Route::delete('categories/{id}',  [AdminCategoryController::class, 'destroy'])
    ->name('category.destroy');
