<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\SkillCategoryController as AdminSkillCategoryController;

Route::get('skill/category', [AdminSkillCategoryController::class, 'index'])
    ->name('skill.category.index');

Route::get('skill/category/{id}/edit', [AdminSkillCategoryController::class, 'edit'])
    ->name('skill.category.edit');

Route::put('skill/category/{id}', [AdminSkillCategoryController::class, 'update'])
    ->name('skill.category.update');
