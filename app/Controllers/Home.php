<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('frontend/pages/index');
    }
    public function about()
    {
        return view('frontend/pages/about');
    }

    public function contact()
    {
        return view('frontend/pages/contact');
    }
}
