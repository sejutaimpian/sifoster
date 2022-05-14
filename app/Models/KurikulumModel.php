<?php

namespace App\Models;

use CodeIgniter\Model;

class KurikulumModel extends Model
{
    protected $table = 'kurikulum';
    protected $useTimestamps = true;
    protected $allowedFields = ['pendahuluan', 'klasifikasi', 'penilaian', 'tatatertib'];
}
