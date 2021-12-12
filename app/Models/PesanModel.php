<?php

namespace App\Models;

use CodeIgniter\Model;

class PesanModel extends Model
{
    protected $table = 'pesan';
    protected $primarykey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'email', 'telp', 'subject', 'pesan', 'status', 'created_at'];

    public function getPesan($id)
    {
        return $this->where(['id' => $id])->first();
    }
}
