<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\CompaniesModel;
use App\Models\CustomersModel;

class Form extends BaseController
{
    protected $customersModel;
    protected $companiesModel;
    protected $adminModel;
    protected $validation;
    public function __construct()
    {
        $this->customersModel = new CustomersModel();
        $this->companiesModel = new CompaniesModel();
        $this->adminModel = new AdminModel();
        $this->validation = \Config\Services::validation();
    }


    public function indexUser()
    {
        if (isset($_SESSION['user_id'])) {
            return redirect()->to('/');
        }

        $data = [
            'validation' => $this->validation
        ];

        return view('form/user/login', $data);
    }

    public function registerUser()
    {
        if (isset($_SESSION['user_id'])) {
            return redirect()->to('/');
        }

        $data = [
            'validation' =>  $this->validation
        ];

        return view('form/user/register', $data);
    }

    public function addUser()
    {
        if (!$this->validate([
            'name' => 'required|min_length[3]',
            'email' => 'required|is_unique[customers.email,id,{id}]',
            'alamat' => 'required|min_length[10]',
            'telp' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'The Phone field is required',
                    'numeric' => 'The Phone field must contain only numbers'
                ]
            ],
            'password' => 'required|min_length[6]',
            'confirm_password' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'The confirm password field is required',
                    'matches' => 'The confirm password is not matchs with password'
                ]
            ]
        ])) {
            $validation = $this->validation;
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        $this->customersModel->save([
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'alamat' => $this->request->getVar('alamat'),
            'telp' => $this->request->getVar('telp'),
            'password' => $this->request->getVar('password')
        ]);

        return redirect()->to('/login')->with('success', 'Success created account, please log in first!');
    }

    public function verifyUser()
    {
        if (!$this->validate([
            'email' => 'required',
            'password' => 'required|min_length[6]'
        ])) {
            $validation = $this->validation;
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        $input = [
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
        ];

        $data = $this->customersModel->getCustomersData($input['email']);

        if ($data) {
            if ($data['email'] == $input['email'] && $data['password'] == $input['password']) {
                $_SESSION['user_id'] = $data['id'];
                $_SESSION['name'] = $data['name'];
                $_SESSION['roles'] = $data['roles'];
                return redirect()->to('/');
            }

            return redirect()->back()->withInput()->with('error', 'invalid input email or password, please try again!');
        }

        return redirect()->back()->with('error', 'there\'s no data on database, please register as customer first!');
    }

    public function indexCompany()
    {
        if (isset($_SESSION['user_id'])) {
            return redirect()->to('/');
        }

        $data = [
            'validation' => $this->validation
        ];

        return view('form/company/login', $data);
    }

    public function registerCompany()
    {
        if (isset($_SESSION['user_id'])) {
            return redirect()->to('/');
        }

        $data = [
            'validation' =>  $this->validation
        ];

        return view('form/company/register', $data);
    }

    public function addCompany()
    {
        if (!$this->validate([
            'name' => 'required|min_length[3]',
            'email' => 'required|is_unique[customers.email,id,{id}]',
            'alamat' => 'required|min_length[10]',
            'harga' => 'required|numeric',
            'password' => 'required|min_length[6]',
            'confirm_password' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'The confirm password field is required',
                    'matches' => 'The confirm password is not matchs with password'
                ],
            ],
            'jenis_devices' => [
                'rules' => 'required|in_list[handphone,laptop,pc,printer]',
                'errors' => [
                    'required' => 'The jenis devices field is required',
                    'in_list' => 'The jenis devices field must be on of: Handphone, Laptop, PC, Printer'
                ]
            ]
        ])) {
            $validation = $this->validation;
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        $this->companiesModel->save([
            'nama' => $this->request->getVar('name'),
            'jenis_devices' => $this->request->getVar('jenis_devices'),
            'harga' => $this->request->getVar('harga'),
            'email' => $this->request->getVar('email'),
            'alamat' => $this->request->getVar('alamat'),
            'password' => $this->request->getVar('password')
        ]);

        return redirect()->to('/login/company')->with('success', 'Success created account, please log in first!');
    }

    public function verifyCompany()
    {
        if (!$this->validate([
            'email' => 'required',
            'password' => 'required|min_length[6]'
        ])) {
            $validation = $this->validation;
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        $input = [
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
        ];

        $data = $this->companiesModel->getCompanyData($input['email']);

        if ($data) {
            if ($data['email'] == $input['email'] && $data['password'] == $input['password']) {
                $_SESSION['user_id'] = $data['id'];
                $_SESSION['name'] = $data['nama'];
                $_SESSION['roles'] = $data['roles'];
                return redirect()->to('/dashboard');
            }

            return redirect()->back()->withInput()->with('error', 'invalid input email or password, please try again!');
        }

        return redirect()->back()->with('error', 'there\'s no data on database, please register as company first!');
    }

    public function indexAdmin()
    {
        if (isset($_SESSION['user_id'])) {
            return redirect()->to('/');
        }

        $data = [
            'validation' => $this->validation
        ];

        return view('form/admin/login', $data);
    }

    public function verifyAdmin()
    {
        if (!$this->validate([
            'email' => 'required',
            'password' => 'required|min_length[6]'
        ])) {
            $validation = $this->validation;
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        $input = [
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
        ];

        $data = $this->adminModel->getAdminData($input['email']);

        if ($data) {
            if ($data['email'] == $input['email'] && $data['password'] == $input['password']) {
                $_SESSION['user_id'] = $data['id'];
                $_SESSION['name'] = $data['name'];
                $_SESSION['roles'] = $data['roles'];
                return redirect()->to('/');
            }

            return redirect()->back()->withInput()->with('error', 'invalid input email or password, please try again!');
        }

        return redirect()->back()->with('error', 'there\'s no data on database, YOU ARE NOT ADMIN!');
    }

    public function logout()
    {

        unset(
            $_SESSION['user_id'],
            $_SESSION['name'],
            $_SESSION['roles']
        );
        return redirect()->to('/')->with('success-logout', 'Successfully logout');
    }
}
