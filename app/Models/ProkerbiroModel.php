<?php

namespace App\Models;

use CodeIgniter\Model;

class ProkerbiroModel extends Model
{
    protected $table = 'prokerbiro';
    protected $primarykey = 'id_prokerbiro';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_biro', 'nama', 'deskripsi', 'created_at', 'updated_at'];
}
