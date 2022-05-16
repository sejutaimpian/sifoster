<?= $this->extend("layout/template-user"); ?>

<?= $this->section("content"); ?>
<div class="container-fluid px-4 mt-3">

    <!-- Datatbles -->
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center">
            <div class="col-10">
                <i class="fa-solid fa-house-user fs-4 me-2"></i>
                <span class="fs-4 eris-hidden">Profile Organisasi</span>
            </div>
        </div>
        <div class="card-body">
            <table id="datatablesProfileAdmin">
                <thead>
                    <tr>
                        <th>Nama Organisasi</th>
                        <th>Visi</th>
                        <th>Misi</th>
                        <th>Logo</th>
                        <th>Hero</th>
                        <th>Sekre</th>
                        <th>Lapangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $profileorganisasi[0]['nama_organisasi']; ?></td>
                        <td><?= $profileorganisasi[0]['visi']; ?></td>
                        <td>
                            <?php foreach ($profileorganisasi as $p) : ?>
                                <ul>
                                    <li><?= $p['misi']; ?></li>
                                </ul>
                            <?php endforeach ?>
                        </td>
                        <td>
                            <img src="/image/<?= $profileorganisasi[0]['flogo']; ?>" alt="" class="eris-mh-20">
                        </td>
                        <td>
                            <img src="/image/<?= $profileorganisasi[0]['fhero']; ?>" alt="" class="eris-mh-20">
                        </td>
                        <td>
                            <img src="/image/<?= $profileorganisasi[0]['fsekre']; ?>" alt="" class="eris-mh-20">
                        </td>
                        <td>
                            <img src="/image/<?= $profileorganisasi[0]['flapang']; ?>" alt="" class="eris-mh-20">
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>