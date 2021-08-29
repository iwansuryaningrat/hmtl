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
