<?php

namespace App\Models;

use CodeIgniter\Model;

class BiodataModel extends Model
{
    protected $table = 'biodata';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'slug', 'TTL', 'alamat', 'foto'];

    public function getBiodata($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug => $slug'])->first();
    }
}
