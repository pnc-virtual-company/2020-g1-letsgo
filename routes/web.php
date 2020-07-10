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
Route::get('/',function(){
    return view('auths.login');
});
Route::get('login','UserController@userLogin');
Route::get('register','UserController@register');
Route::post('userRegister','UserController@userPostRegistration');
Route::get('logout','UserController@logout');
Route::get('viewevent','ControllerEvent@index')->name('viewevent');
