<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    public function __construct()
    {
        $model = new UserModel();
        $this->user = $model->where('email', session()->get('email'))
            ->first();
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
            'uri' => $this->uri,
            'akun' => $this->user
        ];
        return view('user/index', $data);
    }
}
