<?php

namespace App\Models;

use CodeIgniter\Model;

class UkmModel extends Model
{
    protected $table = 'ukm';
    protected $primarykey = 'id_ukm';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'kategori', 'deskripsi', 'logo', 'created_at', 'updated_at'];
}
