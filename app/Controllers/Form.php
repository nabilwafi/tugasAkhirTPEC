<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Form extends BaseController
{
    protected $UsersModel;
    protected $validation;
    public function __construct()
    {
        $this->UsersModel = new UsersModel();
        $this->validation = \Config\Services::validation();
    }

    public function index()
    {
        if (isset($_SESSION['user_id'])) {
            return redirect()->to('/');
        }

        $data = [
            'validation' => $this->validation
        ];
        return view('form/login.php', $data);
    }

    public function indexAdmin()
    {
        if(isset($_SESSION['user_id'])) {
            return redirect()->to('/');
        }

        $data = [
            'validation' => $this->validation
        ];
        return view('form/loginAdmin.php', $data);
    }

    public function verifyAdmin()
    {
        if(!$this->validate([
            'email' => 'required',
            'password' => 'required|min_length[6]',
        ])) {
            $validation = $this->validation;
            // dd($validation);
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        $input = [
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
        ];

        $data = $this->UsersModel->getUserData($this->request->getVar('email'));

        if($data != null) {
            if($data['roles'] == 'superadmin') {
                if($data['email'] == $input['email']) {
                    if($data['password'] != $input['password']) {
                        return redirect()->back()->with('error', 'Invalid password, please try again!');
                    }
                        $_SESSION['user_id'] = $data['id'];
                        $_SESSION['name'] = $data['name'];
                        $_SESSION['roles'] = $data['roles'];
                        
                        return redirect()->to('/dashboard');
                }
                return redirect()->back()->withInput()->with('error', 'Invalid email, please try again!');
            }
            return redirect()->back()->withInput()->with('error', 'Your are not superadmin!');
        }

        return redirect()->back()->with('error', 'There\'s no your data in database, please register first');
    }

    public function verify()
    {
        if (!$this->validate([
            'email' => 'required',
            'password' => 'required|min_length[6]',
            'roles' => 'required'
        ])) {
            $validation = $this->validation;
            // dd($validation);
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        $input = [
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
            'roles' => $this->request->getVar('roles')
        ];

        $data = $this->UsersModel->getUserData($this->request->getVar('email'));

        if ($data != null) {
            if ($data['email'] == $input['email']) {
                if ($data['password'] != $input['password']) {
                    return redirect()->back()->with('error', 'Invalid password, please try again!');
                }

                if ($data['roles'] == $input['roles']) {

                    $_SESSION['user_id'] = $data['id'];
                    $_SESSION['name'] = $data['name'];
                    $_SESSION['roles'] = $data['roles'];

                    if ($data['roles'] == 'company' || $data['roles'] == 'superadmin') {
                        return redirect()->to('/dashboard');
                    }

                    return redirect()->to('/');
                }

                return  redirect()->back()->with('error', 'You are not in that role, please try again!');
            }
        }

        return redirect()->back()->with('error', 'There\'s no your data in database, please register first');
    }

    public function register()
    {
        if (isset($_SESSION['user_id'])) {
            return redirect()->to('/');
        }

        $data = [
            'validation' => $this->validation
        ];

        return view('form/register.php', $data);
    }

    public function addUser()
    {
        if (!$this->validate([
            'name' => 'required|min_length[5]',
            'email' => 'required|is_unique[users.email,id,{id}]',
            'password' => 'required|min_length[6]',
            'confirm_password' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'The Confirm Password field is required',
                    'matches' => 'The Confirm Password field does not match the password field'
                ],
            ],
            'roles' => 'required'
        ])) {
            $validation = $this->validation;
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        $this->UsersModel->save([
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
            'roles' => $this->request->getVar('roles'),
        ]);

        return redirect()->to('/login')->with('success', 'Success Created Account, Please Log In First!');
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('/login');
    }
}
