<?php

namespace App\Models;

use CodeIgniter\Model;

class LibraryModel extends Model
{
    protected $table = 'library';
    protected $primarykey = 'id';
    protected $allowedFields = ['matkul', 'kode_matkul', 'sks', 'kategori', 'foto', 'created_at'];

    public function getLibrary($id)
    {
        return $this->Where(['id' => $id])->findAll();
    }
}
