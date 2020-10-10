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

Route::get('/', 'MainController@index');
Route::get('/daily', 'DailyController@index')->name('daily');
Route::get('/schedule', 'DayliScheduleController@index')->name('schedule');
Route::get('/deleted', 'DeletedController@index')->name('deleted');
Route::get('/daily/{id}', 'DailyController@show')->name('show');
Route::get('/players', 'PlayersController@index')->name('players');