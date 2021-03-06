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
        return view('terms');
    }

    public function privacy_policy()
    {
        return view('privacy');
    }

    public function refund_policy()
    {
        return view('refund');
    }

    public function frequently_asked_questions()
    {
        return view('FAQ');
    }

    public function careers()
    {
        return view('careers');
    }


}
