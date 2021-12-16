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
            $time = Time::parse($pesan['time']);
            $day = $time->getDay();
            if ($day == $today) {
                $sum += $pesan['hits'];
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
            $time = Time::parse($pesan['time']);
            $month = $time->getMonth();
            if ($month == '1') {
                $databulan[0] += $pesan['hits'];
            } else if ($month == '2') {
                $databulan[1] += $pesan['hits'];
            } else if ($month == '3') {
                $databulan[2] += $pesan['hits'];
            } else if ($month == '4') {
                $databulan[3] += $pesan['hits'];
            } else if ($month == '5') {
                $databulan[4] += $pesan['hits'];
            } else if ($month == '6') {
                $databulan[5] += $pesan['hits'];
            } else if ($month == '7') {
                $databulan[6] += $pesan['hits'];
            } else if ($month == '8') {
                $databulan[7] += $pesan['hits'];
            } else if ($month == '9') {
                $databulan[8] += $pesan['hits'];
            } else if ($month == '10') {
                $databulan[9] += $pesan['hits'];
            } else if ($month == '11') {
                $databulan[10] += $pesan['hits'];
            } else if ($month == '12') {
                $databulan[11] += $pesan['hits'];
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
            $time = Time::parse($pesan['time']);
            $month = $time->getMonth();
            if ($month == '1') {
                $databulan[0] += $pesan['hits'];
            } else if ($month == '2') {
                $databulan[1] += $pesan['hits'];
            } else if ($month == '3') {
                $databulan[2] += $pesan['hits'];
            } else if ($month == '4') {
                $databulan[3] += $pesan['hits'];
            } else if ($month == '5') {
                $databulan[4] += $pesan['hits'];
            } else if ($month == '6') {
                $databulan[5] += $pesan['hits'];
            } else if ($month == '7') {
                $databulan[6] += $pesan['hits'];
            } else if ($month == '8') {
                $databulan[7] += $pesan['hits'];
            } else if ($month == '9') {
                $databulan[8] += $pesan['hits'];
            } else if ($month == '10') {
                $databulan[9] += $pesan['hits'];
            } else if ($month == '11') {
                $databulan[10] += $pesan['hits'];
            } else if ($month == '12') {
                $databulan[11] += $pesan['hits'];
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
