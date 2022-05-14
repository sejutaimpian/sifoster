<?php

namespace App\Controllers;

use App\Models\KurikulumModel;

class Kurikulum extends BaseController
{
    public function __construct()
    {
    }
    public function index()
    {
        $kurikulumModel = new KurikulumModel();
        $kurikulum = $kurikulumModel->findAll();
        $data = [
            'title' => 'Kurikulum',
            'profile' => $this->profile,
            'kurikulum' => $kurikulum
        ];
        return view('pages/kurikulum', $data);
    }
}
