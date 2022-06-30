# Sistem Informasi Terpadu => Sekolah Sepak Bola

## Tentang repo ini

Sistem informasi terpadu adalah gabungan dari beberapa sistem informasi. Objek yang saya gunakan adalah organisasi Sekolah Sepak Bola.

## Status Repo

`Stabil dan tidak akan ada perkembangan selanjutnya`
harusnya ada menu absensi dan menu keuangan pada halaman dashboard admin maupun user. tapi dikarenakan projek ini dihentikan, maka aplikasinya hanya berhenti sampai sini tanpa ada fitur absensi dan keuangan.

<hr>

## Daftar Isi

1. [Teknologi](#teknologi)
2. [Fitur](#fitur)
3. [Demo Aplikasi](#demo-aplikasi)
4. [Instalasi](#instalasi)
   - [Spesifikasi yang Dibutuhkan](#spesifikasi)
   - [Cara Install](#cara-install)
   - [Login Dashboard](#cara-install)
   - [Testing](#automated-testing)
5. [Lisensi](#license)

<hr>

## Teknologi

Teknologi yang digunakan untuk membangun aplikasi ini diantaranya:

1. [Codeigniter 4](https://codeigniter.com/)
2. [Bootstrap 5](https://getbootstrap.com/)
3. [Fontawsome](https://fontawesome.com/)
4. [Sbadmin](https://github.com/startbootstrap/startbootstrap-sb-admin)
5. [Datatables](https://datatables.net/)
6. [MariaDB / MySql](https://mariadb.org/)
7. [Ckeditor 5](https://ckeditor.com/)
8. [Composer](https://getcomposer.org/)

<hr>

## Fitur

Fitur pada Aplikasi ini meliputi:

1. Halaman Pengunjung

   - Home
   - Anggota
   - Pelatih
   - Kurikulum
   - Informasi
   - Kompetisi
   - Prestasi
   - Gallery
   - Gabung / Daftar
   - Login

2. Halaman Dashboard Admin

   - Dashboard
   - Orang
     - Anggota
     - Pelatih
   - Kurikulum
   - Blog
     - Informasi
     - Kategori
     - Tulisan Anggota
   - Absensi
   - Kompetisi
   - Prestasi
   - Keuangan
   - Pengaturan
     - Profile Organisasi
     - Manajemen Akun
   - Logout

3. Halaman Dashboard Anggota / User

   - Dashboard

     - Orang
     - Anggota
     - Pelatih

   - Kurikulum
   - Blog

     - Informasi
     - Kategori
     - Tulisan Anggota

   - Absensi
   - Kompetisi
   - Prestasi
   - Keuangan
   - Pengaturan

     - Profile Organisasi
     - Manajemen Akun

   - Logout

<hr>

## Instalasi

1. Clone repository ini `git clone https://github.com/sejutaimpian/sifoster.git`
2. Buat database dengan nama 'sifoster' lalu Import `sifoster.sql` yang ada pada folder db ke phpmyadmin
3. Rename file env menjadi .env
4. ketik perintah 'composer install' pada terminal (harus sudah menginstall composer).
5. run mysql (pada xampp biasanya)
6. Jalankan perintah `php spark serve` pada terminal untuk menjalankan aplikasi. pastikan lokasinya run tepat berada pada aplikasi dan pastikan juga untuk memiliki koneksi internet.

### Spesifikasi

- PHP ^7.3
- Codeigniter 4.x
- Database MySQL atau MariaDB 5.x

### Login Dashboard

```
ADMIN
Username: admin@gmail.com
Password: eris

USER
Username: eris@gmail.com
Password: eris
```

### Automated Testing

....

<hr>

## Lisensi

Project Sistem Informasi Terpadu ini merupakan software yang free dan open source di bawah [lisensi MIT](LICENSE).
