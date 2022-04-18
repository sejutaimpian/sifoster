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
    <div class="modal fade" id="tambahpelatih" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Pelatih</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/admin/tambahpelatih" method="POST" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="row mb-3">
                            <label for="nama_pelatih" class="col-sm-2 col-form-label">Nama Pelatih</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?= ($validation->hasError('nama_pelatih')) ? 'is-invalid' : ''; ?>" id="nama_pelatih" name="nama_pelatih" value="<?= old('nama_pelatih'); ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nama_pelatih'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nomor_pelatih" class="col-sm-2 col-form-label">No Pelatih</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control <?= ($validation->hasError('nomor_pelatih')) ? 'is-invalid' : ''; ?>" id="nomor_pelatih" name="nomor_pelatih" value="<?= old('nomor_pelatih'); ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nomor_pelatih'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="sertifikasi" class="col-sm-2 col-form-label">Sertifikasi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?= ($validation->hasError('sertifikasi')) ? 'is-invalid' : ''; ?>" id="sertifikasi" name="sertifikasi" value="<?= old('sertifikasi'); ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('sertifikasi'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="pengalaman" class="col-sm-2 col-form-label">Pengalam&shy;an</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?= ($validation->hasError('pengalaman')) ? 'is-invalid' : ''; ?>" id="pengalaman" name="pengalaman" value="<?= old('pengalaman'); ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('pengalaman'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tahun_kerja" class="col-sm-2 col-form-label">Tahun Kerja</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control <?= ($validation->hasError('tahun_kerja')) ? 'is-invalid' : ''; ?>" id="tahun_kerja" name="tahun_kerja" value="<?= old('tahun_kerja'); ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('tahun_kerja'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                            <div class="col-sm-10">
                                <div class="">
                                    <input class="form-control <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" type="file" id="foto" name="foto">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('foto'); ?>
                                    </div>
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
                <i class="fa-solid fa-graduation-cap fs-4 me-2"></i>
                <span class="fs-4 eris-hidden">Pelatih</span>
            </div>
            <div class="col-2 text-end">
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#tambahpelatih">
                    <i class="fa-solid fa-square-plus fs-4"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <table id="datatablesPelatihAdmin">
                <thead>
                    <tr>
                        <th>Nama Pelatih</th>
                        <th>Nomor Induk Pelatih</th>
                        <th>Sertifikasi</th>
                        <th>Pengalaman</th>
                        <th>Tahun Kerja</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pelatih as $p) : ?>
                        <tr>
                            <td><?= $p['nama_pelatih']; ?></td>
                            <td><?= $p['nomor_pelatih']; ?></td>
                            <td><?= $p['sertifikasi']; ?></td>
                            <td><?= $p['pengalaman']; ?></td>
                            <td><?= $p['tahun_kerja']; ?></td>
                            <td>
                                <img src="/image/<?= $p['foto']; ?>" alt="" class="eris-mh-20">
                            </td>
                            <td>
                                <div class="btn-group-vertical" role="group" aria-label="Basic mixed styles example">
                                    <form action="/admin/hapuspelatih/<?= $p['id']; ?>" method="POST" class="d-inline">
                                        <?php csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')">Hapus</button>
                                    </form>
                                    <a href="/admin/editpelatih/<?= $p['id']; ?>" class="btn btn-warning">Edit</a>
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