<?php

namespace App\Controllers;
use App\Models\AdminModel;

class Login extends BaseController
{
    public function index()
    {
        return view('index');
    }
    public function auth()
    {
        $session = session();
        $adminModel = new AdminModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $adminModel->where('username', $username)->first();
        if($data){
            $pass = $data['password'];
            // $verify_pass = password_verify($password, $pass);
            if($pass == $password){
                $ses_data = [
                    'id_pengguna'  => $data['id_pengguna'],
                    'nama_pengguna'=> $data['nama_pengguna'],
                    'password'     => $data['password'],
                    'level'        => $data['level'],
                    'logged_in'    => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/welcome_message');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/login');
        }
    }
  
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
