<?php

namespace App\Http\Controllers;
use App\Http\Requests\AddUserValidation;
use App\User;
use Illuminate\Http\Request;
use DB;

class AdminUsers extends Controller
{
    // View All User
    public function index()
    {
        # Get All Users
        $users = DB::table('user_details')->where('status', 1)->get();

        return view('admin_users.index', array('users' => $users));
    }

    // add new User view page
    public function addUser()
    {
        $mother_tongue = DB::table('mother_tongue')->where('status', 1)->get();

        return view('admin_users.addUser', array('mother_tongue' => $mother_tongue));
    }

    // add new User
    public function add_user(AddUserValidation $request)
    {
        $c_date = date('Y-m-d H:i:s');

        $name = $request->name;
        $phone = $request->phone;
        $email = $request->email;
        $password = $request->password;
        $password_confirmation = $request->password_confirmation;
        $date = $request->date;
        $month = $request->month;
        $year = $request->year;
        $religion = $request->religion;
        $mother_tongue = $request->mother_tongue;
        $gender = $request->gender;

        $password = bcrypt($password);

        $user = DB::table('users')->insert(
            array('name' => $name, 'phone' => $phone, 'email' => $email, 'password' => $password, 'created_at' => $c_date, 'updated_at' => $c_date, 'status' => 1)
        );

        $user_id = DB::getPdo()->lastInsertId();

        // get user details from user_details table
        $last_row = DB::table('user_details')->orderBy('id', 'desc')->first();

        if(!empty($last_row))
        {
            $last_unique_id = $last_row->unique_id;
            $last_unique_id = explode("-", $last_unique_id);
            $unique_id = $last_unique_id[1] + 1;
            $unique_id = "SR-".$unique_id;
        }
        else
        {
            $unique_id = 'SR-1001';
        }

        # Create user role
        $user_role = DB::table('user_roles')->insert(
             array(
                'role_id' => '2',
                'user_id' => $user_id,
                'created_at' => $c_date,
                'updated_at' => $c_date
             )
        );

        #user insert in user details table
        $user_insert = DB::table('user_details')->insert(
            array(
                    'user_id' => $user_id,
                    'unique_id' => $unique_id,
                    'name' => $name,
                    'email' => $email,
                    'phone' => $phone,
                    'gender' => $gender,
                    'date' => $date,
                    'month' => $month,
                    'year' => $year,
                    'religion' => $religion,
                    'mother_tongue' => $mother_tongue,
                    'created_at' => $c_date,
                    'updated_at' => $c_date,
                    'status' => 1
                )
        );
        #user insert in family_details table
        $user_insert = DB::table('family_details')->insert(
            array(
                    'user_id' => $user_id,
                    'created_at' => $c_date,
                    'updated_at' => $c_date,
                    'status' => 1
                )
        );
        #user insert in user_education_center table
        $user_insert = DB::table('user_education_center')->insert(
            array(
                    'user_id' => $user_id,
                    'created_at' => $c_date,
                    'updated_at' => $c_date,
                    'status' => 1
                )
        );
        #user insert in user_images table
        $user_insert = DB::table('user_images')->insert(
            array(
                    'user_id' => $user_id,
                    'image' => 'user.png',
                    'created_at' => $c_date,
                    'updated_at' => $c_date,
                    'status' => 1
                )
        );

        $status = 'User Created successfully.';

        return redirect('users')->with('status', $status);
    }

    // View User Detail
    public function View(Request $request)
    {
        $user_id = $request->user_id;

        # Get User details
        $user = DB::table('user_details')->where('user_id', $user_id)->first();

        # Get User Images
        $user_images = DB::table('user_images')->where('user_id', $user_id)->get();

        # Get User Education Information
        $user_education_details= DB::table('user_education_center')->where('user_id', $user_id)->first();

        # Get User Family Details
        $user_family_details = DB::table('family_details')->where('user_id', $user_id)->first();

        $caste_id = $user->caste;
        $mother_id = $user->mother_tongue;
        $height_id = $user->height;
        $country_id = $user_family_details->native_country;
        $state_id = $user_family_details->native_state;

        #address detail
        $add_country_id = $user->country;
        $add_state_id = $user->state;
        $add_city_id = $user->city;

        $educational_id = $user_education_details->edu_qualification;
        $employed_id = $user_education_details->employed_as;
        $area_id = $user_education_details->area_field;
        $annual_id = $user_education_details->annual_income;

        $caste_details = array();
        $mother_details = array();
        $height_details = array();
        $country_details = array();
        $state_details = array();

        $educational_details = array();
        $employed_details = array();
        $area_details = array();
        $annual_details = array();
        $countries_details = array();
        $states_details = array();
        $cities_details = array();

        if(!empty($caste_id))
            {
                $caste_details = DB::table('caste')->where('id', $caste_id)->first();
            }
        if(!empty($mother_id))
            {
                $mother_details = DB::table('mother_tongue')->where('id', $mother_id)->first();
            }
        if(!empty($height_id))
            {
                $height_details = DB::table('height')->where('id', $height_id)->first();
            }
        if(!empty($country_id))
            {
                $country_details = DB::table('countries')->where('id', $country_id)->first();
            }
        if(!empty($state_id))
            {
                $state_details = DB::table('states')->where('id', $state_id)->first();
            }
        if(!empty($educational_id))
            {
                $educational_details = DB::table('educational_qualification')->where('id', $educational_id)->first();
            }
        if(!empty($employed_id))
            {
                $employed_details = DB::table('employed_as')->where('id', $employed_id)->first();
            }
        if(!empty($area_id))
            {
                $area_details = DB::table('area_field')->where('id', $area_id)->first();
            }
        if(!empty($annual_id))
            {
                $annual_details = DB::table('annual_income')->where('id', $annual_id)->first();
            }
        if(!empty($add_country_id))
            {
                $countries_details = DB::table('countries')->where('id', $add_country_id)->first();
            }
        if(!empty($add_state_id))
            {
                $states_details = DB::table('states')->where('id', $add_state_id)->first();
            }
        if(!empty($add_city_id))
            {
                $cities_details = DB::table('cities')->where('id', $add_city_id)->first();
            }

        $mother_tongue = DB::table('mother_tongue')->where('status', 1)->get();

        $height = DB::table('height')->where('status', 1)->get();

        $caste = DB::table('caste')->where('status', 1)->get();

        $area_field = DB::table('area_field')->where('status', 1)->get();

        $educational = DB::table('educational_qualification')->where('status', 1)->get();

        $annual_income = DB::table('annual_income')->where('status', 1)->get();

        $employed_as = DB::table('employed_as')->where('status', 1)->get();

        $countries = DB::table('countries')->get();

        $states = DB::table('states')->get();

        return view('admin_users.view', array('user' => $user, 'images' => $user_images, 'educational_details' => $user_education_details, 'family_details' => $user_family_details, 'mother_tongue' => $mother_tongue, 'height' => $height, 'caste' => $caste, 'caste_details' => $caste_details, 'mother_details' => $mother_details, 'height_details' => $height_details, 'countries' => $countries, 'states' => $states, 'country_details' => $country_details, 'state_details' => $state_details, 'area_field' => $area_field, 'educational' => $educational, 'annual_income' => $annual_income, 'employed_as' => $employed_as, 'educational' => $educational_details, 'employed_details' => $employed_details, 'area_details' => $area_details, 'annual_details' => $annual_details, 'countries_details' => $countries_details, 'states_details' => $states_details, 'cities_details' => $cities_details));
    }

    // Disable user
    public function delete(Request $request)
    {
        $user_id = $request->user_id;

        $user = User::where(['id'=>$user_id])->update(['status'=>'0']);

        if($user)
        {
            $disable = DB::table('user_details')->where('user_id', $user_id)->update(
                array(
                        'status' => 0
                )
            );
        }

        if($disable)
        {
            $status = 'User Deleted successfully.';
        }
        else
        {
            $status = 'Something went wrong !';
        }

        return redirect('users')->with('status', $status);
    }
}
