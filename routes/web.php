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


Auth::routes(['verify' => true]);


Route::get('/', function(){
	return redirect()->route('login');
});


Route::get('/home', 'HomeController@index')->middleware('verified')->name('home');

Route::resource('profile', 'Profile\ProfileController')->middleware('verified');
Route::get('profile/remove/image/{id}', 'Profile\ProfileController@removeImage');
Route::get('profile/remove/logo/{id}', 'Profile\ProfileController@removeLogo');
Route::resource('users', 'User\UserController')->middleware('verified');
Route::get('/account/unlock', 'User\UserController@unlock')->name('unlock');
Route::get('users/report', 'User\UserController@report')->middleware('verified')->name('report');