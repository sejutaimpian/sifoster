<?= $this->extend("layout/template"); ?>

<?= $this->section("content"); ?>

<div class="container">
    <div class="row eris-80vh">
        <div class="col-md-6 my-auto">
            <h1>$Nama Organisasi</h1>
            <p>Adalah sekolah sepakbola ternama di daerah Cisayong. Anggota dari penjuru daerah, pelatihan optimal, pelatih profesional, dan tentunya ramah di kantong.</p>
            <h4>Segeralah bergabung bersama kami</h4>
            <a href="/gabung" class="btn btn-primary">Gabung</a>
        </div>
        <div class="col-md-6 my-auto py-2">
            <img src="/image/team.jpg" alt="" class="img-fluid img-thumbnail">
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 my-2">
            <a href="/pelatih">
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
    <div class="row eris-80vh my-3">
        <div class="col-md-6 my-auto">
            <img src="/image/field2.jpg" alt="" class="img-fluid img-thumbnail" style="">
        </div>
        <div class="col-md-3 my-auto">
            <h2>Visi</h2>
            <p>MENCETAK BIBIT UNGGUL BERKUALITAS AGAR BISA BERKIPRAH DI LEVEL NASIONAL</p>
        </div>
        <div class="col-md-3 my-auto">
            <h2>Misi</h2>
            <ul>
                <li>1. Melakukan Pembinaan Serta Mengasah Bakat / Kemampuan diBidang Sepakbola Sejak Usia Dini Sampai Remaja.</li>
                <li>2. Mencetak Pemain Berkualitas Dari Aspek Skill, Attitude dan Character.</li>
                <li>3. Mengharumkan Nama kecamatan Maja Dari Mulai Tingkat Lokal sampai Nasional Bahkan International.</li>
            </ul>
        </div>
    </div>
</div>
<div class="container my-3">
    <div class="row bg-eris-susu border rounded-top">
        <div class="col-sm-12 my-1">
            <div class="row d-flex align-items-center">
                <div class="col-10">
                    <i class="fa-solid fa-bullhorn fs-2"></i>
                    <span class="h1 eris-hidden">Informasi</span>
                </div>
                <div class="col-2 text-end">
                    <a href="/informasi" class="btn">
                        <i class="fa-solid fa-arrow-right fs-2"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
    <div class="row border">
        <div class="col-md-3">
            <div class="card my-2">
                <img src="/image/shoes.jpg" class="card-img-top img-cover" alt="foto">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>

                    <p class="card-text description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe, inventore atque et sint maxime debitis esse numquam suscipit enim aliquam.</p>
                    <a href="#" class="btn btn-outline-primary">Read More</a>
                </div>
                <div class="card-footer">
                    <img src="/image/avatar.png" alt="Avatar" class="border rounded-circle avatar">
                    <small class="text-muted">Eris Sulistina</small>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card my-2">
                <img src="/image/piala.jpg" class="card-img-top img-cover" alt="foto">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe, inventore atque et sint maxime debitis esse numquam suscipit enim aliquam.</p>
                    <a href="#" class="btn btn-outline-primary">Read More</a>
                </div>
                <div class="card-footer">
                    <img src="/image/avatar.png" alt="Avatar" class="border rounded-circle avatar">
                    <small class="text-muted">Eris Sulistina</small>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card my-2">
                <img src="/image/team2.jpg" class="card-img-top img-cover" alt="foto">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>

                    <p class="card-text description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe, inventore atque et sint maxime debitis esse numquam suscipit enim aliquam.</p>
                    <a href="#" class="btn btn-outline-primary">Read More</a>
                </div>
                <div class="card-footer">
                    <img src="/image/avatar.png" alt="Avatar" class="border rounded-circle avatar">
                    <small class="text-muted">Eris Sulistina</small>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card my-2">
                <img src="/image/shoes.jpg" class="card-img-top img-cover" alt="foto">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>

                    <p class="card-text description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe, inventore atque et sint maxime debitis esse numquam suscipit enim aliquam.</p>
                    <a href="#" class="btn btn-outline-primary">Read More</a>
                </div>
                <div class="card-footer">
                    <img src="/image/avatar.png" alt="Avatar" class="border rounded-circle avatar">
                    <small class="text-muted">Eris Sulistina</small>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>