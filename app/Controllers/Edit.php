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

class Edit extends BaseController
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

    // Edit News Controller (Not Fix)
    public function editnews($id)
    {
        // Menampilkan Jumlah pesan yang belum terbaca
        $pesan = $this->pesanModel->findAll();

        $jumlahpesan = 0;
        foreach ($pesan as $pesan) {
            if ($pesan['status'] == 'Unread') {
                $jumlahpesan++;
            }
        }

        $databerita = $this->newsModel->getNews($id);

        $data = [
            'title' => 'Tambah Berita - HMTL | Universitas Diponegoro',
            'tab' => 'berita',
            'news' => $databerita,
            'jumlahpesan' => $jumlahpesan
        ];

        return view('admin/editform/editberita', $data);
    }

    public function editberita($id)
    {
        $image = $this->request->getFile('image');
        if ($image->getError() == 4) {
            $namaImage = 'news-1.jpg';
        } else {
            $namaImage = $image->getRandomName();
            $image->move('img/berita/');
        }

        $data = [
            'judul' => $this->request->getVar('judul'),
            'highlight' => $this->request->getVar('highlight'),
            'preview' => $this->request->getVar('preview'),
            'kategori' => $this->request->getVar('kategori'),
            'isi' => $this->request->getVar('isi'),
            'tag' => '',
            'tanggal' => date("j M Y"),
            'foto' => $namaImage
        ];

        $this->newsModel->update($id, $data);

        return redirect()->to('/admin/news');
    }

    // Read Pesan Controller (Done)
    public function readpesan($id)
    {
        // Menampilkan Jumlah pesan yang belum terbaca
        $pesan = $this->pesanModel->findAll();

        $jumlahpesan = 0;
        foreach ($pesan as $pesan) {
            if ($pesan['status'] == 'Unread') {
                $jumlahpesan++;
            }
        }

        $datapesan = $this->pesanModel->getPesan($id);
        // dd($datapesan['id']);

        $data = [
            'title' => 'Pesan - HMTL | Universitas Diponegoro',
            'tab' => 'pesan',
            'pesan' => $datapesan,
            'jumlahpesan' => $jumlahpesan
        ];
        // dd($data['pesan']['nama']);

        return view('admin/readpesan', $data);
    }

    // Update Pesan Controller (Done)
    public function updatepesan($id)
    {
        $reply = $this->request->getVar('reply');
        $datapesan = $this->pesanModel->getPesan($id);
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
            'id' => $id,
            'nama' => $nama,
            'email' => $email,
            'telp' => $telp,
            'subject' => $subject,
            'pesan' => $pesan,
            'status' => $status
        ];

        $this->pesanModel->update($id, $data);

        session()->setFlashdata('pesan', 'Pesan berhasil diupdate.');

        return redirect()->to('/admin/pesan');
    }

    // Edit Kalender Controller (Done)
    public function editKalenderForm($id)
    {
        // Menampilkan Jumlah pesan yang belum terbaca
        $pesan = $this->pesanModel->findAll();

        $jumlahpesan = 0;
        foreach ($pesan as $pesan) {
            if ($pesan['status'] == 'Unread') {
                $jumlahpesan++;
            }
        }

        $dataKegiatan = $this->kalenderModel->getKalender($id);
        // dd($dataKegiatan);

        $data = [
            'title' => 'Edit Kegiatan - HMTL | Universitas Diponegoro',
            'tab' => 'kalender',
            'jumlahpesan' => $jumlahpesan,
            'data' => $dataKegiatan
        ];

        return view('/admin/editform/editkalender', $data);
    }

    public function editKegiatan($id)
    {
        $this->kalenderModel->update($id, [
            'kategori' => $this->request->getVar('kategori'),
            'tanggal' => $this->request->getVar('tanggal'),
            'kegiatan' => $this->request->getVar('kegiatan'),
            'keterangan' => $this->request->getVar('keterangan'),
        ]);

        session()->setFlashdata('kalender', 'Data kegiatan berhasil diupdate.');

        return redirect()->to('/admin/kalender');
    }

    // Edit Biro Controller (Done)
    public function editbiroForm($id)
    {
        // Menampilkan Jumlah pesan yang belum terbaca
        $pesan = $this->pesanModel->findAll();

        $jumlahpesan = 0;
        foreach ($pesan as $pesan) {
            if ($pesan['status'] == 'Unread') {
                $jumlahpesan++;
            }
        }

        $dataBiro = $this->biroModel->getBiro($id);
        // dd($dataBiro);

        $data = [
            'title' => 'Edit Biro - HMTL | Universitas Diponegoro',
            'tab' => 'biro',
            'jumlahpesan' => $jumlahpesan,
            'data' => $dataBiro
        ];

        return view('/admin/editform/editbiro', $data);
    }

    public function editBiro($id)
    {
        $image = $this->request->getFile('image');
        if ($image->getError() == 4) {
            $namaImage = 'default.jpg';
        } else {
            $namaImage = $image->getRandomName();
            $image->move('img/biro/', $namaImage);
        }

        $this->biroModel->update($id, [
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'logo' => $namaImage,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'ketua' => $this->request->getVar('ketua'),
            'angkatan_ketua' => $this->request->getVar('angkatan_ketua'),
            'wakil' => $this->request->getVar('wakil'),
            'angkatan_wakil' => $this->request->getVar('angkatan_wakil'),
            'ig' => $this->request->getVar('ig'),
            'yt' => $this->request->getVar('yt'),
            'line' => $this->request->getVar('line'),
            'twitter' => $this->request->getVar('twitter'),
            'fb' => $this->request->getVar('fb'),
            'web' => $this->request->getVar('web'),
        ]);

        session()->setFlashdata('biro', 'Data biro berhasil diupdate.');

        return redirect()->to('/admin/biro');
    }

    // Edit Bidang Controller (Done)
    public function editBidangForm($id)
    {
        // Menampilkan Jumlah pesan yang belum terbaca
        $pesan = $this->pesanModel->findAll();

        $jumlahpesan = 0;
        foreach ($pesan as $pesan) {
            if ($pesan['status'] == 'Unread') {
                $jumlahpesan++;
            }
        }

        $databidang = $this->bidangModel->getBidang($id);
        // dd($databidang);

        $data = [
            'title' => 'Edit Bidang - HMTL | Universitas Diponegoro',
            'tab' => 'hmtl',
            'jumlahpesan' => $jumlahpesan,
            'data' => $databidang
        ];

        return view('/admin/editform/editbidang', $data);
    }

    public function editbidang($id)
    {
        if ($this->request->getPost()) {
            $data = $this->request->getPost();
        }

        $this->bidangModel->update($id, [
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'profil' => $this->request->getVar('profil'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'tujuan' => $data['tujuan']
        ]);

        session()->setFlashdata('bidang', 'Data bidang berhasil diupdate.');

        return redirect()->to('/admin/bidang');
    }

    // Edit Pengurus Controller
    public function editPengurusForm($id)
    {
        $data = $this->pengurusModel->getPengurusID($id);

        // Menampilkan Jumlah pesan yang belum terbaca
        $pesan = $this->pesanModel->findAll();

        $jumlahpesan = 0;
        foreach ($pesan as $pesan) {
            if ($pesan['status'] == 'Unread') {
                $jumlahpesan++;
            }
        }

        $databidang = $this->bidangModel->findAll();
        // dd($databidang);

        $data = [
            'title' => 'Edit Bidang - HMTL | Universitas Diponegoro',
            'tab' => 'hmtl',
            'jumlahpesan' => $jumlahpesan,
            'data' => $data,
            'bidang' => $databidang
        ];

        return view('/admin/editform/editpengurus', $data);
    }

    public function editpengurus($id)
    {
        $data = $this->pengurusModel->getPengurusID($id);

        $image = $this->request->getFile('image');
        if ($image->getError() == 4) {
            $namaImage = $data['foto'];
        } else {
            $namaImage = $image->getRandomName();
            $image->move('img/pengurus/', $namaImage);
        }

        $this->pengurusModel->update($id, [
            'id' => $id,
            'nim' => $this->request->getVar('nim'),
            'pengurus' => $this->request->getVar('pengurus'),
            'bidangid' => $this->request->getVar('bidangid'),
            'jabatan' => $this->request->getVar('jabatan'),
            'angkatan' => $this->request->getVar('angkatan'),
            'foto' => $namaImage,
            'ig' => $this->request->getVar('ig'),
            'linkedin' => $this->request->getVar('linkedin'),
            'twitter' => $this->request->getVar('twitter'),
            'isActive' => $this->request->getVar('isActive'),
        ]);

        session()->setFlashdata('pengurus', 'Data pengurus berhasil diupdate.');

        return redirect()->to('/admin/pengurus');
    }
}
