<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\I18n\Time;

class PesanModel extends Model
{
    protected $table = 'pesan';
    protected $primarykey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'email', 'telp', 'subject', 'pesan', 'status', 'created_at'];

    public function getPesan($id)
    {
        return $this->where(['id' => $id])->first();
    }

    public function getTodayMessages()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('pesan');
        $query = $builder->get();
        $result  = $query->getResultArray();
        $datapesan = $result;

        $todayTime = Time::today('Asia/Jakarta', 'en_US');
        $time = Time::parse($todayTime);
        $today = $time->getDay();
        $sum = 0;
        foreach ($datapesan as $pesan) {
            $time = Time::parse($pesan['created_at']);
            $day = $time->getDay();
            if ($day == $today) {
                $sum++;
            }
        }

        return $sum;
    }

    public function getBulanan()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('pesan');
        $query   = $builder->get();
        $result  = $query->getResultArray();

        $datapesan = $result;
        $databulan = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        foreach ($datapesan as $pesan) {
            $time = Time::parse($pesan['created_at']);
            $month = $time->getMonth();
            for ($i = 1; $i < 13; $i++) {
                if ($month == $i) {
                    $databulan[$i - 1]++;
                }
            }
        }

        return $databulan;
    }

    public function getBulananKumulatif()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('pesan');
        $query   = $builder->get();
        $result  = $query->getResultArray();

        $datapesan = $result;

        $databulan = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $databulankumulatif = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

        foreach ($datapesan as $pesan) {
            $time = Time::parse($pesan['created_at']);
            $month = $time->getMonth();
            for ($i = 1; $i < 13; $i++) {
                if ($month == $i) {
                    $databulan[$i - 1]++;
                }
            }
        }

        for ($i = 0; $i < 12; $i++) {
            for ($j = 0; $j <= $i; $j++) {
                $databulankumulatif[$i] += $databulan[$j];
            }
        }

        return $databulankumulatif;
    }
}
