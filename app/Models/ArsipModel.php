<?php 

namespace App\Models;

use CodeIgniter\Model;

class ArsipModel extends Model
{
    protected $table = 'arsip';
    protected $primarykey = 'id_arsip';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_library', 'judul', 'kategori', 'foto', 'link', 'created_at'];

}
