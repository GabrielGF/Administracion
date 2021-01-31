<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('backend.home');
});

//Route::get('/exception', function () {
//    return view('backend.exception');
//});

Route::prefix('')->namespace('Auth')->group(function () {

    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login');

    Route::post('logout', 'LoginController@logout')->name('logout');

    Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register');

//    Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
//    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
//    Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
//    Route::post('password/reset', 'ResetPasswordController@reset')->name('password.update');

    Route::get('password/confirm', 'ConfirmPasswordController@showConfirmForm')->name('password.confirm');
    Route::post('password/confirm', 'ConfirmPasswordController@confirm');
});

Route::name('backend.')->group(function () {

    Route::prefix('role')->name('role.')->group(function () {

        Route::get('', 'RoleController@index')->name('index');
        Route::get('create', 'RoleController@create')->name('create');
        Route::get('edit/{id}', 'RoleController@edit')->name('edit');
        Route::post('store', 'RoleController@store')->name('store');
        Route::post('update/{id}', 'RoleController@update')->name('update');

    });

});
