<?= $this->extend("layout/template-user"); ?>

<?= $this->section("content"); ?>
<div class="container-fluid px-4 mt-3">

    <!-- Datatbles -->
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center">
            <div class="col-10">
                <i class="fa-solid fa-flag-checkered fs-4 me-2"></i>
                <span class="fs-4 eris-hidden">Kompetisi</span>
            </div>
        </div>
        <div class="card-body">
            <table id="datatablesKompetisiAdmin">
                <thead>
                    <tr>
                        <th>Nama Kompetisi</th>
                        <th>Waktu Kompetisi</th>
                        <th>Tempat</th>
                        <th>Link</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($kompetisi as $k) : ?>
                        <tr>
                            <td><?= $k['namakompetisi']; ?></td>
                            <td><?= $k['waktukompetisi']; ?></td>
                            <td><?= $k['tempat']; ?></td>
                            <td>
                                <a href="<?= $k['link']; ?>" target="_blank"><?= $k['link']; ?></a>
                            </td>
                            <td><?= $k['keterangan']; ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>