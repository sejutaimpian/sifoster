<?php

namespace App\Controllers;

class Pelatih extends BaseController
{
    protected $pelatih;
    public function __construct()
    {
        // $this->profileModel = new ProfileModel();
    }
    public function index()
    {
        $profile = $this->profileModel->findAll();
        $data = [
            'title' => 'Daftar Pelatih',
            'profile' => $profile
        ];
        return view('pages/pelatih', $data);
    }
}
