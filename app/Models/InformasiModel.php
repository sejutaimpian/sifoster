<?php

namespace App\Models;

use CodeIgniter\Model;
use mysqli;

class InformasiModel extends Model
{
    protected $table = 'informasi';
    protected $useTimestamps = true;
    protected $allowedFields = ['judul', 'isi', 'idkategori', 'gambar'];

    public function getJoinInformasiKategori($id)
    {
        return $this->db->table('informasi')
            ->join('kategori', 'informasi.idkategori = kategori.id')->where('informasi.id', $id)
            ->get()->getResultArray();
    }
    public function getJoinAll()
    {
        return $this->db->table('informasi')->select('informasi.id, judul, isi, idkategori, gambar, informasi.created_at, informasi.updated_at, ciriid, namakategori')
            ->join('kategori', 'kategori.ciriid = informasi.idkategori')
            ->get()->getResultArray();
    }
}
