<?= $this->extend("layout/template-admin"); ?>

<?= $this->section("content"); ?>
<div class="container-fluid px-4 mt-3">
    <form action="/admin/updatekategori/<?= $kategori[0]['id']; ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <input type="hidden" name="id" value="<?= $kategori[0]['id']; ?>">
        <div class="row mb-3">
            <label for="namakategori" class="col-sm-2 col-form-label">Nama Kategori</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('namakategori')) ? 'is-invalid' : ''; ?>" id="namakategori" name="namakategori" value="<?= $kategori[0]['namakategori']; ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('namakategori'); ?>
                </div>
            </div>
        </div>
        <div class="float-end mb-3">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>