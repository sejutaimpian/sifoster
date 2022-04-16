<?php

namespace App\Controllers;

use App\Models\GabungModel;
use App\Models\PelatihModel;
use App\Models\UserModel;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->uri = service('uri');
    }
    public function index()
    {
        if (session()->get('isLoggedIn') == 'user') {
            return redirect()->to('/user');
        }
        $gabungModel = new GabungModel();
        $usermodel = new UserModel();
        $pelatihModel = new PelatihModel();
        $gabung = $gabungModel->findAll();
        $akun = $usermodel->orderBy('is_active', 'ASC')->findAll();
        $pelatih = $pelatihModel->findAll();
        $data = [
            'title' => 'Admin',
            'profile' => $this->profile,
            'uri' => $this->uri,
            'gabung' => $gabung,
            'akun' => $akun,
            'pelatih' => $pelatih
        ];
        return view('admin/index', $data);
    }
    public function anggota()
    {
        if (session()->get('role') != 'admin') {
            return redirect()->to('user');
        }
        $data = [
            'title' => 'Data Anggota',
            'profile' => $this->profile,
            'uri' => $this->uri
        ];
        return view('admin/anggota', $data);
    }
}
