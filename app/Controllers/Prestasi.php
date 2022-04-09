<?php

namespace App\Controllers;

class Prestasi extends BaseController
{
    public function __construct()
    {
    }
    public function index()
    {
        $profile = $this->profileModel->findAll();
        $data = [
            'title' => 'Prestasi',
            'profile' => $profile
        ];
        return view('pages/prestasi', $data);
    }
}
