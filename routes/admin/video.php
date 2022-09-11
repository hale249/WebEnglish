<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\VideoController as AdminVideoController;

Route::get('video', [AdminVideoController::class, 'index'])
    ->name('video.index');

Route::get('video/create', [AdminVideoController::class, 'create'])
    ->name('video.create');

Route::post('video', [AdminVideoController::class, 'store'])
    ->name('video.store');

Route::get('video/{id}/edit', [AdminVideoController::class, 'edit'])
    ->name('video.edit');

Route::put('video/{id}', [AdminVideoController::class, 'update'])
    ->name('video.update');

Route::delete('video/{id}',  [AdminVideoController::class, 'destroy'])
    ->name('video.destroy');
