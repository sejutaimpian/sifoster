<?php

namespace App\Controllers;

class Anggota extends BaseController
{
    public function __construct()
    {
        // $this->profileModel = new ProfileModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Daftar Anggota',
            'profile' => $this->profile
        ];
        return view('pages/anggota', $data);
    }
}
