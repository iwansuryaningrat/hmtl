<?php

namespace App\Controllers;

use App\Models\ArsipModel;
use App\Models\BidangModel;
use App\Models\BiroModel;
use App\Models\GaleriModel;
use App\Models\KalenderModel;
use App\Models\LibraryModel;
use App\Models\NewsModel;
use App\Models\PengurusModel;
use App\Models\PesanModel;
use App\Models\ProkerbiroModel;
use App\Models\ProkerModel;
use App\Models\UkmModel;
use App\Models\VisitorsModel;

class Admin extends BaseController
{
    protected $arsipModel;
    protected $bidangModel;
    protected $biroModel;
    protected $galeriModel;
    protected $kalenderModel;
    protected $libraryModel;
    protected $newsModel;
    protected $pengurusModel;
    protected $pesanModel;
    protected $prokerbiroModel;
    protected $prokerModel;
    protected $ukmModel;
    protected $visitorsModel;

    public function __construct()
    {
        $this->arsipModel = new ArsipModel();
        $this->bidangModel = new BidangModel();
        $this->biroModel = new BiroModel();
        $this->galeriModel = new GaleriModel();
        $this->kalenderModel = new KalenderModel();
        $this->libraryModel = new LibraryModel();
        $this->newsModel = new NewsModel();
        $this->pengurusModel = new PengurusModel();
        $this->pesanModel = new PesanModel();
        $this->prokerbiroModel = new ProkerbiroModel();
        $this->prokerModel = new ProkerModel();
        $this->ukmModel = new UkmModel();
        $this->visitorsModel = new VisitorsModel();
    }

    public function index()
    {
        // Menampilkan Jumlah pesan yang belum terbaca
        $pesan = $this->pesanModel->findAll();

        $jumlahpesan = 0;
        foreach ($pesan as $pesan) {
            if ($pesan['status'] == 'Unread') {
                $jumlahpesan++;
            }
        }

        // dd("Test");

        $data = [
            'title' => 'Admin Dashboard - HMTL | Universitas Diponegoro',
            'tab' => 'dashboard',
            'jumlahpesan' => $jumlahpesan
        ];

        return view('admin/index', $data);
    }

    // Profil HMTL Controller
    public function hmtl()
    {
        // Menampilkan Jumlah pesan yang belum terbaca
        $pesan = $this->pesanModel->findAll();

        $jumlahpesan = 0;
        foreach ($pesan as $pesan) {
            if ($pesan['status'] == 'Unread') {
                $jumlahpesan++;
            }
        }

        $data = [
            'title' => 'Profile HMTL - HMTL | Universitas Diponegoro',
            'tab' => 'hmtl',
            'jumlahpesan' => $jumlahpesan
        ];

        return view('admin/hmtl', $data);
    }

    // Bidang Controller
    public function bidang()
    {
        // Menampilkan Jumlah pesan yang belum terbaca
        $pesan = $this->pesanModel->findAll();

        $jumlahpesan = 0;
        foreach ($pesan as $pesan) {
            if ($pesan['status'] == 'Unread') {
                $jumlahpesan++;
            }
        }

        $data = [
            'title' => 'Profile Bidang - HMTL | Universitas Diponegoro',
            'tab' => 'hmtl',
            'jumlahpesan' => $jumlahpesan
        ];

        return view('admin/bidang', $data);
    }

    // Pengurus Controller
    public function pengurus()
    {
        // Menampilkan Jumlah pesan yang belum terbaca
        $pesan = $this->pesanModel->findAll();

        $jumlahpesan = 0;
        foreach ($pesan as $pesan) {
            if ($pesan['status'] == 'Unread') {
                $jumlahpesan++;
            }
        }

        $data = [
            'title' => 'Profile Pengurus - HMTL | Universitas Diponegoro',
            'tab' => 'hmtl',
            'jumlahpesan' => $jumlahpesan
        ];

        return view('admin/pengurus', $data);
    }

    // Proker Controller
    public function proker()
    {
        // Menampilkan Jumlah pesan yang belum terbaca
        $pesan = $this->pesanModel->findAll();

        $jumlahpesan = 0;
        foreach ($pesan as $pesan) {
            if ($pesan['status'] == 'Unread') {
                $jumlahpesan++;
            }
        }

        $data = [
            'title' => 'Proker - HMTL | Universitas Diponegoro',
            'tab' => 'hmtl',
            'jumlahpesan' => $jumlahpesan
        ];

        return view('admin/proker', $data);
    }

    // Biro Controller (Done)
    public function biro()
    {
        // Menampilkan Jumlah pesan yang belum terbaca
        $pesan = $this->pesanModel->findAll();

        $jumlahpesan = 0;
        foreach ($pesan as $pesan) {
            if ($pesan['status'] == 'Unread') {
                $jumlahpesan++;
            }
        }

        $biro = $this->biroModel->findAll();
        $data = [
            'title' => 'Profile Biro - HMTL | Universitas Diponegoro',
            'tab' => 'biro',
            'biro' => $biro,
            'jumlahpesan' => $jumlahpesan
        ];

        return view('admin/biro', $data);
    }

    // UKM Controller (Done)
    public function ukm()
    {
        // Menampilkan Jumlah pesan yang belum terbaca
        $pesan = $this->pesanModel->findAll();

        $jumlahpesan = 0;
        foreach ($pesan as $pesan) {
            if ($pesan['status'] == 'Unread') {
                $jumlahpesan++;
            }
        }

        $ukm = $this->ukmModel->findAll();
        $data = [
            'title' => 'Profile UKM - HMTL | Universitas Diponegoro',
            'tab' => 'ukm',
            'ukm' => $ukm,
            'jumlahpesan' => $jumlahpesan
        ];

        return view('admin/ukm', $data);
    }

    // News Controller
    public function news()
    {
        // Menampilkan Jumlah pesan yang belum terbaca
        $pesan = $this->pesanModel->findAll();

        $jumlahpesan = 0;
        foreach ($pesan as $pesan) {
            if ($pesan['status'] == 'Unread') {
                $jumlahpesan++;
            }
        }

        $news = $this->newsModel->findAll();
        $data = [
            'title' => 'Berita - HMTL | Universitas Diponegoro',
            'tab' => 'news',
            'news' => $news,
            'jumlahpesan' => $jumlahpesan
        ];

        return view('admin/news', $data);
    }

    // Kalender Controller
    public function kalender()
    {
        $kalender = $this->kalenderModel->findAll();
        // Menampilkan Jumlah pesan yang belum terbaca
        $pesan = $this->pesanModel->findAll();

        $jumlahpesan = 0;
        foreach ($pesan as $pesan) {
            if ($pesan['status'] == 'Unread') {
                $jumlahpesan++;
            }
        }

        $data = [
            'title' => 'Kalender - HMTL | Universitas Diponegoro',
            'tab' => 'kalender',
            'jumlahpesan' => $jumlahpesan,
            'kalender' => $kalender
        ];

        return view('admin/kalender', $data);
    }

    // Arsip Controller
    public function arsip()
    {
        // Menampilkan Jumlah pesan yang belum terbaca
        $pesan = $this->pesanModel->findAll();

        $jumlahpesan = 0;
        foreach ($pesan as $pesan) {
            if ($pesan['status'] == 'Unread') {
                $jumlahpesan++;
            }
        }

        $data = [
            'title' => 'Arsip - HMTL | Universitas Diponegoro',
            'tab' => 'arsip',
            'jumlahpesan' => $jumlahpesan
        ];

        return view('admin/arsip', $data);
    }

    // Pesan Controller
    public function pesan()
    {
        // Menampilkan Jumlah pesan yang belum terbaca
        $pesan = $this->pesanModel->findAll();

        $jumlahpesan = 0;
        foreach ($pesan as $detailpesan) {
            if ($detailpesan['status'] == 'Unread') {
                $jumlahpesan++;
            }
        }

        $data = [
            'title' => 'Pesan - HMTL | Universitas Diponegoro',
            'tab' => 'pesan',
            'pesan' => $pesan,
            'jumlahpesan' => $jumlahpesan
        ];
        // dd($pesan);

        return view('admin/pesan', $data);
    }
}
