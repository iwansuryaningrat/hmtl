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

class Edit extends BaseController
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

    public function news()
    {
        $data = [
            'title' => 'Tambah Berita - HMTL | Universitas Diponegoro'
        ];

        return view('admin/formadd-news', $data);
    }

    public function addnews()
    {
        # code...
    }

    // Read Pesan Controller
    public function readpesan($id_pesan)
    {
        // Menampilkan Jumlah pesan yang belum terbaca
        $pesan = $this->pesanModel->findAll();

        $jumlahpesan = 0;
        foreach ($pesan as $pesan) {
            if ($pesan['status'] == 'Unread') {
                $jumlahpesan++;
            }
        }

        $datapesan = $this->pesanModel->getPesan($id_pesan);
        // dd($datapesan['id_pesan']);

        $data = [
            'title' => 'Pesan - HMTL | Universitas Diponegoro',
            'tab' => 'pesan',
            'pesan' => $datapesan,
            'jumlahpesan' => $jumlahpesan
        ];
        // dd($data['pesan']['nama']);

        return view('admin/readpesan', $data);
    }

    // Update Pesan Controller (Masih Error)
    public function updatepesan($id_pesan)
    {
        $reply = $this->request->getVar('reply');
        $datapesan = $this->pesanModel->getPesan($id_pesan);
        $nama = $datapesan['nama'];
        $email = $datapesan['email'];
        $telp = $datapesan['telp'];
        $subject = $datapesan['subject'];
        $pesan = $datapesan['pesan'];


        if ($reply == 'yes') {
            $status = 'Replied';
        } else {
            $status = 'Readed';
        }

        $data = [
            'id_pesan' => $id_pesan,
            'nama' => $nama,
            'email' => $email,
            'telp' => $telp,
            'subject' => $subject,
            'pesan' => $pesan,
            'status' => $status
        ];

        $this->pesanModel->update($id_pesan, $data);

        // return redirect()->to('/admin/pesan');
    }
}
