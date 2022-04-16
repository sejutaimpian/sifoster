<?php

namespace App\Controllers;

use App\Models\PelatihModel;

class Pelatih extends BaseController
{
    public function __construct()
    {
        $this->pelatihModel = new PelatihModel();
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
