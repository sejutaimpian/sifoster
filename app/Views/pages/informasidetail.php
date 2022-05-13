<?= $this->extend("layout/template"); ?>
<?php
?>

<?= $this->section("content"); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 mb-3">
            <h1 class="mb-0"><?= $informasi[0]['judul']; ?></h1>
            <small class="mb-2 bg-primary text-light px-2"><?= $informasi[0]['namakategori']; ?></small>
            <img src="/image/<?= $informasi[0]['gambar']; ?>" alt="" class="img-fluid eris-mh mx-auto d-block">
            <div class="mt-3"><?= $informasi[0]['isi']; ?></div>
        </div>

        <!-- side content -->
        <div class="col-md-4 mt-3">
            <div class="mb-3">
                <h5>Cari Informasi</h5>
                <form class="input-group">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
            <div class="mb-3">
                <h5>Kategori Informasi</h5>
                <div class="list-group">
                    <?php foreach ($kategori as $k) : ?>
                        <a href="/informasi/kategori/<?= $k['idkategori']; ?>" class="list-group-item list-group-item-action"><?= $k['namakategori']; ?></a>
                    <?php endforeach ?>
                </div>
            </div>
            <div class="mb-3">
                <h5>Label</h5>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">Pendidikan</a>
                    <a href="#" class="list-group-item list-group-item-action">Keorganisasian</a>
                    <a href="#" class="list-group-item list-group-item-action">Kompetisi</a>
                    <a href="#" class="list-group-item list-group-item-action">Prestasi</a>
                    <a href="#" class="list-group-item list-group-item-action">Hiburan</a>
                </div>
            </div>
            <div class="mb-3">
                <h5>Postingan Terpopuler</h5>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">Pendidikan</a>
                    <a href="#" class="list-group-item list-group-item-action">Keorganisasian</a>
                    <a href="#" class="list-group-item list-group-item-action">Kompetisi</a>
                    <a href="#" class="list-group-item list-group-item-action">Prestasi</a>
                    <a href="#" class="list-group-item list-group-item-action">Hiburan</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>