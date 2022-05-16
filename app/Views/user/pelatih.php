<?= $this->extend("layout/template-user"); ?>

<?= $this->section("content"); ?>
<div class="container-fluid px-4 mt-3">

    <!-- Datatbles -->
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center">
            <div class="col-10">
                <i class="fa-solid fa-graduation-cap fs-4 me-2"></i>
                <span class="fs-4 eris-hidden">Pelatih</span>
            </div>
        </div>
        <div class="card-body">
            <table id="datatablesPelatihAdmin">
                <thead>
                    <tr>
                        <th>Nama Pelatih</th>
                        <th>Nomor Induk Pelatih</th>
                        <th>Sertifikasi</th>
                        <th>Pengalaman</th>
                        <th>Tahun Kerja</th>
                        <th>Foto</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pelatih as $p) : ?>
                        <tr>
                            <td><?= $p['nama_pelatih']; ?></td>
                            <td><?= $p['nomor_pelatih']; ?></td>
                            <td><?= $p['sertifikasi']; ?></td>
                            <td><?= $p['pengalaman']; ?></td>
                            <td><?= $p['tahun_kerja']; ?></td>
                            <td>
                                <img src="/image/<?= $p['foto']; ?>" alt="" class="eris-mh-20">
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>