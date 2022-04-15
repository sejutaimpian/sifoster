<?php

namespace App\Controllers;

class Gallery extends BaseController
{
    public function __construct()
    {
    }
    public function index()
    {
        $data = [
            'title' => 'Gallery',
            'profile' => $this->profile
        ];
        return view('pages/gallery', $data);
    }
}
