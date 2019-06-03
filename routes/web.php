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

Route::get('/', function(){
	return redirect()->route('login');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified')->name('home');

Route::resource('profile', 'Profile\ProfileController')->middleware('verified');
Route::resource('users', 'User\UserController')->middleware('verified');
Route::get('/account/unlock', 'User\UserController@unlock')->name('unlock');