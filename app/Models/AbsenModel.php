<?php

namespace App\Models;

use CodeIgniter\Model;

class AbsenModel extends Model
{
    protected $table = 'absen';
    protected $primaryKey = 'idabsen';
    protected $allowedFields = ['idajaran', 'pertemuan', 'iduser', 'tanggal', 'kehadiran'];
}
