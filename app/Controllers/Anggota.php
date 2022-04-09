<?php

namespace App\Controllers;

class Anggota extends BaseController
{
    protected $anggota;
    public function __construct()
    {
        // $this->profileModel = new ProfileModel();
    }
    public function index()
    {
        $profile = $this->profileModel->findAll();
        $data = [
            'title' => 'Daftar Anggota',
            'profile' => $profile
        ];
        return view('pages/anggota', $data);
    }
}
