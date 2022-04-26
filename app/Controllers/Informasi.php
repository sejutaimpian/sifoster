<?php

namespace App\Controllers;

use App\Models\InformasiModel;
use App\Models\KategoriModel;

class Informasi extends BaseController
{
    public function __construct()
    {
        $this->kategoriModel = new KategoriModel();
        $this->informasiModel = new InformasiModel();
        $this->kategori = $this->kategoriModel->findAll();
    }
    public function index()
    {
        $informasi = $this->informasiModel->getJoinAll();
        $data = [
            'title' => 'Informasi',
            'profile' => $this->profile,
            'kategori' => $this->kategori,
            'informasi' => $informasi
        ];
        return view('pages/informasi', $data);
    }
    public function detail($id)
    {
        $informasikategori = $this->informasiModel->getJoinInformasiKategori($id);
        $data = [
            'title' => 'Informasi',
            'profile' => $this->profile,
            'kategori' => $this->kategori,
            'informasi' => $informasikategori
        ];
        return view('pages/informasidetail', $data);
    }
}
