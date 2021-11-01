<?php

namespace App\Models;

use CodeIgniter\Model;

class PesanModel extends Model
{
    protected $table = 'pesan';
    protected $primarykey = 'id_pesan';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'email', 'telp', 'subject', 'pesan', 'readed', 'created_at'];
}
