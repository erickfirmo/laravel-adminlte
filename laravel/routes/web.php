<?php

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
    return view('welcome');
})->name('welcome');

Route::get('terms', function () {
    return view('terms');
})->name('terms');

Route::get('privacy', function () {
    return view('privacy');
})->name('privacy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function () {
    Auth::routes();
    Route::middleware('auth:admin')->group(function () {

        Route::resource('perfil', 'UserController');
        Route::put('matchpassword{password}', 'UserController@matchPassword')->name('matchpassword');

     
        Route::get('/', 'HomeController@index')->name('home');
        Route::middleware('role:super-admin')->group(function () {
            Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
            Route::post('register', 'Auth\RegisterController@register');
        });
    });
});
