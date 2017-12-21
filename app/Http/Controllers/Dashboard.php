<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    // Admin dashboard
    public function admin()
    {
        return view('dashboard.admin-dashboard');
    }
}
