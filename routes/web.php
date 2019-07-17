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
Route::get('/login', 'HomeController@index')->name('home')->middleware('CheckLogout');
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');

Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['prefix' => 'admin', 'middleware' => 'CheckAdmin'], function () {
    Route::get('/', 'AdminController@index')->name('adminPage');
    Route::resource('users', 'UserController');
    Route::resource('films', 'FilmController');
    Route::resource('room', 'RoomController');
    Route::resource('bill', 'BillController');
});
