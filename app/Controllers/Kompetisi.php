<?php

namespace App\Controllers;

use App\Models\KompetisiModel;

class Kompetisi extends BaseController
{
    public function __construct()
    {
    }
    public function index()
    {
        $kompetisiModel = new KompetisiModel();
        $kompetisi = $kompetisiModel->orderBy('waktukompetisi', 'DESC')->findAll();
        $data = [
            'title' => 'Kompetisi',
            'profile' => $this->profile,
            'kompetisi' => $kompetisi
        ];
        return view('pages/kompetisi', $data);
    }
}
