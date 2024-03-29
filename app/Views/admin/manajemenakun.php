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
    <div class="modal fade" id="tambahakun" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Akun</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/admin/tambahakun" method="POST" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="row mb-3">
                            <label for="namasiswa" class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?= ($validation->hasError('namasiswa')) ? 'is-invalid' : ''; ?>" id="namasiswa" name="namasiswa" value="<?= old('namasiswa'); ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('namasiswa'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nowhatsapp" class="col-sm-2 col-form-label">No Whatsapp</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control <?= ($validation->hasError('nowhatsapp')) ? 'is-invalid' : ''; ?>" id="nowhatsapp" name="nowhatsapp" value="<?= old('nowhatsapp'); ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nowhatsapp'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" name="email" value="<?= old('email'); ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('email'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-4">
                                <input type="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="password" name="password" value="<?= old('password'); ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('password'); ?>
                                </div>
                            </div>
                            <label for="konfirmasipassword" class="col-sm-2 col-form-label">Konfirmasi Password</label>
                            <div class="col-sm-4">
                                <input type="password" class="form-control <?= ($validation->hasError('konfirmasipassword')) ? 'is-invalid' : ''; ?>" id="konfirmasipassword" name="konfirmasipassword" value="<?= old('konfirmasipassword'); ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('konfirmasipassword'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="fotoformal" class="col-sm-2 col-form-label">Foto Formal</label>
                            <div class="col-sm-10">
                                <div class="">
                                    <input class="form-control <?= ($validation->hasError('fotoformal')) ? 'is-invalid' : ''; ?>" type="file" id="fotoformal" name="fotoformal">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('fotoformal'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="role" class="col-sm-2 col-form-label">Role</label>
                            <div class="col-sm-10">
                                <select class="form-select <?= ($validation->hasError('role')) ? 'is-invalid' : ''; ?>" id="role" name="role">
                                    <?php $roles = ['admin', 'user'] ?>
                                    <?php if (old('role')) : ?>
                                        <?php foreach ($roles as $role) : ?>
                                            <option <?= (old('role')) == $role ? "selected" : "" ?> value="<?= $role; ?>"><?= $role; ?></option>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <option selected disabled>Pilih....</option>
                                        <?php foreach ($roles as $role) : ?>
                                            <option value="<?= $role; ?>"><?= $role; ?></option>
                                        <?php endforeach; ?>
                                    <?php endif ?>
                                </select>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('role'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="is_active" class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                                <select class="form-select <?= ($validation->hasError('is_active')) ? 'is-invalid' : ''; ?>" id="is_active" name="is_active">
                                    <?php if (old('is_active')) {
                                        if (old('is_active') == '0') {
                                    ?>
                                            <option value="0">Belum Aktif</option>
                                            <option value="1">Aktif</option>
                                        <?php
                                        } else {
                                        ?>
                                            <option value="1">Aktif</option>
                                            <option value="0">Belum Aktif</option>
                                        <?php
                                        }
                                    } else {
                                        ?>
                                        <option value="">Pilih....</option>
                                        <option value="0">Belum Aktif</option>
                                        <option value="1">Aktif</option>
                                    <?php
                                    } ?>
                                </select>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('is_active'); ?>
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
                <i class="fa-solid fa-user-gear fs-4 me-2"></i>
                <span class="fs-4 eris-hidden">Manajemen Akun</span>
            </div>
            <div class="col-2 text-end">
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#tambahakun">
                    <i class="fa-solid fa-square-plus fs-4"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <table id="datatablesDaftarBaru">
                <thead>
                    <tr>
                        <th>Nama Siswa</th>
                        <th>Email</th>
                        <th>Foto Formal</th>
                        <th>Status</th>
                        <th>Role</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($akun as $a) : ?>
                        <tr>
                            <td><?= $a['namasiswa']; ?></td>
                            <td><?= $a['email']; ?></td>
                            <td>
                                <img src="/image/<?= $a['fotoformal']; ?>" alt="" class="eris-mh-20">
                            </td>
                            <td><?php
                                if ($a['is_active'] == 0) {
                                    echo "Belum Aktif";
                                } else {
                                    echo "Aktif";
                                }
                                ?>
                            </td>
                            <td><?= $a['role']; ?></td>
                            <td>
                                <div class="btn-group-vertical" role="group" aria-label="Basic mixed styles example">
                                    <form action="/admin/<?= $a['id']; ?>" method="POST" class="d-inline">
                                        <?php csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')">Hapus</button>
                                    </form>
                                    <a href="/admin/editakun/<?= $a['id']; ?>" class="btn btn-warning">Edit</a>
                                    <a href="/admin/detailakun/<?= $a['id']; ?>" class="btn btn-primary">Detail</a>
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