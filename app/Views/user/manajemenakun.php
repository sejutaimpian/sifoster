<?= $this->extend("layout/template-user"); ?>

<?= $this->section("content"); ?>
<div class="container-fluid px-4 mt-3">

    <?php if (session()->getFlashData('pesan')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <!-- Datatbles -->
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center">
            <div class="col-10">
                <i class="fa-solid fa-user-gear fs-4 me-2"></i>
                <span class="fs-4 eris-hidden">Manajemen Akun</span>
            </div>
        </div>
        <div class="card-body">
            <table id="datatablesDaftarBaru">
                <thead>
                    <tr>
                        <th>Nama Siswa</th>
                        <th>Email</th>
                        <th>Foto Formal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($akun as $a) : ?>
                        <tr>
                            <td><?= $a['namasiswa']; ?></td>
                            <td><?= $a['email']; ?></td>
                            <td>
                                <img src="/image/<?= $a['fotoformal']; ?>" alt="" class="eris-mh-20">
                            </td>
                            <td>
                                <div class="btn-group-vertical" role="group" aria-label="Basic mixed styles example">
                                    <a href="/user/editakun/<?= $a['id']; ?>" class="btn btn-warning">Edit</a>
                                    <a href="/user" class="btn btn-primary">Data Diri</a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>