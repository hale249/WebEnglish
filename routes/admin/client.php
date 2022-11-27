<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\ClientController as AdminClientController;

Route::get('clients', [AdminClientController::class, 'index'])
    ->name('clients.index');

Route::get('clients/{id}/edit', [AdminClientController::class, 'edit'])
    ->name('clients.edit');

Route::put('clients/{id}', [AdminClientController::class, 'update'])
    ->name('clients.update');

Route::get('clients/{id}/change-password', [AdminClientController::class, 'showFormChangePassword'])
    ->name('clients.show_form_change_password');

Route::post('clients/{id}/change-password', [AdminClientController::class, 'changePassword'])
    ->name('clients.change_password');

Route::get('clients/{id}', [AdminClientController::class, 'show'])
    ->name('clients.show');
