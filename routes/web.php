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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard' ,function(){
  return view('main.home');
})->name('home')->middleware('auth');

Route::get('/login','LoginController@index')->name('login');
Route::get('/logout','LoginController@getSignOut')->name('logout');

Route::get('/register','RegisterController@index')->name('register');
Route::post('/login-','LoginController@authenticate')->name('login-submit');
Route::post('/register-','RegisterController@register')->name('register-submit');


Route::get('{any}', function () {
    return view('layouts.app');
})->where('any','.*');
