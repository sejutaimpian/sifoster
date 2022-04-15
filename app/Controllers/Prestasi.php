<?php

namespace App\Controllers;

class Prestasi extends BaseController
{
    public function __construct()
    {
    }
    public function index()
    {
        $data = [
            'title' => 'Prestasi',
            'profile' => $this->profile
        ];
        return view('pages/prestasi', $data);
    }
}
