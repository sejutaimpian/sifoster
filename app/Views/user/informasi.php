<?= $this->extend("layout/template-user"); ?>

<?= $this->section("content"); ?>
<div class="container-fluid px-4 mt-3">

    <!-- Datatbles -->
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center">
            <div class="col-10">
                <i class="fa-solid fa-bullhorn fs-4 me-2"></i>
                <span class="fs-4 eris-hidden">Informasi</span>
            </div>
            <div class="col-2 text-end">
                <a class="btn btn-dark" href="/user/tulisan">
                    <i class="fa-solid fa-pencil fs-4"></i>
                </a>
            </div>
        </div>
        <div class="card-body">
            <table id="datatablesKategoriAdmin">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Gambar</th>
                        <th>Isi</th>
                        <th>Waktu Dibuat</th>
                        <th>Waktu Diubah</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($informasi as $i) : ?>
                        <tr>
                            <td><?= $i['judul']; ?></td>
                            <td><?= $i['namakategori']; ?></td>
                            <td>
                                <img src="/image/<?= $i['gambar']; ?>" alt="" class="eris-mh-20">
                            </td>
                            <td><?= $i['isi']; ?></td>
                            <td><?= $i['created_at']; ?></td>
                            <td><?= $i['updated_at']; ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>