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
    <div class="modal fade" id="tambahprestasi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Prestasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/admin/tambahprestasi" method="POST">
                        <?= csrf_field(); ?>
                        <div class="row mb-3">
                            <label for="juara" class="col-sm-2 col-form-label">Juara apa?</label>
                            <div class="col-sm-10">
                                <input placeholder="Contoh: Juara 1" type="text" class="form-control <?= ($validation->hasError('juara')) ? 'is-invalid' : ''; ?>" id="juara" name="juara" value="<?= old('juara'); ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('juara'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="ajang" class="col-sm-2 col-form-label">Ajang / Lomba</label>
                            <div class="col-sm-10">
                                <select class="form-select <?= ($validation->hasError("ajang")) ? 'is-invalid' : ''; ?>" id="ajang" name="ajang">
                                    <?php if (old("ajang")) : ?>
                                        <?php foreach ($kompetisi as $k) : ?>
                                            <option <?= (old("ajang")) == $k['namakompetisi'] ? "selected" : "" ?> value="<?= $k['namakompetisi']; ?>"><?= $k['namakompetisi']; ?></option>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <option selected disabled>Pilih....</option>
                                        <?php foreach ($kompetisi as $k) : ?>
                                            <option value="<?= $k['namakompetisi']; ?>"><?= $k['namakompetisi']; ?></option>
                                        <?php endforeach; ?>
                                    <?php endif ?>
                                </select>
                                <div class="invalid-feedback">
                                    <?= $validation->getError("ajang"); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="waktu" class="col-sm-2 col-form-label">Waktu</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control <?= ($validation->hasError('waktu')) ? 'is-invalid' : ''; ?>" id="waktu" name="waktu" value="<?= old('waktu'); ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('waktu'); ?>
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
    </div>

    <!-- Datatbles -->
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center">
            <div class="col-10">
                <i class="fa-solid fa-flag-checkered fs-4 me-2"></i>
                <span class="fs-4 eris-hidden">Prestasi</span>
            </div>
            <div class="col-2 text-end">
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#tambahprestasi">
                    <i class="fa-solid fa-square-plus fs-4"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <table id="datatablesPrestasiAdmin">
                <thead>
                    <tr>
                        <th>Juara</th>
                        <th>Pada Ajang</th>
                        <th>Waktu</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($prestasi as $p) : ?>
                        <tr>
                            <td><?= $p['juara']; ?></td>
                            <td><?= $p['ajang']; ?></td>
                            <td><?= $p['waktu']; ?></td>
                            <td>
                                <div class="" role="group" aria-label="Basic mixed styles example">
                                    <form action="/admin/hapusprestasi/<?= $p['id']; ?>" method="POST" class="d-inline">
                                        <?php csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')">Hapus</button>
                                    </form>
                                    <a href="/admin/editprestasi/<?= $p['id']; ?>" class="btn btn-warning">Edit</a>
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