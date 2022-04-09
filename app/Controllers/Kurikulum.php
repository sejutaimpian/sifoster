<?php

namespace App\Controllers;

class Kurikulum extends BaseController
{
    public function __construct()
    {
    }
    public function index()
    {
        $profile = $this->profileModel->findAll();
        $data = [
            'title' => 'Kurikulum',
            'profile' => $profile
        ];
        return view('pages/kurikulum', $data);
    }
}
