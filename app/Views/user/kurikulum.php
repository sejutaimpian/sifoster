<?= $this->extend("layout/template-user"); ?>

<?= $this->section("content"); ?>
<div class="container-fluid px-4 mt-3">

    <!-- Datatbles -->
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center">
            <div class="col-12">
                <i class="fa-solid fa-list-check fs-4 me-2"></i>
                <span class="fs-4 eris-hidden">Kurikulum</span>
            </div>
        </div>
        <div class="card-body">
            <table id="datatablesKurikulumAdmin">
                <thead>
                    <tr>
                        <th>Pendahuluan</th>
                        <th>Klasifikasi</th>
                        <th>Penilaian</th>
                        <th>Tata Tertib</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($kurikulum as $k) : ?>
                        <tr>
                            <td><?= $k['pendahuluan']; ?></td>
                            <td><?= $k['klasifikasi']; ?></td>
                            <td><?= $k['penilaian']; ?></td>
                            <td><?= $k['tatatertib']; ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>