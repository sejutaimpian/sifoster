<?= $this->extend("layout/template"); ?>

<?= $this->section("content"); ?>
<div class="container my-2">
    <h1><?= $title; ?></h1>
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
        <div class="col">
            <img src="/image/field.jpg" class="gallery-item img-thumbnail">
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