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
Route::get('exploreEvent','eventController@exploreEvent');
Route::patch('users/update{id}','UserController@updateUser')->name('editUser');
Route::get('exploreEvent','eventController@exploreEvent');
Route::get('eventDetail','eventsController@eventDetail');
Route::get('eventDetail','eventController@eventDetail');
Route::get('viewevent','eventController@adminEvent')->name('viewevent');
Route::delete('/destroy{id}','eventController@destroy')->name('destroy'); //
Route::resource('/categories', 'CategoryController');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::put('/addoreditprofile','UserController@addoreditprofile')->name('addoreditprofile');
Route::get('/delete{id}','UserController@delete')->name('delete');
Route::get('/register','UserController@city')->name('register');
Route::post('createEvent','eventController@store');
Route::get('deletePicture','eventController@deletePic');
    