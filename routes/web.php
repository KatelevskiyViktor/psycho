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

Route::get('/', 'MainController@index')->name('home');
Route::get('/reload', 'MainController@reload');
Route::match(['get', 'post'],'/send', 'mailController@send')->name('send');
Route::post('/send-two', 'mailController@send_two')->name('send.two');

