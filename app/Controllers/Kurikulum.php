<?php

namespace App\Controllers;

class Kurikulum extends BaseController
{
    public function __construct()
    {
    }
    public function index()
    {
        $data = [
            'title' => 'Kurikulum',
            'profile' => $this->profile
        ];
        return view('pages/kurikulum', $data);
    }
}
