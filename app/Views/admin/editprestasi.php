<?= $this->extend("layout/template-admin"); ?>

<?= $this->section("content"); ?>
<div class="container-fluid px-4 mt-3">
    <form action="/admin/updateprestasi/<?= $prestasi[0]['id']; ?>" method="POST">
        <?= csrf_field(); ?>
        <input type="hidden" name="id" value="<?= $prestasi[0]['id']; ?>">
        <div class="row mb-3">
            <label for="juara" class="col-sm-2 col-form-label">Juara</label>
            <div class="col-sm-10">
                <input placeholder="Contoh: Juara 3" type="text" class="form-control <?= ($validation->hasError('juara')) ? 'is-invalid' : ''; ?>" id="juara" name="juara" value="<?= $prestasi[0]['juara']; ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('juara'); ?>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="ajang" class="col-sm-2 col-form-label">Ajang / Lomba</label>
            <div class="col-sm-10">
                <select class="form-select <?= ($validation->hasError("ajang")) ? 'is-invalid' : ''; ?>" id="ajang" name="ajang">
                    <?php foreach ($kompetisi as $k) : ?>
                        <option <?= ($prestasi[0]['ajang']) == $k['namakompetisi'] ? "selected" : "" ?> value="<?= $k['namakompetisi']; ?>"><?= $k['namakompetisi']; ?></option>
                    <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">
                    <?= $validation->getError("ajang"); ?>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="waktu" class="col-sm-2 col-form-label">Waktu</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('waktu')) ? 'is-invalid' : ''; ?>" id="waktu" name="waktu" value="<?= $prestasi[0]['waktu']; ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('waktu'); ?>
                </div>
            </div>
        </div>
        <div class="float-end mb-3">
            <a href="/admin/prestasi" class="btn btn-outline-secondary">Batal</a>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>