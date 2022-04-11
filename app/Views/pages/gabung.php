<?= $this->extend("layout/template"); ?>

<?= $this->section("content"); ?>
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar List -->
        <div class="col-md-2 eris-hidden">
            <div class="sticky-top d-flex flex-column align-items-stretch flex-shrink-0 bg-white">
                <div class="d-flex align-items-center flex-shrink-0 p-3 border-bottom">
                    <span class="fs-5 fw-semibold">Daftar Isi</span>
                </div>
                <div class="list-group list-group-flush border-bottom">
                    <a href="#informasi" class="list-group-item list-group-item-action lh-tight">
                        <div class="d-flex align-items-center justify-content-between">
                            Informasi Pendaftaran
                        </div>
                    </a>
                    <a href="#formulir" class="list-group-item list-group-item-action lh-tight">
                        <div class="d-flex align-items-center justify-content-between">
                            Formulir Pendaftaran
                        </div>
                    </a>
                    <a href="#ketentuan" class="list-group-item list-group-item-action lh-tight">
                        <div class="d-flex align-items-center justify-content-between">
                            Ketentuan Selanjutnya
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div id="informasi">
                <h1>Informasi Pendaftaran</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, sed facilis voluptatibus sit dolores deserunt nam molestias minima. Delectus, quos?</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque maxime praesentium modi culpa nobis. Soluta odit consectetur tempore repellat ab vitae doloribus corporis, cumque quidem modi aliquam optio officia molestias nulla delectus alias porro quod consequuntur? Eius incidunt aliquam maiores aliquid molestias suscipit illo, enim ab ea, repudiandae ipsum itaque.</p>
                <ul>
                    <li>Lorem ipsum dolor sit amet.</li>
                    <li>Lorem ipsum dolor sit amet.</li>
                    <li>Lorem ipsum dolor sit amet.</li>
                    <li>Lorem ipsum dolor sit amet.</li>
                    <li>Lorem ipsum dolor sit amet.</li>
                    <li>Lorem ipsum dolor sit amet.</li>
                    <li>Lorem ipsum dolor sit amet.</li>
                    <li>Lorem ipsum dolor sit amet.</li>
                </ul>
            </div>
            <div id="formulir">
                <div class="container my-3">
                    <div class="row bg-eris-susu border rounded-top">
                        <div class="col-sm-12 my-1">
                            <div class="row d-flex align-items-center">
                                <div class="col-12">
                                    <span class="h1">Formulir Pendaftaran</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row border py-2">
                        <h2>Data Diri</h2>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="row mb-3">
                                <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" value="<?= old('nama'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nama'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tempatlahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control <?= ($validation->hasError('tempatlahir')) ? 'is-invalid' : ''; ?>" id="tempatlahir" name="tempatlahir" value="<?= old('tempatlahir'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('tempatlahir'); ?>
                                    </div>
                                </div>
                                <label for="tanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-3">
                                    <input type="date" class="form-control <?= ($validation->hasError('tanggallahir')) ? 'is-invalid' : ''; ?>" id="tanggallahir" name="tanggallahir" value="<?= old('tanggallahir'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('tanggallahir'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="jeniskelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <select class="form-select <?= ($validation->hasError('jeniskelamin')) ? 'is-invalid' : ''; ?>" id="jeniskelamin" name="jeniskelamin">
                                        <?php if (old('jeniskelamin')) {
                                            if (old('jeniskelamin') == 'laki-laki') {
                                        ?>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            <?php
                                            } else {
                                            ?>
                                                <option value="Perempuan">Perempuan</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                            <?php
                                            }
                                        } else {
                                            ?>
                                            <option value="">Pilih....</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        <?php
                                        } ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('jeniskelamin'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="alamatrumah" class="col-sm-2 col-form-label">Alamat Rumah</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control <?= ($validation->hasError('alamatrumah')) ? 'is-invalid' : ''; ?>" id="alamatrumah" name="alamatrumah" value="<?= old('alamatrumah'); ?>"></textarea>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('alamatrumah'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="narahubung" class="col-sm-2 col-form-label">No Whatsapp</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control <?= ($validation->hasError('narahubung')) ? 'is-invalid' : ''; ?>" id="narahubung" name="narahubung" value="<?= old('narahubung'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('narahubung'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="nowali" class="col-sm-2 col-form-label">No Orangtua / Wali</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control <?= ($validation->hasError('nowali')) ? 'is-invalid' : ''; ?>" id="nowali" name="nowali" value="<?= old('nowali'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nowali'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tinggi" class="col-sm-2 col-form-label">Tinggi (cm)</label>
                                <div class="col-sm-2">
                                    <input type="number" class="form-control <?= ($validation->hasError('tinggi')) ? 'is-invalid' : ''; ?>" id="tinggi" name="tinggi" value="<?= old('tinggi'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('tinggi'); ?>
                                    </div>
                                </div>
                                <label for="berat" class="col-sm-2 col-form-label">Berat (kg)</label>
                                <div class="col-sm-2">
                                    <input type="number" class="form-control <?= ($validation->hasError('berat')) ? 'is-invalid' : ''; ?>" id="berat" name="berat" value="<?= old('berat'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('berat'); ?>
                                    </div>
                                </div>
                                <label for="goldar" class="col-sm-2 col-form-label">Gol Darah</label>
                                <div class="col-sm-2">
                                    <select class="form-select <?= ($validation->hasError('goldar')) ? 'is-invalid' : ''; ?>" id="goldar" name="goldar">
                                        <?php if (old('goldar')) : ?>
                                            <?php if (old('goldar') == 'A') : ?>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="AB">AB</option>
                                                <option value="O">O</option>
                                            <?php elseif (old('goldar') == 'B') : ?>
                                                <option value="B">B</option>
                                                <option value="A">A</option>
                                                <option value="AB">AB</option>
                                                <option value="O">O</option>
                                            <?php elseif (old('goldar') == 'AB') : ?>
                                                <option value="AB">AB</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="O">O</option>
                                            <?php else : ?>
                                                <option value="O">O</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="AB">AB</option>
                                            <?php endif ?>
                                        <?php else : ?>
                                            <option value="">Pilih....</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="AB">AB</option>
                                            <option value="O">O</option>
                                        <?php endif ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('goldar'); ?>
                                    </div>
                                </div>
                            </div>
                            <h2>Pendidikan Formal</h2>
                            <div class="row mb-3">
                                <label for="sekolah" class="col-sm-2 col-form-label">Sekolah</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control <?= ($validation->hasError('sekolah')) ? 'is-invalid' : ''; ?>" id="sekolah" name="sekolah" value="<?= old('sekolah'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('sekolah'); ?>
                                    </div>
                                </div>
                                <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control <?= ($validation->hasError('kelas')) ? 'is-invalid' : ''; ?>" id="kelas" name="kelas" value="<?= old('kelas'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('kelas'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="alamatsekolah" class="col-sm-2 col-form-label">Alamat Sekolah</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control <?= ($validation->hasError('alamatsekolah')) ? 'is-invalid' : ''; ?>" id="alamatsekolah" name="alamatsekolah" value="<?= old('alamatsekolah'); ?>"></textarea>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('alamatsekolah'); ?>
                                    </div>
                                </div>
                            </div>
                            <h2>Persyaratan Berkas-berkas</h2>
                            <div class="row mb-3">
                                <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                                <div class="col-sm-10">
                                    <div class="">
                                        <input class="form-control <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" type="file" id="foto" name="foto" onchange="previewImg()">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('foto'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="akte" class="col-sm-2 col-form-label">Akte</label>
                                <div class="col-sm-10">
                                    <div class="">
                                        <input class="form-control <?= ($validation->hasError('akte')) ? 'is-invalid' : ''; ?>" type="file" id="akte" name="akte" onchange="previewImg()">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('akte'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="kartukeluarga" class="col-sm-2 col-form-label">Kartu Keluarga</label>
                                <div class="col-sm-10">
                                    <div class="">
                                        <input class="form-control <?= ($validation->hasError('kartukeluarga')) ? 'is-invalid' : ''; ?>" type="file" id="kartukeluarga" name="kartukeluarga" onchange="previewImg()">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('kartukeluarga'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="kia" class="col-sm-2 col-form-label">Kartu Identitas Anak</label>
                                <div class="col-sm-10">
                                    <div class="">
                                        <input class="form-control <?= ($validation->hasError('kia')) ? 'is-invalid' : ''; ?>" type="file" id="kia" name="kia" onchange="previewImg()">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('kia'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="nisn" class="col-sm-2 col-form-label">Nomor Induk Siswa Nasional</label>
                                <div class="col-sm-10">
                                    <div class="">
                                        <input class="form-control <?= ($validation->hasError('nisn')) ? 'is-invalid' : ''; ?>" type="file" id="nisn" name="nisn" onchange="previewImg()">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nisn'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="raport" class="col-sm-2 col-form-label">Raport</label>
                                <div class="col-sm-10">
                                    <div class="">
                                        <input class="form-control <?= ($validation->hasError('raport')) ? 'is-invalid' : ''; ?>" type="file" id="raport" name="raport" onchange="previewImg()">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('raport'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="fotoformal" class="col-sm-2 col-form-label">Foto Formal</label>
                                <div class="col-sm-10">
                                    <div class="">
                                        <input class="form-control <?= ($validation->hasError('fotoformal')) ? 'is-invalid' : ''; ?>" type="file" id="fotoformal" name="fotoformal" onchange="previewImg()">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('fotoformal'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <a href="#informasi" class="btn btn-outline-secondary">Ketentuan</a>
                                <button type="submit" class="btn btn-primary">Daftar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="ketentuan">
                <h1>Ketentuan Selanjutnya</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci minima, dicta provident sit harum ipsum sint eius ipsa deleniti temporibus. Expedita voluptate labore neque sit perferendis minus ab reprehenderit laboriosam.</p>
                <ul>
                    <li>Lorem ipsum dolor, sit amet consectetur adipisicing.</li>
                    <li>Lorem ipsum dolor, sit amet consectetur adipisicing.</li>
                    <li>Lorem ipsum dolor, sit amet consectetur adipisicing.</li>
                    <li>Lorem ipsum dolor, sit amet consectetur adipisicing.</li>
                    <li>Lorem ipsum dolor, sit amet consectetur adipisicing.</li>
                    <li>Lorem ipsum dolor, sit amet consectetur adipisicing.</li>
                </ul>
            </div>
        </div>
        <!-- <div class="col-md-2 eris-hidden">
            <div class="sticky-top d-flex flex-column align-items-stretch flex-shrink-0 bg-white">
                <div class="d-flex align-items-center flex-shrink-0 p-3 border-bottom">
                    <span class="fs-5 fw-semibold">Daftar Isi</span>
                </div>
                <div class="list-group list-group-flush border-bottom">
                    <a href="#informasi" class="list-group-item list-group-item-action lh-tight">
                        <div class="d-flex align-items-center justify-content-between">
                            Informasi Pendaftaran
                        </div>
                    </a>
                    <a href="#formulir" class="list-group-item list-group-item-action lh-tight">
                        <div class="d-flex align-items-center justify-content-between">
                            Formulir Pendaftaran
                        </div>
                    </a>
                    <a href="#ketentuan" class="list-group-item list-group-item-action lh-tight">
                        <div class="d-flex align-items-center justify-content-between">
                            Ketentuan Selanjutnya
                        </div>
                    </a>
                </div>
            </div>
        </div> -->
    </div>
</div>
<?= $this->endSection(); ?>