<?php

namespace App\Models;

use CodeIgniter\Model;

class ProkerModel extends Model
{
    protected $table = 'proker';
    protected $primarykey = 'id_proker';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'deskripsi', 'foto', 'id_pengurus', 'id_bidang', 'created_at', 'updated_at'];
}
