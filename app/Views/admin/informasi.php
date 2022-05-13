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
    <div class="modal fade" id="tambahinformasi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Informasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/admin/tambahinformasi" method="POST" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="row mb-3">
                            <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" value="<?= old('judul'); ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('judul'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                            <div class="col-sm-10">
                                <select class="form-select <?= ($validation->hasError('kategori')) ? 'is-invalid' : ''; ?>" id="kategori" name="kategori">
                                    <?php if (old('kategori')) : ?>
                                        <?php foreach ($kategori as $k) : ?>
                                            <option <?= (old('kategori')) == $k['idkategori'] ? "selected" : "" ?> value="<?= $k['idkategori']; ?>"><?= $k['namakategori']; ?></option>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <option selected disabled>Pilih....</option>
                                        <?php foreach ($kategori as $k) : ?>
                                            <option value="<?= $k['idkategori']; ?>"><?= $k['namakategori']; ?></option>
                                        <?php endforeach; ?>
                                    <?php endif ?>
                                </select>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('kategori'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                            <div class="col-sm-10">
                                <div class="">
                                    <input class="form-control <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>" type="file" id="gambar" name="gambar">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('gambar'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="isi" class="col-sm-2 col-form-label">Isi</label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-control <?= ($validation->hasError('isi')) ? 'is-invalid' : ''; ?>" id="isi" name="isi" value="<?= old('isi'); ?>"></textarea>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('isi'); ?>
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
                <i class="fa-solid fa-bullhorn fs-4 me-2"></i>
                <span class="fs-4 eris-hidden">Informasi</span>
            </div>
            <div class="col-2 text-end">
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#tambahinformasi">
                    <i class="fa-solid fa-square-plus fs-4"></i>
                </button>
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
                        <th>Aksi</th>
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
                            <td>
                                <div class="" role="group" aria-label="Basic mixed styles example">
                                    <form action="/admin/hapusinformasi/<?= $i['id']; ?>" method="POST" class="d-inline">
                                        <?php csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')">Hapus</button>
                                    </form>
                                    <a href="/admin/editinformasi/<?= $i['id']; ?>" class="btn btn-warning">Edit</a>
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