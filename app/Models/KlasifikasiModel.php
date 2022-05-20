<?php

namespace App\Models;

use CodeIgniter\Model;

class KlasifikasiModel extends Model
{
    protected $table = 'klasifikasi';
    protected $primaryKey = 'idklasifikasi';
    protected $allowedFields = ['namaklasifikasi'];
}
