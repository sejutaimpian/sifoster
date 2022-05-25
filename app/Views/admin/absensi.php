<?= $this->extend("layout/template-admin"); ?>
<?php  ?>
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
    <div class="modal fade" id="tambahajaran" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Ajaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/admin/tambahajaran" method="POST" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="row mb-3">
                            <label for="triwulan" class="col-sm-2 col-form-label">triwulan</label>
                            <div class="col-sm-10">
                                <select class="form-select <?= ($validation->hasError('triwulan')) ? 'is-invalid' : ''; ?>" id="triwulan" name="triwulan">
                                    <?php if (old('triwulan')) : ?>
                                        <?php if (old('triwulan') == 'Triwulan 1') : ?>
                                            <option value="Triwulan 1" selected>Triwulan 1</option>
                                            <option value="Triwulan 2">Triwulan 2</option>
                                            <option value="Triwulan 3">Triwulan 3</option>
                                        <?php elseif (old('triwulan') == 'Triwulan 2') : ?>
                                            <option value="Triwulan 1">Triwulan 1</option>
                                            <option value="Triwulan 2" selected>Triwulan 2</option>
                                            <option value="Triwulan 3">Triwulan 3</option>
                                        <?php else : ?>
                                            <option value="Triwulan 1">Triwulan 1</option>
                                            <option value="Triwulan 2">Triwulan 2</option>
                                            <option value="Triwulan 3" selected>Triwulan 3</option>
                                        <?php endif; ?>
                                    <?php else : ?>
                                        <option value="">Pilih....</option>
                                        <option value="Triwulan 1">Triwulan 1</option>
                                        <option value="Triwulan 2">Triwulan 2</option>
                                        <option value="Triwulan 3">Triwulan 3</option>
                                    <?php endif ?>
                                </select>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('triwulan'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tahunajaran" class="col-sm-2 col-form-label">Tahun Ajaran</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?= ($validation->hasError('tahunajaran')) ? 'is-invalid' : ''; ?>" id="tahunajaran" name="tahunajaran" value="<?= old('tahunajaran'); ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('tahunajaran'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="klasifikasi" class="col-sm-2 col-form-label">Klasifikasi</label>
                            <div class="col-sm-10">
                                <select class="form-select <?= ($validation->hasError('klasifikasi')) ? 'is-invalid' : ''; ?>" id="klasifikasi" name="klasifikasi">
                                    <?php if (old('klasifikasi')) : ?>
                                        <?php foreach ($klasifikasi as $k) : ?>
                                            <option <?= $k['idklasifikasi'] == old('klasifikasi') ? 'selected' : ''; ?> value="<?= $k['idklasifikasi']; ?>"><?= $k['namaklasifikasi']; ?></option>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <option value="">Pilih....</option>
                                        <?php foreach ($klasifikasi as $k) : ?>
                                            <option value="<?= $k['idklasifikasi']; ?>"><?= $k['namaklasifikasi']; ?></option>
                                        <?php endforeach; ?>
                                    <?php endif ?>
                                </select>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('klasifikasi'); ?>
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
                <i class="fa-solid fa-calendar-day fs-4 me-2"></i>
                <span class="fs-4 eris-hidden">Ajaran</span>
            </div>
            <div class="col-2 text-end">
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#tambahajaran">
                    <i class="fa-solid fa-square-plus fs-4"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <table id="datatablesAjaranAdmin">
                <thead>
                    <tr>
                        <th>Triwulan</th>
                        <th>Tahun Ajaran</th>
                        <th>Klasifikasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($ajaran as $a) : ?>
                        <tr>
                            <td><?= $a['triwulan']; ?></td>
                            <td><?= $a['tahunajaran']; ?></td>
                            <td>
                                <?php foreach ($klasifikasi as $k) : ?>
                                    <?= $k['idklasifikasi'] == $a['idklasifikasi'] ? $k['namaklasifikasi'] : ''; ?>
                                <?php endforeach; ?>
                            </td>
                            <td>
                                <div class="" role="group" aria-label="Basic mixed styles example">
                                    <form action="/admin/hapusajaran/<?= $a['idajaran']; ?>" method="POST" class="d-inline">
                                        <?php csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')">Hapus</button>
                                    </form>
                                    <a href="/admin/editajaran/<?= $a['idajaran']; ?>" class="btn btn-warning">Edit</a>
                                    <a href="/admin/absenklasifikasi/<?= $a['idajaran']; ?>" class="btn btn-primary">Absen</a>
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