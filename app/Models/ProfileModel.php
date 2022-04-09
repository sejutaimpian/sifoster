<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileModel extends Model
{
    protected $table = 'profile';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_organisasi', 'visi', 'fsekre', 'flapang', 'created_at', 'updated_at'];
}
