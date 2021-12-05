<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'news';
    protected $primarykey = 'id_news';
    protected $useTimestamps = true;
    protected $allowedFields = ['judul', 'highlight', 'preview', 'kategori', 'isi', 'foto', 'tag', 'created_at', 'updated_at'];

    public function getNews($id_news)
    {
        return $this->where(['id_news' => $id_news])->first();
    }
}
