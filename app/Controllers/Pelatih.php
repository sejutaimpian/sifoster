<?php

namespace App\Controllers;

class Pelatih extends BaseController
{
    public function __construct()
    {
        $this->pelatihModel = new \App\Models\PelatihModel();
    }
    public function index()
    {
        $profile = $this->profileModel->findAll();
        $pelatih = $this->pelatihModel->findAll();
        $data = [
            'title' => 'Daftar Pelatih',
            'profile' => $profile,
            'pelatih' => $pelatih
        ];
        return view('pages/pelatih', $data);
    }
}
