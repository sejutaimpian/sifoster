<?= $this->include('layout/header'); ?>
<div class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">SSB MK Cisayong</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="/image/<?= $user[0]['fotoformal']; ?>" class="fotoformal rounded-3 border border-primary" alt="foto formal">
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Manajemen Akun</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="/logout">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="">
                            <a class="nav-link" href="/user">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-gauge-high"></i></div>
                                Data Diri
                            </a>
                        </div>
                        <div class="">
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseOrang" aria-expanded="false" aria-controls="collapseOrang">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-people-group"></i></div>
                                Orang
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseOrang" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="/user/anggota">Anggota</a>
                                    <a class="nav-link" href="/user/pelatih">Pelatih</a>
                                </nav>
                            </div>
                        </div>
                        <div class="">
                            <a class="nav-link" href="/user/kurikulum">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-list-check"></i></div>
                                Kurikulum
                            </a>
                        </div>
                        <div class="">
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseInformasi" aria-expanded="false" aria-controls="collapseInformasi">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-bullhorn"></i></div>
                                Blog
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseInformasi" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="/user/informasi">Informasi</a>
                                    <a class="nav-link" href="/user/tulisan">Buat Tulisan</a>
                                </nav>
                            </div>
                        </div>
                        <div class="">
                            <a class="nav-link" href="/user/presensi">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-hand-point-up"></i></div>
                                Absensi
                            </a>
                        </div>
                        <div class="">
                            <a class="nav-link" href="/user/kompetisi">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-flag-checkered"></i></div>
                                Kompetisi
                            </a>
                        </div>
                        <div class="">
                            <a class="nav-link" href="/user/prestasi">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-trophy"></i></div>
                                Prestasi
                            </a>
                        </div>
                        <div class="">
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseKeuangan" aria-expanded="false" aria-controls="collapseKeuangan">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-wallet"></i></div>
                                Keuangan
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseKeuangan" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="/user/pemasukan">Pemasukan</a>
                                    <a class="nav-link" href="/user/pengeluaran">Pengeluaran</a>
                                    <a class="nav-link" href="/user/laporankeuangan">Laporan</a>
                                </nav>
                            </div>
                        </div>
                        <div class="">
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePengaturan" aria-expanded="false" aria-controls="collapsePengaturan">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-gear"></i></div>
                                Lainnya
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePengaturan" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="/user/profileorganisasi">Profile Organisasi</a>
                                    <a class="nav-link" href="/user/manajemenakun">Manajemen Akun</a>
                                </nav>
                            </div>
                        </div>
                        <div class="">
                            <a class="nav-link" href="/logout" onclick="return confirm('Yakin untuk logout?');">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-right-from-bracket"></i></div>
                                Logout
                            </a>
                        </div>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    <?= ucfirst($user[0]['namasiswa']); ?>
                </div>
            </nav>
        </div>

        <!-- Konten Utama -->
        <div id="layoutSidenav_content">
            <main>
                <?= $this->renderSection('content'); ?>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; ssbmiftahulkhoir.org <?= date('Y'); ?></div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>
<?= $this->include('layout/footer'); ?>