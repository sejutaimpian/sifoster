<?= $this->extend("layout/template"); ?>

<?= $this->section("content"); ?>
<div class="container my-3">
    <!-- Datatbles -->
    <div class="card">
        <div class="card-header">
            <i class="fa-solid fa-people-group me-2"></i>
            Anggota
        </div>
        <div class="card-body">
            <table id="datatablesAnggotaUser">
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
                            <td>
                                <?php foreach ($klasifikasi as $k) : ?>
                                    <?php if ($k['idklasifikasi'] == $a['idklasifikasi']) : ?>
                                        <?= $k['namaklasifikasi']; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </td>
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