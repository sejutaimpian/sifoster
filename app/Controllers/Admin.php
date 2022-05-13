<?php

namespace App\Controllers;

use App\Models\GabungModel;
use App\Models\InformasiModel;
use App\Models\KategoriModel;
use App\Models\KompetisiModel;
use App\Models\PelatihModel;
use App\Models\PrestasiModel;
use App\Models\UserModel;

class Admin extends BaseController
{
    public function __construct()
    {
    }
    public function index()
    {
        if (session()->get('role') != 'admin') {
            return redirect()->to('user');
        }
        $gabungModel = new GabungModel();
        $usermodel = new UserModel();
        $pelatihModel = new PelatihModel();
        $prestasiModel = new PrestasiModel();
        $gabung = $gabungModel->findAll();
        $akun = $usermodel->where('is_active', 0)->findAll();
        $pelatih = $pelatihModel->findAll();
        $prestasi = $prestasiModel->findAll();
        $data = [
            'title' => 'Admin',
            'profile' => $this->profile,
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
        $gabungModel = new GabungModel();
        $anggota = $gabungModel->getAnggotaAdmin();
        $data = [
            'title' => 'Data Anggota',
            'profile' => $this->profile,
            'anggota' => $anggota
        ];
        return view('admin/anggota', $data);
    }

    // Pelatih
    public function pelatih()
    {
        if (session()->get('role') != 'admin') {
            return redirect()->to('user');
        }
        $pelatihModel = new PelatihModel();
        $pelatih = $pelatihModel->findAll();
        $data = [
            'title' => 'Data Pelatih',
            'profile' => $this->profile,
            'pelatih' => $pelatih,
            'validation' => \Config\Services::validation()
        ];
        return view('admin/pelatih', $data);
    }
    public function tambahpelatih()
    {
        if (session()->get('role') != 'admin') {
            return redirect()->to('user');
        }

        $pelatihModel = new PelatihModel();

        // Validasi Input
        if (!$this->validate([
            'nama_pelatih' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
            'nomor_pelatih' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
            'sertifikasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
            'pengalaman' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
            'tahun_kerja' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
            'foto' => [
                'rules' => 'uploaded[foto]|max_size[foto,2048]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
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
            session()->setFlashdata('peringatan', 'Data pelatih gagal didaftarkan dikarenakan ada penginputan yang tidak sesuai. silakan coba lagi!');
            return redirect()->to('/admin/pelatih')->withInput();
        }
        // Ambil File fotoformal
        $fotoUpload1 = $this->request->getFile('foto');
        $namaFotoUpload1 = $fotoUpload1->getRandomName();
        $fotoUpload1->move('image', $namaFotoUpload1);

        $pelatihModel->save([
            'nama_pelatih' => $this->request->getPost('nama_pelatih'),
            'nomor_pelatih' => $this->request->getPost('nomor_pelatih'),
            'sertifikasi' => $this->request->getPost('sertifikasi'),
            'pengalaman' => $this->request->getPost('pengalaman'),
            'tahun_kerja' => $this->request->getPost('tahun_kerja'),
            'foto' => $namaFotoUpload1,
        ]);

        session()->setFlashdata('pesan', 'Data pelatih baru sudah didaftarkan!');

        return redirect()->to('/admin/pelatih');
    }
    public function hapuspelatih($id)
    {
        if (session()->get('role') != 'admin') {
            return redirect()->to('user');
        }
        $pelatihModel = new PelatihModel();
        $pelatihModel->delete($id);
        session()->setFlashdata('pesan', 'Data pelatih berhasil dihapus!');

        return redirect()->to('/admin/pelatih');
    }
    public function editpelatih($id)
    {
        if (session()->get('role') != 'admin') {
            return redirect()->to('user');
        }
        $pelatihModel = new PelatihModel();
        $pelatih = $pelatihModel->where('id', $id)->findAll();
        $data = [
            'title' => 'Edit Pelatih',
            'profile' => $this->profile,
            'pelatih' => $pelatih,
            'validation' => \Config\Services::validation()
        ];
        return view('admin/editpelatih', $data);
    }
    public function updatepelatih($id)
    {
        if (session()->get('role') != 'admin') {
            return redirect()->to('user');
        }
        $pelatihModel = new PelatihModel();
        $pelatih = $pelatihModel->where('id', $id)->findAll();

        // Cek Fotoformal
        if ($this->request->getPost('foto') != null) {
            $foto = $this->request->getFile('foto');
            $rule_foto = "uploaded[foto]|max_size[foto,2048]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]";
        } else {
            $foto = $pelatih[0]['foto'];
            $rule_foto = "permit_empty";
        }
        // Cek Tahun Kerja
        if ($this->request->getPost('tahun_kerja') != null) {
            $tahunkerja = $this->request->getPost('tahun_kerja');
            $rule_tahunkerja = "required";
        } else {
            $tahunkerja = $pelatih[0]['tahun_kerja'];
            $rule_tahunkerja = "permit_empty";
        }

        // Validasi Input
        if (!$this->validate([
            'nama_pelatih' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
            'nomor_pelatih' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
            'sertifikasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
            'pengalaman' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
            'tahun_kerja' => [
                'rules' => $rule_tahunkerja,
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
            'foto' => [
                'rules' => $rule_foto,
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
            session()->setFlashdata('peringatan', 'Data pelatih gagal diupdate dikarenakan ada penginputan yang tidak sesuai. silakan coba lagi!');
            return redirect()->to('/admin/editpelatih/' . $pelatih[0]['id'])->withInput();
        }
        // Ambil File fotoformal
        if ($foto != $pelatih[0]['foto']) {
            $fotoUpload = $this->request->getFile('foto');
            $foto = $fotoUpload->getRandomName();
            $fotoUpload->move('image', $foto);
        }

        $pelatihModel->save([
            'id' => $this->request->getPost('id'),
            'nama_pelatih' => $this->request->getPost('nama_pelatih'),
            'nomor_pelatih' => $this->request->getPost('nomor_pelatih'),
            'sertifikasi' => $this->request->getPost('sertifikasi'),
            'pengalaman' => $this->request->getPost('pengalaman'),
            'tahun_kerja' => $tahunkerja,
            'fotoformal' => $foto
        ]);

        session()->setFlashdata('pesan', 'Akun berhasil diupdate!');

        return redirect()->to('/admin/pelatih');
    }

    // Informasi
    public function informasi()
    {
        if (session()->get('role') != 'admin') {
            return redirect()->to('user');
        }
        $informasiModel = new InformasiModel();
        $infomasi = $informasiModel->getJoinAll();
        $data = [
            'title' => 'Data Informasi',
            'profile' => $this->profile,
            'informasi' => $infomasi,
            'validation' => \Config\Services::validation()
        ];
        return view('admin/informasi', $data);
    }

    // Kategori
    public function kategori()
    {
        if (session()->get('role') != 'admin') {
            return redirect()->to('user');
        }
        $kategoriModel = new KategoriModel();
        $kategori = $kategoriModel->findAll();
        $data = [
            'title' => 'Data Kategori',
            'profile' => $this->profile,
            'kategori' => $kategori,
            'validation' => \Config\Services::validation()
        ];
        return view('admin/kategori', $data);
    }
    public function tambahkategori()
    {
        if (session()->get('role') != 'admin') {
            return redirect()->to('user');
        }

        $kategoriModel = new KategoriModel();

        // Validasi Input
        if (!$this->validate([
            'namakategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
        ])) {
            // $validation =  \Config\Services::validation();
            // return redirect()->to('/dashboard/create')->withInput()->with('validation', $validation);
            session()->setFlashdata('peringatan', 'Kategori gagal didaftarkan dikarenakan ada penginputan yang tidak sesuai. silakan coba lagi!');
            return redirect()->to('/admin/kategori')->withInput();
        }

        $kategoriModel->save([
            'namakategori' => $this->request->getPost('namakategori'),
        ]);

        session()->setFlashdata('pesan', 'Data kategori baru sudah didaftarkan!');

        return redirect()->to('/admin/kategori');
    }
    public function hapuskategori($id)
    {
        if (session()->get('role') != 'admin') {
            return redirect()->to('user');
        }
        $kategoriModel = new KategoriModel();
        $kategoriModel->delete($id);
        session()->setFlashdata('pesan', 'Akun berhasil dihapus!');

        return redirect()->to('/admin/kategori');
    }
    public function editkategori($id)
    {
        if (session()->get('role') != 'admin') {
            return redirect()->to('user');
        }
        $kategoriModel = new KategoriModel();
        $kategori = $kategoriModel->where('idkategori', $id)->findAll();
        $data = [
            'title' => 'Edit Kategori',
            'profile' => $this->profile,
            'kategori' => $kategori,
            'validation' => \Config\Services::validation()
        ];
        return view('admin/editkategori', $data);
    }
    public function updatekategori($id)
    {
        if (session()->get('role') != 'admin') {
            return redirect()->to('user');
        }
        $kategoriModel = new KategoriModel();
        $kategori = $kategoriModel->where('idkategori', $id)->findAll();

        // Validasi Input
        if (!$this->validate([
            'namakategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
        ])) {
            // $validation =  \Config\Services::validation();
            // return redirect()->to('/dashboard/create')->withInput()->with('validation', $validation);
            session()->setFlashdata('peringatan', 'Data kategori gagal diupdate dikarenakan ada penginputan yang tidak sesuai. silakan coba lagi!');
            return redirect()->to('/admin/editkategori/' . $kategori[0]['id'])->withInput();
        }

        $kategoriModel->save([
            'idkategori' => $this->request->getPost('id'),
            'namakategori' => $this->request->getPost('namakategori')
        ]);

        session()->setFlashdata('pesan', 'Data kategori berhasil diupdate!');

        return redirect()->to('/admin/kategori');
    }

    // Kurikulum


    // Kompetisi
    public function kompetisi()
    {
        if (session()->get('role') != 'admin') {
            return redirect()->to('user');
        }
        $kompetisiModel = new KompetisiModel();
        $kompetisi = $kompetisiModel->findAll();
        $data = [
            'title' => 'Data Kompetisi',
            'profile' => $this->profile,
            'kompetisi' => $kompetisi,
            'validation' => \Config\Services::validation()
        ];
        return view('admin/kompetisi', $data);
    }
    public function tambahkompetisi()
    {
        if (session()->get('role') != 'admin') {
            return redirect()->to('user');
        }

        $kompetisiModel = new KompetisiModel();

        // Validasi Input
        if (!$this->validate([
            'namakompetisi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
            'waktukompetisi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
            'tempat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
            'link' => [
                'rules' => 'valid_url_strict',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!',
                    'valid_url_strict' => 'Kolom {field} harus berformat link yang memuat http atau https. contoh: https://indonesia.go.id/'
                ]
            ],
            'keterangan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
        ])) {
            // $validation =  \Config\Services::validation();
            // return redirect()->to('/dashboard/create')->withInput()->with('validation', $validation);
            session()->setFlashdata('peringatan', 'Data kompetisi gagal didaftarkan dikarenakan ada penginputan yang tidak sesuai. silakan coba lagi!');
            return redirect()->to('/admin/kompetisi')->withInput();
        }

        $kompetisiModel->save([
            'namakompetisi' => $this->request->getPost('namakompetisi'),
            'waktukompetisi' => $this->request->getPost('waktukompetisi'),
            'tempat' => $this->request->getPost('tempat'),
            'link' => $this->request->getPost('link'),
            'keterangan' => $this->request->getPost('keterangan'),
        ]);

        session()->setFlashdata('pesan', 'Data kompetisi baru sudah didaftarkan!');

        return redirect()->to('/admin/kompetisi');
    }
    public function hapuskompetisi($id)
    {
        if (session()->get('role') != 'admin') {
            return redirect()->to('user');
        }
        $kompetisiModel = new KompetisiModel();
        $kompetisiModel->delete($id);
        session()->setFlashdata('pesan', 'Data kompetisi berhasil dihapus!');

        return redirect()->to('/admin/kompetisi');
    }
    public function editkompetisi($id)
    {
        if (session()->get('role') != 'admin') {
            return redirect()->to('user');
        }
        $kompetisiModel = new KompetisiModel();
        $kompetisi = $kompetisiModel->where('id', $id)->findAll();
        $data = [
            'title' => 'Edit Kompetisi',
            'profile' => $this->profile,
            'kompetisi' => $kompetisi,
            'validation' => \Config\Services::validation()
        ];
        return view('admin/editkompetisi', $data);
    }
    public function updatekompetisi($id)
    {
        if (session()->get('role') != 'admin') {
            return redirect()->to('user');
        }
        $kompetisiModel = new KompetisiModel();
        $kompetisi = $kompetisiModel->where('id', $id)->findAll();

        // Validasi Input
        if (!$this->validate([
            'namakompetisi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
            'waktukompetisi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
            'tempat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
            'link' => [
                'rules' => 'valid_url_strict',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!',
                    'valid_url_strict' => 'Kolom {field} harus berformat link yang memuat http atau https. contoh: https://indonesia.go.id/'
                ]
            ],
            'keterangan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
        ])) {
            // $validation =  \Config\Services::validation();
            // return redirect()->to('/dashboard/create')->withInput()->with('validation', $validation);
            session()->setFlashdata('peringatan', 'Data kompetisi gagal diupdate dikarenakan ada penginputan yang tidak sesuai. silakan coba lagi!');
            return redirect()->to('/admin/editkompetisi/' . $kompetisi[0]['id'])->withInput();
        }

        $kompetisiModel->save([
            'id' => $this->request->getPost('id'),
            'namakompetisi' => $this->request->getPost('namakompetisi'),
            'waktukompetisi' => $this->request->getPost('waktukompetisi'),
            'tempat' => $this->request->getPost('tempat'),
            'link' => $this->request->getPost('link'),
            'keterangan' => $this->request->getPost('keterangan'),
        ]);

        session()->setFlashdata('pesan', 'Data kompetisi berhasil diupdate!');

        return redirect()->to('/admin/kompetisi');
    }

    // Prestasi
    public function prestasi()
    {
        if (session()->get('role') != 'admin') {
            return redirect()->to('user');
        }
        $kompetisiModel = new KompetisiModel();
        $kompetisi = $kompetisiModel->findAll();
        $prestasiModel = new PrestasiModel();
        $prestasi = $prestasiModel->findAll();
        $data = [
            'title' => 'Data Prestasi',
            'profile' => $this->profile,
            'prestasi' => $prestasi,
            'kompetisi' => $kompetisi,
            'validation' => \Config\Services::validation()
        ];
        return view('admin/prestasi', $data);
    }
    public function tambahprestasi()
    {
        if (session()->get('role') != 'admin') {
            return redirect()->to('user');
        }

        $prestasiModel = new PrestasiModel();

        // Validasi Input
        if (!$this->validate([
            'juara' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
            'ajang' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
            'waktu' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
        ])) {
            // $validation =  \Config\Services::validation();
            // return redirect()->to('/dashboard/create')->withInput()->with('validation', $validation);
            session()->setFlashdata('peringatan', 'Data prestasi gagal didaftarkan dikarenakan ada penginputan yang tidak sesuai. silakan coba lagi!');
            return redirect()->to('/admin/prestasi')->withInput();
        }

        $prestasiModel->save([
            'juara' => $this->request->getPost('juara'),
            'ajang' => $this->request->getPost('ajang'),
            'waktu' => $this->request->getPost('waktu'),
        ]);

        session()->setFlashdata('pesan', 'Data prestasi baru sudah didaftarkan!');

        return redirect()->to('/admin/prestasi');
    }
    public function editprestasi($id)
    {
        if (session()->get('role') != 'admin') {
            return redirect()->to('user');
        }
        $kompetisiModel = new KompetisiModel();
        $kompetisi = $kompetisiModel->findAll();
        $prestasiModel = new PrestasiModel();
        $prestasi = $prestasiModel->where('id', $id)->findAll();
        $data = [
            'title' => 'Edit Prestasi',
            'profile' => $this->profile,
            'prestasi' => $prestasi,
            'kompetisi' => $kompetisi,
            'validation' => \Config\Services::validation()
        ];
        return view('admin/editprestasi', $data);
    }
    public function updateprestasi($id)
    {
        if (session()->get('role') != 'admin') {
            return redirect()->to('user');
        }
        $prestasiModel = new PrestasiModel();
        $prestasi = $prestasiModel->where('id', $id)->findAll();

        // Validasi Input
        if (!$this->validate([
            'juara' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
            'ajang' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
            'waktu' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
        ])) {
            // $validation =  \Config\Services::validation();
            // return redirect()->to('/dashboard/create')->withInput()->with('validation', $validation);
            session()->setFlashdata('peringatan', 'Data prestasi gagal diupdate dikarenakan ada penginputan yang tidak sesuai. silakan coba lagi!');
            return redirect()->to('/admin/editprestasi/' . $prestasi[0]['id'])->withInput();
        }

        $prestasiModel->save([
            'id' => $this->request->getPost('id'),
            'juara' => $this->request->getPost('juara'),
            'ajang' => $this->request->getPost('ajang'),
            'waktu' => $this->request->getPost('waktu'),
        ]);

        session()->setFlashdata('pesan', 'Data prestasi berhasil diupdate!');

        return redirect()->to('/admin/prestasi');
    }
    public function hapusprestasi($id)
    {
        if (session()->get('role') != 'admin') {
            return redirect()->to('user');
        }
        $prestasiModel = new PrestasiModel();
        $prestasiModel->delete($id);
        session()->setFlashdata('pesan', 'Data prestasi berhasil dihapus!');

        return redirect()->to('/admin/prestasi');
    }

    // Pengaturan
    // Profile Organisasi
    public function profileorganisasi()
    {
        if (session()->get('role') != 'admin') {
            return redirect()->to('user');
        }
        $profileorganisasi = $this->profileModel->getJoin();
        $data = [
            'title' => 'Profile Organisasi',
            'profile' => $this->profile,
            'profileorganisasi' => $profileorganisasi,
            'validation' => \Config\Services::validation()
        ];
        return view('admin/profileorganisasi', $data);
    }
    public function updateprofileorganisasi($id)
    {
        if (session()->get('role') != 'admin') {
            return redirect()->to('user');
        }
        $profileorganisasi = $this->profileModel->where('id', $id)->findAll();

        // Cek Foto Logo
        if ($this->request->getPost('flogo') != null) {
            $flogo = $this->request->getFile('flogo');
            $rule_flogo = "uploaded[flogo]|max_size[flogo,2048]|is_image[flogo]|mime_in[flogo,image/jpg,image/jpeg,image/png]";
        } else {
            $flogo = $profileorganisasi[0]['flogo'];
            $rule_flogo = "permit_empty";
        }
        // Cek Foto Hero
        if ($this->request->getPost('fhero') != null) {
            $fhero = $this->request->getFile('fhero');
            $rule_fhero = "uploaded[fhero]|max_size[fhero,2048]|is_image[fhero]|mime_in[fhero,image/jpg,image/jpeg,image/png]";
        } else {
            $fhero = $profileorganisasi[0]['fhero'];
            $rule_fhero = "permit_empty";
        }
        // Cek Foto Sekre
        if ($this->request->getPost('fsekre') != null) {
            $fsekre = $this->request->getFile('fsekre');
            $rule_fsekre = "uploaded[fsekre]|max_size[fsekre,2048]|is_image[fsekre]|mime_in[fsekre,image/jpg,image/jpeg,image/png]";
        } else {
            $fsekre = $profileorganisasi[0]['fsekre'];
            $rule_fsekre = "permit_empty";
        }
        // Cek Foto Lapang
        if ($this->request->getPost('flapang') != null) {
            $flapang = $this->request->getFile('flapang');
            $rule_flapang = "uploaded[flapang]|max_size[flapang,2048]|is_image[flapang]|mime_in[flapang,image/jpg,image/jpeg,image/png]";
        } else {
            $flapang = $profileorganisasi[0]['flapang'];
            $rule_flapang = "permit_empty";
        }

        // Validasi Input
        if (!$this->validate([
            'nama_organisasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
            'visi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi!'
                ]
            ],
            'flogo' => [
                'rules' => $rule_flogo,
                'errors' => [
                    'uploaded' => 'Upload gambar terlebih dahulu!',
                    'max_size' => 'Ukuran gambar tidak boleh lebih dari 2MB',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ],
            'fhero' => [
                'rules' => $rule_fhero,
                'errors' => [
                    'uploaded' => 'Upload gambar terlebih dahulu!',
                    'max_size' => 'Ukuran gambar tidak boleh lebih dari 2MB',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ],
            'fsekre' => [
                'rules' => $rule_fsekre,
                'errors' => [
                    'uploaded' => 'Upload gambar terlebih dahulu!',
                    'max_size' => 'Ukuran gambar tidak boleh lebih dari 2MB',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ],
            'flapang' => [
                'rules' => $rule_flapang,
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
            session()->setFlashdata('peringatan', 'Profile organisasi gagal diupdate dikarenakan ada penginputan yang tidak sesuai. silakan coba lagi!');
            return redirect()->to('/admin/profileorganisasi/' . $profileorganisasi[0]['id'])->withInput();
        }
        // Ambil File flogo
        if ($flogo != $profileorganisasi[0]['flogo']) {
            $fotoUploadflogo = $this->request->getFile('flogo');
            $flogo = $fotoUploadflogo->getRandomName();
            $fotoUploadflogo->move('image', $flogo);
        }
        // Ambil File fhero
        if ($fhero != $profileorganisasi[0]['fhero']) {
            $fotoUploadfhero = $this->request->getFile('fhero');
            $fhero = $fotoUploadfhero->getRandomName();
            $fotoUploadfhero->move('image', $fhero);
        }
        // Ambil File fsekre
        if ($fsekre != $profileorganisasi[0]['fsekre']) {
            $fotoUploadfsekre = $this->request->getFile('fsekre');
            $fsekre = $fotoUploadfsekre->getRandomName();
            $fotoUploadfsekre->move('image', $fsekre);
        }
        // Ambil File fsekre
        if ($flapang != $profileorganisasi[0]['flapang']) {
            $fotoUploadflapang = $this->request->getFile('flapang');
            $flapang = $fotoUploadflapang->getRandomName();
            $fotoUploadflapang->move('image', $flapang);
        }

        $this->profileModel->save([
            'id' => $this->request->getPost('id'),
            'nama_organisasi' => $this->request->getPost('nama_organisasi'),
            'visi' => $this->request->getPost('visi'),
            'flogo' => $flogo,
            'fhero' => $fhero,
            'fsekre' => $fsekre,
            'flapang' => $flapang,
        ]);

        session()->setFlashdata('pesan', 'Profile organisasi berhasil diupdate!');

        return redirect()->to('/admin/profileorganisasi');
    }

    // Manajemen Akun
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
            'akun' => $akun,
            'validation' => \Config\Services::validation()
        ];
        return view('admin/manajemenakun', $data);
    }
    public function tambahakun()
    {
        if (session()->get('role') != 'admin') {
            return redirect()->to('user');
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
        if (session()->get('role') != 'admin') {
            return redirect()->to('user');
        }
        $gabungModel = new GabungModel();
        $gabung = $gabungModel->where('id', $id)->findAll();
        $data = [
            'title' => 'Detail Anggota',
            'profile' => $this->profile,
            'gabung' => $gabung
        ];
        return view('admin/detailanggota', $data);
    }
    public function hapusakun($id)
    {
        if (session()->get('role') != 'admin') {
            return redirect()->to('user');
        }
        $userModel = new UserModel();
        $userModel->delete($id);
        session()->setFlashdata('pesan', 'Akun berhasil dihapus!');

        return redirect()->to('/admin/manajemenakun');
    }
    public function editakun($id)
    {
        if (session()->get('role') != 'admin') {
            return redirect()->to('user');
        }
        $userModel = new UserModel();
        $user = $userModel->where('id', $id)->findAll();
        $data = [
            'title' => 'Edit Akun',
            'profile' => $this->profile,
            'user' => $user,
            'validation' => \Config\Services::validation()
        ];
        return view('admin/editakun', $data);
    }
    public function updateakun($id)
    {
        if (session()->get('role') != 'admin') {
            return redirect()->to('user');
        }
        $userModel = new UserModel();
        $user = $userModel->where('id', $id)->findAll();

        // Cek Fotoformal
        if ($this->request->getPost('fotoformal') != null) {
            $fotoformal = $this->request->getFile('fotoformal');
            $rule_fotoformal = "uploaded[fotoformal]|max_size[fotoformal,2048]|is_image[fotoformal]|mime_in[fotoformal,image/jpg,image/jpeg,image/png]";
        } else {
            $fotoformal = $user[0]['fotoformal'];
            $rule_fotoformal = "permit_empty";
        }

        // Cek Password
        if ($this->request->getPost('password') == "") {
            $password = $user[0]['password'];
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
            session()->setFlashdata('peringatan', 'Akun gagal diupdate dikarenakan ada penginputan yang tidak sesuai. silakan coba lagi!');
            return redirect()->to('/admin/editakun/' . $user[0]['id'])->withInput();
        }
        // Ambil File fotoformal
        if ($fotoformal != $user[0]['fotoformal']) {
            $fotoUpload = $this->request->getFile('fotoformal');
            $fotoformal = $fotoUpload->getRandomName();
            $fotoUpload->move('image', $fotoformal);
        }

        $userModel->save([
            'id' => $this->request->getPost('id'),
            'namasiswa' => $this->request->getPost('namasiswa'),
            'nowhatsapp' => $this->request->getPost('nowhatsapp'),
            'email' => $this->request->getPost('email'),
            'password' => ($this->request->getPost('password') == "") ? $password : password_hash($password, PASSWORD_DEFAULT),
            'fotoformal' => $fotoformal,
            'role' => $this->request->getPost('role'),
            'is_active' => $this->request->getPost('is_active')
        ]);

        session()->setFlashdata('pesan', 'Akun berhasil diupdate!');

        return redirect()->to('/admin/manajemenakun');
    }
}
