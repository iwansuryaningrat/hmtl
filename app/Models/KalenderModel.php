<?php

namespace App\Models;

use CodeIgniter\Model;

class KalenderModel extends Model
{
    protected $table = 'kalender';
    protected $primarykey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['kategori', 'tanggal', 'kegiatan', 'keterangan', 'created_at', 'updated_at'];

    public function getKalender($id)
    {
        return $this->where(['id' => $id])->first();
    }
}
