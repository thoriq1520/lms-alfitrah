<?php

namespace App\Controllers;

use App\Models\m_auth;

class c_auth extends BaseController
{
    protected $authModel;
    public function __construct(){
        $this->authModel = new m_auth();
    }
    public function login()
    {
        echo view('auth/v_login');
    }

    public function login_proses(){
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $result = $this->authModel->cek_username($username);
        if ($result) {
            if($result['password'] != md5($password)){
                session()->setFlashdata('password', 'Password salah');
                return redirect()->route('login');
            }else{
                session()->set('login', $result['role']);
                return redirect()->route('/');
            }
        }else{
            session()->setFlashdata('username', 'Username tidak ditemukan');
            return redirect()->to('');
        }
    }

    function logout()
    {
        session()->destroy();
        return redirect()->to('');
    }

}


?>