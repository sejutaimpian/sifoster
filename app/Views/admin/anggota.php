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
                        <th>Alamat Rumah</th>
                        <th>No Whatsapp</th>
                        <th>No Wali</th>
                        <th>Email</th>
                        <th>Klasifikasi</th>
                        <th>Foto Formal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($anggota as $a) : ?>
                        <tr>
                            <td><?= $a['namasiswa']; ?></td>
                            <td><?= $a['alamatrumah']; ?></td>
                            <td><?= $a['nowhatsapp']; ?></td>
                            <td><?= $a['nowali']; ?></td>
                            <td><?= $a['email']; ?></td>
                            <td>
                                <?php foreach ($klasifikasi as $k) : ?>
                                    <?php if ($k['idklasifikasi'] == $a['idklasifikasi']) : ?>
                                        <?= $k['namaklasifikasi']; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?></td>
                            <td>
                                <img src="/image/<?= $a['fotoformal']; ?>" alt="" class="eris-mh-20">
                            </td>
                            <td><a href="/admin/detailakun/<?= $a['id']; ?>" class="btn btn-success">Detail</a></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>