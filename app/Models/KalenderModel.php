<?php

namespace App\Models;

use CodeIgniter\Model;

class KalenderModel extends Model
{
    protected $table = 'kalender';
    protected $primarykey = 'id_kalender';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'kategori', 'keterangan', 'created_at', 'updated_at'];
}
