<?php

namespace App\Models;

use CodeIgniter\Model;

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
}
