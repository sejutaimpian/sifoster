<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function __construct()
    {
    }
    public function index()
    {
        if (session()->get('isLoggedIn') == 'user') {
            return redirect()->to('/user');
        }

        $profile = $this->profileModel->findAll();
        $data = [
            'title' => 'Admin',
            'profile' => $profile
        ];
        return view('admin/index', $data);
    }
}
