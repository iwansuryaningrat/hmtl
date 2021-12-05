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

	public function index()
	{
		$data = [
			'title' => 'HMTL | Universitas Diponegoro',
			'tab' => 'index'
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

	public function kalender()
	{
		$data = [
			'title' => 'Kalender - HMTL | Universitas Diponegoro',
			'tab' => 'kalender'
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

	public function kontak()
	{
		$data = [
			'title' => 'Kontak - HMTL | Universitas Diponegoro',
			'tab' => 'kontak'
		];

		return view('mainpage/kontak', $data);
	}

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
}
