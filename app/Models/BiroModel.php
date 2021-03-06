<?php

namespace App\Models;

use CodeIgniter\Model;

class BiroModel extends Model
{
    protected $table = 'biro';
    protected $primarykey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'logo', 'deskripsi', 'ketua', 'angkatan_ketua', 'wakil', 'angkatan_wakil', 'ig', 'yt', 'line', 'twitter', 'fb', 'web', 'created_at', 'updated_at'];

    public function getBiro($id)
    {
        return $this->where(['id' => $id])->first();
    }
}
