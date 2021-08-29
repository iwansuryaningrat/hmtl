<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'HMTL | Universitas Diponegoro'
		];

		return view('mainpage/index', $data);
	}

	public function berita()
	{
		$data = [
			'title' => 'Berita - HMTL | Universitas Diponegoro'
		];

		return view('mainpage/berita' . $data);
	}

	public function kalender()
	{
		$data = [
			'title' => 'Kalender - HMTL | Universitas Diponegoro'
		];

		return view('mainpage/kalender', $data);
	}

	public function arsip()
	{
		$data = [
			'title' => 'Arsip - HMTL | Universitas Diponegoro'
		];

		return view('mainpage/arsip', $data);
	}

	public function arsipmatkul()
	{
		$data = [
			'title' => 'Arsip Mata Kuliah - HMTL | Universitas Diponegoro'
		];

		return view('mainpage/arsip-matkul', $data);
	}
}
