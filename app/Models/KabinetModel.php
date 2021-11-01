<?php 

namespace App\Models;

use CodeIgniter\Model;

class KabinetModel extends Model
{
    protected $table = 'kabinet';
    protected $primarykey = 'id_kabinet';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'logo', 'deskripsi', 'visi', 'misi1','misi2', 'misi3', 'misi4', 'misi5', 'misi6', 'misi7', 'misi8', 'misi9', 'misi10', 'tahun', 'wa1', 'cp1', 'wa2', 'cp2', 'ketua', 'wakil', 'yt', 'isactive', 'created_at', 'updated_at'];

}
