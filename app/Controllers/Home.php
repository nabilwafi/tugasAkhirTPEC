<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('frontend/index');
    }
    public function about()
    {
        return view('frontend/about');
    }

    public function contact()
    {
        return view('frontend/contact');
    }

    // LOGIN
    public function login()
    {
        return view('form/login.php');
    }

    // Register
    public function register()
    {
        return view('form/register.php');
    }
}
