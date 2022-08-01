<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Admin extends BaseController
{
    protected $usersModel;
    public function __construct()
    {
        $this->usersModel = new UsersModel();
    }

    public function index()
    {
        return view('backend/admin/home');
    }

    public function getUser()
    {
        $data = [
            'users' => $this->usersModel->getUserData()
        ];
        return view('backend/user/data_user', $data);
    }
}
