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
        return view('welcome', array('mother_tongue' => $mother_tongue));
    }
}
