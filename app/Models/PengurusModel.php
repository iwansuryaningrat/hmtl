<?php

namespace App\Models;

use CodeIgniter\Model;

class PengurusModel extends Model
{
    protected $table = 'pengurus';
    protected $primarykey = 'nim';
    protected $useTimestamps = true;
    protected $allowedFields = ['nim', 'nama', 'id_bidang', 'jabatan', 'angkatan', 'foto', 'ig', 'linkedin', 'twitter', 'isActive', 'created_at', 'updated_at'];
}
