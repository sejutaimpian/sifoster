<?php

namespace App\Controllers;

class User extends BaseController
{
    public function __construct()
    {
        $this->uri = service('uri');
    }
    public function index()
    {
        if (session()->get('isLoggedIn') == 'admin') {
            return redirect()->to('/admin');
        }
        $data = [
            'title' => 'User',
            'profile' => $this->profile,
            'uri' => $this->uri
        ];
        return view('user/index', $data);
    }
}
