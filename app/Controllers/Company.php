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
        if (!isset($_SESSION['user_id']) || $_SESSION['roles'] != 'company') {
            return redirect()->to('/');
        }
        $data = [
            'company' => $this->companiesModel->getCompanyData(),
            'customer' => $this->customersModel->getCustomersData(),
            'courier' => $this->couriersModel->getCourierData(),
            'transaksi' => $this->transactionsModel->join3tableSA()
        ];

        return view('company/home', $data);
    }

    public function profilePerusahaan($company)
    {

        $data = [
            'company' => $this->companiesModel->getCompanyData($company)
        ];
        return view('company/profile', $data);
    }

    public function editProfile($id)
    {

        $data = [
            'companies' => $this->companiesModel->getCompanyData($id)
        ];
        return view('company/editprofile', $data);
    }

    public function update($id)
    {
        $this->companiesModel->save([
            'id' => $id,
            'nama_com' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'jenis_devices' => $this->request->getVar('jenis_devices'),
            'harga_com' => $this->request->getVar('harga'),
            'email' => $this->request->getVar('email'),

        ]);
        session()->setFlashdata('pesan', 'Updated');
        return redirect()->to('/dashboard/company/');
    }


    public function getTransaction()
    {
        $data = [
            'transaksi' => $this->transactionsModel->join3tableSA()
        ];

        return view('company/transaksi_com', $data);
    }

    public function editStatus($id)
    {
        $data = [
            'transaksi' => $this->transactionsModel->join3table($id)
        ];

        return view('company/editstatus', $data);
    }

    public function updateStatus($id)
    {
        $this->transactionsModel->save([
            'id' => $id,
            'status_transaksi' => $this->request->getVar('status'),
        ]);
        session()->setFlashdata('pesan', 'Updated');
        return redirect()->to('company/transaksicom/transaksi_com');
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
