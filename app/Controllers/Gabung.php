<?php

namespace App\Controllers;

class Gabung extends BaseController
{
    public function __construct()
    {
    }
    public function index()
    {
        helper('eris');
        $profile = $this->profileModel->findAll();
        $data = [
            'title' => 'Pendaftaran Peserta Didik Baru',
            'profile' => $profile,
            'validation' => \Config\Services::validation()
        ];
        return view('pages/gabung', $data);
    }
}
