<?= $this->extend("layout/template"); ?>

<?= $this->section("content"); ?>
<div class="container">
    <div class="row eris-80vh">
        <div class="col-md-6 my-auto px-2">
            <h1>$Nama Organisasi</h1>
            <p>Adalah sekolah sepakbola ternama di daerah Cisayong. Anggota dari penjuru daerah, pelatihan optimal, pelatih profesional, dan tentunya ramah di kantong.</p>
            <h4>Segeralah bergabung bersama kami</h4>
            <a href="/gabung" class="btn btn-primary">Gabung</a>
        </div>
        <div class="col-md-6 my-auto">
            <img src="/image/team.jpg" alt="" class="img-fluid my-2 img-thumbnail">
        </div>
    </div>
</div>
<div class="container-fluid darurat-1">
    <div class="row">
        <div class="col-md-3 my-2">
            <a href="">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <i class="fa-solid fa-graduation-cap display-1"></i>
                        <h5 class="card-title">PELATIH</h5>
                        <p class="card-text">Pelatih yang berpengalaman mendatangkan keahlian</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 my-2">
            <a href="">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <i class="fa-solid fa-list-check display-1"></i>
                        <h5 class="card-title">KURIKULUM</h5>
                        <p class="card-text">Kurikulum yang mantap melatihmu secara bertahap</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 my-2">
            <a href="">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <i class="fa-solid fa-flag-checkered display-1"></i>
                        <h5 class="card-title">KOMPETISI</h5>
                        <p class="card-text">Berbagai kompetisi telah dilalui dan akan terus mengikuti</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 my-2">
            <a href="">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <i class="fa-solid fa-trophy display-1"></i>
                        <h5 class="card-title">PRESTASI</h5>
                        <p class="card-text">Prestasi menjadi saksi kehebatan sekolah kami</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>