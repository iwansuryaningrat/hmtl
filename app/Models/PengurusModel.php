<?php

namespace App\Models;

use CodeIgniter\Model;

class PengurusModel extends Model
{
    protected $table = 'pengurus';
    protected $primarykey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['nim', 'pengurus', 'bidangid', 'jabatan', 'angkatan', 'foto', 'ig', 'linkedin', 'twitter', 'isActive', 'created_at', 'updated_at'];

    public function getPengurus()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('pengurus');
        $builder->select('*');
        $builder->join('bidang', 'bidang.id = pengurus.bidangid');
        $query = $builder->get();
        $query = $query->getResultArray();

        return $query;
    }

    public function getPengurusID($id)
    {
        return $this->where(['id' => $id])->first();
    }
}
