<?php

namespace App\Controllers;

class Kompetisi extends BaseController
{
    public function __construct()
    {
    }
    public function index()
    {
        $profile = $this->profileModel->findAll();
        $data = [
            'title' => 'Kompetisi',
            'profile' => $profile
        ];
        return view('pages/kompetisi', $data);
    }
}
