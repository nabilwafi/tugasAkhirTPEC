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
        if (!isset($_SESSION['user_id']) || $_SESSION['roles'] != 'superadmin') {
            return redirect()->to('/');
        }

        $data = [
            'company' => $this->companiesModel->getCompanyData(),
            'customer' => $this->customersModel->getCustomersData(),
            'courier' => $this->couriersModel->getCourierData(),
            'transaksi' => $this->transactionsModel->join3tableSA()
        ];

        return view('admin/home', $data);
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
            'nama_com' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'jenis_devices' => $this->request->getVar('jenis_devices'),
            'harga_com' => $this->request->getVar('harga'),
            'email' => $this->request->getVar('email')
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Di Update');
        return redirect()->to('/dashboard/data/company');
    }

    public function getCompanyUsr()
    {
        $data = [
            'compusers' => $this->companiesModel->getCompanyData()
        ];
        return view('admin/user/data_company_user', $data);
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
            'id' => $id,
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password')
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Di Update');
        return redirect()->to('/dashboard/data/users');
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

    public function tambahCou()
    {
        return view('admin/courier/tambah_courier');
    }

    public function simpanCou()
    {

        $this->couriersModel->save([
            'nama_kurir' => $this->request->getVar('nama'),
            'harga_kurir' => $this->request->getVar('harga')
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Di Simpan');
        return redirect()->to('/dashboard/data/courier');
    }

    public function editCou($id)
    {
        $data = [
            'courier' => $this->couriersModel->getCourierData($id)
        ];
        return view('admin/courier/form_edit_kurir', $data);
    }

    public function updateCou($id)
    {
        $this->couriersModel->save([
            'id' => $id,
            'nama_kurir' => $this->request->getVar('nama'),
            'harga_kurir' => $this->request->getVar('harga')
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Di Update');
        return redirect()->to('/dashboard/data/courier');
    }

    public function deleteCou($id)
    {
        $this->couriersModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Di Hapus');
        return redirect()->to('/dashboard/data/courier');
    }

    public function getTransaction()
    {
        $data = [
            'transaksi' => $this->transactionsModel->join3tableSA()
        ];

        return view('admin/transaksi/data_transaksi', $data);
    }
}
