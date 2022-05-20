<?= $this->extend("layout/template-user"); ?>
<?php // dd($akun) 
?>
<?= $this->section("content"); ?>
<div class="container-fluid px-4 mt-3">
    <div class="card mb-3">
        <div class="card-header">
            <h2>Data Diri</h2>
        </div>
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/image/<?= $akun['fotoformal']; ?>" class="img-fluid eris-md-mh" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <div class="row">
                        <div class="input-group mb-2">
                            <span class="input-group-text col-sm-4 bg-dark text-light">Nama Anggota</span>
                            <span class="input-group-text col-sm-8 bg-white"><?= $akun['namasiswa']; ?></span>
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text col-sm-4 bg-dark text-light">Tempat, Tanggal Lahir</span>
                            <span class="input-group-text col-sm-8 bg-white"><?= $akun['tempatlahir']; ?>, <?= $akun['tanggallahir']; ?></span>
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text col-sm-4 bg-dark text-light">Jenis Kelamin</span>
                            <span class="input-group-text col-sm-8 bg-white"><?= $akun['jeniskelamin']; ?></span>
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text col-sm-4 bg-dark text-light">Alamat Rumah</span>
                            <span class="input-group-text col-sm-8 bg-white"><?= $akun['alamatrumah']; ?></span>
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text col-sm-4 bg-dark text-light">No Whatsapp</span>
                            <span class="input-group-text col-sm-8 bg-white"><?= $akun['nowhatsapp']; ?></span>
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text col-sm-4 bg-dark text-light">No Wali</span>
                            <span class="input-group-text col-sm-8 bg-white"><?= $akun['nowali']; ?></span>
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text col-sm-4 bg-dark text-light">Tinggi</span>
                            <span class="input-group-text col-sm-8 bg-white"><?= $akun['tinggi']; ?></span>
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text col-sm-4 bg-dark text-light">Berat</span>
                            <span class="input-group-text col-sm-8 bg-white"><?= $akun['berat']; ?></span>
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text col-sm-4 bg-dark text-light">Golongan Darah</span>
                            <span class="input-group-text col-sm-8 bg-white"><?= $akun['goldar']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">
            <h2>Sekolah Formal</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                    <div class="row">
                        <div class="input-group mb-2">
                            <span class="input-group-text col-sm-4 bg-dark text-light">Nama Sekolah</span>
                            <span class="input-group-text col-sm-8 bg-white"><?= $akun['sekolah']; ?></span>
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text col-sm-4 bg-dark text-light">Kelas</span>
                            <span class="input-group-text col-sm-8 bg-white"><?= $akun['kelas']; ?></span>
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text col-sm-4 bg-dark text-light">Alamat Sekolah</span>
                            <span class="input-group-text col-sm-8 bg-white"><?= $akun['alamatsekolah']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">
            <h2>Akun</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                    <div class="row">
                        <div class="input-group mb-2">
                            <span class="input-group-text col-sm-4 bg-dark text-light">Email</span>
                            <span class="input-group-text col-sm-8 bg-white"><?= $akun['email']; ?></span>
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text col-sm-4 bg-dark text-light">Password</span>
                            <span class="input-group-text col-sm-8 bg-white">**********</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">
            <h2>SSB</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                    <div class="row">
                        <div class="input-group mb-2">
                            <span class="input-group-text col-sm-4 bg-dark text-light">Klasifikasi</span>
                            <span class="input-group-text col-sm-8 bg-white"><?= $akun['idklasifikasi']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">
            <h2>Berkas-berkas</h2>
        </div>
        <div class="row g-0">
            <div class="col-md-4 p-2">
                <div class="card-header bg-dark text-light">
                    Akte
                </div>
                <img src="/image/<?= $akun['akte']; ?>" class="card-img-top" alt="...">
            </div>
            <div class="col-md-4 p-2">
                <div class="card-header bg-dark text-light">
                    Kartu Keluarga
                </div>
                <img src="/image/<?= $akun['kartukeluarga']; ?>" class="card-img-top" alt="...">
            </div>
            <div class="col-md-4 p-2">
                <div class="card-header bg-dark text-light">
                    Kartu Identitas Anak
                </div>
                <img src="/image/<?= $akun['kia']; ?>" class="card-img-top" alt="...">
            </div>
            <div class="col-md-4 p-2">
                <div class="card-header bg-dark text-light">
                    Nomor Induk Siswa Nasional
                </div>
                <img src="/image/<?= $akun['nisn']; ?>" class="card-img-top" alt="...">
            </div>
            <div class="col-md-4 p-2">
                <div class="card-header bg-dark text-light">
                    Raport
                </div>
                <img src="/image/<?= $akun['raport']; ?>" class="card-img-top" alt="...">
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>