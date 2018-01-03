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
        $search_key = $request->search_key;
        $working_as = $request->working_as;
        $income = $request->income;
        $education = $request->education;

        $diet = $request->diet;
        $drink = $request->drink;
        $smoke = $request->smoke;
        $manglik = $request->manglik;

        $query = DB::table('user_details');

        if (!empty($caste))
        {
            $query->where('caste', $caste);
        }

        $results = $query->get();

        echo '<pre>';
        print_r($results);
        exit;

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
