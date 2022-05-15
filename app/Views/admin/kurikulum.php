<?= $this->extend("layout/template-admin"); ?>

<?= $this->section("content"); ?>
<div class="container-fluid px-4 mt-3">

    <?php if (session()->getFlashData('pesan')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <?php if (session()->getFlashData('peringatan')) : ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('peringatan'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

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
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($kurikulum as $k) : ?>
                        <tr>
                            <td><?= $k['pendahuluan']; ?></td>
                            <td><?= $k['klasifikasi']; ?></td>
                            <td><?= $k['penilaian']; ?></td>
                            <td><?= $k['tatatertib']; ?></td>
                            <td>
                                <a href="/admin/editkurikulum/<?= $k['id']; ?>" class="btn btn-warning">Edit</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>