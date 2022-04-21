<?= $this->extend("layout/template-admin"); ?>

<?= $this->section("content"); ?>
<div class="container-fluid px-4 mt-3">
    <form action="/admin/updatepelatih/<?= $pelatih[0]['id']; ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <input type="hidden" name="id" value="<?= $pelatih[0]['id']; ?>">
        <div class="row mb-3">
            <label for="nama_pelatih" class="col-sm-2 col-form-label">Nama Pelatih</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('nama_pelatih')) ? 'is-invalid' : ''; ?>" id="nama_pelatih" name="nama_pelatih" value="<?= $pelatih[0]['nama_pelatih']; ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('nama_pelatih'); ?>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="nomor_pelatih" class="col-sm-2 col-form-label">No Pelatih</label>
            <div class="col-sm-10">
                <input type="number" class="form-control <?= ($validation->hasError('nomor_pelatih')) ? 'is-invalid' : ''; ?>" id="nomor_pelatih" name="nomor_pelatih" value="<?= $pelatih[0]['nomor_pelatih']; ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('nomor_pelatih'); ?>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="sertifikasi" class="col-sm-2 col-form-label">Sertifikasi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('sertifikasi')) ? 'is-invalid' : ''; ?>" id="sertifikasi" name="sertifikasi" value="<?= $pelatih[0]['sertifikasi']; ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('sertifikasi'); ?>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="pengalaman" class="col-sm-2 col-form-label">Pengalaman</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('pengalaman')) ? 'is-invalid' : ''; ?>" id="pengalaman" name="pengalaman" value="<?= $pelatih[0]['pengalaman']; ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('pengalaman'); ?>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="tahun_kerja" class="col-sm-2 col-form-label">Tahun Kerja</label>
            <div class="col-sm-10">
                <input type="date" class="form-control <?= ($validation->hasError('tahun_kerja')) ? 'is-invalid' : ''; ?>" id="tahun_kerja" name="tahun_kerja" value="<?= $pelatih[0]['tahun_kerja']; ?>">
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
                    <label for="foto"></label>
                    <div class="invalid-feedback">
                        <?= $validation->getError('foto'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="float-end mb-3">
            <a href="/admin/pelatih" class="btn btn-outline-secondary">Batal</a>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>