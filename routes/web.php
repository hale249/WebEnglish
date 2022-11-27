<?php

use Illuminate\Support\Facades\Route;
use App\Helpers\PermissionConstant;
use \App\Http\Controllers\Admin\DashboardController as BackendDashboardController;
use App\Http\Controllers\Client\DictionaryController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\BlogController;
use App\Http\Controllers\Client\BookHighSchoolController;
use App\Http\Controllers\Client\VideoController;
use \App\Http\Controllers\Client\SkillController;
use App\Http\Controllers\Client\AuthClientController;
use App\Http\Controllers\Client\QuizController as ClientQuizController;
use App\Http\Controllers\AuthController as AdminAuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('admin/login', [AdminAuthController::class, 'showFormLogin'])->name('admin.auth.show-form-login');

Route::post('admin/login', [AdminAuthController::class, 'login'])->name('admin.auth.login');

Route::group(['prefix' => 'admin', 'namespace' => 'Backend', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    /**
     * @see \App\Http\Controllers\AuthController::logout()
     */
    Route::post('admin/logout', [AdminAuthController::class, 'logout'])->name('auth.logout');

    Route::group(['middleware' => ['permission:' . PermissionConstant::PERMISSION_VIEW_BACKEND]], function () {
        Route::get('/', [BackendDashboardController::class, 'index'])->name('dashboard.index');
        require __DIR__ . '/admin/user.php';
        require __DIR__ . '/admin/profile.php';
        require __DIR__ . '/admin/category.php';
        require __DIR__ . '/admin/slider.php';
        require __DIR__ . '/admin/blog.php';
        require __DIR__ . '/admin/video.php';
        require __DIR__ . '/admin/book.php';
        require __DIR__ . '/admin/music.php';
        require __DIR__ . '/admin/skillCategory.php';
        require __DIR__ . '/admin/skill.php';
        require __DIR__ . '/admin/skillCourses.php';
        require __DIR__ . '/admin/quiz.php';
    });
});

Route::group(['as' => 'client.'], function () {
    Route::get('', [HomeController::class, 'index'])->name('home.index');
    Route::get('news', [BlogController::class, 'index'])->name('blog.index');
    Route::get('news/{id}', [BlogController::class, 'detail'])->name('blog.detail');
    Route::get('book/{slug}', [BookHighSchoolController::class, 'lesson'])->name('book.lesson');
    Route::get('book/{slug}/{lessonSlug}', [BookHighSchoolController::class, 'unitLesson'])->name('book.unit');
    Route::get('book/{slug}/{lessonSlug}/{unitId}', [BookHighSchoolController::class, 'unitDetail'])->name('book.unitDetail');
    Route::get('', [HomeController::class, 'index'])->name('home.index');
    Route::get('dictionary', [DictionaryController::class, 'index'])->name('dictionary.index');
    Route::get('dictionary/{id}', [DictionaryController::class, 'detail'])->name('dictionary.detail');

    Route::get('music', [\App\Http\Controllers\Client\MusicController::class, 'index'])->name('music.index');
    Route::get('music/{id}', [\App\Http\Controllers\Client\MusicController::class, 'detail'])->name('music.detail');

    Route::get('hoc-qua-video/{slug}', [VideoController::class, 'index'])->name('video.index');
    Route::get('hoc-qua-video/{slug}/{id}', [VideoController::class, 'detail'])->name('video.detail');
    Route::get('skill', [SkillController::class, 'index'])->name('skill.index');
    Route::get('skill/{id}', [SkillController::class, 'detail'])->name('skill.detail');

    Route::get('quiz', [ClientQuizController::class, 'index'])->name('quiz.index');
    Route::get('quiz/{id}', [ClientQuizController::class, 'question'])->name('quiz.question');
    Route::post('quiz/{id}', [ClientQuizController::class, 'questionTest'])->name('quiz.question.test');
    Route::get('quiz/finish/{id}', [ClientQuizController::class, 'questionTestFinish'])->name('quiz.question.finish');

    Route::get('register', [AuthClientController::class, 'showFormRegister'])->name('auth.form.register');
    Route::post('register', [AuthClientController::class, 'register'])->name('auth.register');
    Route::get('login', [AuthClientController::class, 'showFormLogin'])->name('auth.form.login');
    Route::post('login', [AuthClientController::class, 'login'])->name('auth.login');
    Route::get('login/logout', [AuthClientController::class, 'logout'])->name('auth.logout');
});
