<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\SliderController as AdminSliderController;

Route::get('sliders', [AdminSliderController::class, 'index'])
    ->name('slider.index');

Route::get('sliders/create', [AdminSliderController::class, 'create'])
    ->name('slider.create');

Route::post('sliders', [AdminSliderController::class, 'store'])
    ->name('slider.store');

Route::get('sliders/{id}/edit', [AdminSliderController::class, 'edit'])
    ->name('slider.edit');

Route::put('sliders/{id}', [AdminSliderController::class, 'update'])
    ->name('slider.update');

Route::get('sliders/{id}', [AdminSliderController::class, 'show'])
    ->name('slider.show');

Route::delete('sliders/{id}',  [AdminSliderController::class, 'destroy'])
    ->name('slider.destroy');
