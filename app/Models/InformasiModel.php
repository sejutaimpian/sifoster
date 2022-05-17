<?php

namespace App\Models;

use CodeIgniter\Model;
use mysqli;

class InformasiModel extends Model
{
    protected $table = 'informasi';
    protected $useTimestamps = true;
    protected $allowedFields = ['penulis', 'judul', 'isi', 'idkategori', 'gambar'];

    public function getJoinInformasiKategori($id)
    {
        return $this->db->table('informasi')
            ->join('kategori_blog', 'informasi.idkategori = kategori_blog.idkategori')->where('informasi.id', $id)
            ->get()->getResultArray();
    }
    public function getJoinKategoriInformasi($id)
    {
        return $this->db->table('informasi')
            ->join('kategori_blog', 'informasi.idkategori = kategori_blog.idkategori')->where('kategori_blog.idkategori', $id)
            ->get()->getResultArray();
    }
    public function getJoinAll()
    {
        return $this->db->table('informasi')
            ->join('kategori_blog', 'kategori_blog.idkategori = informasi.idkategori')->orderBy('created_at', 'DESC')
            ->get()->getResultArray();
    }
}
