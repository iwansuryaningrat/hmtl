<?php

namespace App\Controllers;

use App\Models\ArsipModel;
use App\Models\BidangModel;
use App\Models\BiroModel;
use App\Models\KabinetModel;
use App\Models\KalenderModel;
use App\Models\LibraryModel;
use App\Models\NewsModel;
use App\Models\PengurusModel;
use App\Models\PesanModel;
use App\Models\ProkerModel;
use App\Models\UkmModel;

use function PHPUnit\Framework\throwException;

class Admin extends BaseController
{
    protected $arsipModel;
    protected $bidangModel;
    protected $biroModel;
    protected $kabinetModel;
    protected $kalenderModel;
    protected $libraryModel;
    protected $newsModel;
    protected $pengurusModel;
    protected $pesanModel;
    protected $prokerModel;
    protected $ukmModel;

    public function __construct()
    {
        $this->arsipModel = new ArsipModel();
        $this->bidangModel = new BidangModel();
        $this->biroModel = new BiroModel();
        $this->kabinetModel = new KabinetModel();
        $this->kalenderModel = new KalenderModel();
        $this->libraryModel = new LibraryModel();
        $this->newsModel = new NewsModel();
        $this->pengurusModel = new PengurusModel();
        $this->pesanModel = new PesanModel();
        $this->prokerModel = new ProkerModel();
        $this->ukmModel = new UkmModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Admin Dashboard - HMTL | Universitas Diponegoro',
            'tab' => 'dashboard'
        ];

        return view('admin/index', $data);
    }

    public function hmtl()
    {
        $data = [
            'title' => 'Profile HMTL - HMTL | Universitas Diponegoro',
            'tab' => 'hmtl'
        ];

        return view('admin/hmtl', $data);
    }

    public function kabinet()
    {
        $data = [
            'title' => 'Profile Kabinet - HMTL | Universitas Diponegoro',
            'tab' => 'hmtl'
        ];

        return view('admin/kabinet', $data);
    }

    public function bidang()
    {
        $data = [
            'title' => 'Profile Bidang - HMTL | Universitas Diponegoro',
            'tab' => 'hmtl'
        ];

        return view('admin/bidang', $data);
    }

    public function pengurus()
    {
        $data = [
            'title' => 'Profile Pengurus - HMTL | Universitas Diponegoro',
            'tab' => 'hmtl'
        ];

        return view('admin/pengurus', $data);
    }

    public function proker()
    {
        $data = [
            'title' => 'Proker - HMTL | Universitas Diponegoro',
            'tab' => 'hmtl'
        ];

        return view('admin/proker', $data);
    }

    public function biro()
    {
        $biro = $this->biroModel->findAll();
        $data = [
            'title' => 'Profile Biro - HMTL | Universitas Diponegoro',
            'tab' => 'biro',
            'biro' => $biro
        ];

        return view('admin/biro', $data);
    }

    public function ukm()
    {
        $ukm = $this->ukmModel->findAll();
        $data = [
            'title' => 'Profile UKM - HMTL | Universitas Diponegoro',
            'tab' => 'ukm',
            'ukm' => $ukm
        ];

        return view('admin/ukm', $data);
    }

    public function news()
    {
        $news = $this->newsModel->findAll();
        $data = [
            'title' => 'Berita - HMTL | Universitas Diponegoro',
            'tab' => 'news',
            'pesan' => $news
        ];

        return view('admin/news', $data);
    }

    public function kalender()
    {
        $data = [
            'title' => 'Kalender - HMTL | Universitas Diponegoro',
            'tab' => 'kalender'
        ];

        return view('admin/kalender', $data);
    }

    public function arsip()
    {
        $data = [
            'title' => 'Arsip - HMTL | Universitas Diponegoro',
            'tab' => 'arsip'
        ];

        return view('admin/arsip', $data);
    }

    public function pesan()
    {
        $data = [
            'title' => 'Pesan - HMTL | Universitas Diponegoro',
            'tab' => 'pesan'
        ];

        return view('admin/pesan', $data);
    }
}
