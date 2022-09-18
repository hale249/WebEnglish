<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\MusicController as AdminMusicController;

Route::get('music', [AdminMusicController::class, 'index'])
    ->name('music.index');

Route::get('music/create', [AdminMusicController::class, 'create'])
    ->name('music.create');

Route::post('music', [AdminMusicController::class, 'store'])
    ->name('music.store');

Route::get('music/{id}/edit', [AdminMusicController::class, 'edit'])
    ->name('music.edit');

Route::put('music/{id}', [AdminMusicController::class, 'update'])
    ->name('music.update');

Route::delete('music/{id}',  [AdminMusicController::class, 'destroy'])
    ->name('music.destroy');
