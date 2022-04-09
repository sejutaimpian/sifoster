<?php

namespace App\Models;

use CodeIgniter\Model;

class PelatihModel extends Model
{
    protected $table = 'pelatih';
    protected $allowedFields = ['pelatih', 'nama_pelatih', 'nomor_pelatih', 'sertifikasi', 'pengalaman', 'tahun kerja', 'foto'];
}
