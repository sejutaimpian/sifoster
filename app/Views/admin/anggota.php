<?= $this->extend("layout/template-admin"); ?>

<?= $this->section("content"); ?>
<div class="container-fluid px-4 mt-3">
    <!-- Datatbles -->
    <div class="card mb-4">
        <div class="card-header">
            <i class="fa-solid fa-people-group"></i>
            Anggota
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
                            <td><?= $a['klasifikasi']; ?></td>
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