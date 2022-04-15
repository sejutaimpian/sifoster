<?php

namespace App\Controllers;

class Gabung extends BaseController
{
    public function __construct()
    {
    }
    public function index()
    {
        $data = [
            'title' => 'Pendaftaran Peserta Didik Baru',
            'profile' => $this->profile,
            'validation' => \Config\Services::validation()
        ];
        return view('pages/gabung', $data);
    }
    public function save()
    {
        $this->gabungModel = new \App\Models\GabungModel();

        // Validasi Input
        if (!$this->validate([
            'namasiswa' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
            'tempatlahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
            'tanggallahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
            'jeniskelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
            'alamatrumah' => [
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
            'nowali' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
            'tinggi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
            'berat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
            'goldar' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
            'sekolah' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
            'kelas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
            'alamatsekolah' => [
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
            'klasifikasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
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
            'akte' => [
                'rules' => 'uploaded[akte]|max_size[akte,2048]|is_image[akte]|mime_in[akte,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Upload gambar terlebih dahulu!',
                    'max_size' => 'Ukuran gambar tidak boleh lebih dari 2MB',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ],
            'kartukeluarga' => [
                'rules' => 'uploaded[kartukeluarga]|max_size[kartukeluarga,2048]|is_image[kartukeluarga]|mime_in[kartukeluarga,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Upload gambar terlebih dahulu!',
                    'max_size' => 'Ukuran gambar tidak boleh lebih dari 2MB',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ],
            'kia' => [
                'rules' => 'uploaded[kia]|max_size[kia,2048]|is_image[kia]|mime_in[kia,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Upload gambar terlebih dahulu!',
                    'max_size' => 'Ukuran gambar tidak boleh lebih dari 2MB',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ],
            'nisn' => [
                'rules' => 'uploaded[nisn]|max_size[nisn,2048]|is_image[nisn]|mime_in[nisn,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Upload gambar terlebih dahulu!',
                    'max_size' => 'Ukuran gambar tidak boleh lebih dari 2MB',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ],
            'raport' => [
                'rules' => 'uploaded[raport]|max_size[raport,2048]|is_image[raport]|mime_in[raport,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Upload gambar terlebih dahulu!',
                    'max_size' => 'Ukuran gambar tidak boleh lebih dari 2MB',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ],
        ])) {
            // $validation =  \Config\Services::validation();
            // return redirect()->to('/dashboard/create')->withInput()->with('validation', $validation);
            return redirect()->to('/gabung#formulir')->withInput();
        }
        // Ambil File fotoformal
        $fotoUpload1 = $this->request->getFile('fotoformal');
        $namaFotoUpload1 = $fotoUpload1->getRandomName();
        $fotoUpload1->move('image', $namaFotoUpload1);
        // Ambil File akte
        $fotoUpload2 = $this->request->getFile('akte');
        $namaFotoUpload2 = $fotoUpload2->getRandomName();
        $fotoUpload2->move('image', $namaFotoUpload2);
        // Ambil File kartukeluarga
        $fotoUpload3 = $this->request->getFile('kartukeluarga');
        $namaFotoUpload3 = $fotoUpload3->getRandomName();
        $fotoUpload3->move('image', $namaFotoUpload3);
        // Ambil File kia
        $fotoUpload4 = $this->request->getFile('kia');
        $namaFotoUpload4 = $fotoUpload4->getRandomName();
        $fotoUpload4->move('image', $namaFotoUpload4);
        // Ambil File nisn
        $fotoUpload5 = $this->request->getFile('nisn');
        $namaFotoUpload5 = $fotoUpload5->getRandomName();
        $fotoUpload5->move('image', $namaFotoUpload5);
        // Ambil File raport
        $fotoUpload6 = $this->request->getFile('raport');
        $namaFotoUpload6 = $fotoUpload6->getRandomName();
        $fotoUpload6->move('image', $namaFotoUpload6);

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
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'klasifikasi' => $this->request->getPost('klasifikasi'),
            'fotoformal' => $namaFotoUpload1,
            'akte' => $namaFotoUpload2,
            'kartukeluarga' => $namaFotoUpload3,
            'kia' => $namaFotoUpload4,
            'nisn' => $namaFotoUpload5,
            'raport' => $namaFotoUpload6
        ]);

        session()->setFlashdata('pesan', 'Selamat! Kamu berhasil mendaftar!');

        return redirect()->to('/gabung');
    }
}
