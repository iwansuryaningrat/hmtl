<?php

namespace App\Models;

use CodeIgniter\Model;

class LibraryModel extends Model
{
    protected $table = 'library';
    protected $primarykey = 'id_library';
    protected $allowedFields = ['matkul', 'sks', 'kategori', 'foto', 'created_at'];
}
