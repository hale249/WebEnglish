<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\SkillController as AdminSkillController;

Route::get('skills', [AdminSkillController::class, 'index'])
    ->name('skill.index');

Route::get('skills/create', [AdminSkillController::class, 'create'])
    ->name('skill.create');

Route::post('skills', [AdminSkillController::class, 'store'])
    ->name('skill.store');

Route::get('skills/{id}/edit', [AdminSkillController::class, 'edit'])
    ->name('skill.edit');

Route::put('skills/{id}', [AdminSkillController::class, 'update'])
    ->name('skill.update');

Route::delete('skills/{id}',  [AdminSkillController::class, 'destroy'])
    ->name('skill.destroy');
