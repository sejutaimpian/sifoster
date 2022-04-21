<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileModel extends Model
{
    protected $table = 'profile';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_organisasi', 'visi', 'flogo', 'fhero', 'fsekre', 'flapang'];

    public function getJoin()
    {
        return $this->db->table('profile')
            ->join('profile_misi', 'profile.id = profile_misi.idprofile')
            ->get()->getResultArray();
    }
}
