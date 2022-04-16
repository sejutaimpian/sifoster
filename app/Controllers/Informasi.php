<?php

namespace App\Controllers;

use App\Models\KategoriModel;

class Informasi extends BaseController
{
    public function __construct()
    {
        $this->kategoriModel = new KategoriModel();
        $this->kategori = $this->kategoriModel->findAll();
    }
    public function index()
    {
        $data = [
            'title' => 'Informasi',
            'profile' => $this->profile,
            'kategori' => $this->kategori
        ];
        return view('pages/informasi', $data);
    }
    public function detail($id)
    {
        $data = [
            'title' => 'Informasi',
            'profile' => $this->profile,
            'kategori' => $this->kategori
        ];
        return view('pages/informasidetail', $data);
    }
}
