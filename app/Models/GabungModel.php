<?php

namespace App\Models;

use CodeIgniter\Model;

class GabungModel extends Model
{
    protected $table = 'gabung';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'namasiswa', 'tempatlahir', 'tanggallahir', 'jeniskelamin', 'alamatrumah', 'nowhatsapp', 'nowali', 'tinggi', 'berat', 'goldar', 'sekolah', 'kelas', 'alamatsekolah', 'email', 'password', 'idklasifikasi', 'fotoformal', 'akte', 'kartukeluarga', 'kia', 'nisn', 'raport'
    ];

    public function getAnggotaAdmin()
    {
        return $this->db->table('gabung')->select('id, namasiswa, alamatrumah, nowhatsapp, nowali, email, idklasifikasi, fotoformal')->get()->getResultArray();
    }
    public function getAnggotaUser()
    {
        return $this->db->table('gabung')->select('namasiswa, jeniskelamin, email, idklasifikasi, fotoformal')->get()->getResultArray();
    }
}
