<?php

namespace App\Models;

use CodeIgniter\Model;

class AjaranModel extends Model
{
    protected $table = 'ajaran';
    protected $primaryKey = 'idajaran';
    protected $allowedFields = ['triwulan', 'tahunajaran', 'idklasifikasi'];
}
