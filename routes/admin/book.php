<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\BookController as AdminBookController;
use \App\Http\Controllers\Admin\BookLessonController as AdminBookLessonController;
use \App\Http\Controllers\Admin\BookLessonCourseController as AdminBookLessonCourseController;

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
    ->name('book.lesson.index');

Route::get('book/{id}/lessons/create', [AdminBookLessonController::class, 'create'])
    ->name('book.lesson.create');

Route::post('book/{id}/lessons', [AdminBookLessonController::class, 'store'])
    ->name('book.lesson.store');

Route::get('book/{id}/lessons/{lessonId}/edit', [AdminBookLessonController::class, 'edit'])
    ->name('book.lesson.edit');

Route::put('book/{id}/lessons/{lessonId}', [AdminBookLessonController::class, 'update'])
    ->name('book.lesson.update');

Route::delete('book/{id}/lessons/{lessonId}', [AdminBookLessonController::class, 'destroy'])
    ->name('book.lesson.destroy');


Route::get('book/{id}/lessons/{lessonId}/courses', [AdminBookLessonCourseController::class, 'index'])
    ->name('book.lesson.course.index');

Route::get('book/{id}/lessons/{lessonId}/courses/create', [AdminBookLessonCourseController::class, 'create'])
    ->name('book.lesson.course.create');


Route::post('book/{id}/lessons//{lessonId}/courses', [AdminBookLessonCourseController::class, 'store'])
    ->name('book.lesson.course.store');

Route::get('book/{id}/lessons/{lessonId}/courses/{courseId}/edit', [AdminBookLessonCourseController::class, 'edit'])
    ->name('book.lesson.course.edit');

Route::put('book/{id}/lessons/{lessonId}/courses/{courseId}', [AdminBookLessonCourseController::class, 'update'])
    ->name('book.lesson.course.update');

Route::delete('book/{id}/lessons/{lessonId}/courses/{courseId}', [AdminBookLessonCourseController::class, 'destroy'])
    ->name('book.lesson.course.destroy');
