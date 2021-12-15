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

use function PHPUnit\Framework\throwException;

class Delete extends BaseController
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

    // Delete Pesan Controller
    public function deletepesan($id)
    {

        $this->pesanModel->delete($id);

        // session()->setFlashdata('delete-msg-barang', 'Data Barang berhasil dihapus.');

        return redirect()->to('/admin/pesan');
    }

    // Delete Berita Controller
    public function deletenews($id)
    {
        $this->newsModel->delete($id);

        return redirect()->to('/admin/news');
    }

    // Delete Kalender Controller
    public function deletekalender($id)
    {
        $this->kalenderModel->delete($id);

        return redirect()->to('/admin/kalender');
    }

    // Delete Biro Controller
    public function deletebiro($id)
    {
        $this->biroModel->delete($id);

        return redirect()->to('/admin/biro');
    }
}
