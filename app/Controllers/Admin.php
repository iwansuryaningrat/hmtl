<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Admin Dashboard - HMTL | Universitas Diponegoro',
            'tab' => 'dashboard'
        ];

        return view('admin/index', $data);
    }

    public function hmtl()
    {
        $data = [
            'title' => 'Profile HMTL - HMTL | Universitas Diponegoro',
            'tab' => 'hmtl'
        ];

        return view('admin/hmtl', $data);
    }

    public function kabinet()
    {
        $data = [
            'title' => 'Profile Kabinet - HMTL | Universitas Diponegoro',
            'tab' => 'hmtl'
        ];

        return view('admin/kabinet', $data);
    }

    public function bidang()
    {
        $data = [
            'title' => 'Profile Bidang - HMTL | Universitas Diponegoro',
            'tab' => 'hmtl'
        ];

        return view('admin/bidang', $data);
    }

    public function pengurus()
    {
        $data = [
            'title' => 'Profile Pengurus - HMTL | Universitas Diponegoro',
            'tab' => 'hmtl'
        ];

        return view('admin/pengurus', $data);
    }

    public function proker()
    {
        $data = [
            'title' => 'Proker - HMTL | Universitas Diponegoro',
            'tab' => 'hmtl'
        ];

        return view('admin/proker', $data);
    }

    public function biro()
    {
        $data = [
            'title' => 'Profile Biro - HMTL | Universitas Diponegoro',
            'tab' => 'biro'
        ];

        return view('admin/biro', $data);
    }

    public function ukm()
    {
        $data = [
            'title' => 'Profile UKM - HMTL | Universitas Diponegoro',
            'tab' => 'ukm'
        ];

        return view('admin/ukm', $data);
    }

    public function news()
    {
        $data = [
            'title' => 'Berita - HMTL | Universitas Diponegoro',
            'tab' => 'news'
        ];

        return view('admin/news', $data);
    }

    public function kalender()
    {
        $data = [
            'title' => 'Kalender - HMTL | Universitas Diponegoro',
            'tab' => 'kalender'
        ];

        return view('admin/kalender', $data);
    }

    public function arsip()
    {
        $data = [
            'title' => 'Arsip - HMTL | Universitas Diponegoro',
            'tab' => 'arsip'
        ];

        return view('admin/arsip', $data);
    }

    public function pesan()
    {
        $data = [
            'title' => 'Pesan - HMTL | Universitas Diponegoro',
            'tab' => 'pesan'
        ];

        return view('admin/pesan', $data);
    }
}
