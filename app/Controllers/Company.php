<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\CompaniesModel;
use App\Models\CouriersModel;
use App\Models\CustomersModel;
use App\Models\TransactionsModel;

class Company extends BaseController
{
    protected $adminModel;
    protected $companiesModel;
    protected $couriersModel;
    protected $customersModel;
    protected $transactionsModel;

    public function __construct()
    {
        $this->adminModel = new AdminModel();
        $this->companiesModel = new CompaniesModel();
        $this->couriersModel = new CouriersModel();
        $this->customersModel = new CustomersModel();
        $this->transactionsModel = new TransactionsModel();
    }

    public function index()
    {
        return view('company/home');
    }

    public function profilePerusahaan($company)
    {
        echo $company; 
    }

    public function logout()
    {

        unset(
            $_SESSION['user_id'],
            $_SESSION['name'],
            $_SESSION['roles']
        );
        return redirect()->to('/login/company')->with('success', 'Successfully logout');
    }
}
