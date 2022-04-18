<?= $this->extend("layout/template"); ?>

<?= $this->section("content"); ?>
<div class="container my-3">
    <!-- Datatbles -->
    <div class="card">
        <div class="card-header">
            <i class="fa-solid fa-people-group me-2"></i>
            Pelatih
        </div>
        <div class="card-body">
            <table id="datatablesPelatihUser">
                <thead>
                    <tr>
                        <th>Nama Pelatih</th>
                        <th>Nomor Induk Pelatih</th>
                        <th>Sertifikasi</th>
                        <th>Pengalaman</th>
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