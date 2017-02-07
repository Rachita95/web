<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function contact_us()
    {
        return view('contact');
    }

    public function about_us()
    {
        return view('aboutUs');
    }

    public function terms_and_conditions()
    {
        return view('');
    }

    public function privacy_policy()
    {
        return view('');
    }

    public function refund_policy()
    {
        return view('');
    }

    public function frequently_asked_questions()
    {
        return view('');
    }

    public function careers()
    {
        return view('');
    }


}
