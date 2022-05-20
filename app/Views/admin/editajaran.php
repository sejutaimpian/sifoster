<?= $this->extend("layout/template-admin"); ?>

<?= $this->section("content"); ?>
<div class="container-fluid px-4 mt-3">
    <form action="/admin/updateajaran/<?= $ajaran[0]['idajaran']; ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <input type="hidden" name="idajaran" value="<?= $ajaran[0]['idajaran']; ?>">
        <div class="row mb-3">
            <label for="triwulan" class="col-sm-2 col-form-label">Triwulan</label>
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
                        <option value="<?= $ajaran[0]['triwulan']; ?>"><?= $ajaran[0]['triwulan']; ?></option>
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
                <input type="text" class="form-control <?= ($validation->hasError('tahunajaran')) ? 'is-invalid' : ''; ?>" id="tahunajaran" name="tahunajaran" value="<?= $ajaran[0]['tahunajaran']; ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('tahunajaran'); ?>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="klasifikasi" class="col-sm-2 col-form-label">Klasifikasi</label>
            <div class="col-sm-10">
                <select class="form-select <?= ($validation->hasError('klasifikasi')) ? 'is-invalid' : ''; ?>" id="klasifikasi" name="klasifikasi">
                    <?php foreach ($klasifikasi as $k) : ?>
                        <option <?= $k['idklasifikasi'] == $ajaran[0]['idklasifikasi'] ? 'selected' : ''; ?> value="<?= $k['idklasifikasi']; ?>"><?= $k['namaklasifikasi']; ?></option>
                    <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">
                    <?= $validation->getError('klasifikasi'); ?>
                </div>
            </div>
        </div>
        <div class="float-end mb-3">
            <a href="/admin/absensi" class="btn btn-outline-secondary">Batal</a>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>