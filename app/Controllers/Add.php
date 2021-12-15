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

	// Add News Controller (Not Fix)
	public function addnews()
	{
		if ($this->request->getPost()) {
			$data = $this->request->getPost();
		}
		// dd($data['isi']);
		$image = $this->request->getFile('image');
		if ($image->getError() == 4) {
			$namaImage = 'news-1.jpg';
		} else {
			$namaImage = $image->getRandomName();
			$image->move('img/berita/', $namaImage);
		}

		$this->newsModel->insert([
			'judul' => $this->request->getVar('judul'),
			'highlight' => $this->request->getVar('highlight'),
			'preview' => $this->request->getVar('preview'),
			'kategori' => $this->request->getVar('kategori'),
			'isi' => $data['isi'],
			'tag' => '',
			'foto' => $namaImage
		]);

		$session = \Config\Services::session();
		// $session->setFlashdata('success', 'Book Added');

		// session()->setFlashdata('add-msg-barang', 'Data Barang berhasil ditambahkan.');
		return redirect()->to('/admin/news');
	}

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

		session()->setFlashdata('kalender', 'Data kegiatan berhasil ditambahkan.');

		return redirect()->to('/admin/kalender');
	}

	// Add Biro Controller (Done)
	public function addbiroform()
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
			'title' => 'Tambah Biro - HMTL | Universitas Diponegoro',
			'tab' => 'biro',
			'jumlahpesan' => $jumlahpesan
		];

		return view('admin/addform/addbiro', $data);
	}

	public function addbiro()
	{
		$image = $this->request->getFile('image');
		if ($image->getError() == 4) {
			$namaImage = 'default.jpg';
		} else {
			$namaImage = $image->getRandomName();
			$image->move('img/biro/', $namaImage);
		}

		$this->biroModel->insert([
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

		session()->setFlashdata('biro', 'Data biro berhasil ditambahkan.');

		return redirect()->to('/admin/biro');
	}

	// Add Bidang Controller (done)
	public function addbidangform()
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
			'title' => 'Tambah Bidang - HMTL | Universitas Diponegoro',
			'tab' => 'hmtl',
			'jumlahpesan' => $jumlahpesan
		];

		return view('admin/addform/addbidang', $data);
	}

	public function addBidang()
	{
		if ($this->request->getPost()) {
			$data = $this->request->getPost();
		}

		$this->bidangModel->insert([
			'nama' => $this->request->getVar('nama'),
			'profil' => $this->request->getVar('profil'),
			'deskripsi' => $this->request->getVar('deskripsi'),
			'tujuan' => $data['tujuan']
		]);

		session()->setFlashdata('bidang', 'Data bidang berhasil ditambahkan.');

		return redirect()->to('/admin/bidang');
	}
}
