<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\BlogController as AdminBlogController;

Route::get('blog', [AdminBlogController::class, 'index'])
    ->name('blog.index');

Route::get('blog/create', [AdminBlogController::class, 'create'])
    ->name('blog.create');

Route::post('blog', [AdminBlogController::class, 'store'])
    ->name('blog.store');

Route::get('blog/{id}/edit', [AdminBlogController::class, 'edit'])
    ->name('blog.edit');

Route::put('blog/{id}', [AdminBlogController::class, 'update'])
    ->name('blog.update');

Route::delete('blog/{id}',  [AdminBlogController::class, 'destroy'])
    ->name('blog.destroy');
