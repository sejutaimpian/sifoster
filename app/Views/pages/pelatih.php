<?= $this->extend("layout/template"); ?>

<?= $this->section("content"); ?>
<div class="container">
    <div class="row">
        <h1><?= $title; ?></h1>
        <div class="col-md-12">
            <div class="table-responsive-md">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Nomor Induk Pelatih</th>
                            <th scope="col">Sertifikasi</th>
                            <th scope="col">Pengalaman</th>
                            <th scope="col">Mulai Kerja</th>
                            <th scope="col">Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($pelatih as $p) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $p['nama_pelatih']; ?></td>
                                <td><?= $p['nomor_pelatih']; ?></td>
                                <td><?= $p['sertifikasi']; ?></td>
                                <td><?= $p['pengalaman']; ?></td>
                                <td><?= $p['tahun_kerja']; ?></td>
                                <td>
                                    <img src="/image/<?= $p['foto']; ?>" alt="" class="img-fluid eris-mh-20">
                                </td>
                            </tr>
                            <?php $i++ ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>