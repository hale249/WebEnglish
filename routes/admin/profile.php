<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\ProfileController as AdminProfileController;

Route::get('profile', [AdminProfileController::class, 'index'])
    ->name('profile.index');

Route::put('profile', [AdminProfileController::class, 'update'])
    ->name('profile.update');

Route::get('profile/change-password', [AdminProfileController::class, 'showFormChangePassword'])
    ->name('profile.show_form_change_password');

Route::put('profile/change-password', [AdminProfileController::class, 'changePassword'])
    ->name('profile.change_password');
