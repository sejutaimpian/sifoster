<?= $this->extend("layout/template-admin"); ?>

<?= $this->section("content"); ?>
<div class="container-fluid px-4 mt-3">
    <!-- Datatbles -->
    <div class="card mb-4">
        <div class="card-header">
            <div class="col-10">
                <i class="fa-solid fa-people-group fs-4 me-2"></i>
                <span class="fs-4 eris-hidden">Anggota</span>
            </div>
        </div>
        <div class="card-body">
            <table id="datatablesAnggotaAdmin">
                <thead>
                    <tr>
                        <th>Nama Siswa</th>
                        <th>Jenis Kelamin</th>
                        <th>Email</th>
                        <th>Klasifikasi</th>
                        <th>Foto Formal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($anggota as $a) : ?>
                        <tr>
                            <td><?= $a['namasiswa']; ?></td>
                            <td><?= $a['jeniskelamin']; ?></td>
                            <td><?= $a['email']; ?></td>
                            <td><?= $a['klasifikasi']; ?></td>
                            <td>
                                <img src="/image/<?= $a['fotoformal']; ?>" alt="" class="eris-mh-20">
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>