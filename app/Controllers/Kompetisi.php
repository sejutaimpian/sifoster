<?php

namespace App\Controllers;

use App\Models\KategoriModel;
use App\Models\KompetisiModel;

class Kompetisi extends BaseController
{
    public function __construct()
    {
    }
    public function index()
    {
        $kategoriModel = new KategoriModel();
        $kategori = $kategoriModel->findAll();
        $kompetisiModel = new KompetisiModel();
        $kompetisi = $kompetisiModel->orderBy('waktukompetisi', 'DESC')->findAll();
        $data = [
            'title' => 'Kompetisi',
            'profile' => $this->profile,
            'kompetisi' => $kompetisi,
            'kategori' => $kategori
        ];
        return view('pages/kompetisi', $data);
    }
}
