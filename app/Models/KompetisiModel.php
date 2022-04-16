<?php

namespace App\Models;

use CodeIgniter\Model;

class KompetisiModel extends Model
{
    protected $table = 'kompetisi';
    protected $useTimestamps = true;
    protected $allowedFields = ['namakompetisi', 'waktukompetisi', 'tempat', 'link', 'keterangan'];
}
