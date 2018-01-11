<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class WebsitePages extends Controller
{
    public function search_for(Request $request)
    {
        $looking_for = $request->looking_for;
        $age_from = $request->age_from;
        $age_to = $request->age_to;
        $height_from = $request->height_from;
        $height_to = $request->height_to;
        $religion = $request->religion;
        $caste = $request->caste;
        $mother_tongue = $request->mother_tongue;
        $marital_status = $request->marital_status;
        $country = $request->country;
        $state = $request->state;
        $city = $request->city;
        //$search_key = $request->search_key;

        $working_as = $request->working_as;
        $income = $request->income;
        $education = $request->education;

        $diet = $request->diet;
        /*$drink = $request->drink;
        $smoke = $request->smoke;
        $manglik = $request->manglik;*/

        // Curret date and year
        $date = date('Y-m-d');
        $y = date('Y', strtotime($date));

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
                ->select('user_details.*', 'caste.caste as caste', 'height.height as height', 'countries.name as country', 'states.name as state', 'cities.name as city', 'mother_tongue.mother_tongue', 'educational_qualification.education', 'annual_income.annual_income', 'employed_as.employed_as')
                ->where('user_details.status', 1);

        // If Age from is not empty
        if (!empty($looking_for))
        {
            $query->where('user_details.gender', $looking_for);
        }

        // If Age from is not empty
        if (!empty($age_from))
        {
            $year = $y - $age_from;
            $query->where('user_details.year', '<=', $year);
        }

        // If Age to is not empty
        if (!empty($age_to))
        {
            $year = $y - $age_to;
            $query->where('user_details.year', '>=', $year);
        }

        // If Height from is not empty
        if (!empty($height_from))
        {
            $query->where('user_details.height', '>=', $height_from);
        }

        // If Height to is not empty
        if (!empty($height_to))
        {
            $query->where('user_details.height', '<=', $height_to);
        }

        // If religion is not empty
        if (!empty($religion))
        {
            $query->where('user_details.religion', $religion);
        }

        // If caste is not empty
        if (!empty($caste))
        {
            $query->where('user_details.caste', $caste);
        }

        // If mother_tongue is not empty
        if (!empty($mother_tongue))
        {
            $query->where('user_details.mother_tongue', $mother_tongue);
        }

        // If marital_status is not empty
        if (!empty($marital_status))
        {
            $query->where('user_details.marital_status', $marital_status);
        }

        // If country is not empty
        if (!empty($country))
        {
            $query->where('user_details.country', $country);
        }

        // If state is not empty
        if (!empty($state))
        {
            $query->where('user_details.state', $state);
        }

        // If city is not empty
        if (!empty($city))
        {
            $query->where('user_details.city', $city);
        }

        // If working_as is not empty
        if (!empty($working_as))
        {
            $query->where('user_education_center.employed_as', $working_as);
        }

        // If income is not empty
        if (!empty($income))
        {
            $query->where('user_education_center.annual_income', $income);
        }

        // If education is not empty
        if (!empty($education))
        {
            $query->where('user_education_center.edu_qualification', $education);
        }

        // If diet is not empty
        if (!empty($diet))
        {
            $query->whereIn('user_details.diet', $diet);
        }

        $results = $query->get();

        // Get all castes
        $caste = DB::table('caste')->where('status', 1)->get();

        // Get all height
        $height = DB::table('height')->where('status', 1)->get();

        // Get all mother_tongue
        $mother_tongue = DB::table('mother_tongue')->where('status', 1)->get();

        // Get all annual_income
        $annual_income = DB::table('annual_income')->where('status', 1)->get();

        // Get all educational_qualification
        $educational_qualification = DB::table('educational_qualification')->where('status', 1)->get();

        // Get all employed_as
        $employed_as = DB::table('employed_as')->where('status', 1)->get();

        return view('websitepages.searched_users', array('search_results' => $results, 'caste' => $caste, 'height' => $height, 'mother_tongue' => $mother_tongue, 'annual_income' => $annual_income, 'educational_qualification' => $educational_qualification, 'employed_as' => $employed_as));
    }

    public function search()
    {
        // Get all castes
        $caste = DB::table('caste')->where('status', 1)->get();

        // Get all height
        $height = DB::table('height')->where('status', 1)->get();

        // Get all mother_tongue
        $mother_tongue = DB::table('mother_tongue')->where('status', 1)->get();

        // Get all annual_income
        $annual_income = DB::table('annual_income')->where('status', 1)->get();

        // Get all educational_qualification
        $educational_qualification = DB::table('educational_qualification')->where('status', 1)->get();

        // Get all employed_as
        $employed_as = DB::table('employed_as')->where('status', 1)->get();

        // Get all countries
        $countries = DB::table('countries')->get();

        return view('websitepages.search', array('caste' => $caste, 'height' => $height, 'mother_tongue' => $mother_tongue, 'annual_income' => $annual_income, 'educational_qualification' => $educational_qualification, 'employed_as' => $employed_as, 'countries' => $countries));
    }

    public function membership()
    {
        return view('websitepages.membership');
    }

    public function horoscope()
    {
        return view('websitepages.horoscope');
    }

    public function help()
    {
        return view('websitepages.help');
    }

    public function aboutus()
    {
        return view('websitepages.aboutus');
    }

    public function privacy()
    {
        return view('websitepages.privacy');
    }

    public function terms()
    {
        return view('websitepages.terms');
    }

    public function disclaimer()
    {
        return view('websitepages.disclaimer');
    }

    public function payment()
    {
        return view('websitepages.payment');
    }

    public function contactus()
    {
        return view('websitepages.contactus');
    }

}
