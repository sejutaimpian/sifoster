<?php

namespace App\Models;

use CodeIgniter\Model;

class PelatihModel extends Model
{
    protected $table = 'pelatih';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_pelatih', 'nomor_pelatih', 'sertifikasi', 'pengalaman', 'tahun_kerja', 'foto'];
}
