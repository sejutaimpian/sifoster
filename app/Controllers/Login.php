<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function __construct()
    {
    }
    public function index()
    {
        $data = [
            'title' => 'Login',
            'profile' => $this->profile,
            'validation' => \Config\Services::validation()
        ];

        return view('pages/login', $data);
    }

    public function login()
    {
        // Ngambil inputan
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        if ($this->request->getMethod() == 'post') {
            //let's do the validation here
            if (!$this->validate([
                'email' => [
                    'rules' => 'required|valid_email',
                    'errors' => [
                        'required' => 'Kolom {field} harus diisi!',
                        'valid_email' => 'Kolom {field} harus berformat email'
                    ]
                ],
                'password' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Kolom {field} harus diisi!'
                    ]
                ]
            ])) {
                return redirect()->to('/login')->withInput();
            } else {
                $model = new UserModel();
                $user = $model->where('email', $email)
                    ->first();
                // Jika akun terdaftar
                if ($user) {
                    // Jika akun aktif
                    if ($user['is_active'] == 1) {
                        // Cek password
                        if (password_verify($password, $user['password'])) {
                            // Cek role
                            if ($user['role'] == 'admin') {
                                $this->setAdminSession($user);
                                return redirect()->to('/admin');
                            } else {
                                $this->setUserSession($user);
                                return redirect()->to('/user');
                            }
                        } else {
                            session()->setFlashdata('pesan', 'Maaf! email atau password salah!');
                            return redirect()->to('/login');
                        }
                    } else {
                        session()->setFlashdata('pesan', 'Maaf! akun ada belum aktif!');
                        return redirect()->to('/login');
                    }
                } else {
                    session()->setFlashdata('pesan', 'Maaf! email atau password salah!');
                    return redirect()->to('/login');
                }
            }
        }
    }
    private function setAdminSession($user)
    {
        $data = [
            'namasiswa' => $user['namasiswa'],
            'email' => $user['email'],
            'role' => $user['role'],
            'isLoggedIn' => 'admin',
        ];

        session()->set($data);
        return true;
    }
    private function setUserSession($user)
    {
        $data = [
            'namasiswa' => $user['namasiswa'],
            'email' => $user['email'],
            'role' => $user['role'],
            'isLoggedIn' => 'user',
        ];

        session()->set($data);
        return true;
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}
