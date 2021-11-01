<?php

namespace App\Models;

use CodeIgniter\Model;

class PengurusModel extends Model
{
    protected $table = 'pengurus';
    protected $primarykey = 'nim';
    protected $useTimestamps = true;
    protected $allowedFields = ['nim', 'id_bidang', 'nama', 'id_kabinet', 'jabatan', 'angkatan', 'foto', 'ig', 'linkedin', 'twitter', 'created_at', 'updated_at'];
}
