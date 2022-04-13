<?php

namespace App\Controllers;

class User extends BaseController
{
    public function __construct()
    {
    }
    public function index()
    {
        $profile = $this->profileModel->findAll();
        $data = [
            'title' => 'User',
            'profile' => $profile
        ];
        return view('user/index', $data);
    }
}
