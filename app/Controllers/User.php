<?php

namespace App\Controllers;

use App\Models\GabungModel;
use App\Models\InformasiModel;
use App\Models\KompetisiModel;
use App\Models\KurikulumModel;
use App\Models\PelatihModel;
use App\Models\UserModel;

class User extends BaseController
{
    public function __construct()
    {
        $this->gabungModel = new GabungModel();
        $this->pelatihModel = new PelatihModel();
        $this->userModel = new UserModel();
        $this->kurikulumModel = new KurikulumModel();
        $this->informasiModel = new InformasiModel();
        $this->kompetisiModel = new KompetisiModel();

        $this->user = $this->userModel->where('id', session()->get('id'))->findAll();
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
            'akun' => $gabung,
            'user' => $this->user
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
            'anggota' => $anggota,
            'user' => $this->user
        ];
        return view('user/anggota', $data);
    }

    // Pelatih
    public function pelatih()
    {
        if (session()->get('role') != 'user') {
            return redirect()->to('admin');
        }
        $pelatih = $this->pelatihModel->findAll();
        $data = [
            'title' => 'Data Pelatih',
            'profile' => $this->profile,
            'pelatih' => $pelatih,
            'user' => $this->user
        ];
        return view('user/pelatih', $data);
    }

    // Kurikulum
    public function kurikulum()
    {
        if (session()->get('role') != 'user') {
            return redirect()->to('admin');
        }
        $kurikulum = $this->kurikulumModel->findAll();
        $data = [
            'title' => 'Kurikulum',
            'profile' => $this->profile,
            'kurikulum' => $kurikulum,
            'user' => $this->user
        ];
        return view('user/kurikulum', $data);
    }

    // Informasi
    public function informasi()
    {
        if (session()->get('role') != 'user') {
            return redirect()->to('admin');
        }
        $informasi = $this->informasiModel->getJoinAll();
        $data = [
            'title' => 'Inforamsi',
            'profile' => $this->profile,
            'informasi' => $informasi,
            'user' => $this->user
        ];
        return view('user/informasi', $data);
    }

    // Kompetisi
    public function kompetisi()
    {
        if (session()->get('role') != 'user') {
            return redirect()->to('admin');
        }
        $kompetisi = $this->kompetisiModel->findAll();
        $data = [
            'title' => 'Kompetisi',
            'profile' => $this->profile,
            'kompetisi' => $kompetisi,
            'user' => $this->user
        ];
        return view('user/kompetisi', $data);
    }
}
