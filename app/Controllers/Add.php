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

class Add extends BaseController
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

	// Add News Controller
	public function addnews()
	{
		if ($this->request->getPost()) {
			$data = $this->request->getPost();
		}
		dd($data['isi']);
		$image = $this->request->getFile('image');
		if ($image->getError() == 4) {
			$namaImage = 'news-1.jpg';
		} else {
			$namaImage = $image->getRandomName();
			$image->move('/img/berita/');
		}

		$this->newsModel->insert([
			'judul' => $this->request->getVar('judul'),
			'highlight' => $this->request->getVar('highlight'),
			'preview' => $this->request->getVar('preview'),
			'kategori' => $this->request->getVar('kategori'),
			'isi' => $this->request->getVar('isi'),
			'tag' => '',
			'foto' => $namaImage
		]);

		$session = \Config\Services::session();
		// $session->setFlashdata('success', 'Book Added');

		// session()->setFlashdata('add-msg-barang', 'Data Barang berhasil ditambahkan.');
		return redirect()->to('/admin/news');
	}

	// Add News Controller
	public function addnewsform()
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
			'title' => 'Tambah Berita - HMTL | Universitas Diponegoro',
			'tab' => 'berita',
			'jumlahpesan' => $jumlahpesan
		];
		// dd($data['pesan']['nama']);

		return view('admin/addform/addberita', $data);
	}

	// Add Kalender Controller
	public function addkalenderform()
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
			'title' => 'Tambah Kegiatan - HMTL | Universitas Diponegoro',
			'tab' => 'kalender',
			'jumlahpesan' => $jumlahpesan
		];

		return view('admin/addform/addkalender', $data);
	}

	public function addKegiatan()
	{
		$this->kalenderModel->insert([
			'kategori' => $this->request->getVar('kategori'),
			'tanggal' => $this->request->getVar('tanggal'),
			'kegiatan' => $this->request->getVar('kegiatan'),
			'keterangan' => $this->request->getVar('keterangan'),
		]);

		return redirect()->to('/admin/kalender');
	}
}
