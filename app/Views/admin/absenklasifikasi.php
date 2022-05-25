<?= $this->extend("layout/template-admin"); ?>
<?php  ?>
<?= $this->section("content"); ?>
<div class="container-fluid px-4 mt-3">
    <form action="/admin/tambahabsenklasifikasi" method="POST">
        <?= csrf_field(); ?>
        <input type="hidden" name="idajaran" value="<?= $ajaran[0]['idajaran']; ?>">
        <div class="row mb-3">
            <label for="triwulan" class="col-sm-2 col-form-label">Ajaran</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="triwulan" name="triwulan" value="<?= $ajaran[0]['triwulan']; ?>" readonly disabled>
            </div>
            <label for="klasifikasi" class="col-sm-2 col-form-label">Klasifikasi</label>
            <div class="col-sm-2">
                <?php foreach ($klasifikasi as $k) : ?>
                    <?php if ($k['idklasifikasi'] == $ajaran[0]['idklasifikasi']) : ?>
                        <input type="hidden" class="form-control" id="klasifikasi" name="klasifikasi" value="<?= $ajaran[0]['idklasifikasi']; ?>">
                        <input type="text" class="form-control" id="tempklasifikasi" name="tempklasifikasi" value="<?= $k['namaklasifikasi']; ?>" readonly disabled>
                    <?php endif ?>
                <?php endforeach; ?>
            </div>
            <label for="pertemuan" class="col-sm-2 col-form-label">Pertemuan</label>
            <div class="col-sm-2">
                <input type="number" class="form-control <?= ($validation->hasError('tahunajaran')) ? 'is-invalid' : ''; ?>" id="pertemuan" name="pertemuan" value="<?= old('tahunajaran'); ?>" autofocus>
                <div class="invalid-feedback">
                    <?= $validation->getError('pertemuan'); ?>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="float-end mb-3">
            <a href="/admin/absensi" class="btn btn-outline-secondary">Batal</a>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>