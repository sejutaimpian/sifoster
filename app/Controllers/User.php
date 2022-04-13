<?php

namespace App\Controllers;

class User extends BaseController
{
    public function __construct()
    {
    }
    public function index()
    {
        if (session()->get('isLoggedIn') == 'admin') {
            return redirect()->to('/admin');
        }

        $profile = $this->profileModel->findAll();
        $data = [
            'title' => 'User',
            'profile' => $profile
        ];
        return view('user/index', $data);
    }
}
