<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsitePages extends Controller
{
    public function search()
    {
        return view('websitepages.search');
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
