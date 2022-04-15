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
        $pelatih = $this->pelatihModel->findAll();
        $data = [
            'title' => 'Daftar Pelatih',
            'profile' => $this->profile,
            'pelatih' => $pelatih
        ];
        return view('pages/pelatih', $data);
    }
}
