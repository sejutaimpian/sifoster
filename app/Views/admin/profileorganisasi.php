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
    <div class="modal fade" id="editProfileOrganisasi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Edit Profile Organisasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/admin/updateprofileorganisasi/<?= $profileorganisasi[0]['id']; ?>" method="POST" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="id" value="<?= $profileorganisasi[0]['id']; ?>">
                        <div class="row mb-3">
                            <label for="nama_organisasi" class="col-sm-2 col-form-label">Nama Organisasi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?= ($validation->hasError('nama_organisasi')) ? 'is-invalid' : ''; ?>" id="nama_organisasi" name="nama_organisasi" value="<?= $profileorganisasi[0]['nama_organisasi']; ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nama_organisasi'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="visi" class="col-sm-2 col-form-label">Visi Organisasi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?= ($validation->hasError('visi')) ? 'is-invalid' : ''; ?>" id="visi" name="visi" value="<?= $profileorganisasi[0]['visi']; ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('visi'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="flogo" class="col-sm-2 col-form-label">Logo</label>
                            <div class="col-sm-10">
                                <div class="">
                                    <input class="form-control <?= ($validation->hasError('flogo')) ? 'is-invalid' : ''; ?>" type="file" id="flogo" name="flogo">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('flogo'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="fhero" class="col-sm-2 col-form-label">Hero Image</label>
                            <div class="col-sm-10">
                                <div class="">
                                    <input class="form-control <?= ($validation->hasError('fhero')) ? 'is-invalid' : ''; ?>" type="file" id="fhero" name="fhero">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('fhero'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="fsekre" class="col-sm-2 col-form-label">Sekretariat</label>
                            <div class="col-sm-10">
                                <div class="">
                                    <input class="form-control <?= ($validation->hasError('fsekre')) ? 'is-invalid' : ''; ?>" type="file" id="fsekre" name="fsekre">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('fsekre'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="flapang" class="col-sm-2 col-form-label">Tempat Latihan</label>
                            <div class="col-sm-10">
                                <div class="">
                                    <input class="form-control <?= ($validation->hasError('flapang')) ? 'is-invalid' : ''; ?>" type="file" id="flapang" name="flapang">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('flapang'); ?>
                                    </div>
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
                <i class="fa-solid fa-house-user fs-4 me-2"></i>
                <span class="fs-4 eris-hidden">Profile Organisasi</span>
            </div>
            <div class="col-2 text-end">
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#editProfileOrganisasi">
                    <i class="fa-solid fa-square-pen fs-4"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <table id="datatablesProfileAdmin">
                <thead>
                    <tr>
                        <th>Nama Organisasi</th>
                        <th>Visi</th>
                        <th>Misi</th>
                        <th>Logo</th>
                        <th>Hero</th>
                        <th>Sekre</th>
                        <th>Lapangan</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td><?= $profileorganisasi[0]['nama_organisasi']; ?></td>
                        <td><?= $profileorganisasi[0]['visi']; ?></td>
                        <td>
                            <?php foreach ($profileorganisasi as $p) : ?>
                                <ul>
                                    <li><?= $p['misi']; ?></li>
                                </ul>
                            <?php endforeach ?>
                        </td>
                        <td>
                            <img src="/image/<?= $profileorganisasi[0]['flogo']; ?>" alt="" class="eris-mh-20">
                        </td>
                        <td>
                            <img src="/image/<?= $profileorganisasi[0]['fhero']; ?>" alt="" class="eris-mh-20">
                        </td>
                        <td>
                            <img src="/image/<?= $profileorganisasi[0]['fsekre']; ?>" alt="" class="eris-mh-20">
                        </td>
                        <td>
                            <img src="/image/<?= $profileorganisasi[0]['flapang']; ?>" alt="" class="eris-mh-20">
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>