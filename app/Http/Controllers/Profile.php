<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Storage;
use Session;

class Profile extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function profile()
    {
    	# Get User Id
    	$currentuserid = Auth::user()->id;

    	# Get User Role
        $user = DB::table('user_details')->where('user_id', $currentuserid)->first();
        $family = DB::table('family_details')->where('user_id', $currentuserid)->first();
        $education_center = DB::table('user_education_center')->where('user_id', $currentuserid)->first();
    	$profile_img = DB::table('user_images')->where('user_id', $currentuserid)->get();

        $caste_id = $user->caste;
        $mother_id = $user->mother_tongue;
        $height_id = $user->height;
        $country_id = $family->native_country;
        $state_id = $family->native_state;        

        #address detail
        $add_country_id = $user->country;
        $add_state_id = $user->state;
        $add_city_id = $user->city;

        $educational_id = $education_center->edu_qualification;
        $employed_id = $education_center->employed_as;
        $area_id = $education_center->area_field;
        $annual_id = $education_center->annual_income;

        
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


    	return view('profile.profile', array('user' => $user, 'mother_tongue' => $mother_tongue, 'height' => $height, 'caste' => $caste, 'caste_details' => $caste_details, 'mother_details' => $mother_details, 'height_details' => $height_details, 'countries' => $countries, 'states' => $states, 'country_details' => $country_details, 'state_details' => $state_details, 'family' => $family, 'area_field' => $area_field, 'educational' => $educational, 'annual_income' => $annual_income, 'employed_as' => $employed_as, 'educational_details' => $educational_details, 'employed_details' => $employed_details, 'area_details' => $area_details, 'annual_details' => $annual_details, 'education_center' => $education_center, 'countries_details' => $countries_details, 'states_details' => $states_details, 'cities_details' => $cities_details, 'profile_img' => $profile_img));
    }

    public function profile_image(Request $request)
    {
        $user_id = $request->user_id;

        $date = date('Y-m-d H:i:s');
        //return $request->all();
        if($request->hasFile('file')) {

            foreach ($request->file as $file) {

                $filename = $file->getClientOriginalName();

                $ext = pathinfo($filename, PATHINFO_EXTENSION);

                $filename = substr(md5(microtime()),rand(0,26),6);

                $filename .= '.'.$ext;

                $filesize = $file->getClientSize();

                $destinationPath = config('app.fileDestinationPath').'/'.$filename;
                $uploaded = Storage::put($destinationPath, file_get_contents($file->getRealPath()));

                if($uploaded)
                {
                     $image_update = DB::table('user_images')->insert(
                        array(
                            'user_id' => $user_id,
                            'image' => $filename,
                            'created_at' => $date,
                            'updated_at' => $date,
                            'status' => 1
                        )
                    );
                }

                if($uploaded)
                {
                    $status = 'image upload successfully.';
                }
                else
                {
                    $status = 'No File Selected';
                }
            }
        }

        return redirect('profile')->with('status', $status);
    }

    public function deleteProfileImage(Request $request)
        {
            $date = date('Y-m-d H:i:s');

            $member_id = $request->delete_family_member;
            
            $delete_profile_img = DB::table('user_images')->where('id', $member_id)->delete();

            if($delete_profile_img)
            {
                $status = 'Delete Profile Image successfully.';
            }
            else
            {
                $status = 'Something went wrong !';
            }

            return redirect('profile')->with('status', $status);
        }

    public function user_profile()
    {
        return view('websitepages.user_profile');
    }
}
