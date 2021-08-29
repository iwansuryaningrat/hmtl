<?php

namespace App\Controllers;

class Home extends BaseController
{
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
