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
    <div class="modal fade" id="tambahkompetisi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Kompetisi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/admin/tambahkompetisi" method="POST" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="row mb-3">
                            <label for="namakompetisi" class="col-sm-2 col-form-label">Nama Kompetisi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?= ($validation->hasError('namakompetisi')) ? 'is-invalid' : ''; ?>" id="namakompetisi" name="namakompetisi" value="<?= old('namakompetisi'); ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('namakompetisi'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="waktukompetisi" class="col-sm-2 col-form-label">Waktu Kompetisi</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control <?= ($validation->hasError('waktukompetisi')) ? 'is-invalid' : ''; ?>" id="waktukompetisi" name="waktukompetisi" value="<?= old('waktukompetisi'); ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('waktukompetisi'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tempat" class="col-sm-2 col-form-label">Tempat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?= ($validation->hasError('tempat')) ? 'is-invalid' : ''; ?>" id="tempat" name="tempat" value="<?= old('tempat'); ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('tempat'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="link" class="col-sm-2 col-form-label">Link</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?= ($validation->hasError('link')) ? 'is-invalid' : ''; ?>" id="link" name="link" value="<?= old('link'); ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('link'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?= ($validation->hasError('keterangan')) ? 'is-invalid' : ''; ?>" id="keterangan" name="keterangan" value="<?= old('keterangan'); ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('keterangan'); ?>
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
                <i class="fa-solid fa-flag-checkered fs-4 me-2"></i>
                <span class="fs-4 eris-hidden">Kompetisi</span>
            </div>
            <div class="col-2 text-end">
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#tambahkompetisi">
                    <i class="fa-solid fa-square-plus fs-4"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <table id="datatablesKompetisiAdmin">
                <thead>
                    <tr>
                        <th>Nama Kompetisi</th>
                        <th>Waktu Kompetisi</th>
                        <th>Tempat</th>
                        <th>Link</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($kompetisi as $k) : ?>
                        <tr>
                            <td><?= $k['namakompetisi']; ?></td>
                            <td><?= $k['waktukompetisi']; ?></td>
                            <td><?= $k['tempat']; ?></td>
                            <td>
                                <a href="<?= $k['link']; ?>"><?= $k['link']; ?></a>
                            </td>
                            <td><?= $k['keterangan']; ?></td>
                            <td>
                                <div class="" role="group" aria-label="Basic mixed styles example">
                                    <form action="/admin/hapuskompetisi/<?= $k['id']; ?>" method="POST" class="d-inline">
                                        <?php csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')">Hapus</button>
                                    </form>
                                    <a href="/admin/editkompetisi/<?= $k['id']; ?>" class="btn btn-warning">Edit</a>
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