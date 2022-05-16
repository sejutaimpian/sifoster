<?php

namespace App\Controllers;

use App\Models\GabungModel;
use App\Models\UserModel;

class User extends BaseController
{
    public function __construct()
    {
        $this->gabungModel = new GabungModel();
    }
    public function index()
    {
        if (session()->get('role') != 'user') {
            return redirect()->to('admin');
        }
        $gabung = $this->gabungModel->where('email', session()->get('email'))
            ->first();
        $data = [
            'title' => 'Data Diri',
            'profile' => $this->profile,
            'akun' => $gabung
        ];
        return view('user/index', $data);
    }

    // Anggota
    public function anggota()
    {
        if (session()->get('role') != 'user') {
            return redirect()->to('admin');
        }
        $anggota = $this->gabungModel->getAnggotaUser();
        $data = [
            'title' => 'Data Anggota',
            'profile' => $this->profile,
            'anggota' => $anggota
        ];
        return view('user/anggota', $data);
    }
}
