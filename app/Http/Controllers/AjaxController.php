<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AjaxController extends Controller
{

    public function update_basic_info(Request $request)
    {
    	$date = date('Y-m-d H:i:s');

    	$user_id = $request->user_id;

    	$inputFullName = $request->inputFullName;
    	$inputPhone = $request->inputPhone;
    	$inputDate = $request->inputDate;
    	$inputMonth = $request->inputMonth;
    	$inputYear = $request->inputYear;
    	$inputReligion = $request->inputReligion;
    	$inputMotherTongue = $request->inputMotherTongue;
    	$inputAboutus = $request->inputAboutus;
    	$inputHeight = $request->inputHeight;
    	$marital_for = $request->marital_for;
    	$inputCaste = $request->inputCaste;
    	$inputSubcaste = $request->inputSubcaste;
    	$inputComplexion = $request->inputComplexion;
    	$inputManglik = $request->inputManglik;
    	$inputGotra = $request->inputGotra;
    	$inputHrs = $request->inputHrs;
    	$inputMin = $request->inputMin;
    	$inputSec = $request->inputSec;
    	$inputBirthPlace = $request->inputBirthPlace;

    	$user_table = DB::table('users')->where('id', $user_id)->update(

    		array(
    				'name' => $inputFullName,
    				'phone' => $inputPhone,
    				'updated_at' => $date
    		)

    	);

    	$basic_info_update = DB::table('user_details')->where('user_id', $user_id)->update(

    		array(
    				'name' => $inputFullName,
    				'phone' => $inputPhone,
    				'date' => $inputDate,
    				'month' => $inputMonth,
    				'year' => $inputYear,
    				'mother_tongue' => $inputMotherTongue,
    				'bio' => $inputAboutus,
    				'height' => $inputHeight,
    				'marital_status' => $marital_for,
    				'caste' => $inputCaste,
    				'sub_caste' => $inputSubcaste,
    				'complexion' => $inputComplexion,
    				'manglik' => $inputManglik,
    				'gotra' => $inputGotra,
    				'birth_hour' => $inputHrs,
                    'birth_mint' => $inputMin,
    				'birth_sec' => $inputSec,
    				'birth_place' => $inputBirthPlace,
    				'updated_at' => $date,
    				'status' => 1
			)
    	);

        $response = array('messager' => 'Update Basic Information');

        return response()->json($response);

        exit;
    }
}
