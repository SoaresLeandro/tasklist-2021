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
    return view('welcome');
});

Route::get('/tasks', '\\App\\Http\\Controllers\\TaskController@index')->name('tasks.index');
Route::get('/tasks/create', '\\App\\Http\\Controllers\\TaskController@create')->name('tasks.create');
Route::post('/tasks', '\\App\\Http\\Controllers\\TaskController@store')->name('tasks.store');
Route::get('/tasks/edit/{id}', '\\App\\Http\\Controllers\\TaskController@edit')->name('tasks.edit');
Route::post('/tasks/update/{id}', '\\App\\Http\\Controllers\\TaskController@update')->name('tasks.update');
Route::get('/tasks/destroy/{id}', '\\App\\Http\\Controllers\\TaskController@destroy')->name('tasks.destroy');

Route::get('/taskgroups', '\\App\\Http\\Controllers\\TaskGroupController@index')->name('taskgroups.index');
Route::get('/taskgroups/create', '\\App\\Http\\Controllers\\TaskGroupController@create')->name('taskgroups.create');
Route::post('/taskgroups', '\\App\\Http\\Controllers\\TaskGroupController@store')->name('taskgroups.store');
Route::get('/taskgroups/edit/{id}', '\\App\\Http\\Controllers\\TaskGroupController@edit')->name('taskgroups.edit');
Route::post('/taskgroups/update/{id}', '\\App\\Http\\Controllers\\TaskGroupController@update')->name('taskgroups.update');
Route::get('/taskgroups/destroy/{id}', '\\App\\Http\\Controllers\\TaskGroupController@destroy')->name('taskgroups.destroy');

Route::get('/status', '\\App\\Http\\Controllers\\StatusController@index')->name('status.index');
Route::get('/status/create', '\\App\\Http\\Controllers\\StatusController@create')->name('status.create');
Route::post('/status', '\\App\\Http\\Controllers\\StatusController@store')->name('status.store');
Route::get('/status/edit/{id}', '\\App\\Http\\Controllers\\StatusController@edit')->name('status.edit');
Route::post('/status/update/{id}', '\\App\\Http\\Controllers\\StatusController@update')->name('status.update');
Route::get('/status/destroy/{id}', '\\App\\Http\\Controllers\\StatusController@destroy')->name('status.destroy');

Route::get('/users', '\\App\\Http\\Controllers\\UserController@index')->name('users.index');
Route::get('/users/create', '\\App\\Http\\Controllers\\UserController@create')->name('users.create');
Route::post('/users', '\\App\\Http\\Controllers\\UserController@store')->name('users.store');
Route::get('/users/edit/{id}', '\\App\\Http\\Controllers\\UserController@edit')->name('users.edit');
Route::post('/users/update/{id}', '\\App\\Http\\Controllers\\UserController@update')->name('users.update');
Route::get('/users/destroy/{id}', '\\App\\Http\\Controllers\\UserController@destroy')->name('users.destroy');