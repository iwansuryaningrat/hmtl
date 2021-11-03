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

class Add extends BaseController
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

	// Add News Controller
	public function addnews()
	{
		$image = $this->request->getFile('image');
		if ($image->getError() == 4) {
			$namaImage = 'news-1.jpg';
		} else {
			$namaImage = $image->getName();
			$image->move('/admin/assets/img');
		}

		$this->newsModel->save([
			'judul' => $this->request->getVar('judul'),
			'highlight' => $this->request->getVar('highlight'),
			'preview' => $this->request->getVar('preview'),
			'kategori' => $this->request->getVar('kategori'),
			'isi' => $this->request->getVar('berat'),
			'tag' => '',
			'foto' => $namaImage

		]);

		$session = \Config\Services::session();
		// $session->setFlashdata('success', 'Book Added');

		// session()->setFlashdata('add-msg-barang', 'Data Barang berhasil ditambahkan.');
		return redirect()->to('/admin/news');
	}
}
