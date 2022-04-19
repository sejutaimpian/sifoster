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

    <!-- Modal -->
    <div class="modal fade" id="tambahkategori" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Kategori</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/admin/tambahkategori" method="POST" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="row mb-3">
                            <label for="namakategori" class="col-sm-2 col-form-label">Nama Kategori</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?= ($validation->hasError('namakategori')) ? 'is-invalid' : ''; ?>" id="namakategori" name="namakategori" value="<?= old('namakategori'); ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('namakategori'); ?>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Datatbles -->
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center">
            <div class="col-10">
                <i class="fa-solid fa-icons fs-4 me-2"></i>
                <span class="fs-4 eris-hidden">Kategori</span>
            </div>
            <div class="col-2 text-end">
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#tambahkategori">
                    <i class="fa-solid fa-square-plus fs-4"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <table id="datatablesKategoriAdmin">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($kategori as $k) : ?>
                        <tr>
                            <td><?= $k['id']; ?></td>
                            <td><?= $k['namakategori']; ?></td>
                            <td>
                                <div class="" role="group" aria-label="Basic mixed styles example">
                                    <form action="/admin/hapuskategori/<?= $k['id']; ?>" method="POST" class="d-inline">
                                        <?php csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')">Hapus</button>
                                    </form>
                                    <a href="/admin/editkategori/<?= $k['id']; ?>" class="btn btn-warning">Edit</a>
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