<?php

namespace App\Controllers;

use App\Models\GabungModel;
use App\Models\InformasiModel;
use App\Models\KategoriModel;
use App\Models\KlasifikasiModel;
use App\Models\KompetisiModel;
use App\Models\KurikulumModel;
use App\Models\PelatihModel;
use App\Models\PrestasiModel;
use App\Models\UserModel;

class User extends BaseController
{
    public function __construct()
    {
        $this->gabungModel = new GabungModel();
        $this->pelatihModel = new PelatihModel();
        $this->userModel = new UserModel();
        $this->kurikulumModel = new KurikulumModel();
        $this->informasiModel = new InformasiModel();
        $this->kompetisiModel = new KompetisiModel();
        $this->prestasiModel = new PrestasiModel();
        $this->kategoriModel = new KategoriModel();
        $this->klasifikasiModel = new KlasifikasiModel();

        $this->user = $this->userModel->where('id', session()->get('id'))->findAll();
    }
    public function index()
    {
        if (session()->get('role') != 'user') {
            return redirect()->to('admin');
        }
        $gabung = $this->gabungModel->where('email', session()->get('email'))
            ->first();
        $data = [
            'title' => 'Data Diri',
            'profile' => $this->profile,
            'akun' => $gabung,
            'user' => $this->user
        ];
        return view('user/index', $data);
    }

    // Anggota
    public function anggota()
    {
        if (session()->get('role') != 'user') {
            return redirect()->to('admin');
        }
        $anggota = $this->gabungModel->getAnggotaUser();
        $klasifikasi = $this->klasifikasiModel->findAll();
        $data = [
            'title' => 'Data Anggota',
            'profile' => $this->profile,
            'anggota' => $anggota,
            'user' => $this->user,
            'klasifikasi' => $klasifikasi
        ];
        return view('user/anggota', $data);
    }

    // Pelatih
    public function pelatih()
    {
        if (session()->get('role') != 'user') {
            return redirect()->to('admin');
        }
        $pelatih = $this->pelatihModel->findAll();
        $data = [
            'title' => 'Data Pelatih',
            'profile' => $this->profile,
            'pelatih' => $pelatih,
            'user' => $this->user
        ];
        return view('user/pelatih', $data);
    }

    // Kurikulum
    public function kurikulum()
    {
        if (session()->get('role') != 'user') {
            return redirect()->to('admin');
        }
        $kurikulum = $this->kurikulumModel->findAll();
        $data = [
            'title' => 'Kurikulum',
            'profile' => $this->profile,
            'kurikulum' => $kurikulum,
            'user' => $this->user
        ];
        return view('user/kurikulum', $data);
    }

    // Informasi
    public function informasi()
    {
        if (session()->get('role') != 'user') {
            return redirect()->to('admin');
        }
        $informasi = $this->informasiModel->getJoinAll();
        $data = [
            'title' => 'Inforamsi',
            'profile' => $this->profile,
            'informasi' => $informasi,
            'user' => $this->user
        ];
        return view('user/informasi', $data);
    }
    public function tulisan()
    {
        if (session()->get('role') != 'user') {
            return redirect()->to('admin');
        }
        $kategori = $this->kategoriModel->findAll();
        $data = [
            'title' => 'Data Informasi',
            'profile' => $this->profile,
            'kategori' => $kategori,
            'validation' => \Config\Services::validation(),
            'user' => $this->user
        ];
        return view('user/tulisan', $data);
    }
    public function tambahtulisan()
    {
        if (session()->get('role') != 'user') {
            return redirect()->to('admin');
        }

        // Validasi Input
        if (!$this->validate([
            'penulis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
            'kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
            'gambar' => [
                'rules' => 'uploaded[gambar]|max_size[gambar,2048]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Upload gambar terlebih dahulu!',
                    'max_size' => 'Ukuran gambar tidak boleh lebih dari 2MB',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ],
            'isi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
        ])) {
            // $validation =  \Config\Services::validation();
            // return redirect()->to('/dashboard/create')->withInput()->with('validation', $validation);
            session()->setFlashdata('peringatan', 'Tulisan gagal didaftarkan dikarenakan ada penginputan yang tidak sesuai. silakan coba lagi!');
            return redirect()->to('/user/tulisan')->withInput();
        }
        // Ambil File gambarformal
        $fotoUpload1 = $this->request->getFile('gambar');
        $namaFotoUpload1 = $fotoUpload1->getRandomName();
        $fotoUpload1->move('image', $namaFotoUpload1);

        $this->informasiModel->save([
            'penulis' => $this->request->getPost('penulis'),
            'judul' => $this->request->getPost('judul'),
            'isi' => $this->request->getPost('isi'),
            'idkategori' => $this->request->getPost('kategori'),
            'gambar' => $namaFotoUpload1,
        ]);

        session()->setFlashdata('pesan', 'Informasi baru sudah didaftarkan!');

        return redirect()->to('/user/informasi');
    }

    // Kompetisi
    public function kompetisi()
    {
        if (session()->get('role') != 'user') {
            return redirect()->to('admin');
        }
        $kompetisi = $this->kompetisiModel->findAll();
        $data = [
            'title' => 'Kompetisi',
            'profile' => $this->profile,
            'kompetisi' => $kompetisi,
            'user' => $this->user
        ];
        return view('user/kompetisi', $data);
    }

    // Prestasi
    public function prestasi()
    {
        if (session()->get('role') != 'user') {
            return redirect()->to('admin');
        }
        $prestasi = $this->prestasiModel->findAll();
        $data = [
            'title' => 'Prestasi',
            'profile' => $this->profile,
            'prestasi' => $prestasi,
            'user' => $this->user
        ];
        return view('user/prestasi', $data);
    }

    // Keuangan
    public function keuangan()
    {
        return view('errors/html/error_eris');
    }

    // Lainnya
    public function profileorganisasi()
    {
        if (session()->get('role') != 'user') {
            return redirect()->to('admin');
        }
        $profileorganisasi = $this->profileModel->getJoin();
        $data = [
            'title' => 'Profile Organisasi',
            'profile' => $this->profile,
            'profileorganisasi' => $profileorganisasi,
            'user' => $this->user
        ];
        return view('user/profileorganisasi', $data);
    }
    public function manajemenakun()
    {
        if (session()->get('role') != 'user') {
            return redirect()->to('admin');
        }
        $data = [
            'title' => 'Manajemen Akun',
            'profile' => $this->profile,
            'akun' => $this->user,
            'user' => $this->user
        ];
        return view('user/manajemenakun', $data);
    }
    public function editakun($id)
    {
        if (session()->get('role') != 'user') {
            return redirect()->to('admin');
        }
        $data = [
            'title' => 'Edit Akun',
            'profile' => $this->profile,
            'user' => $this->user,
            'validation' => \Config\Services::validation()
        ];
        return view('user/editakun', $data);
    }
    public function updateakun($id)
    {
        if (session()->get('role') != 'user') {
            return redirect()->to('admin');
        }
        // Cek Fotoformal
        if ($this->request->getPost('fotoformal') != null) {
            $fotoformal = $this->request->getFile('fotoformal');
            $rule_fotoformal = "uploaded[fotoformal]|max_size[fotoformal,2048]|is_image[fotoformal]|mime_in[fotoformal,image/jpg,image/jpeg,image/png]";
        } else {
            $fotoformal = $this->user[0]['fotoformal'];
            $rule_fotoformal = "permit_empty";
        }

        // Cek Password
        if ($this->request->getPost('password') == "") {
            $password = $this->user[0]['password'];
            $rule_password = "permit_empty";
            $rule_konfirmasipassword = "permit_empty";
        } else {
            $password = $this->request->getPost('password');
            $rule_password = "matches[konfirmasipassword]";
            $rule_konfirmasipassword = "matches[password]";
        }

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
                'rules' => $rule_password,
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!',
                    'matches' => 'Password Konfirmasi tidak sesuai'
                ]
            ],
            'konfirmasipassword' => [
                'rules' => $rule_konfirmasipassword,
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!',
                    'matches' => 'Password Konfirmasi tidak sesuai'
                ]
            ],
            'fotoformal' => [
                'rules' => $rule_fotoformal,
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
            session()->setFlashdata('peringatan', 'Akun gagal diupdate dikarenakan ada penginputan yang tidak sesuai. silakan coba lagi!');
            return redirect()->to('/admin/editakun/' . $this->user[0]['id'])->withInput();
        }
        // Ambil File fotoformal
        if ($fotoformal != $this->user[0]['fotoformal']) {
            $fotoUpload = $this->request->getFile('fotoformal');
            $fotoformal = $fotoUpload->getRandomName();
            $fotoUpload->move('image', $fotoformal);
        }

        $this->userModel->save([
            'id' => $this->request->getPost('id'),
            'namasiswa' => $this->request->getPost('namasiswa'),
            'nowhatsapp' => $this->request->getPost('nowhatsapp'),
            'email' => $this->request->getPost('email'),
            'password' => ($this->request->getPost('password') == "") ? $password : password_hash($password, PASSWORD_DEFAULT),
            'fotoformal' => $fotoformal,

        ]);

        session()->setFlashdata('pesan', 'Akun berhasil diupdate!');

        return redirect()->to('/user/manajemenakun');
    }
}
