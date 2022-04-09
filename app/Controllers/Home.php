<?php

namespace App\Controllers;

use App\Models\ProfileModel;

class Home extends BaseController
{
    protected $profileModel;
    public function __construct()
    {
        $this->profileModel = new ProfileModel();
    }
    public function index()
    {
        $profile = $this->profileModel->findAll();
        $data = [
            'title' => 'Home',
            'profile' => $profile
        ];
        return view('pages/home', $data);
    }
}
