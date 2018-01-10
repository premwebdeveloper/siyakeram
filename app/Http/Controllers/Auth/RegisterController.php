<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Str;
use App\User;
use App\user_details;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use DB;
use Mail;
use App\Mail\verifyEmail;
use Session;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        Session::flash('status', 'Registered Successfully. But verify your email to activate your account.');

        // Create user in users table
        $user = User::create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'verify_token' => Str::random(40)
        ]);

        // Get user id
        $user_id = $user->id;

        $date = date("Y-m-d H:i:s");

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
                'created_at' => $date,
                'updated_at' => $date
             )
        );

        #user insert in user details table
        $user_insert = DB::table('user_details')->insert(
            array(
                    'user_id' => $user_id,
                    'unique_id' => $unique_id,
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'phone' => $data['phone'],
                    /*'profile_for' => $data['profile_for'],*/
                    'gender' => $data['gender'],
                    'date' => $data['date'],
                    'month' => $data['month'],
                    'year' => $data['year'],
                    'religion' => $data['religion'],
                    'mother_tongue' => $data['mother_tongue'],
                    'created_at' => $date,
                    'updated_at' => $date
                )
        );
        #user insert in family_details table
        $user_insert = DB::table('family_details')->insert(
            array(
                    'user_id' => $user_id,
                    'created_at' => $date,
                    'updated_at' => $date,
                    'status' => 1
                )
        );
        #user insert in user_education_center table
        $user_insert = DB::table('user_education_center')->insert(
            array(
                    'user_id' => $user_id,
                    'created_at' => $date,
                    'updated_at' => $date,
                    'status' => 1
                )
        );        
        #user insert in user_images table
        $user_insert = DB::table('user_images')->insert(
            array(
                    'user_id' => $user_id,
                    'image' => 'user.png',
                    'created_at' => $date,
                    'updated_at' => $date,
                    'status' => 1
                )
        );

        $thisUser = User::findOrFail($user->id);
        $this->sendEmail($thisUser);

        return $user;
        exit;
    }

    # Verify Email First
    public function verifyEmailFirst()
    {
        return view('email.verifyEmailFirst');
    }

    # Send Email
    public function sendEmail($thisUser)
    {
        Mail::to($thisUser->email)->send(new verifyEmail($thisUser));
    }

    # Send Email Done
    public function sendEmailDone($email, $verifyToken)
    {
        $user = User::where(['email'=>$email, 'verify_token'=>$verifyToken])->first();

        if($user)
        {
            User::where(['email'=>$email, 'verify_token'=>$verifyToken])->update(['status'=>'1', 'verify_token'=>NULL]);

            user_details::where(['email'=>$email])->update(['status'=>'1']);

            $status = 'Verified email. You can login now.';
        }
        else
        {
            $status = 'Something Went Wrong Or Already Verified !';
        }

        if($status)
        {
            Session::flash('status', $status);
            return view('auth.login');
        }
    }

}
