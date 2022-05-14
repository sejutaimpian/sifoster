<?= $this->extend("layout/template"); ?>

<?= $this->section("content"); ?>
<div class="container my-2">
    <div class="row">
        <div class="col-md-9">
            <div id="pendahuluan" class="mb-3">
                <h2>Pendahuluan</h2>
                <?= $kurikulum[0]['pendahuluan']; ?>
            </div>
            <div id="klasifikasi" class="mb-3">
                <h2>Klasifikasi / Kelompok Belajar</h2>
                <?= $kurikulum[0]['klasifikasi']; ?>
            </div>
            <div id="penilaian" class="mb-3">
                <h2>Penilaian Siswa</h2>
                <?= $kurikulum[0]['penilaian']; ?>
            </div>
            <div id="tatatertib" class="mb-3">
                <h2>Tata Tertib Siswa</h2>
                <?= $kurikulum[0]['tatatertib']; ?>
            </div>
        </div>
        <div class="col-md-3 eris-hidden">
            <div class="sticky-top">
                <h5>Daftar Isi</h5>
                <ol>
                    <a href="#pendahuluan">
                        <li>Pendahuluan</li>
                    </a>
                    <a href="#klasifikasi">
                        <li>Klasifikasi / Kelompok</li>
                    </a>
                    <a href="#penilaian">
                        <li>Penilaian</li>
                    </a>
                    <a href="#tatatertib">
                        <li>Tata Tertib Siswa</li>
                    </a>
                </ol>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>