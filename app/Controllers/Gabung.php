<?php

namespace App\Controllers;

class Gabung extends BaseController
{
    public function __construct()
    {
    }
    public function index()
    {
        $profile = $this->profileModel->findAll();
        $data = [
            'title' => 'Pendaftaran Peserta Didik Baru',
            'profile' => $profile,
            'validation' => \Config\Services::validation()
        ];
        return view('pages/gabung', $data);
    }
    public function save()
    {
        $this->gabungModel = new \App\Models\GabungModel();
        $this->gabungModel->save([
            'namasiswa' => $this->request->getPost('namasiswa'),
            'tempatlahir' => $this->request->getPost('tempatlahir'),
            'tanggallahir' => $this->request->getPost('tanggallahir'),
            'jeniskelamin' => $this->request->getPost('jeniskelamin'),
            'alamatrumah' => $this->request->getPost('alamatrumah'),
            'nowhatsapp' => $this->request->getPost('nowhatsapp'),
            'nowali' => $this->request->getPost('nowali'),
            'tinggi' => $this->request->getPost('tinggi'),
            'berat' => $this->request->getPost('berat'),
            'goldar' => $this->request->getPost('goldar'),
            'sekolah' => $this->request->getPost('sekolah'),
            'kelas' => $this->request->getPost('kelas'),
            'alamatsekolah' => $this->request->getPost('alamatsekolah'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            'fotoformal' => $this->request->getPost('fotoformal'),
            'akte' => $this->request->getPost('akte'),
            'kartukeluarga' => $this->request->getPost('kartukeluarga'),
            'kia' => $this->request->getPost('kia'),
            'nisn' => $this->request->getPost('nisn'),
            'raport' => $this->request->getPost('raport')
        ]);

        session()->setFlashdata('pesan', 'Selamat! Kamu berhasil mendaftar!');

        return redirect()->to('/gabung');
    }
}
