<?= $this->extend("layout/template"); ?>

<?= $this->section("content"); ?>
<div class="container">
    <div class="row">
        <h1><?= $title; ?></h1>
        <div class="col-md-12">
            <div class="table-responsive-md">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Nomor Induk Siswa</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>
                                <img src="/image/avatar.png" alt="" class="img-fluid eris-mh-20">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>
                                <img src="/image/avatar.png" alt="" class="img-fluid eris-mh-20">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>
                                <img src="/image/avatar.png" alt="" class="img-fluid eris-mh-20">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>
                                <img src="/image/avatar.png" alt="" class="img-fluid eris-mh-20">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>