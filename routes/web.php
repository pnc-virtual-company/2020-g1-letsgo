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
Route::get('/','eventController@login');
Route::get('event','eventController@index');
Route::get('login','UserController@userLogin');
Route::get('register','UserController@register');
Route::post('userRegister','UserController@userPostRegistration');
Route::get('logout','UserController@logout');
Route::get('exploreEvent','eventController@exploreEvent');
Route::patch('users/update{id}','UserController@updateUser')->name('editUser');
Route::get('exploreEvent','eventController@exploreEvent');
Route::get('eventDetail','eventsController@eventDetail');
Route::get('eventDetail','eventController@eventDetail');
Route::get('viewevent','eventController@adminEvent')->name('viewevent');
Route::get('mainView','eventController@mainView');
Route::resource('/categories', 'CategoryController');

Route::put('/addoreditprofile','UserController@addoreditprofile')->name('addoreditprofile');
Route::delete('/deleteProfile{id}','UserController@imagedestroy')->name('imagedestroy');