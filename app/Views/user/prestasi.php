<?= $this->extend("layout/template-user"); ?>

<?= $this->section("content"); ?>
<div class="container-fluid px-4 mt-3">

    <!-- Datatbles -->
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center">
            <div class="col-10">
                <i class="fa-solid fa-flag-checkered fs-4 me-2"></i>
                <span class="fs-4 eris-hidden">Prestasi</span>
            </div>
        </div>
        <div class="card-body">
            <table id="datatablesPrestasiAdmin">
                <thead>
                    <tr>
                        <th>Juara</th>
                        <th>Pada Ajang</th>
                        <th>Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($prestasi as $p) : ?>
                        <tr>
                            <td><?= $p['juara']; ?></td>
                            <td><?= $p['ajang']; ?></td>
                            <td><?= $p['waktu']; ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>