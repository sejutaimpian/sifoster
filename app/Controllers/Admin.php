<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->uri = service('uri');
    }
    public function index()
    {
        if (session()->get('isLoggedIn') == 'user') {
            return redirect()->to('/user');
        }

        $profile = $this->profileModel->findAll();
        $data = [
            'title' => 'Admin',
            'profile' => $profile,
            'uri' => $this->uri
        ];
        return view('admin/index', $data);
    }
}
