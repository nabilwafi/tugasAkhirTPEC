<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\CompaniesModel;
use App\Models\CouriersModel;
use App\Models\CustomersModel;
use App\Models\TransactionsModel;

class Customer extends BaseController
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

    #public function index()
    #{
    #    if (!isset($_SESSION['user_id']) || $_SESSION['roles'] != 'customers') {
    #        return redirect()->to('/');
    #    }
    #    $data = [
    #        'customers' => $this->customersModel->getCustomersData()
    #    ];
    #    return view('frontend/user/data_cus');
    #}

    public function profileCus($customers)
    {
        $data = [
            'customers' => $this->customersModel->getCustomersData($customers)
        ];

        return view('frontend/user/data_cus', $data);
    }

    public function editCus($id)
    {
        $data = [
            'customers' => $this->customersModel->getCustomersData($id)
        ];

        return view('frontend/user/edit_profileC', $data);
    }

    public function update($id)
    {
        $this->customersModel->save([
            'id' => $id,
            'nama_cus' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'telp' => $this->request->getVar('telp'),
            'alamat' => $this->request->getVar('alamat'),
        ]);
        session()->setFlashdata('pesan', 'Updated');
        return redirect()->to('/');
    }
}
