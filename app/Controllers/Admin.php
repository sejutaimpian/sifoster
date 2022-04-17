<?php

namespace App\Controllers;

use App\Models\GabungModel;
use App\Models\PelatihModel;
use App\Models\PrestasiModel;
use App\Models\UserModel;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->uri = service('uri');
    }
    public function index()
    {
        if (session()->get('isLoggedIn') == 'user') {
            return redirect()->to('/user');
        }
        $gabungModel = new GabungModel();
        $usermodel = new UserModel();
        $pelatihModel = new PelatihModel();
        $prestasiModel = new PrestasiModel();
        $gabung = $gabungModel->findAll();
        $akun = $usermodel->orderBy('is_active', 'ASC')->findAll();
        $pelatih = $pelatihModel->findAll();
        $prestasi = $prestasiModel->findAll();
        $data = [
            'title' => 'Admin',
            'profile' => $this->profile,
            'uri' => $this->uri,
            'gabung' => $gabung,
            'akun' => $akun,
            'pelatih' => $pelatih,
            'prestasi' => $prestasi
        ];
        return view('admin/index', $data);
    }
    public function anggota()
    {
        if (session()->get('role') != 'admin') {
            return redirect()->to('user');
        }
        $data = [
            'title' => 'Data Anggota',
            'profile' => $this->profile,
            'uri' => $this->uri
        ];
        return view('admin/anggota', $data);
    }
    public function manajemenakun()
    {
        if (session()->get('role') != 'admin') {
            return redirect()->to('user');
        }
        $usermodel = new UserModel();
        $akun = $usermodel->orderBy('is_active', 'ASC')->findAll();
        $data = [
            'title' => 'Manajemen Akun',
            'profile' => $this->profile,
            'uri' => $this->uri,
            'akun' => $akun,
            'validation' => \Config\Services::validation()
        ];
        return view('admin/manajemenakun', $data);
    }
    public function tambahakun()
    {
        if (session()->get('isLoggedIn') == 'user') {
            return redirect()->to('/user');
        }

        $userModel = new UserModel();

        // Validasi Input
        if (!$this->validate([
            'namasiswa' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
            'nowhatsapp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!',
                    'valid_email' => 'Kolom {field} harus berformat email'
                ]
            ],
            'password' => [
                'rules' => 'required|matches[konfirmasipassword]',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!',
                    'matches' => 'Password Konfirmasi tidak sesuai'
                ]
            ],
            'konfirmasipassword' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!',
                    'matches' => 'Password Konfirmasi tidak sesuai'
                ]
            ],
            'fotoformal' => [
                'rules' => 'uploaded[fotoformal]|max_size[fotoformal,2048]|is_image[fotoformal]|mime_in[fotoformal,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Upload gambar terlebih dahulu!',
                    'max_size' => 'Ukuran gambar tidak boleh lebih dari 2MB',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ],
            'role' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
            'is_active' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
        ])) {
            // $validation =  \Config\Services::validation();
            // return redirect()->to('/dashboard/create')->withInput()->with('validation', $validation);
            session()->setFlashdata('peringatan', 'Akun gagal didaftarkan dikarenakan ada penginputan yang tidak sesuai. silakan coba lagi!');
            return redirect()->to('/admin/manajemenakun')->withInput();
        }
        // Ambil File fotoformal
        $fotoUpload1 = $this->request->getFile('fotoformal');
        $namaFotoUpload1 = $fotoUpload1->getRandomName();
        $fotoUpload1->move('image', $namaFotoUpload1);

        $userModel->save([
            'id' => $this->request->getPost('id'),
            'namasiswa' => $this->request->getPost('namasiswa'),
            'nowhatsapp' => $this->request->getPost('nowhatsapp'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'fotoformal' => $namaFotoUpload1,
            'role' => $this->request->getPost('role'),
            'is_active' => $this->request->getPost('is_active')
        ]);

        session()->setFlashdata('pesan', 'Akun baru sudah didaftarkan!');

        return redirect()->to('/admin/manajemenakun');
    }
    public function detailakun($id)
    {
        if (session()->get('isLoggedIn') == 'user') {
            return redirect()->to('/user');
        }
        $gabungModel = new GabungModel();
        $gabung = $gabungModel->where('id', $id)->findAll();
        $data = [
            'title' => 'Detail Anggota',
            'profile' => $this->profile,
            'uri' => $this->uri,
            'gabung' => $gabung
        ];
        return view('admin/detailanggota', $data);
    }
}
