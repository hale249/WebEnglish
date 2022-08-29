<?php

use Illuminate\Support\Facades\Route;
use App\Helpers\PermissionConstant;
use \App\Http\Controllers\Admin\DashboardController as BackendDashboardController;
use App\Http\Controllers\Client\DictionaryController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\BlogController;
use App\Http\Controllers\Client\BookHighSchoolController;
use App\Http\Controllers\Client\VideoController;

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

/**
 * @see \App\Http\Controllers\AuthController::showFormLogin()
 */
Route::get('login', 'AuthController@showFormLogin')->name('auth.show-form-login');

/**
 * @see \App\Http\Controllers\AuthController::login()
 */
Route::post('login', 'AuthController@login')->name('auth.login');

/**
 * @see \App\Http\Controllers\AuthController::logout()
 */
Route::post('logout', 'AuthController@logout')->name('auth.logout');

/**
 * @see \App\Http\Controllers\AuthController::showFormRegister()
 */
Route::get('register', 'AuthController@showFormRegister')->name('auth.show-form-register');

/**
 * @see \App\Http\Controllers\AuthController::register()
 */
Route::post('register', 'AuthController@register')->name('auth.register');

Route::group(['prefix' => 'admin', 'namespace' => 'Backend', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    Route::group(['middleware' => ['permission:' . PermissionConstant::PERMISSION_VIEW_BACKEND]], function () {
        Route::get('/', [BackendDashboardController::class, 'index'])->name('dashboard.index');
        require __DIR__ . '/admin/user.php';
        require __DIR__ . '/admin/profile.php';
        require __DIR__ . '/admin/category.php';
    });
});

Route::group(['as' => 'client.'], function () {
    Route::get('', [HomeController::class, 'index'])->name('home.index');
    Route::get('news', [BlogController::class, 'index'])->name('blog.index');
    Route::get('news/{id}', [BlogController::class, 'detail'])->name('blog.detail');
    Route::get('book', [BookHighSchoolController::class, 'index'])->name('book.index');
    Route::get('book/{id}/lesson', [BookHighSchoolController::class, 'lesson'])->name('book.lesson');
    Route::get('lesson', [BookHighSchoolController::class, 'lessonIndex'])->name('lesson.index');
    Route::get('', [HomeController::class, 'index'])->name('home.index');
    Route::get('dictionary', [DictionaryController::class, 'index'])->name('dictionary.index');
    Route::get('dictionary/{id}', [DictionaryController::class, 'detail'])->name('dictionary.detail');

    Route::get('music', [\App\Http\Controllers\Client\MusicController::class, 'index'])->name('music.index');
    Route::get('music/{id}', [\App\Http\Controllers\Client\MusicController::class, 'detail'])->name('music.detail');

    Route::get('hoc-qua-video', [VideoController::class, 'index'])->name('video.index');
    Route::get('hoc-qua-video/{id}', [VideoController::class, 'detail'])->name('video.detail');
    Route::get('unit', [\App\Http\Controllers\Client\UnitController::class, 'index'])->name('unit.index');
    Route::get('unit/{id}', [\App\Http\Controllers\Client\UnitController::class, 'detail'])->name('unit.detail');
});
