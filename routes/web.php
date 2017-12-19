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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('verify/{email}/{verifyToken}', 'Auth\RegisterController@sendEmailDone')->name('sendEmailDone');

Route::get('verifyEmailFirst', 'Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');

Route::get('sendEmail', 'EmailController@sendEmail');

Route::get('search', 'WebsitePages@search')->name('search');

Route::get('membership', 'WebsitePages@membership')->name('membership');

Route::get('horoscope', 'WebsitePages@horoscope')->name('horoscope');

Route::get('help', 'WebsitePages@help')->name('help');