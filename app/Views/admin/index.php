<?= $this->extend("layout/template-admin"); ?>

<?= $this->section("content"); ?>
<div class="container-fluid px-4 mt-3">
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body h1"><?= count($gabung); ?></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="/admin/anggota">Anggota</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body h1"><?= count($pelatih); ?></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="/admin/pelatih">Pelatih</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body h1"><?= count($prestasi); ?></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">Prestasi</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body h1">1.000.000</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">Uang Kas</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Datatbles -->
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center">
            <div class="col-10">
                <i class="fa-solid fa-fan fs-4 me-2"></i>
                <span class="fs-4 eris-hidden">Pendaftar Baru</span>
            </div>
        </div>
        <div class="card-body">
            <table id="datatablesDaftarBaru">
                <thead>
                    <tr>
                        <th>Nama Siswa</th>
                        <th>No Whatsapp</th>
                        <th>Email</th>
                        <th>Foto Formal</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($akun as $a) : ?>
                        <tr>
                            <td><?= $a['namasiswa']; ?></td>
                            <td><?= $a['nowhatsapp']; ?></td>
                            <td><?= $a['email']; ?></td>
                            <td>
                                <img src="/image/<?= $a['fotoformal']; ?>" alt="" class="eris-mh-20">
                            </td>
                            <td><?php
                                if ($a['is_active'] == 0) {
                                    echo "Belum Aktif";
                                } else {
                                    echo "Aktif";
                                }
                                ?>
                            </td>
                            <td><a href="/admin/editakun/<?= $a['id']; ?>" class="btn btn-primary">Aktifkan</a></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>