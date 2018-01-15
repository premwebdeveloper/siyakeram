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

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    // Home page
    public function index()
    {
        $mother_tongue = DB::table('mother_tongue')->where('status', 1)->get();

        $query = DB::table('user_details')
                ->join('user_education_center', 'user_education_center.user_id', '=', 'user_details.user_id')
                ->leftjoin('height', 'height.height_cms', '=', 'user_details.height')
                ->leftjoin('countries', 'countries.id', '=', 'user_details.country')
                ->select('user_details.*', 'user_education_center.employed_with', 'height.height as user_height', 'countries.name as user_country')
                ->where('user_details.status', 1)
                ->orderBy('user_details.id', 'DESC');

        $home_users = $query->get();

        return view('welcome', array('mother_tongue' => $mother_tongue, 'home_users' => $home_users));
    }
}
