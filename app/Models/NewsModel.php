<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'news';
    protected $primarykey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['judul', 'highlight', 'preview', 'kategori', 'isi', 'foto', 'tag', 'tanggal', 'created_at', 'updated_at'];

    public function getNews($id)
    {
        return $this->where(['id' => $id])->first();
    }
}
