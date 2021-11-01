<?php

namespace App\Models;

use CodeIgniter\Model;

class BidangModel extends Model
{
    protected $table = 'bidang';
    protected $primarykey = 'id_bidang';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'profil', 'deskripsi', 'tujuan', 'created_at', 'updated_at'];
}
