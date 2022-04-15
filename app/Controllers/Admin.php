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
        $data = [
            'title' => 'Admin',
            'profile' => $this->profile,
            'uri' => $this->uri
        ];
        return view('admin/index', $data);
    }
}
