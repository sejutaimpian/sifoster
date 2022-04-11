<?= $this->extend("layout/template"); ?>

<?= $this->section("content"); ?>
<div class="container">
    <div class="row">
        <h1><?= $title; ?></h1>
        <div class="col-md-8 mb-3">
            <div class="list-group">
                <div class="list-group-item ">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Juara 1 tingkat kecamatan</h5>
                        <small class="text-muted">1 Mei 2000</small>
                    </div>
                    <p class="mb-1">Some placeholder content in a paragraph.</p>
                </div>
                <div class="list-group-item ">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Juara 3 tingkat Kabupaten</h5>
                        <small class="text-muted">27 Februari 1999</small>
                    </div>
                    <p class="mb-1">Some placeholder content in a paragraph.</p>
                </div>
                <div class="list-group-item ">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Juara Harapan</h5>
                        <small class="text-muted">30 Maret 2002</small>
                    </div>
                    <p class="mb-1">Some placeholder content in a paragraph.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
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