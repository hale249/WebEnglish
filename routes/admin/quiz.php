<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\QuizController as AdminQuizController;
use \App\Http\Controllers\Admin\QuizQuestionController as AdminQuizQuestionController;

Route::group(['prefix' => 'quiz', 'as' => 'quiz.'], function () {
    Route::get('', [AdminQuizController::class, 'index'])
        ->name('index');

    Route::get('create', [AdminQuizController::class, 'create'])
        ->name('create');

    Route::post('', [AdminQuizController::class, 'store'])
        ->name('store');

    Route::get('{id}/edit', [AdminQuizController::class, 'edit'])
        ->name('edit');

    Route::put('{id}', [AdminQuizController::class, 'update'])
        ->name('update');

    Route::group(['as' => 'question.'], function () {
        Route::get('{slug}', [AdminQuizQuestionController::class, 'index'])
            ->name('index');

        Route::get('{slug}/create', [AdminQuizQuestionController::class, 'create'])
            ->name('create');

        Route::post('{slug}', [AdminQuizQuestionController::class, 'store'])
            ->name('store');

        Route::get('{slug}/{id}/edit', [AdminQuizQuestionController::class, 'edit'])
            ->name('edit');

        Route::put('{slug}/{id}', [AdminQuizQuestionController::class, 'update'])
            ->name('update');

        Route::delete('{slug}/{id}', [AdminQuizQuestionController::class, 'destroy'])
            ->name('delete');
    });
});
