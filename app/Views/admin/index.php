<?= $this->extend("layout/template-blank"); ?>

<?= $this->section("content"); ?>
<h1><?= $title; ?></h1>
<a href="logout" class="btn btn-secondary">logout</a>
<?= $this->endSection(); ?>