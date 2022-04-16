<?php

namespace App\Controllers;

use App\Models\KategoriModel;
use App\Models\PrestasiModel;

class Prestasi extends BaseController
{
    public function __construct()
    {
    }
    public function index()
    {
        $kategoriModel = new KategoriModel();
        $kategori = $kategoriModel->findAll();
        $prestasiModel = new PrestasiModel();
        $prestasi = $prestasiModel->findAll();
        $data = [
            'title' => 'Prestasi',
            'profile' => $this->profile,
            'kategori' => $kategori,
            'prestasi' => $prestasi
        ];
        return view('pages/prestasi', $data);
    }
}
