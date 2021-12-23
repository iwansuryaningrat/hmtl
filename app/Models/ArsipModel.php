<?php

namespace App\Models;

use CodeIgniter\Model;

class ArsipModel extends Model
{
    protected $table = 'arsip';
    protected $primarykey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_library', 'judul', 'kategori', 'foto', 'namafile', 'created_at', 'updated_at', 'downloads'];

    public function getArsip($id)
    {
        return $this->Where(['id_library' => $id])->findAll();
    }
}
