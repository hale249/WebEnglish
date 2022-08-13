<?php

use Illuminate\Support\Facades\Route;
use App\Helpers\PermissionConstant;

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
        require __DIR__ . '/admin/dashboard.php';
        require __DIR__ . '/admin/user.php';
        require __DIR__ . '/admin/profile.php';
        require __DIR__ . '/admin/category.php';
        require __DIR__ . '/admin/product.php';
        require __DIR__ . '/admin/product-item.php';
    });
});
