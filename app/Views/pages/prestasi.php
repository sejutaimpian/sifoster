<?= $this->extend("layout/template"); ?>

<?= $this->section("content"); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 mb-3">
            <h1><?= $title; ?></h1>
            <div class="list-group">
                <?php foreach ($prestasi as $p) : ?>
                    <div class="list-group-item ">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1 fw-bold"><?= $p['juara']; ?></h5>
                            <small class="text-muted"><?= $p['waktu']; ?></small>
                        </div>
                        <h5 class="mb-1"><?= $p['ajang']; ?></h5>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
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
                        <a href="/informasi/kategori/<?= $k['id']; ?>" class="list-group-item list-group-item-action"><?= $k['namakategori']; ?></a>
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