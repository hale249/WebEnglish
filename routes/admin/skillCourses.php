<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\SkillCoursesController as AdminSkillCoursesController;

Route::get('skills/{skillId}/courses', [AdminSkillCoursesController::class, 'index'])
    ->name('skill.course.index');

Route::get('skills/{skillId}/courses/create', [AdminSkillCoursesController::class, 'create'])
    ->name('skill.course.create');

Route::post('skills/{skillId}/courses', [AdminSkillCoursesController::class, 'store'])
    ->name('skill.course.store');

Route::get('skills/{skillId}/courses/{id}/edit', [AdminSkillCoursesController::class, 'edit'])
    ->name('skill.course.edit');

Route::put('skills/{skillId}/courses/{id}', [AdminSkillCoursesController::class, 'update'])
    ->name('skill.course.update');

Route::delete('skills/{skillId}/courses/{id}',  [AdminSkillCoursesController::class, 'destroy'])
    ->name('skill.course.destroy');
