<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];
        return view('frontend/index', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About'
        ];
        return view('frontend/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact'
        ];

        return view('frontend/contact', $data);
    }
}
