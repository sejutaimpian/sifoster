<?php

namespace App\Controllers;

use App\Models\GabungModel;

class Anggota extends BaseController
{
    public function __construct()
    {
    }
    public function index()
    {
        $anggotaModel = new GabungModel();
        $anggota = $anggotaModel->getAnggotaUser();
        $data = [
            'title' => 'Daftar Anggota',
            'profile' => $this->profile,
            'anggota' => $anggota
        ];

        return view('pages/anggota', $data);
    }
}
