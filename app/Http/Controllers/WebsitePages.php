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
}
