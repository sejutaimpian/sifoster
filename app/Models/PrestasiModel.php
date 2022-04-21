<?php

namespace App\Models;

use CodeIgniter\Model;

class PrestasiModel extends Model
{
    protected $table = 'prestasi';
    protected $useTimestamps = true;
    protected $allowedFields = ['juara', 'ajang', 'waktu'];
}
