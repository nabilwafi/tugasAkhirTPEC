<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CompaniesModel;
use App\Models\CouriersModel;
use App\Models\TransactionsModel;

class Pesanan extends BaseController
{

    protected $companiesModel;
    protected $couriersModel;
    protected $transactionModel;
    protected $validation;
    public function __construct()
    {
        $this->companiesModel = new CompaniesModel();
        $this->couriersModel = new CouriersModel();
        $this->transactionModel = new TransactionsModel();
        $this->validation = \Config\Services::validation();
    }

    public function index($device)
    {
        if (isset($_SESSION['user_id']) && $_SESSION['roles'] == 'customer') {
            if ($device == 'pc' || $device == 'laptop' || $device == 'handphone' || $device == 'printer') {

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

    public function submitServices()
    {
        if (!$this->validate([
            'id_customer' => 'required',
            'id_company' => 'required',
            'id_courier' => 'required',
            'name_device' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'The name device field is required'
                ]
            ],
            'keluhan' => 'required|min_length[5]'
        ])) {
            $validation = $this->validation;
            // dd($validation);
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        $input = [
            'id_customer' => $this->request->getVar('id_customer'),
            'id_company' => $this->request->getVar('id_company'),
            'id_courier' => $this->request->getVar('id_courier'),
            'nama_device' => $this->request->getVar('name_device'),
            'keluhan' => $this->request->getVar('keluhan'),
            'ppn' => '20%',
        ];

        $companyData = $this->companiesModel->getCompanyData($input['id_company']);
        $courierData = $this->couriersModel->getCourierData($input['id_courier']);

        $this->transactionModel->save([
            'id_customer' => $input['id_customer'],
            'id_company' => $input['id_company'],
            'id_courier' => $input['id_courier'],
            'nama_device' => $input['nama_device'],
            'keluhan' => $input['keluhan'],
            'ppn' => $input['ppn'],
            'total_harga' => ($companyData['harga_com'] + $courierData['harga_kurir']) * 120 / 100,
        ]);

        return redirect()->to('/data/pesanan/' . $input['id_customer']);
    }

    public function dataPesanan($transaksi)
    {
        $data = [
            'transaksi' => $this->transactionModel->join3table($transaksi)
        ];

        return view('frontend/checkout/data_pesanan', $data);
    }

    public function UploadBuktiPage($transaction)
    {
        $data = [
            "transaction" => $this->transactionModel->find($transaction),
            "validation" => $this->validation
        ];

        return view('frontend/checkout/upload_bukti', $data);
    }

    public function doUpload($transaction)
    {

        if(!$this->validate([
            'bukti_pembayaran' => [
                'rules' => 'uploaded[bukti_pembayaran]|is_image[bukti_pembayaran]',
            ]
        ])) {
            $validation = $this->validation;
            return redirect()->back()->withInput();
        }

        $input = [
            'user_id' => $this->request->getVar('user_id'),
            'transaction_id' => $this->request->getVar('transaction_id')
        ];
        
        $filesBukti = $this->request->getFile('bukti_pembayaran');
        $namaBukti = $filesBukti->getRandomName();
        $filesBukti->move('img', $namaBukti);

        $this->transactionModel->save([
            'id' => $input['transaction_id'],
            'bukti_pembayaran' => $namaBukti,
            'status_transaksi' => 'menunggu verifikasi'
        ]);

        return redirect()->to('/data/pesanan/'.$input['user_id']);

    }
}