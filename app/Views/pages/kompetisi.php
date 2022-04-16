<?= $this->extend("layout/template"); ?>

<?= $this->section("content"); ?>
<div class="container">
    <div class="row">
        <h1><?= $title; ?></h1>
        <div class="col-md-8 mb-3">
            <div class="list-group">
                <?php foreach ($kompetisi as $k) : ?>
                    <?php
                    // bg-primary or bg-secondary
                    if (strtotime($k['waktukompetisi']) <= time()) {
                        $bg = 'bg-secondary';
                    } else {
                        $bg = 'bg-primary';
                    }
                    ?>
                    <a href="<?= $k['link']; ?>" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h3 class="mb-1"><?= $k['namakompetisi']; ?></h3>
                            <span class="badge <?= $bg; ?> rounded-pill my-auto"><?= $k['waktukompetisi']; ?></span>
                        </div>
                        <h6 class="mb-1"><i class="fa-solid fa-location-dot"></i><?= $k['tempat']; ?></h6>
                        <p class="mb-1"><?= $k['keterangan']; ?></p>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="col-md-4">
            <div class="mb-3">
                <h5>Cari Informasi</h5>
                <form class="input-group" action="">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
            <div class="mb-3">
                <h5>Kategori Informasi</h5>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">Pendidikan</a>
                    <a href="#" class="list-group-item list-group-item-action">Keorganisasian</a>
                    <a href="#" class="list-group-item list-group-item-action">Kompetisi</a>
                    <a href="#" class="list-group-item list-group-item-action">Prestasi</a>
                    <a href="#" class="list-group-item list-group-item-action">Tulisan Anggota</a>
                    <a href="#" class="list-group-item list-group-item-action">Hiburan</a>
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