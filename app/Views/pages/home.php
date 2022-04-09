<?= $this->extend("layout/template"); ?>

<?= $this->section("content"); ?>
<!-- Hero -->
<div class="container">
    <div class="row eris-80vh">
        <div class="col-md-6 my-auto">
            <h1><?= $profile[0]['nama_organisasi']; ?></h1>
            <p>Adalah sekolah sepakbola ternama di daerah Cisayong. Anggota dari penjuru daerah, pelatihan optimal, pelatih profesional, dan tentunya ramah di kantong.</p>
            <h4>Segeralah bergabung bersama kami</h4>
            <a href="/gabung" class="btn btn-primary">Gabung</a>
        </div>
        <div class="col-md-6 my-auto py-2">
            <img src="/image/<?= $profile[0]['fhero']; ?>" alt="" class="img-fluid img-thumbnail eris-mh">
        </div>
    </div>
    <!-- CTA -->
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
            <a href="/kurikulum">
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
            <a href="/kompetisi">
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
            <a href="/prestasi">
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
    <!-- Visi & Misi -->
    <div class="row eris-80vh my-3">
        <div class="col-md-6 my-auto">
            <img src="/image/<?= $profile[0]['flapang']; ?>" alt="" class="img-fluid img-thumbnail" style="">
        </div>
        <div class="col-md-3 my-auto">
            <h2>Visi</h2>
            <p><?= $profile[0]['visi']; ?></p>
        </div>
        <div class="col-md-3 my-auto">
            <h2>Misi</h2>
            <ul>
                <?php $i = 1 ?>
                <?php foreach ($profile as $p) : ?>
                    <li><?= $i; ?>. <?= $p['misi']; ?>.</li>
                    <?php $i++ ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<!-- Informasi -->
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
            </div>
        </div>
    </div>
</div>

<!-- Gallery -->
<div class="container my-2">
    <div class="row bg-eris-susu border rounded-top rounded-bottom mb-2">
        <div class="col-sm-12 my-1">
            <div class="row d-flex align-items-center">
                <div class="col-10">
                    <i class="fa-solid fa-images fs-2"></i>
                    <span class="h1 eris-hidden">Gallery</span>
                </div>
                <div class="col-2 text-end">
                    <a href="/gallery" class="btn">
                        <i class="fa-solid fa-arrow-right fs-2"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
    <div class="row g-2 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
        <div class="col">
            <img src="/image/team.jpg" class="gallery-item img-thumbnail">
        </div>
        <div class="col">
            <img src="/image/team2.jpg" class="gallery-item img-thumbnail">
        </div>
        <div class="col">
            <img src="/image/piala3.jpg" class="gallery-item img-thumbnail">
        </div>
        <div class="col">
            <img src="/image/field2.jpg" class="gallery-item img-thumbnail">
        </div>
        <div class="col">
            <img src="/image/piala.jpg" class="gallery-item img-thumbnail">
        </div>
        <div class="col">
            <img src="/image/piala2.jpg" class="gallery-item img-thumbnail">
        </div>
        <div class="col">
            <img src="/image/sekre.jpg" class="gallery-item img-thumbnail">
        </div>
        <div class="col">
            <img src="/image/shoes.jpg" class="gallery-item img-thumbnail">
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="" class="modal-img gallery-item" alt="">
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>