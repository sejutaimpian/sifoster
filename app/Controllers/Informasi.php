<?php

namespace App\Controllers;

class Informasi extends BaseController
{
    public function __construct()
    {
    }
    public function index()
    {
        $data = [
            'title' => 'Informasi',
            'profile' => $this->profile
        ];
        return view('pages/informasi', $data);
    }
}
