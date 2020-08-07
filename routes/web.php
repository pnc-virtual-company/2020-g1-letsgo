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
Route::put('event/update{id}','eventController@update')->name('updateEvent');
Route::get('event/delete{id}','eventController@delete')->name('delPic');
Route::get('deletePicture','eventController@deletePic');
Route::get('/check', 'CategoryController@check')->name('categories_available.check');
Route::get('/search','eventController@search')->name('event.search');
Route::post('/join{id}','eventController@join')->name('join');
Route::delete('/quit{id}','eventController@quit')->name('quit');
//caledar
Route::get('viewcalendar','eventController@calendarView')->name('calendarview');
//check only your event
Route::get('/onlyeventjoin','ExploreEventController@onlyEventJoin')->name('onlyeventjoin');
Route::put('/ischeck{data}','ExploreEventController@isCheckEvent')->name('ischeck');
Route::put('/isnotcheck{data}','ExploreEventController@isNotcheck')->name('isnotcheck');

Route::get('/onlyJoinCalendar','eventController@onlyJoinCalendar')->name('onlyJoinCalendar');
Route::put('/ischeckCalendar{data}','eventController@isCheckCalendar')->name('ischeckCalendar');
Route::put('/isnotcheckCalendar{data}','eventController@isNotcheckCalendar')->name('isnotcheckCalendar');