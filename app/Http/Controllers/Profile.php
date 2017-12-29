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

        $caste_id = $user->caste;
        $mother_id = $user->mother_tongue;
        $height_id = $user->height;

        $caste_details = array();
        $mother_details = array();
        $height_details = array();
        
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
        

        $mother_tongue = DB::table('mother_tongue')->where('status', 1)->get();
        
        $height = DB::table('height')->where('status', 1)->get();

        $caste = DB::table('caste')->where('status', 1)->get();

    	return view('profile.profile', array('user' => $user, 'mother_tongue' => $mother_tongue, 'height' => $height, 'caste' => $caste, 'caste_details' => $caste_details, 'mother_details' => $mother_details, 'height_details' => $height_details));
    }
}
