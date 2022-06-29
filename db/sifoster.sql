-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jun 2022 pada 12.53
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sifoster`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gabung`
--

CREATE TABLE `gabung` (
  `id` int(11) NOT NULL,
  `namasiswa` varchar(255) NOT NULL,
  `tempatlahir` varchar(255) NOT NULL,
  `tanggallahir` date NOT NULL,
  `jeniskelamin` varchar(255) NOT NULL,
  `alamatrumah` varchar(255) NOT NULL,
  `nowhatsapp` varchar(15) NOT NULL,
  `nowali` varchar(15) NOT NULL,
  `tinggi` varchar(5) NOT NULL,
  `berat` varchar(5) NOT NULL,
  `goldar` varchar(5) NOT NULL,
  `sekolah` varchar(255) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `alamatsekolah` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `idklasifikasi` varchar(5) NOT NULL,
  `fotoformal` varchar(255) NOT NULL,
  `akte` varchar(255) NOT NULL,
  `kartukeluarga` varchar(255) NOT NULL,
  `kia` varchar(255) NOT NULL,
  `nisn` varchar(255) NOT NULL,
  `raport` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gabung`
--

INSERT INTO `gabung` (`id`, `namasiswa`, `tempatlahir`, `tanggallahir`, `jeniskelamin`, `alamatrumah`, `nowhatsapp`, `nowali`, `tinggi`, `berat`, `goldar`, `sekolah`, `kelas`, `alamatsekolah`, `email`, `password`, `idklasifikasi`, `fotoformal`, `akte`, `kartukeluarga`, `kia`, `nisn`, `raport`, `created_at`, `updated_at`) VALUES
(1, 'Evi Anjung Sakinah', 'Tasikmalaya', '1998-04-12', 'Perempuan', 'Belakang stasiun kereta Tasikmalaya', '081311111111', '081222222222', '170', '67', 'A', 'SMAN 2 Tasikmalaya', '12', 'Tasikmalaya', 'eviajs@gmail.com', 'eviajs@gmail.com', '3', 'avatar.png', 'shoes.jpg', 'shoes.jpg', 'shoes.jpg', 'shoes.jpg', 'shoes.jpg', '2022-06-28 13:48:35', '2022-06-28 13:48:35'),
(6, 'Eris', 'Tasikmalaya', '2000-07-19', 'Laki-laki', 'Cipatujah', '0813', '0813', '170', '70', 'A', 'SMK Jomping', '13', 'Jompong', 'eris@gmail.com', '$2y$10$VwNxmzW0bu6AOA2UVSaGYOV7P1wJok3oJ.MVCEBVFOhJlW3tY08PO', '3', '1656499668_e9f335f9160377493c92.jpg', '1656499668_a0638ab55bbd6657eff9.jpg', '1656499668_7460810a1baa028224e6.jpg', '1656499668_8856ea78891d39a26f4f.jpg', '1656499668_70c2c388cbf2b66d6598.jpg', '1656499668_595a5aee4df0248e7571.jpg', '2022-06-29 05:47:48', '2022-06-29 05:47:48');

--
-- Trigger `gabung`
--
DELIMITER $$
CREATE TRIGGER `gabungUser` AFTER INSERT ON `gabung` FOR EACH ROW INSERT INTO user (id, namasiswa, nowhatsapp, email, password, fotoformal, role, is_active, created_at, updated_at) VALUES (new.id, new.namasiswa, new.nowhatsapp, new.email, new.password, new.fotoformal, 'user', 0, new.created_at, new.updated_at)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `idkategori` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id`, `penulis`, `judul`, `isi`, `idkategori`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Penerimaan Peserta Didik Baru 2022/2023', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam quis rhoncus dolor. Donec pretium arcu facilisis, interdum dolor sit amet, condimentum mi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus efficitur finibus orci, ut iaculis risus sollicitudin vitae. In feugiat bibendum turpis, ut feugiat augue sagittis sit amet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam in libero non justo interdum dignissim. Aliquam maximus ex vel consectetur aliquet. Mauris tincidunt ante in cursus scelerisque. Morbi lobortis tincidunt consequat. In hac habitasse platea dictumst. Suspendisse in condimentum tortor. Morbi sodales mattis ipsum, eu semper ligula sollicitudin non.', '1', 'sad.jpg', NULL, NULL),
(2, 'Evi AS', 'Suka Duka di SSB', 'Nam in neque a tortor dignissim pellentesque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque quis nisl quis magna sollicitudin vestibulum pulvinar eget augue. Curabitur commodo, arcu eget blandit congue, enim augue auctor lorem, quis facilisis risus turpis at ex. Aenean hendrerit sapien eget lorem accumsan, ut scelerisque nisi hendrerit. Vivamus in viverra felis. Sed molestie felis at consequat mattis. Phasellus et arcu a augue tristique tristique sit amet quis turpis. Nunc pretium turpis mauris, nec viverra tellus ultricies lacinia. Vestibulum sollicitudin dui ac dolor ultrices, pretium pharetra erat elementum.', '3', 'skill-up.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_blog`
--

CREATE TABLE `kategori_blog` (
  `idkategori` int(11) NOT NULL,
  `namakategori` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori_blog`
--

INSERT INTO `kategori_blog` (`idkategori`, `namakategori`, `created_at`, `updated_at`) VALUES
(1, 'Pengumuman', '2022-06-29 05:27:52', '2022-06-29 05:27:52'),
(2, 'Hiburan', '2022-06-29 05:27:52', '2022-06-29 05:27:52'),
(3, 'Tulisan Anggota', '2022-06-29 05:28:20', '2022-06-29 05:28:20'),
(4, 'Opini', '2022-06-29 05:28:20', '2022-06-29 05:28:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `klasifikasi`
--

CREATE TABLE `klasifikasi` (
  `idklasifikasi` int(11) NOT NULL,
  `namaklasifikasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `klasifikasi`
--

INSERT INTO `klasifikasi` (`idklasifikasi`, `namaklasifikasi`) VALUES
(1, 'Dasar'),
(2, 'Menengah'),
(3, 'Lanjutan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kompetisi`
--

CREATE TABLE `kompetisi` (
  `id` int(11) NOT NULL,
  `namakompetisi` varchar(255) NOT NULL,
  `waktukompetisi` date NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kompetisi`
--

INSERT INTO `kompetisi` (`id`, `namakompetisi`, `waktukompetisi`, `tempat`, `link`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Lomba Sepakbola Milenial se-Kota Tasikmalaya', '2023-06-16', 'Aulia Futsal, Kota Tasikmalaya', 'https://google.com', 'Klik untuk info lebih lanjut', '2022-06-29 06:48:39', '2022-06-29 06:48:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kurikulum`
--

CREATE TABLE `kurikulum` (
  `id` int(11) NOT NULL,
  `pendahuluan` text NOT NULL,
  `klasifikasi` text NOT NULL,
  `penilaian` text NOT NULL,
  `tatatertib` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kurikulum`
--

INSERT INTO `kurikulum` (`id`, `pendahuluan`, `klasifikasi`, `penilaian`, `tatatertib`, `created_at`, `updated_at`) VALUES
(1, 'Pertama-tama Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus arcu erat, iaculis placerat pellentesque sed, posuere eu ligula. Nullam erat arcu, commodo non ultricies quis, bibendum ac velit. Vivamus ac nibh vel est maximus congue.', 'Klasifikasi di SSB kami terbagi menjadi 3 Aliquam nec lectus est. Quisque mattis auctor pretium. Donec facilisis lectus libero, sodales faucibus eros convallis vel. Pellentesque volutpat imperdiet erat, ut tempor nisi dignissim sed.', 'Penilaian diambil setiap triwulan sekali dengan kriteria Morbi ut lorem urna. Sed eu consectetur mauris, non fermentum magna. Aenean congue ornare euismod. Nullam a vulputate ante. Proin id elit nunc. Donec sit amet augue nisl.', 'Tata tertib SSB kami diantaranya: \nInteger nulla leo, tincidunt eu pharetra et, luctus et augue. Fusce sagittis leo a est gravida, a bibendum nulla efficitur. Phasellus blandit velit vel nisi vestibulum, in maximus leo placerat. Nullam eget convallis ero.', '2022-06-29 05:17:39', '2022-06-29 05:17:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelatih`
--

CREATE TABLE `pelatih` (
  `id` int(11) NOT NULL,
  `nama_pelatih` varchar(255) NOT NULL,
  `nomor_pelatih` varchar(255) NOT NULL,
  `sertifikasi` varchar(255) NOT NULL,
  `pengalaman` varchar(255) NOT NULL,
  `tahun_kerja` year(4) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelatih`
--

INSERT INTO `pelatih` (`id`, `nama_pelatih`, `nomor_pelatih`, `sertifikasi`, `pengalaman`, `tahun_kerja`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Sarmidi M.Kom.', '43200700', 'SSB Real Madrid Jakarta', 'Timnas Indonesia U-20', 2021, 'piala3.jpg', '2022-06-29 05:12:38', '2022-06-29 05:12:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi`
--

CREATE TABLE `prestasi` (
  `id` int(11) NOT NULL,
  `juara` varchar(255) NOT NULL,
  `ajang` varchar(255) NOT NULL,
  `waktu` date NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `prestasi`
--

INSERT INTO `prestasi` (`id`, `juara`, `ajang`, `waktu`, `created_at`, `updated_at`) VALUES
(1, 'Juara 1', 'Lomba Sepakbola Milenial se-Kota Tasikmalaya', '2023-06-16', '2022-06-29 06:52:31', '2022-06-29 06:52:31'),
(2, 'Juara Harapan', 'Lomba 17-an Gubernur Kota Tasikmalaya U-17', '2021-08-17', '2022-06-29 06:55:03', '2022-06-29 06:55:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `nama_organisasi` varchar(255) NOT NULL,
  `visi` varchar(255) NOT NULL,
  `flogo` varchar(255) NOT NULL,
  `fhero` varchar(255) NOT NULL,
  `fsekre` varchar(255) NOT NULL,
  `flapang` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profile`
--

INSERT INTO `profile` (`id`, `nama_organisasi`, `visi`, `flogo`, `fhero`, `fsekre`, `flapang`, `created_at`, `updated_at`) VALUES
(1, 'Sekolah Sepak Bola Tasikmalaya', 'Menjadikan atlit sehat, kuat, dan berprestasi di tingkat kota sampai Internasional', 'logo.png', 'team.jpg', 'sekre.jpg', 'field2.jpg', '2022-06-28 12:33:52', '2022-06-28 12:33:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile_misi`
--

CREATE TABLE `profile_misi` (
  `id` int(11) NOT NULL,
  `idprofile` int(255) NOT NULL,
  `misi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profile_misi`
--

INSERT INTO `profile_misi` (`id`, `idprofile`, `misi`) VALUES
(1, 1, 'latihan, latihan, juara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `namasiswa` varchar(255) NOT NULL,
  `nowhatsapp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fotoformal` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL,
  `is_active` varchar(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `namasiswa`, `nowhatsapp`, `email`, `password`, `fotoformal`, `role`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'admin', '08', 'admin@gmail.com', '$2y$10$VwNxmzW0bu6AOA2UVSaGYOV7P1wJok3oJ.MVCEBVFOhJlW3tY08PO', 'avatar.png', 'admin', '1', '2022-06-29 12:49:11', '2022-06-29 12:49:11'),
(6, 'Eris', '0813', 'eris@gmail.com', '$2y$10$VwNxmzW0bu6AOA2UVSaGYOV7P1wJok3oJ.MVCEBVFOhJlW3tY08PO', '1656499668_e9f335f9160377493c92.jpg', 'user', '1', '2022-06-29 05:47:48', '2022-06-29 05:52:09');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gabung`
--
ALTER TABLE `gabung`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori_blog`
--
ALTER TABLE `kategori_blog`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indeks untuk tabel `klasifikasi`
--
ALTER TABLE `klasifikasi`
  ADD PRIMARY KEY (`idklasifikasi`);

--
-- Indeks untuk tabel `kompetisi`
--
ALTER TABLE `kompetisi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kurikulum`
--
ALTER TABLE `kurikulum`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelatih`
--
ALTER TABLE `pelatih`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profile_misi`
--
ALTER TABLE `profile_misi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gabung`
--
ALTER TABLE `gabung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kategori_blog`
--
ALTER TABLE `kategori_blog`
  MODIFY `idkategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `klasifikasi`
--
ALTER TABLE `klasifikasi`
  MODIFY `idklasifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kompetisi`
--
ALTER TABLE `kompetisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kurikulum`
--
ALTER TABLE `kurikulum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pelatih`
--
ALTER TABLE `pelatih`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `profile_misi`
--
ALTER TABLE `profile_misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
