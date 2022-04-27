<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table = 'kategori_blog';
    protected $primaryKey = 'idkategori';
    protected $allowedFields = ['namakategori'];
}
