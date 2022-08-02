<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CompaniesModel;
use App\Models\CouriersModel;

class Pesanan extends BaseController
{

    protected $companiesModel;
    protected $couriersModel;
    protected $validation;
    public function __construct()
    {
        $this->companiesModel = new CompaniesModel();
        $this->couriersModel = new CouriersModel();
        $this->validation = \Config\Services::validation();   
    }

    public function index($device)
    {
        if(isset($_SESSION['user_id']) && $_SESSION['roles'] == 'customer') {
            if($device == 'pc' || $device == 'laptop' || $device == 'handphone' || $device == 'printer') {
                
                $data = [
                    'validation' => $this->validation,
                    'jenis_devices' => $this->companiesModel->getCompanyData($device, 'jenis_devices')->findAll(),
                    'couriers' => $this->couriersModel->getCourierData()
                ];

                return view('frontend/checkout/checkout', $data);
            }
            
            return redirect()->to('/');
        }
        
        return redirect()->to('/login')->with('information', 'Please log in first before you want to order!');
    }
}
