<?php

namespace App\Models;

use CodeIgniter\Model;

class GabungModel extends Model
{
    protected $table = 'gabung';
    protected $allowedFields = [
        'namasiswa', 'tempatlahir', 'tanggallahir', 'jeniskelamin', 'alamatrumah', 'nowhatsapp', 'nowali', 'tinggi', 'berat', 'goldar', 'sekolah', 'kelas', 'alamatsekolah', 'email', 'password', 'fotoformal', 'akte', 'kartukeluarga', 'kia', 'nisn', 'raport'
    ];
}
