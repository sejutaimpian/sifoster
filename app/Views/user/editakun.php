<?= $this->extend("layout/template-user"); ?>

<?= $this->section("content"); ?>
<div class="container-fluid px-4 mt-3">
    <form action="/user/updateakun/<?= $user[0]['id']; ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <input type="hidden" name="id" value="<?= $user[0]['id']; ?>">
        <div class="row mb-3">
            <label for="namasiswa" class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('namasiswa')) ? 'is-invalid' : ''; ?>" id="namasiswa" name="namasiswa" value="<?= $user[0]['namasiswa']; ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('namasiswa'); ?>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="nowhatsapp" class="col-sm-2 col-form-label">No Whatsapp</label>
            <div class="col-sm-10">
                <input type="number" class="form-control <?= ($validation->hasError('nowhatsapp')) ? 'is-invalid' : ''; ?>" id="nowhatsapp" name="nowhatsapp" value="<?= $user[0]['nowhatsapp']; ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('nowhatsapp'); ?>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" name="email" value="<?= $user[0]['email']; ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('email'); ?>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-4">
                <input type="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="password" name="password">
                <div class="invalid-feedback">
                    <?= $validation->getError('password'); ?>
                </div>
            </div>
            <label for="konfirmasipassword" class="col-sm-2 col-form-label">Konfirmasi Password</label>
            <div class="col-sm-4">
                <input type="password" class="form-control <?= ($validation->hasError('konfirmasipassword')) ? 'is-invalid' : ''; ?>" id="konfirmasipassword" name="konfirmasipassword" value="">
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
                    <label for="fotoformal"></label>
                    <div class="invalid-feedback">
                        <?= $validation->getError('fotoformal'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="float-end mb-3">
            <a href="/user/manajemenakun" class="btn btn-outline-secondary">Batal</a>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>