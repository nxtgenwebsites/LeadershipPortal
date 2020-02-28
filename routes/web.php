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

Route::get('users/report/{token}', 'UserController@report')->name('users.report');

//Route::get('users/report/{token}/{pdf?}', 'User\UserController@report')->name('users.report');
Route::get('users/report/self/{token}', 'User\UserController@selfReport')->name('self.report');
Route::get('users/report/page11', 'User\UserController@page11')->name('page11');
Route::resource('users', 'User\UserController')->middleware('verified');

Route::get('/account/unlock', 'User\UserController@unlock')->name('unlock');
