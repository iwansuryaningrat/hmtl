<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\I18n\Time;

class VisitorsModel extends Model
{
    protected $table = 'visitors';
    protected $primarykey = 'id';
    // protected $useTimestamps = true;
    protected $allowedFields = ['ip', 'date', 'hits', 'online', 'time'];

    public function getTodayVisitors()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('visitors');
        $query = $builder->get();
        $result  = $query->getResultArray();
        $datavisitors = $result;

        $todayTime = Time::today('Asia/Jakarta', 'en_US');
        $time = Time::parse($todayTime);
        $today = $time->getDay();
        $sum = 0;
        foreach ($datavisitors as $visitors) {
            $time = Time::parse($visitors['time']);
            $day = $time->getDay();
            if ($day == $today) {
                $sum += $visitors['hits'];
            }
        }

        return $sum;
    }

    public function getMonthly()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('visitors');
        $query   = $builder->get();
        $result  = $query->getResultArray();
        $datavisitors = $result;
        $todayTime = Time::today('Asia/Jakarta', 'en_US');
        $time = Time::parse($todayTime);
        $monthly = $time->getMonth();
        $sum = 0;
        foreach ($datavisitors as $visitors) {
            $time = Time::parse($visitors['time']);
            $Month = $time->getMonth();
            if ($Month == $monthly) {
                $sum += $visitors['hits'];
            }
        }

        return $sum;
    }

    public function getBulanan()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('visitors');
        $query   = $builder->get();
        $result  = $query->getResultArray();

        $datavisitors = $result;
        $databulan = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        foreach ($datavisitors as $visitors) {
            $time = Time::parse($visitors['time']);
            $month = $time->getMonth();
            for ($i = 1; $i < 13; $i++) {
                if ($month == $i) {
                    $databulan[$i - 1] += $visitors['hits'];
                }
            }
        }

        return $databulan;
    }

    public function getBulananKumulatif()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('visitors');
        $query   = $builder->get();
        $result  = $query->getResultArray();

        $datavisitors = $result;

        $databulan = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $databulankumulatif = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

        foreach ($datavisitors as $visitors) {
            $time = Time::parse($visitors['time']);
            $month = $time->getMonth();
            for ($i = 1; $i < 13; $i++) {
                if ($month == $i) {
                    $databulan[$i - 1] += $visitors['hits'];
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

    public function getDataIP($ip, $date)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('visitors');
        $query   = $builder->getWhere(['ip' => $ip, 'date' => $date], null, null, false);
        $result  = $query->getResultArray();

        return $result;
    }
}
