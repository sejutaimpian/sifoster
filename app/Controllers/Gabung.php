<?php

namespace App\Controllers;

class Gabung extends BaseController
{
    public function __construct()
    {
    }
    public function index()
    {
        $profile = $this->profileModel->findAll();
        $data = [
            'title' => 'Pendaftaran Peserta Didik Baru',
            'profile' => $profile
        ];
        return view('pages/gabung', $data);
    }
}
