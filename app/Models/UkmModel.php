<?php

namespace App\Models;

use CodeIgniter\Model;

class UkmModel extends Model
{
    protected $table = 'ukm';
    protected $primarykey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'deskripsi', 'kategori', 'logo', 'jadwal', 'tempat', 'ketua', 'angkatan_ketua', 'wakil', 'angkatan_wakil', 'pencapaian', 'created_at', 'updated_at'];
}
