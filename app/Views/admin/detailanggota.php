<?= $this->extend("layout/template-admin"); ?>

<?= $this->section("content"); ?>
<div class="container-fluid px-4 mt-3">
    <div class="card mb-3">
        <div class="card-header">
            <h2>Data Diri</h2>
        </div>
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/image/<?= $gabung[0]['fotoformal']; ?>" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <div class="row">
                        <div class="input-group mb-2">
                            <span class="input-group-text col-sm-4 bg-dark text-light">Nama Anggota</span>
                            <span class="input-group-text col-sm-8 bg-white"><?= $gabung[0]['namasiswa']; ?></span>
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text col-sm-4 bg-dark text-light">Tempat, Tanggal Lahir</span>
                            <span class="input-group-text col-sm-8 bg-white"><?= $gabung[0]['tempatlahir']; ?>, <?= $gabung[0]['tanggallahir']; ?></span>
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text col-sm-4 bg-dark text-light">Jenis Kelamin</span>
                            <span class="input-group-text col-sm-8 bg-white"><?= $gabung[0]['jeniskelamin']; ?></span>
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text col-sm-4 bg-dark text-light">Alamat Rumah</span>
                            <span class="input-group-text col-sm-8 bg-white"><?= $gabung[0]['alamatrumah']; ?></span>
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text col-sm-4 bg-dark text-light">No Whatsapp</span>
                            <span class="input-group-text col-sm-8 bg-white"><?= $gabung[0]['nowhatsapp']; ?></span>
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text col-sm-4 bg-dark text-light">No Wali</span>
                            <span class="input-group-text col-sm-8 bg-white"><?= $gabung[0]['nowali']; ?></span>
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text col-sm-4 bg-dark text-light">Tinggi</span>
                            <span class="input-group-text col-sm-8 bg-white"><?= $gabung[0]['tinggi']; ?></span>
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text col-sm-4 bg-dark text-light">Berat</span>
                            <span class="input-group-text col-sm-8 bg-white"><?= $gabung[0]['berat']; ?></span>
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text col-sm-4 bg-dark text-light">Golongan Darah</span>
                            <span class="input-group-text col-sm-8 bg-white"><?= $gabung[0]['goldar']; ?></span>
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
                            <span class="input-group-text col-sm-8 bg-white"><?= $gabung[0]['sekolah']; ?></span>
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text col-sm-4 bg-dark text-light">Kelas</span>
                            <span class="input-group-text col-sm-8 bg-white"><?= $gabung[0]['kelas']; ?></span>
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text col-sm-4 bg-dark text-light">Alamat Sekolah</span>
                            <span class="input-group-text col-sm-8 bg-white"><?= $gabung[0]['alamatsekolah']; ?></span>
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
                            <span class="input-group-text col-sm-8 bg-white"><?= $gabung[0]['email']; ?></span>
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
                            <span class="input-group-text col-sm-8 bg-white"><?= $gabung[0]['klasifikasi']; ?></span>
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
                <img src="/image/<?= $gabung[0]['akte']; ?>" class="card-img-top" alt="...">
            </div>
            <div class="col-md-4 p-2">
                <div class="card-header bg-dark text-light">
                    Kartu Keluarga
                </div>
                <img src="/image/<?= $gabung[0]['kartukeluarga']; ?>" class="card-img-top" alt="...">
            </div>
            <div class="col-md-4 p-2">
                <div class="card-header bg-dark text-light">
                    Kartu Identitas Anak
                </div>
                <img src="/image/<?= $gabung[0]['kia']; ?>" class="card-img-top" alt="...">
            </div>
            <div class="col-md-4 p-2">
                <div class="card-header bg-dark text-light">
                    Nomor Induk Siswa Nasional
                </div>
                <img src="/image/<?= $gabung[0]['nisn']; ?>" class="card-img-top" alt="...">
            </div>
            <div class="col-md-4 p-2">
                <div class="card-header bg-dark text-light">
                    Raport
                </div>
                <img src="/image/<?= $gabung[0]['raport']; ?>" class="card-img-top" alt="...">
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>