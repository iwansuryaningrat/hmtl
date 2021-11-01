<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'news';
    protected $primarykey = 'id_news';
    protected $useTimestamps = true;
    protected $allowedFields = ['judul', 'highlight', 'preview', 'isi', 'kategori', 'tag', 'foto', 'created_at'];
}
