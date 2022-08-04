<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\CompaniesModel;
use App\Models\CouriersModel;
use App\Models\CustomersModel;
use App\Models\TransactionsModel;

class Admin extends BaseController
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
        return view('admin/home');
    }

    public function getCompanyUsr()
    {
        $data = [
            'compusers' => $this->companiesModel->getCompanyData()
        ];
        return view('admin/user/data_company_user', $data);
    }

    public function getCompany()
    {
        $data = [
            'company' => $this->companiesModel->getCompanyData()
        ];
        return view('admin/company/data_profile', $data);
    }

    public function editComp($id)
    {
        $data = [
            'company' => $this->companiesModel->getCompanyData($id)
        ];
        return view('admin/company/form_edit_company', $data);
    }

    public function updateComp($id)
    {
        $this->companiesModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'jenis_devices' => $this->request->getVar('jenis_devices'),
            'harga' => $this->request->getVar('harga'),
            'email' => $this->request->getVar('email')
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Di Update');
        return redirect()->to('/dashboard/data/company');
    }

    public function editUsr($id)
    {
        $data = [
            'company' => $this->companiesModel->getCompanyData($id)
        ];
        return view('admin/user/form_edit_user', $data);
    }

    public function updateUsr($id)
    {
        $this->companiesModel->save([
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password')
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Di Update');
        return redirect()->to('/dashboard/data/user');
    }

    public function delete($id)
    {
        $this->companiesModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Di Hapus');
        return redirect()->to('/dashboard');
    }

    public function getCourier()
    {
        $data = [
            'courier' => $this->couriersModel->getCourierData()
        ];
        return view('admin/courier/data_courier', $data);
    }
}
