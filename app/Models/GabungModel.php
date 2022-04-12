<?php

namespace App\Models;

use CodeIgniter\Model;

class GabungModel extends Model
{
    protected $table = 'gabung';
    protected $allowedFields = ['pelatih', 'nama_pelatih', 'nomor_pelatih', 'sertifikasi', 'pengalaman', 'tahun kerja', 'foto'];
}
