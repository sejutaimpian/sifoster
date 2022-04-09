<?php

namespace App\Controllers;

class Gallery extends BaseController
{
    public function __construct()
    {
    }
    public function index()
    {
        $profile = $this->profileModel->findAll();
        $data = [
            'title' => 'Gallery',
            'profile' => $profile
        ];
        return view('pages/gallery', $data);
    }
}
