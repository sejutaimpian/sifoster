<?php

namespace App\Controllers;

class Informasi extends BaseController
{
    public function __construct()
    {
    }
    public function index()
    {
        $profile = $this->profileModel->findAll();
        $data = [
            'title' => 'Informasi',
            'profile' => $profile
        ];
        return view('pages/informasi', $data);
    }
}
