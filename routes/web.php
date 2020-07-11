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
<<<<<<< HEAD

Route::get('/',function(){
    return view('auths.login');
});

=======
Route::get('/','eventController@login');
Route::get('event','eventController@index');
>>>>>>> 6466ea3c8362477962a4ec482c0619b0244b470a
Route::get('login','UserController@userLogin');
Route::get('register','UserController@register');
Route::post('userRegister','UserController@userPostRegistration');
Route::get('logout','UserController@logout');
<<<<<<< HEAD
//sokhorn
Route::get('editUser','UserController@editUser');
Route::get('eventDetail','eventsController@eventDetail');
=======
Route::get('viewevent','eventController@adminEvent')->name('viewevent');
Route::get('mainView','eventController@mainView');
Route::resource('/categories', 'CategoryController');
Route::get('viewevent','ControllerEvent@index')->name('viewevent');
>>>>>>> 6466ea3c8362477962a4ec482c0619b0244b470a
