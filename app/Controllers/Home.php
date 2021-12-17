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

class Home extends BaseController
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

	//  Index Method (kurang berita & proker)
	public function index()
	{
		$ip    = $this->request->getIPAddress(); // Mendapatkan IP user
		$date  = date("Y-m-d"); // Mendapatkan tanggal sekarang
		$timeinsert = date("Y-m-d H:i:s");

		$s = $this->visitorsModel->getDataIP($ip, $date);
		$ss = isset($s) ? ($s) : 0;

		// Kalau belum ada, simpan data user tersebut ke database
		if ($ss == null) {
			$this->visitorsModel->save([
				'ip' => $ip,
				'date' => $date,
				'hits' => 1,
				'online' => $timeinsert,
				'time' => $timeinsert
			]);
		}

		// Jika sudah ada, update
		else {
			foreach ($s as $row) {
				$data['hits'] = $row['hits'] + 1;

				$this->visitorsModel->update($row['id'], [
					'id' => $row['id'],
					'ip' => $ip,
					'date' => $date,
					'hits' => $data['hits'],
					'online' => $timeinsert,
					'time' => $timeinsert
				]);
			}
		}

		$biro = $this->biroModel->countAllResults();
		// dd($biro);

		$ukm = $this->ukmModel->countAllResults();
		// dd($ukm);

		$birounit = $biro + $ukm;

		$bidang = $this->bidangModel->countAllResults();
		// dd($bidang);

		$pengurus = $this->pengurusModel->where('isActive', 'Ya')->countAllResults();
		// dd($pengurus);

		$proker = $this->prokerModel->countAllResults();
		// dd($proker);

		$data = [
			'title' => 'HMTL | Universitas Diponegoro',
			'tab' => 'index',
			'birounit' => $birounit,
			'bidang' => $bidang,
			'pengurus' => $pengurus,
			'proker' => $proker,
		];

		return view('mainpage/index', $data);
	}

	public function berita()
	{
		$data = [
			'title' => 'Berita - HMTL | Universitas Diponegoro',
			'tab' => 'berita'
		];

		return view('mainpage/berita', $data);
	}

	// Kalender Method (Done)
	public function kalender()
	{
		$kegiatan = $this->kalenderModel->findAll();
		// dd($kegiatan[1]['tanggal']);

		$data = [
			'title' => 'Kalender - HMTL | Universitas Diponegoro',
			'tab' => 'kalender',
			'kegiatan' => $kegiatan
		];

		return view('mainpage/kalender', $data);
	}

	public function arsip()
	{
		$data = [
			'title' => 'Arsip - HMTL | Universitas Diponegoro',
			'tab' => 'arsip'
		];

		return view('mainpage/arsip', $data);
	}

	public function arsipmatkul()
	{
		$data = [
			'title' => 'Arsip Mata Kuliah - HMTL | Universitas Diponegoro',
			'tab' => 'arsip'
		];

		return view('mainpage/arsip-matkul', $data);
	}

	// Kontak Method (Done)
	public function kontak()
	{
		$data = [
			'title' => 'Kontak - HMTL | Universitas Diponegoro',
			'tab' => 'kontak'
		];

		return view('mainpage/kontak', $data);
	}

	// Profil Method (Done)
	public function profil()
	{
		$data = [
			'title' => 'Profil - HMTL | Universitas Diponegoro',
			'tab' => 'profil'
		];

		return view('mainpage/profil', $data);
	}

	public function biro()
	{
		$data = [
			'title' => 'Biro - HMTL | Universitas Diponegoro',
			'tab' => 'profil'
		];

		return view('mainpage/profil-biro', $data);
	}

	public function hmtl()
	{
		$data = [
			'title' => 'Himpunan Mahasiswa Teknik Lingkungan - HMTL | Universitas Diponegoro',
			'tab' => 'profil'
		];

		return view('mainpage/profil-hmtl', $data);
	}

	public function ukm()
	{
		$data = [
			'title' => 'Unit Kegiatan Mahasiswa - HMTL | Universitas Diponegoro',
			'tab' => 'profil'
		];

		return view('mainpage/profil-ukm', $data);
	}

	// Pesan Method (Done)
	public function pesan()
	{
		$data = [
			'nama' => $this->request->getVar('nama'),
			'email' => $this->request->getVar('email'),
			'telp' => $this->request->getVar('telp'),
			'subject' => $this->request->getVar('subject'),
			'pesan' => $this->request->getVar('pesan'),
			'readed' => 'Unread'
		];

		$this->pesanModel->insert($data);

		return redirect()->to('/home/kontak');
	}
}
