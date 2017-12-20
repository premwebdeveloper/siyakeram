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

class Users extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Change Password View
    public function change_password_view()
    {
    	return view('users.change_password');
    }

    // Change password
    public function change_password(Request $request)
    {
        $old_password     = $request->old_password;
        $new_password     = $request->new_password;
        $confirm_password = $request->confirm_password;

        if(!Hash::check($old_password, Auth::user()->password))
        {
            $status = "old password did not match !";
        }
        else
        {
            if($new_password == $confirm_password)
            {
                if(strlen($new_password) < 6 || strlen($confirm_password) < 6)
                {
                    $status = "New password length should be 6 characters minimum.";
                }
                else
                {
                    $request->user()->fill(['password' => Hash::make($new_password)])->save();
                    $status = "Change password successfully.";
                }
            }
            else
            {
                $status = "New password did not match with confirm password !";
            }
        }

        return redirect('change_password')->with('status', $status);
    }
}
