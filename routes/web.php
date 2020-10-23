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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/records', 'AudioRecordController@index')->name('audio')->middleware('auth');


Route::group([
    'prefix' => 'admin',
    'as' => 'Admin.',
    'middleware' => ['auth', 'is_admin']
], function () {
    Route::resource('audioRecords', 'AudioRecordController')->except(['create', 'store']);
});