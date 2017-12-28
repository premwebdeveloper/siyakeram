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

    	return view('profile.profile', array('user' => $user));
    }
}
