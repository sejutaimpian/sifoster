<?php

namespace App\Controllers;

class Kompetisi extends BaseController
{
    public function __construct()
    {
    }
    public function index()
    {
        $data = [
            'title' => 'Kompetisi',
            'profile' => $this->profile
        ];
        return view('pages/kompetisi', $data);
    }
}
