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
})->middleware('auth');

Route::get('/login','LoginController@index')->name('login');
Route::get('/register','RegisterController@index')->name('register');
Route::post('/login-','LoginController@authenticate')->name('login-submit');
Route::post('/register-','RegisterController@register')->name('register-submit');
