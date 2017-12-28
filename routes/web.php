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

Route::post('/update_basic_info', 'AjaxController@update_basic_info')->name('update_basic_info');

////////////////////////////////////////////////////////
// Admin Permissions Only Admin can access these urls //
////////////////////////////////////////////////////////
Route::group(['middleware' => 'App\Http\Middleware\Admin'], function()
{
    Route::get('dashboard', 'Dashboard@admin')->name('dashboard');

    // Caste Add / View  / Delete
    Route::get('caste', 'Admin@caste')->name('caste');
    Route::get('addCaste', 'Admin@addCaste')->name('addCaste');
    Route::post('add_caste', 'Admin@add_caste')->name('add_caste');
    Route::get('deleteCaste', 'Admin@deleteCaste')->name('deleteCaste');

    // Mother tongue Add / View / Delete
    Route::get('mother_tongue', 'Admin@mother_tongue')->name('mother_tongue');
    Route::get('addMotherTongue', 'Admin@addMotherTongue')->name('addMotherTongue');
    Route::post('add_mother_tongue', 'Admin@add_mother_tongue')->name('add_mother_tongue');
    Route::get('deleteMotherTongue', 'Admin@deleteMotherTongue')->name('deleteMotherTongue');

    // Height Add / View / Delete
    Route::get('height', 'Admin@height')->name('height');
    Route::get('addHeight', 'Admin@addHeight')->name('addHeight');
    Route::post('add_height', 'Admin@add_height')->name('add_height');
    Route::get('deleteHeight', 'Admin@deleteHeight')->name('deleteHeight');

    // Area-Field Add / View / Delete
    Route::get('area_field', 'Admin@area_field')->name('area_field');
    Route::get('addAreaField', 'Admin@addAreaField')->name('addAreaField');
    Route::post('add_area_field', 'Admin@add_area_field')->name('add_area_field');
    Route::get('deleteAreaField', 'Admin@deleteAreaField')->name('deleteAreaField');

    // Qualifications Add / View / Delete
    Route::get('qualification', 'Admin@qualification')->name('qualification');
    Route::get('addQualification', 'Admin@addQualification')->name('addQualification');
    Route::post('add_qualification', 'Admin@add_qualification')->name('add_qualification');
    Route::get('deleteQualification', 'Admin@deleteQualification')->name('deleteQualification');

    // Annual Income Add / View / Delete
    Route::get('annual_income', 'Admin@annual_income')->name('annual_income');
    Route::get('addAnnualIncome', 'Admin@addAnnualIncome')->name('addAnnualIncome');
    Route::post('add_annual_income', 'Admin@add_annual_income')->name('add_annual_income');
    Route::get('deleteAnnualIncome', 'Admin@deleteAnnualIncome')->name('deleteAnnualIncome');

    // Employed As Add / View / Delete
    Route::get('employed_as', 'Admin@employed_as')->name('employed_as');
    Route::get('addEmployedAs', 'Admin@addEmployedAs')->name('addEmployedAs');
    Route::post('add_employed_as', 'Admin@add_employed_as')->name('add_employed_as');
    Route::get('deleteEmployedAs', 'Admin@deleteEmployedAs')->name('deleteEmployedAs');

});