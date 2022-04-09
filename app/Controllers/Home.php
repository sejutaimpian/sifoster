<?php

namespace App\Controllers;

// use App\Models\ProfileModel;

class Home extends BaseController
{
    public function __construct()
    {
    }
    public function index()
    {
        $profile = $this->profileModel->getJoin();
        $data = [
            'title' => 'Home',
            'profile' => $profile
        ];
        return view('pages/home', $data);
    }
    public function anggota()
    {
        $data = [
            'title' => 'Daftar Anggota'
        ];
        return view('pages/anggota', $data);
    }
}
