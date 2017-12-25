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

// Home page after login
Route::get('/', 'HomeController@index')->name('/');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('verify/{email}/{verifyToken}', 'Auth\RegisterController@sendEmailDone')->name('sendEmailDone');

Route::get('verifyEmailFirst', 'Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');

Route::get('sendEmail', 'EmailController@sendEmail');

Route::get('search', 'WebsitePages@search')->name('search');

Route::get('membership', 'WebsitePages@membership')->name('membership');

Route::get('horoscope', 'WebsitePages@horoscope')->name('horoscope');

Route::get('help', 'WebsitePages@help')->name('help');

Route::get('aboutus', 'WebsitePages@aboutus')->name('aboutus');

Route::get('contactus', 'WebsitePages@contactus')->name('contactus');

Route::get('privacy', 'WebsitePages@privacy')->name('privacy');

Route::get('terms', 'WebsitePages@terms')->name('terms');

Route::get('disclaimer', 'WebsitePages@disclaimer')->name('disclaimer');

Route::get('payment', 'WebsitePages@payment')->name('payment');

Route::get('change_password', 'Users@change_password_view')->name('change_password');

Route::post('change_password', 'Users@change_password')->name('change_password');

Route::get('profile', 'Profile@profile')->name('profile');

////////////////////////////////////////////////////////
// Admin Permissions Only Admin can access these urls //
////////////////////////////////////////////////////////
Route::group(['middleware' => 'App\Http\Middleware\Admin'], function()
{
    Route::get('dashboard', 'Dashboard@admin')->name('dashboard');
});