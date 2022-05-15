<?= $this->extend("layout/template-admin"); ?>

<?= $this->section("content"); ?>
<div class="container-fluid px-4 mt-3">
    <form action="/admin/updatekurikulum/<?= $kurikulum[0]['id']; ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <input type="hidden" name="id" value="<?= $kurikulum[0]['id']; ?>">
        <div class="row mb-3">
            <label for="ta_pendahuluan" class="col-sm-2 col-form-label">Pendahuluan</label>
            <div class="col-sm-10">
                <textarea type="text" class="form-control <?= ($validation->hasError('ta_pendahuluan')) ? 'is-invalid' : ''; ?>" id="ta_pendahuluan" name="ta_pendahuluan"><?= $kurikulum[0]['pendahuluan']; ?></textarea>
                <div class="invalid-feedback">
                    <?= $validation->getError('ta_pendahuluan'); ?>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="ta_klasifikasi" class="col-sm-2 col-form-label">Klasifikasi</label>
            <div class="col-sm-10">
                <textarea type="text" class="form-control <?= ($validation->hasError('ta_klasifikasi')) ? 'is-invalid' : ''; ?>" id="ta_klasifikasi" name="ta_klasifikasi"><?= $kurikulum[0]['klasifikasi']; ?></textarea>
                <div class="invalid-feedback">
                    <?= $validation->getError('ta_klasifikasi'); ?>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="ta_penilaian" class="col-sm-2 col-form-label">Penilaian</label>
            <div class="col-sm-10">
                <textarea type="text" class="form-control <?= ($validation->hasError('ta_penilaian')) ? 'is-invalid' : ''; ?>" id="ta_penilaian" name="ta_penilaian"><?= $kurikulum[0]['penilaian']; ?></textarea>
                <div class="invalid-feedback">
                    <?= $validation->getError('ta_penilaian'); ?>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="ta_tatatertib" class="col-sm-2 col-form-label">Tata Tertib</label>
            <div class="col-sm-10">
                <textarea type="text" class="form-control <?= ($validation->hasError('ta_tatatertib')) ? 'is-invalid' : ''; ?>" id="ta_tatatertib" name="ta_tatatertib"><?= $kurikulum[0]['tatatertib']; ?></textarea>
                <div class="invalid-feedback">
                    <?= $validation->getError('ta_tatatertib'); ?>
                </div>
            </div>
        </div>
        <div class="float-end mb-3">
            <a href="/admin/kurikulum" class="btn btn-outline-secondary">Batal</a>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>