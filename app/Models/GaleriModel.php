<?php

namespace App\Models;

use CodeIgniter\Model;

class GaleriModel extends Model
{
    protected $table = 'galeriukm';
    protected $primarykey = 'id_galeri';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_ukm', 'foto', 'created_at'];
}
