<?php

namespace App\Models;

use CodeIgniter\Model;

class BiroModel extends Model
{
    protected $table = 'biro';
    protected $primarykey = 'id_biro';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'logo', 'deskripsi', 'ketua', 'wakil', 'proker', 'ig', 'yt', 'line', 'twitter', 'fb', 'web', 'created_at', 'updated_at'];
}
