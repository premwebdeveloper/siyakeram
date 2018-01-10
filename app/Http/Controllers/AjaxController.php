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
        $inputDiet = $request->inputDiet;
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
                    'religion' => $inputReligion,
                    'mother_tongue' => $inputMotherTongue,
                    'bio' => $inputAboutus,
                    'height' => $inputHeight,
                    'marital_status' => $marital_for,
                    'caste' => $inputCaste,
                    'sub_caste' => $inputSubcaste,
                    'complexion' => $inputComplexion,
                    'manglik' => $inputManglik,
                    'gotra' => $inputGotra,
                    'diet' => $inputDiet,
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


    public function update_family_info(Request $request)
    {
        $date = date('Y-m-d H:i:s');

        $user_id = $request->user_id;

        $inputFamily = $request->inputFamily;
        $inputFather = $request->inputFather;
        $inputMother = $request->inputMother;
        $inputMSister = $request->inputMSister;
        $inputUMSister = $request->inputUMSister;
        $inputMBrother = $request->inputMBrother;
        $inputUMBrother = $request->inputUMBrother;
        $inputNativeCountry = $request->inputNativeCountry;
        $inputNativeState = $request->inputNativeState;
        $inputFamilyValue = $request->inputFamilyValue;
        $inputAffluence = $request->inputAffluence;

        $family_info_update = DB::table('family_details')->where('user_id', $user_id)->update(

            array(
                    'about_family' => $inputFamily,
                    'father_occupation' => $inputFather,
                    'mother_occupation' => $inputMother,
                    'married_sisters' => $inputMSister,
                    'unmarried_sisters' => $inputUMSister,
                    'married_brothers' => $inputMBrother,
                    'unmarried_brothers' => $inputUMBrother,
                    'native_country' => $inputNativeCountry,
                    'native_state' => $inputNativeState,
                    'family_value' => $inputFamilyValue,
                    'affluence_level' => $inputAffluence,
                    'updated_at' => $date,
                    'status' => 1
            )
        );

        $response = array('messager' => 'Update Family Information');

        return response()->json($response);

        exit;
    }

    public function update_education_info(Request $request)
    {
        $date = date('Y-m-d H:i:s');

        $user_id = $request->user_id;

        $inputEducational = $request->inputEducational;
        $inputEmployedAs = $request->inputEmployedAs;
        $inputArea = $request->inputArea;
        $inputEmployedWith = $request->inputEmployedWith;
        $inputAnnual = $request->inputAnnual;

        $education_info_update = DB::table('user_education_center')->where('user_id', $user_id)->update(

            array(
                    'edu_qualification' => $inputEducational,
                    'employed_as' => $inputEmployedAs,
                    'area_field' => $inputArea,
                    'employed_with' => $inputEmployedWith,
                    'annual_income' => $inputAnnual,
                    'updated_at' => $date,
                    'status' => 1
            )
        );

        $response = array('messager' => 'Update Educational Information');

        return response()->json($response);

        exit;
    }

    public function update_address_info(Request $request)
    {
    	$date = date('Y-m-d H:i:s');

    	$user_id = $request->user_id;

    	$inputAddress = $request->inputAddress;
    	$inputAddressCountry = $request->inputAddressCountry;
    	$inputAddressState = $request->inputAddressState;
    	$inputAddressCity = $request->inputAddressCity;
    	$inputZipcode = $request->inputZipcode;

    	$address_info_update = DB::table('user_details')->where('user_id', $user_id)->update(

    		array(
                    'address' => $inputAddress,
    				'country' => $inputAddressCountry,
    				'state' => $inputAddressState,
    				'city' => $inputAddressCity,
    				'zipcode' => $inputZipcode,
    				'updated_at' => $date,
    				'status' => 1
			)
    	);

        $response = array('messager' => 'Update Address Information');

        return response()->json($response);

        exit;
    }

    public function getStateByCountryForUser(Request $request)
    {
        $country = $request->country;

        // Get all districts of this state
        $states = DB::table('states')->where('country_id', $country)->get();

        return response()->json($states);
    }

    public function getStateByStateForUser(Request $request)
    {
        $state = $request->state;

        // Get all districts of this state
        $cities = DB::table('cities')->where('state_id', $state)->get();

        return response()->json($cities);
    }

    // search users
    public function search_user_for(Request $request)
    {
        $selected_items = $request->items;

        $temp = explode("|", $selected_items);

        $marital = array();
        $income = array();
        $caste = array();
        $tongue = array();
        $education = array();
        $employed = array();
        $diet = array();
        $religion = array();

        $i = 0;

        foreach($temp as $item)
        {
            $tempo = explode("_", $item);

            if($tempo[0] == 'marital')
            {
                $marital[$i] = $tempo[1];
            }
            if($tempo[0] == 'income')
            {
                $income[$i] = $tempo[1];
            }
            if($tempo[0] == 'caste')
            {
                $caste[$i] = $tempo[1];
            }
            if($tempo[0] == 'tongue')
            {
                $tongue[$i] = $tempo[1];
            }
            if($tempo[0] == 'education')
            {
                $education[$i] = $tempo[1];
            }
            if($tempo[0] == 'employed')
            {
                $employed[$i] = $tempo[1];
            }
            if($tempo[0] == 'diet')
            {
                $diet[$i] = $tempo[1];
            }
            if($tempo[0] == 'religion')
            {
                $religion[$i] = $tempo[1];
            }

            $i++;
        }

        // Generate search query
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
                ->select('user_details.*', 'caste.caste as caste', 'height.height as height', 'countries.name as country', 'states.name as state', 'cities.name as city', 'mother_tongue.mother_tongue', 'educational_qualification.education', 'annual_income.annual_income', 'employed_as.employed_as');

        // If marital status not empty
        if (!empty($marital))
        {
            $query->whereIn('user_details.marital_status', $marital);
        }

        // If income not empty
        if (!empty($income))
        {
            $query->whereIn('user_education_center.annual_income', $income);
        }

        // If caste not empty
        if (!empty($caste))
        {
            $query->whereIn('user_details.caste', $caste);
        }

        // If tongue not empty
        if (!empty($tongue))
        {
            $query->whereIn('user_details.mother_tongue', $tongue);
        }

        // If education not empty
        if (!empty($education))
        {
            $query->whereIn('user_education_center.edu_qualification', $education);
        }

        // If employed not empty
        if (!empty($employed))
        {
            $query->whereIn('user_education_center.employed_as', $employed);
        }

        // If diet not empty
        if (!empty($diet))
        {
            $query->whereIn('user_details.diet', $diet);
        }

        // If religion not empty
        if (!empty($religion))
        {
            $query->whereIn('user_details.religion', $religion);
        }

        $results = $query->get();

        $html = '';

        if(!empty($results[0]))
        {
            foreach ($results as $data)
            {
                $date = date('Y-m-d');
                $y = date('Y', strtotime($date));
                $year = $data->year;
                $age = $y - $year;

                // Get user Images
                $images = DB::table('user_images')->where('user_id', $data->user_id)->get();

                if(count($images) > 1)
                {
                    foreach ($images as $img)
                    {
                        $image = $img->image;
                        if($image != 'user.png')
                        {
                            $image = $image;
                            break;
                        }
                    }
                }
                else
                {
                    $image = 'user.png';
                }

                $html .= '<li><div class="strip_profile" style="visibility: visible; animation-name: fadeIn;"><div class="row"><div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 padlr0"><div class="img_list"><a href="javascript:;" target="_blank"><img src="storage/app/uploads/profile_images/'.$image.'" class="img-responsive" alt=""></a></div></div><div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 padlr0"><div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 padlr0 min-height-mobile"><div class="Profile_list-name"><h3><a href="javascript:;" target="_blank"><span class="lvNameellips"> '.$data->name.'</span></a><span class="lv-id">'.$data->unique_id.'</span></h3><ul class="add_info"><li>Age - '.$age.'</li><li>Height - '.$data->height.'</li><li>Location - '.$data->state.'</li><li>Religion - '.$data->religion.'</li><li>Caste - '.$data->caste.'</li><li>Mother Tongue - '.$data->mother_tongue.'</li><li>Profession - '.$data->employed_as.'</li><li>Education - '.$data->education.'</li><li>Annual Income - '.$data->annual_income.'</li></ul></div></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 padlr0 btn-bottom-mobile"><div class="profile-actions"><div class="gallery"><p><a href="javascript:;" class="p-action-btn btn-grey-light border-r2 ripplelink" target="_blank"><i class="fa fa-eye"><strong>View</strong></i> <span>View</span></a></p><p><a href="javascript:;" data-toggle="modal" data-target="#loginModal" class="p-action-btn btn-grey-light border-r2 ripplelink"><i class="fa fa-phone"><strong>Contact</strong></i> <span>Contact</span></a></p></div></div></div></div></div></div></li>';
            }
        }
        else
        {
            $html .= '<li class="alert alert-danger">No Result found!</li>';
        }


        $response = array('html' => $html);

        return response()->json($response);

        exit;
    }
}
