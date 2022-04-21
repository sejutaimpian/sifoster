<?= $this->extend("layout/template-admin"); ?>

<?= $this->section("content"); ?>
<div class="container-fluid px-4 mt-3">
    <form action="/admin/updatekompetisi/<?= $kompetisi[0]['id']; ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <input type="hidden" name="id" value="<?= $kompetisi[0]['id']; ?>">
        <div class="row mb-3">
            <label for="namakompetisi" class="col-sm-2 col-form-label">Nama Kompetisi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('namakompetisi')) ? 'is-invalid' : ''; ?>" id="namakompetisi" name="namakompetisi" value="<?= $kompetisi[0]['namakompetisi']; ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('namakompetisi'); ?>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="waktukompetisi" class="col-sm-2 col-form-label">Waktu Kompetisi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('waktukompetisi')) ? 'is-invalid' : ''; ?>" id="waktukompetisi" name="waktukompetisi" value="<?= $kompetisi[0]['waktukompetisi']; ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('waktukompetisi'); ?>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="tempat" class="col-sm-2 col-form-label">Tempat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('tempat')) ? 'is-invalid' : ''; ?>" id="tempat" name="tempat" value="<?= $kompetisi[0]['tempat']; ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('tempat'); ?>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="link" class="col-sm-2 col-form-label">Link</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('link')) ? 'is-invalid' : ''; ?>" id="link" name="link" value="<?= $kompetisi[0]['link']; ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('link'); ?>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
            <div class="col-sm-10">
                <textarea placeholder="Tambahkan keterangan di sini" class="form-control <?= ($validation->hasError('keterangan')) ? 'is-invalid' : ''; ?>" id="keterangan" name="keterangan"><?= $kompetisi[0]['keterangan']; ?></textarea>
                <div class="invalid-feedback">
                    <?= $validation->getError('keterangan'); ?>
                </div>
            </div>
        </div>
        <div class="float-end mb-3">
            <a href="/admin/kompetisi" class="btn btn-outline-secondary">Batal</a>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>