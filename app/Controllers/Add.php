<?php

namespace App\Controllers;

class Add extends BaseController
{
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
}
