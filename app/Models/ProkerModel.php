<?php

namespace App\Models;

use CodeIgniter\Model;

class ProkerModel extends Model
{
    protected $table = 'proker';
    protected $primarykey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'deskripsi', 'highlight', 'foto', 'bidang', 'id_pengurus', 'created_at', 'updated_at'];
}
