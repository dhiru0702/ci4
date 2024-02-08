<?php

namespace Modules\LoginAuth\Controllers;

use Modules\main\Models\AuthLoginModel;
// use CodeIgniter\Controller;
use App\Controllers\BaseController;


class LoginController extends BaseController
{
  

    public function login()
    {
     
        return view('Modules\LoginAuth\Views\login');
    }
    public function registration()
    {
        // phpinfo();
        return view('Modules\LoginAuth\Views\registration');
    }
    // public function cekLogin()
    // {
    //     if ($this->validate([
    //         'username' => [
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => 'Username tidak boleh kosong!'
    //             ],
    //         ],
    //         'password' => [
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => 'Password tidak boleh kosong!'
    //             ],
    //         ],
    //     ])) {
    //         $username = $this->request->getPost('username');
    //         $password = $this->request->getPost('password');
    //         $check = $this->authModel->login($username, $password);
    //         if($check){
    //             // dd($check['role']);
    //             session()->set('log', true);
    //             session()->set('username_log', $check['username']);
    //             session()->set('nama_log', $check['nama']);
    //             session()->set('role_log', $check['role']);
    //             return redirect()->to(base_url('admin'));
    //         }else{
    //             session()->setFlashdata('fail', 'Login gagal, username atau password tidak ditemukan');
    //             return redirect()->to(base_url());
    //         }
    //     }else{
    //         session()->setFlashdata('fail', 'Login gagal, username atau password tidak ditemukan');
    //         return redirect()->to(base_url());
    //     }
    // }

    // public function logout(){
    //     session()->destroy();
    //     session()->setFlashdata('success', 'Logout berhasil');
    //     return redirect()->to(base_url());
    // }
}
