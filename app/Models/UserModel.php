<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $useTimestamps = true;
    protected $allowedFields = ['namasiswa', 'nowhatsapp', 'email', 'password', 'fotoformal', 'role', 'is_active'];
}
