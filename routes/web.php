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

Route::post('search_for', 'WebsitePages@search_for')->name('search_for');

// Direct go on searched user page without search
Route::get('search_for', function()
{
    // Get all castes
    $caste = DB::table('caste')->where('status', 1)->get();

    // Get all height
    $height = DB::table('height')->where('status', 1)->get();

    // Get all mother_tongue
    $mother_tongue = DB::table('mother_tongue')->where('status', 1)->get();

    // Get all annual_income
    $annual_income = DB::table('annual_income')->where('status', 1)->get();

    // Get all educational_qualification
    $educational_qualification = DB::table('educational_qualification')->where('status', 1)->get();

    // Get all employed_as
    $employed_as = DB::table('employed_as')->where('status', 1)->get();

    // Get all states
    $states = DB::table('states')->where('country_id', 101)->get();

    $query = DB::table('user_details')
                ->join('user_education_center', 'user_education_center.user_id', '=', 'user_details.user_id')
                ->leftjoin('caste', 'caste.id', '=', 'user_details.caste')
                ->leftjoin('height', 'height.height_cms', '=', 'user_details.height')
                ->leftjoin('countries', 'countries.id', '=', 'user_details.country')
                ->leftjoin('states', 'states.id', '=', 'user_details.state')
                ->leftjoin('cities', 'cities.id', '=', 'user_details.city')
                ->leftjoin('mother_tongue', 'mother_tongue.id', '=', 'user_details.mother_tongue')
                ->leftjoin('annual_income', 'annual_income.id', '=', 'user_education_center.annual_income')
                ->leftjoin('employed_as', 'employed_as.id', '=', 'user_education_center.employed_as')
                ->leftjoin('educational_qualification', 'educational_qualification.id', '=', 'user_education_center.edu_qualification')
                ->select('user_details.*', 'caste.caste as caste', 'height.height as height', 'countries.name as country', 'states.name as state', 'cities.name as city', 'mother_tongue.mother_tongue', 'educational_qualification.education', 'annual_income.annual_income', 'employed_as.employed_as')
                ->where('user_details.status', 1);

    $results = $query->get();

    return View::make('websitepages/searched_users', array('caste' => $caste, 'height' => $height, 'mother_tongue' => $mother_tongue, 'annual_income' => $annual_income, 'educational_qualification' => $educational_qualification, 'employed_as' => $employed_as, 'search_results' => $results, 'states' => $states));
});

Route::post('/search_user_for', 'AjaxController@search_user_for')->name('search_user_for');

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

Route::post('/update_family_info', 'AjaxController@update_family_info')->name('update_family_info');

Route::post('/update_education_info', 'AjaxController@update_education_info')->name('update_education_info');

Route::post('/update_address_info', 'AjaxController@update_address_info')->name('update_address_info');

Route::post('getStateByCountryForUser', 'AjaxController@getStateByCountryForUser')->name('getStateByCountryForUser');

Route::post('getStateByStateForUser', 'AjaxController@getStateByStateForUser')->name('getStateByStateForUser');

Route::post('profile_image', 'Profile@profile_image')->name('profile_image');

Route::post('deleteProfileImage', 'Profile@deleteProfileImage')->name('deleteProfileImage');

Route::get('user_profile/{id}', 'Profile@user_profile')->name('user_profile');

Route::post('getCityByState', 'AjaxController@getCityByState')->name('getCityByState');

////////////////////////////////////////////////////////
// Admin Permissions Only Admin can access these urls //
////////////////////////////////////////////////////////
Route::group(['middleware' => 'App\Http\Middleware\Admin'], function()
{
    Route::get('dashboard', 'Dashboard@admin')->name('dashboard');

    // Get All Users
    Route::get('users', 'AdminUsers@index')->name('users');
    Route::get('addUser', 'AdminUsers@addUser')->name('addUser');
    Route::post('add_user', 'AdminUsers@add_user')->name('add_user');
    Route::post('delete', 'AdminUsers@delete')->name('delete');
    Route::get('view', 'AdminUsers@view')->name('view');

    // Caste Add / View  / Delete
    Route::get('caste', 'Admin@caste')->name('caste');
    Route::get('addCaste', 'Admin@addCaste')->name('addCaste');
    Route::post('add_caste', 'Admin@add_caste')->name('add_caste');
    Route::post('editCaste', 'Admin@editCaste')->name('editCaste');
    //Route::get('deleteCaste', 'Admin@deleteCaste')->name('deleteCaste');

    // Mother tongue Add / View / Delete
    Route::get('mother_tongue', 'Admin@mother_tongue')->name('mother_tongue');
    Route::get('addMotherTongue', 'Admin@addMotherTongue')->name('addMotherTongue');
    Route::post('add_mother_tongue', 'Admin@add_mother_tongue')->name('add_mother_tongue');
    Route::post('editMotherTongue', 'Admin@editMotherTongue')->name('editMotherTongue');
    //Route::get('deleteMotherTongue', 'Admin@deleteMotherTongue')->name('deleteMotherTongue');

    // Height Add / View / Delete
    Route::get('height', 'Admin@height')->name('height');
    Route::get('addHeight', 'Admin@addHeight')->name('addHeight');
    Route::post('add_height', 'Admin@add_height')->name('add_height');
    Route::post('editHeight', 'Admin@editHeight')->name('editHeight');
    //Route::get('deleteHeight', 'Admin@deleteHeight')->name('deleteHeight');

    // Area-Field Add / View / Delete
    Route::get('area_field', 'Admin@area_field')->name('area_field');
    Route::get('addAreaField', 'Admin@addAreaField')->name('addAreaField');
    Route::post('add_area_field', 'Admin@add_area_field')->name('add_area_field');
    Route::post('editAreaField', 'Admin@editAreaField')->name('editAreaField');
    //Route::get('deleteAreaField', 'Admin@deleteAreaField')->name('deleteAreaField');

    // Qualifications Add / View / Delete
    Route::get('qualification', 'Admin@qualification')->name('qualification');
    Route::get('addQualification', 'Admin@addQualification')->name('addQualification');
    Route::post('add_qualification', 'Admin@add_qualification')->name('add_qualification');
    Route::post('editQualification', 'Admin@editQualification')->name('editQualification');
    //Route::get('deleteQualification', 'Admin@deleteQualification')->name('deleteQualification');
   
    // Additional Add / View / Delete
    Route::get('additional', 'Admin@additional')->name('additional');
    Route::get('addAdditional', 'Admin@addAdditional')->name('addAdditional');
    Route::post('add_success', 'Admin@add_success')->name('add_success');
    Route::post('delete_success', 'Admin@delete_success')->name('delete_success');

    // Annual Income Add / View / Delete
    Route::get('annual_income', 'Admin@annual_income')->name('annual_income');
    Route::get('addAnnualIncome', 'Admin@addAnnualIncome')->name('addAnnualIncome');
    Route::post('add_annual_income', 'Admin@add_annual_income')->name('add_annual_income');
    Route::post('editAnnualIncome', 'Admin@editAnnualIncome')->name('editAnnualIncome');
    //Route::get('deleteAnnualIncome', 'Admin@deleteAnnualIncome')->name('deleteAnnualIncome');

    // Employed As Add / View / Delete
    Route::get('employed_as', 'Admin@employed_as')->name('employed_as');
    Route::get('addEmployedAs', 'Admin@addEmployedAs')->name('addEmployedAs');
    Route::post('add_employed_as', 'Admin@add_employed_as')->name('add_employed_as');
    Route::post('editEmployedAs', 'Admin@editEmployedAs')->name('editEmployedAs');
    //Route::get('deleteEmployedAs', 'Admin@deleteEmployedAs')->name('deleteEmployedAs');

    // Slider As Add / Delete
    Route::get('slider', 'Admin@slider')->name('slider');
    Route::get('addSlider', 'Admin@addSlider')->name('addSlider');
    Route::post('add_slider', 'Admin@add_slider')->name('add_slider');
    Route::post('delete_slider', 'Admin@delete_slider')->name('delete_slider');

});