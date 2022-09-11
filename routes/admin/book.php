<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\BookController as AdminBookController;
use \App\Http\Controllers\Admin\BookLessonController as AdminBookLessonController;

Route::get('book', [AdminBookController::class, 'index'])
    ->name('book.index');

Route::get('book/create', [AdminBookController::class, 'create'])
    ->name('book.create');

Route::post('book', [AdminBookController::class, 'store'])
    ->name('book.store');

Route::get('book/{id}/edit', [AdminBookController::class, 'edit'])
    ->name('book.edit');

Route::put('book/{id}', [AdminBookController::class, 'update'])
    ->name('book.update');

Route::delete('book/{id}', [AdminBookController::class, 'destroy'])
    ->name('book.destroy');

Route::get('book/{id}/lessons', [AdminBookLessonController::class, 'index'])
    ->name('lesson.index');

Route::get('book/{id}/lessons/create', [AdminBookLessonController::class, 'create'])
    ->name('lesson.create');

Route::post('book/{id}/lessons', [AdminBookLessonController::class, 'store'])
    ->name('lesson.store');

Route::get('book/{id}/lessons/{lessonId}/edit', [AdminBookLessonController::class, 'edit'])
    ->name('lesson.edit');

Route::put('book/{id}/lessons/{lessonId}', [AdminBookLessonController::class, 'update'])
    ->name('lesson.update');

Route::delete('book/{id}/lessons/{lessonId}', [AdminBookLessonController::class, 'destroy'])
    ->name('lesson.destroy');


Route::get('book/{id}/lessons/{lessonId}/course', [AdminBookLessonController::class, 'index'])
    ->name('course.index');

Route::get('book/{id}/lessons/{lessonId}/create', [AdminBookLessonController::class, 'create'])
    ->name('course.create');


Route::post('book/{id}/lessons//{lessonId}/course', [AdminBookLessonController::class, 'store'])
    ->name('course.store');

Route::get('book/{id}/lessons/{lessonId}/course/{courseId}/edit', [AdminBookLessonController::class, 'edit'])
    ->name('course.edit');

Route::put('book/{id}/lessons/{lessonId}/course/{courseId}', [AdminBookLessonController::class, 'update'])
    ->name('course.update');

Route::delete('book/{id}/lessons/{lessonId}/course/{courseId}', [AdminBookLessonController::class, 'destroy'])
    ->name('course.destroy');
