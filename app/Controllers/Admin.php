<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function __construct()
    {
    }
    public function index()
    {
        $profile = $this->profileModel->findAll();
        $data = [
            'title' => 'Admin',
            'profile' => $profile
        ];
        return view('admin/index', $data);
    }
}
