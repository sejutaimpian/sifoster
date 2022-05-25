<?php

namespace App\Controllers;

use App\Models\GabungModel;
use App\Models\KlasifikasiModel;

class Anggota extends BaseController
{
    public function __construct()
    {
    }
    public function index()
    {
        $anggotaModel = new GabungModel();
        $anggota = $anggotaModel->getAnggotaUser();
        $klasifikasiModel = new KlasifikasiModel();
        $klasifikasi = $klasifikasiModel->findAll();
        $data = [
            'title' => 'Daftar Anggota',
            'profile' => $this->profile,
            'anggota' => $anggota,
            'klasifikasi' => $klasifikasi
        ];

        return view('pages/anggota', $data);
    }
}
